<?php
session_start();
include("../tr24conn.php");

// Error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Pagination setup
$limit = 6; // Number of trips per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Handle search and filters
$search = '';
$filterLocation = '';
$filterDuration = '';
$filterVehicle = '';
$filterPrice = '';

// Base query for trips
$query = "SELECT st.*, 
       GROUP_CONCAT(stv.name ORDER BY stvp.price ASC) AS vehicle_names, 
       GROUP_CONCAT(stvp.price ORDER BY stvp.price ASC) AS vehicle_prices, 
       MIN(stvp.price) AS min_price
FROM service_trip st 
LEFT JOIN service_trip_vehicles_price stvp ON st.trip_id = stvp.trip_id 
LEFT JOIN service_trip_vehicles stv ON stvp.vehicle_id = stv.id
WHERE st.status = 'active' "; // Only fetch active trips  

// Handle search
if (!empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $search = str_replace("-", " ", $search);
    $query .= " AND (st.package_name LIKE '%$search%' OR st.amenities LIKE '%$search%' OR st.pickup_location LIKE '%$search%')";
}

// Filter by location
if (!empty($_GET['location'])) {
    $filterLocation = $conn->real_escape_string($_GET['location']);
    $filterLocation = str_replace("-", " ", $filterLocation);
    $query .= " AND st.pickup_location = '$filterLocation'";
}

// Filter by duration
if (!empty($_GET['duration'])) {
    $filterDuration = $conn->real_escape_string($_GET['duration']);
    $filterDuration = str_replace("-", " ", $filterDuration);
    $query .= " AND st.duration = '$filterDuration'";
}

// Filter by vehicle name
// if (!empty($_GET['vehicle'])) {
//     $filterVehicle = $conn->real_escape_string($_GET['vehicle']);
//     $filterVehicle = str_replace("-", " ", $filterVehicle);
//     $query .= " AND stv.name = '$filterVehicle'";
// }


// Filter by maximum price
if (!empty($_GET['price'])) {
    $filterPrice = $conn->real_escape_string($_GET['price']);
    $query .= " AND stvp.price <= '$filterPrice'";
}

// Group and filter the trips
// $query .= " GROUP BY st.trip_id";

// Filter by vehicle name
if (!empty($_GET['vehicle'])) {
    $filterVehicle = $conn->real_escape_string($_GET['vehicle']);
    $filterVehicle = str_replace("-", " ", $filterVehicle);
    // Get the search term and trim it
    // Get only the first word
    $filterVehicle = preg_replace('/\s+.*/', '', $filterVehicle); //


    $query .= "GROUP BY st.trip_id HAVING vehicle_names LIKE '%$filterVehicle%'"; // Use HAVING clause correctly
} else {
    $query .= " GROUP BY st.trip_id"; // Ensure GROUP BY exists here if no vehicle filter
}

// Pagination and limit
$totalQuery = "SELECT COUNT(*) as count FROM ($query) as temp"; // Get total records
$totalResult = $conn->query($totalQuery);
$totalTrips = $totalResult->fetch_assoc()['count'];
$totalPages = ceil($totalTrips / $limit);
$query .= " LIMIT $limit OFFSET $offset"; // Add limit to main query
// echo $query;
$result = $conn->query($query);

// Fetching distinct values for filtering
$locationsQuery = "SELECT DISTINCT pickup_location FROM service_trip ORDER BY pickup_location ASC ";
$locationsResult = $conn->query($locationsQuery);

$durationsQuery = "SELECT DISTINCT duration FROM service_trip ORDER BY duration ASC";
$durationsResult = $conn->query($durationsQuery);

// Debugging output
if ($locationsResult->num_rows === 0) {
    echo "No locations found in the database.<br>";
}
if ($durationsResult->num_rows === 0) {
    echo "No durations found in the database.<br>";
}

$vehiclesQuery = "SELECT DISTINCT name FROM service_trip_vehicles";
$vehiclesResult = $conn->query($vehiclesQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trips</title>
    <?php include("head-seo.php"); ?>
</head>


<body>
    <?php include("../header.php"); ?>

    <style>
        .bread-bg {
            background-image: url(../img/Manali-Taxi-Service-343543.jpg);

        }
    </style>

    <section class="breadcrumb-area bread-bg">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Trip </h2>
            </div>
        </div>
    </section>
    <section class="trip-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <form id="filterForm" method="get">
                <div class="row mb-3">
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <input id="searchInput" class="form-control" type="text" name="search" placeholder="Search..." value="<?= htmlspecialchars($search); ?>" />
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <select name="location" class="form-control">
                            <option value="">Location</option>
                            <?php while ($location = $locationsResult->fetch_assoc()): ?>
                                <option class="form-control" value="<?= htmlspecialchars($location['pickup_location']); ?>" <?php if ($filterLocation == $location['pickup_location']) echo 'selected'; ?>>
                                    <?= htmlspecialchars($location['pickup_location']); ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-6 mb-2">
                        <select name="duration" class="form-control">
                            <span class="fas fa-calendar-alt form-icon"></span>

                            <option value="">Duration</option>
                            <?php while ($duration = $durationsResult->fetch_assoc()): ?>
                                <option value="<?= htmlspecialchars($duration['duration']); ?>" <?php if ($filterDuration == $duration['duration']) echo 'selected'; ?>>
                                    <?= htmlspecialchars($duration['duration']); ?> hours
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-6 mb-2">
                        <select name="vehicle" class="form-control">
                            <option value="">Vehicle</option>
                            <?php while ($vehicle = $vehiclesResult->fetch_assoc()): ?>
                                <option value="<?= htmlspecialchars($vehicle['name']); ?>" <?php if ($filterVehicle == $vehicle['name']) echo 'selected'; ?>>
                                    <?= htmlspecialchars($vehicle['name']); ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-6 mb-2">
                        <input class="form-control" type="number" name="price" placeholder="Max Price" value="<?= htmlspecialchars($filterPrice); ?>" />
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <button class="btn btn-info btn-block text-white" type="submit">Search</button>
                    </div>
                </div>
            </form>

            <script>
                document.getElementById('filterForm').onsubmit = function(event) {
                    event.preventDefault(); // Prevent the default form submission

                    // Function to replace spaces with hyphens
                    const toSeoFriendly = (value) => {
                        return value.replace(/\s+/g, '-'); // Replace spaces with hyphens
                    };

                    // Get the values from the form fields
                    let search = document.querySelector('input[name="search"]').value;
                    let location = document.querySelector('select[name="location"]').value;
                    let duration = document.querySelector('select[name="duration"]').value;
                    let vehicle = document.querySelector('select[name="vehicle"]').value;
                    const price = encodeURIComponent(document.querySelector('input[name="price"]').value);

                    // Convert search and location values to SEO-friendly format
                    if (search) {
                        search = toSeoFriendly(search);
                    }
                    if (location) {
                        location = toSeoFriendly(location);
                    }
                    if (duration) {
                        duration = toSeoFriendly(duration);
                    }
                    if (vehicle) {
                        vehicle = toSeoFriendly(vehicle);
                    }

                    // Build the action URL starting with the activity type (assuming you have a base URL)
                    let actionUrl = `/trip24/trip/search`;

                    // Append parameters only if they have values
                    if (search) {
                        actionUrl += `/${search}`;
                    }
                    if (location) {
                        actionUrl += `/location/${location}`;
                    }
                    if (duration) {
                        actionUrl += `/duration/${duration}`;
                    }
                    if (vehicle) {
                        actionUrl += `/vehicle/${vehicle}`;
                    }
                    if (price) {
                        actionUrl += `/price/${price}`;
                    }

                    // Redirect to the constructed URL
                    window.location.href = actionUrl;
                };
            </script>

            <div class="row" id="tripList">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($trip = $result->fetch_assoc()): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://work.prcptnvt.site/trip24/uploaded_images/<?= htmlspecialchars($trip['banner']); ?>" class="card-img-top" alt="<?= htmlspecialchars($trip['package_name']); ?>" style="height:200px; object-fit:cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($trip['package_name']); ?></h5>
                                    <p class="card-text"><i class="fas fa-clock"></i> Duration: <?= htmlspecialchars($trip['duration']); ?> </p>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Location: <?= htmlspecialchars($trip['pickup_location']); ?></p>
                                    <p class="card-text"><strong>₹ Starting: <?= htmlspecialchars($trip['min_price']); ?>/-</strong></p>
                                    <p class="card-text"><i class="fas fa-car"></i> Vehicles:
                                        <?php
                                        $vehicles = !is_null($trip['vehicle_names']) ? explode(",", $trip['vehicle_names']) : [];
                                        $prices = !is_null($trip['vehicle_prices']) ? explode(",", $trip['vehicle_prices']) : [];

                                        foreach ($vehicles as $index => $vehicle) {
                                            $price = isset($prices[$index]) ? htmlspecialchars($prices[$index]) : 'N/A';
                                            echo htmlspecialchars($vehicle) . ",  ";
                                        }
                                        ?>
                                    </p>
                                    <div class="d-flex justify-content-between mt-3">
                                        <a href='https://work.prcptnvt.site/trip24/trip/booking/<?= str_replace(' ', '-', $trip['package_name']); ?>/<?= htmlspecialchars($trip['trip_id']); ?>' class="btn btn-info btn-sm text-white">
                                            <i class="fas fa-info-circle"></i> View Details
                                        </a>
                                        <a href='https://work.prcptnvt.site/trip24/trip/booking/<?= str_replace(' ', '-', $trip['package_name']); ?>/<?= htmlspecialchars($trip['trip_id']); ?>' class="btn btn-success btn-sm">
                                            Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p>No trips found</p>
                    </div>
                <?php endif; ?>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-4">
                    <li class="page-item <?= $page == 1 ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $page - 1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= $i == $page ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $page + 1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <?php include("../footer.php"); ?>
</body>

</html>

<?php
// Closing the database connection
$conn->close();
?>
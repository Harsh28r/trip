<?php
session_start();
include("../tr24conn.php");

// Pagination setup
$limit = 6; // Number of activities per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Handle URL-based activity type
$activity_type = isset($_GET['activity_type']) ? $conn->real_escape_string($_GET['activity_type']) : '';

// Handle search and filters
$search = '';
$filterLocation = '';
$filterDuration = '';
$filterPrice = '';
$query = "SELECT * FROM service_activities WHERE activity_type = '$activity_type'"; // Base query

if (!empty($_GET['search']) && !empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $search = str_replace("-", " ", $search);
    $query .= " AND (name LIKE '%$search%' OR amenities LIKE '%$search%' OR pickup_location LIKE '%$search%')";
}

if (!empty($_GET['location']) && $_GET['location'] != '') {
    $filterLocation = $conn->real_escape_string($_GET['location']);
    $filterLocation = str_replace("-", " ", $filterLocation);
    $query .= " AND pickup_location = '$filterLocation'";
}

if (!empty($_GET['duration']) && $_GET['duration'] != '') {
    $filterDuration = $conn->real_escape_string($_GET['duration']);
    $query .= " AND duration = '$filterDuration'";
}

if (!empty($_GET['price']) && $_GET['price'] != '') {
    $filterPrice = $conn->real_escape_string($_GET['price']);
    $query .= " AND price <= '$filterPrice'";
}

// Pagination and limit
$totalQuery = "SELECT COUNT(*) as count FROM ($query) as temp"; // Get total records
$totalResult = $conn->query($totalQuery);
$totalActivities = $totalResult->fetch_assoc()['count'];
$totalPages = ceil($totalActivities / $limit);
$query .= " LIMIT $limit OFFSET $offset"; // Add limit to main query
// echo $query;
$result = $conn->query($query);

// Fetching distinct values for filtering
$locationsQuery = "SELECT DISTINCT pickup_location FROM service_activities WHERE activity_type = '$activity_type'";
$locationsResult = $conn->query($locationsQuery);

$durationsQuery = "SELECT DISTINCT duration, unit FROM service_activities WHERE activity_type = '$activity_type'";
$durationsResult = $conn->query($durationsQuery);

$priceQuery = "SELECT DISTINCT price FROM service_activities WHERE activity_type = '$activity_type'";
$priceResult = $conn->query($priceQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= ucfirst($activity_type); ?> - Trip24</title>
    <?php include("head-seo.php"); ?>
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/font-awesome.min.css" />

    <?php
    // Handle Background Banner Image
    if ($activity_type == "paragliding") {
        $bg_img = "https://work.perceptionvita.in/trip24ui/img/banner.jpg";
        $icon = '<i class="fas fa-parachute-box" style="font-size: 24px;"></i> ';
    } else if ($activity_type == "rafting") {
        $bg_img = "https://work.prcptnvt.site/trip24/img/image-asset.jpeg";
        $icon = '<i class="fas fa-water" style="font-size: 24px;"></i> ';
    } else {
        $bg_img = "https://img.freepik.com/free-photo/full-shot-man-living-healthy-lifestyle_23-2151201900.jpg";
        $icon  = '<i class="fas fa-snowflake" style="font-size: 24px;"></i>';
    }
    ?>
    <style>
        .bread-bg {
            background-image: url(<?= $bg_img; ?>);
        }
    </style>
</head>

<body>
    <?php include("../header.php"); ?>

    <section class="breadcrumb-area bread-bg">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3"><?= ucfirst(str_replace("-", " ", $activity_type)); ?> </h2>
            </div>
        </div>
    </section>

    <section class="blog-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <form id="filterForm" method="get">
                <input type="hidden" name="activity_type" value="<?= htmlspecialchars($activity_type); ?>" />
                <div class="row mb-3">
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <input id="searchInput" class="form-control" type="text" name="search" placeholder="Search..." value="<?= htmlspecialchars($search); ?>" />
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <select name="location" class="form-control">
                            <option value="">Location <i class="fas fa-map-marker-alt"></i> </option>
                            <?php while ($location = $locationsResult->fetch_assoc()): ?>
                                <option value="<?= htmlspecialchars($location['pickup_location']); ?>" <?php if ($filterLocation == $location['pickup_location']) echo 'selected'; ?>>
                                    <?= htmlspecialchars($location['pickup_location']); ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-6 mb-2">
                        <select name="duration" class="form-control">
                            <option value=""> Duration <i class="fas fa-clock"></i> </option>
                            <?php while ($duration = $durationsResult->fetch_assoc()): ?>
                                <option value="<?= htmlspecialchars($duration['duration']); ?>" <?php if ($filterDuration == $duration['duration']) echo 'selected'; ?>>
                                    <?= htmlspecialchars($duration['duration']); ?> <?= htmlspecialchars($duration['unit']); ?>
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
                    const activityType = encodeURIComponent(document.querySelector('input[name="activity_type"]').value);
                    let search = document.querySelector('input[name="search"]').value;
                    let location = document.querySelector('select[name="location"]').value;
                    const duration = encodeURIComponent(document.querySelector('select[name="duration"]').value);
                    const price = encodeURIComponent(document.querySelector('input[name="price"]').value);

                    // Convert search and location values to SEO-friendly format
                    if (search) {
                        search = toSeoFriendly(search);
                    }
                    if (location) {
                        location = toSeoFriendly(location);
                    }

                    // Build the action URL starting with the activity type
                    let actionUrl = `/trip24/activity/${activityType}/search`;

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
                    if (price) {
                        actionUrl += `/price/${price}`;
                    }

                    // Redirect to the constructed URL
                    window.location.href = actionUrl;
                };
            </script>



            <div class="row" id="activityList">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($activity = $result->fetch_assoc()): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="https://work.prcptnvt.site/trip24/uploaded_images/<?= htmlspecialchars($activity['banner']); ?>" class="card-img-top" alt="<?= htmlspecialchars($activity['name']); ?>" style="height:200px; object-fit:cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $icon . htmlspecialchars($activity['name']); ?></h5>
                                    <p class="card-text"> <i class="fas fa-clock"></i> Duration : <?= htmlspecialchars($activity['duration']); ?> <?= htmlspecialchars($activity['unit']); ?></p>
                                    <p class="card-text"><i class="fas fa-rupee-sign"></i> Price : <?= htmlspecialchars($activity['price']); ?></p>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Location: <?= htmlspecialchars($activity['pickup_location']); ?></p>
                                    <!-- <button onclick="window.location.href='booking.php?name=<?= str_replace(' ', '-', $activity['name']); ?>&id=<?= htmlspecialchars($activity['activity_id']); ?>';" class="btn btn-info btn-sm">View Details</button> -->
                                    <div class="d-flex justify-content-between mt-3">
                                        <a href='https://work.prcptnvt.site/trip24/activity/booking/<?= str_replace(' ', '-', $activity['name']); ?>-<?= htmlspecialchars($activity['activity_id']); ?>' ;" class="btn btn-info btn-sm text-white">
                                            <i class="fas fa-info-circle"></i> View Details
                                        </a>
                                        <a href='https://work.prcptnvt.site/trip24/activity/booking/<?= str_replace(' ', '-', $activity['name']); ?>-<?= htmlspecialchars($activity['activity_id']); ?>' ;" class="btn btn-success btn-sm">
                                            Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p>No activities found.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <!-- <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                            <a class="page-link" href="https://work.prcptnvt.site/trip24/activity/<?= htmlspecialchars($activity_type); ?>/search/<?= str_replace(' ', '-', htmlspecialchars($search)); ?>/location/<?= str_replace(' ', '-', htmlspecialchars($filterLocation)); ?>/duration/<?= htmlspecialchars($filterDuration); ?>/price/<?= htmlspecialchars($filterPrice); ?>/page/<?= $i; ?>">
                                <?= $i; ?>
                            </a>
                        </li> -->
                        <li class="page-item <?php if ($i == $page) echo 'active'; ?>"><a class="page-link" href="?activity_type=<?= htmlspecialchars($activity_type); ?>&page=<?= $i; ?>&search=<?= htmlspecialchars($search); ?>&location=<?= htmlspecialchars($filterLocation); ?>&duration=<?= htmlspecialchars($filterDuration); ?>&price=<?= htmlspecialchars($filterPrice); ?>"><?= $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </section>

    <?php include("../footer.php"); ?>
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <script src="https://work.prcptnvt.site/trip24/js/bootstrap.bundle.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/main.js"></script>
</body>

</html>
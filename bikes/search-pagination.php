<?php
include("../tr24conn.php");

// Pagination setup
$limit = 8; // Number of bikes per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Handle search
$search = '';
$filterBrand = '';
$filterLocation = '';
$query = "SELECT * FROM service_bikes WHERE 1=1"; // Base query

if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $query .= " AND (pickup_location LIKE '%$search%' OR price LIKE '%$search%' OR capacity LIKE '%$search%' OR model LIKE '%$search%' OR brand LIKE '%$search%')";
}

if (isset($_GET['brand']) && $_GET['brand'] != '') {
    $filterBrand = $conn->real_escape_string($_GET['brand']);
    $query .= " AND brand = '$filterBrand'";
}

if (isset($_GET['location']) && $_GET['location'] != '') {
    $filterLocation = $conn->real_escape_string($_GET['location']);
    $query .= " AND pickup_location = '$filterLocation'";
}

// Pagination and limit
$totalQuery = "SELECT COUNT(*) as count FROM ($query) as temp"; // Get total records
$totalResult = $conn->query($totalQuery);
$totalBikes = $totalResult->fetch_assoc()['count'];
$totalPages = ceil($totalBikes / $limit);
$query .= " LIMIT $limit OFFSET $offset"; // Add limit to main query

$result = $conn->query($query);

// Display bikes
if ($result->num_rows > 0) {
    while ($bike = $result->fetch_assoc()) {

        echo '<div class="col-lg-3 col-md-6">';
        echo '    <div class="card">';

        // Display the bike image
        echo '        <img src="../uploaded_images/' . htmlspecialchars($bike['banner']) . '" class="card-img-top" alt="' . htmlspecialchars($bike['model']) . '" style="height:200px; object-fit:cover;">';

        // Card body containing bike details
        echo '        <div class="card-body">';
        echo '            <h5 class="card-title">';
        echo '                ' . htmlspecialchars($bike['brand'] . " " . $bike['model']); // Bike brand and model with an icon
        echo '            </h5>';
        echo '            <p class="card-text">';
        echo '                <i class="fas fa-users"></i> Capacity: ' . htmlspecialchars($bike['capacity']) . ' persons'; // Capacity with icon
        echo '            </p>';
        echo '            <p class="card-text">';
        echo '                <i class="fas fa-rupee-sign"></i> Price: ' . htmlspecialchars($bike['price'] . "/" . $bike['unit']); // Price with icon
        echo '            </p>';
        echo '            <p class="card-text">';
        echo '                <i class="fas fa-map-marker-alt"></i> Pickup at : ' . htmlspecialchars($bike['pickup_location']); // Location with icon
        echo '            </p>';

        // Button group with "View Details" and "Book Now" buttons
        echo '            <div class="d-flex justify-content-between mt-3">';

        // View Details button
        $seoFriendlyUrl = 'booking/' . str_replace(" ", "-", $bike['brand']) . '-' .
            str_replace(" ", "-", $bike['model']) . '-' .
            str_replace(" ", "-", $bike['pickup_location']) . '-' .
            htmlspecialchars($bike['bike_id']);
        echo '<a href="' . $seoFriendlyUrl . '" class="btn btn-white border-light-gray btn-sm">';
        echo '     View Details';
        echo '</a>';



        // Book Now button
        echo '                <a href="' . $seoFriendlyUrl . '" class="btn btn-success btn-sm">';
        echo '              Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i>';
        echo '                </a>';

        echo '            </div>'; // End of button group
        echo '        </div>'; // End of card body
        echo '    </div>'; // End of card
        echo '</div>'; // End of column


    }
} else {
    echo '<div class="col-12"><p>No bikes found.</p></div>';
}

// Display pagination
if ($totalPages > 1) {
    echo '<div class="col-12"><nav><ul class="pagination">';
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<li class="page-item"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
    }
    echo '</ul></nav></div>';
}

$conn->close();

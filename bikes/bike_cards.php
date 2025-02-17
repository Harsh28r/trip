<?php
include("conn.php");

// Pagination setup
$limit = 6; // Number of bikes per page
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
        echo '<div class="col-lg-4 col-md-6">';
        echo '<div class="card">';
        echo '<img src="../uploaded_images/' . htmlspecialchars($bike['banner']) . '" class="card-img-top" alt="' . htmlspecialchars($bike['model']) . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($bike['brand'] . " " . $bike['model']) . '</h5>';
        echo '<p class="card-text">Capacity: ' . htmlspecialchars($bike['capacity']) . ' persons</p>';
        echo '<p class="card-text">Price: ' . htmlspecialchars($bike['price']) . ' per day</p>';
        echo '<p class="card-text">Location: ' . htmlspecialchars($bike['pickup_location']) . '</p>';
        echo '</div></div></div>';
    }
} else {
    echo '<div class="col-12"><p>No bikes found</p></div>';
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

<?php
include("../tr24conn.php");

// Pagination setup
$limit = 6; // Number of bikes per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Handle search and filters
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

// Fetching brands for filtering
$brandsQuery = "SELECT DISTINCT brand FROM service_bikes";
$brandsResult = $conn->query($brandsQuery);

// Fetching locations for filtering
$locationsQuery = "SELECT DISTINCT pickup_location FROM service_bikes";
$locationsResult = $conn->query($locationsQuery);
?>
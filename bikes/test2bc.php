<?php
// Database connection
include 'db_connect.php';

// Handle search and filters
$search = $_GET['search'] ?? '';
$brand = $_GET['brand'] ?? '';
$capacity = $_GET['capacity'] ?? '';
$price = $_GET['price'] ?? '';
$location = $_GET['location'] ?? '';
$limit = 12;  // Limit items per page
$page = $_GET['page'] ?? 1;
$offset = ($page - 1) * $limit;

// Build query with search and filters
$query = "SELECT * FROM service_bikes WHERE 1=1";

// Apply search
if ($search) {
    $query .= " AND (brand LIKE '%$search%' OR model LIKE '%$search%' OR pickup_location LIKE '%$search%' OR capacity LIKE '%$search%' OR price LIKE '%$search%')";
}

// Apply filters
if ($brand) $query .= " AND brand = '$brand'";
if ($capacity) $query .= " AND capacity = '$capacity'";
if ($price) $query .= " AND price <= '$price'";
if ($location) $query .= " AND pickup_location = '$location'";

// Apply pagination
$query .= " LIMIT $limit OFFSET $offset";

// Execute query
$result = mysqli_query($conn, $query);

// Fetch results
$bikes = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bikes[] = $row;
}

// Return JSON response
echo json_encode($bikes);
?>
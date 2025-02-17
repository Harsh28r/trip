<?php
include('conn.php'); // Include your database connection file

// Set response header for JSON
header('Content-Type: application/json');

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5; // Number of bikes per page
$offset = ($page - 1) * $limit;

// Search filter
$pickup_location = isset($_GET['pickup_location']) ? $_GET['pickup_location'] : '';
    
// Prepare the query
$sql = "SELECT * FROM service_bikes WHERE pickup_location LIKE ? LIMIT ? OFFSET ?";
$stmt = $conn->prepare($sql);
$searchTerm = '%' . $pickup_location . '%';
$stmt->bind_param("sii", $searchTerm, $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

$bikes = [];
while ($row = $result->fetch_assoc()) {
    $bikes[] = $row;
}

// Get total number of bikes for pagination
$sqlTotal = "SELECT COUNT(*) as total FROM service_bikes WHERE pickup_location LIKE ?";
$stmtTotal = $conn->prepare($sqlTotal);
$stmtTotal->bind_param("s", $searchTerm);
$stmtTotal->execute();
$totalResult = $stmtTotal->get_result();
$total = $totalResult->fetch_assoc()['total'];

$response = [
    'bikes' => $bikes,
    'total' => $total,
    'total_pages' => ceil($total / $limit),
];

echo json_encode($response);
?>
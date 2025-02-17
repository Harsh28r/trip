<?php
include("../tr24conn.php");

// Pagination setup
$limit = 6; // Number of activities per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Handle search
$search = '';
$filterLocation = '';
$activity_type = $_GET['activity_type'];
$query = "SELECT * FROM service_activities WHERE activity_type = '$activity_type'"; // Base query with condition

if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $query .= " AND (pickup_location LIKE '%$search%' OR price LIKE '%$search%' OR name LIKE '%$search%' OR duration LIKE '%$search%')";
}

if (isset($_GET['location']) && $_GET['location'] != '') {
    $filterLocation = $conn->real_escape_string($_GET['location']);
    $query .= " AND pickup_location = '$filterLocation'";
}

// Pagination and limit
$totalQuery = "SELECT COUNT(*) as count FROM ($query) as temp"; // Get total records
$totalResult = $conn->query($totalQuery);
$totalActivities = $totalResult->fetch_assoc()['count'];
$totalPages = ceil($totalActivities / $limit);
$query .= " LIMIT $limit OFFSET $offset"; // Add limit to main query

$result = $conn->query($query);

// Display activities
if ($result->num_rows > 0) {
    while ($activity = $result->fetch_assoc()) {
        echo '<div class="col-lg-4 col-md-6">';
        echo '<div class="card">';
        echo '<img src="../uploaded_images/' . htmlspecialchars($activity['banner']) . '" class="card-img-top" alt="' . htmlspecialchars($activity['name']) . '" style="height:200px; object-fit:cover;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title"><i class="fa fa-paper-plane"></i> ' . htmlspecialchars($activity['name']) . '</h5>';
        echo '<p class="card-text">Duration: ' . htmlspecialchars($activity['duration']) . ' ' . htmlspecialchars($activity['unit']) . '</p>';
        echo '<p class="card-text">Price: ' . htmlspecialchars($activity['price']) . '</p>';
        echo '<p class="card-text">Location: ' . htmlspecialchars($activity['pickup_location']) . '</p>';
        echo '<button onclick="window.location.href=\'activity-details.php?id=\';" class="btn btn-info btn-sm">View Details</button>';

        echo '</div></div></div>';
    }
} else {
    echo '<div class="col-12"><p>No activities found.</p></div>';
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

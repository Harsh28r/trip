<?php
include("../single_connection.php");
// Capture the search term from the URL
$searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($conn2, $_GET['search']) : '';

// Prepare the SQL query to fetch active services
$query = "SELECT * FROM service_hotels WHERE status='active'";

// Add search conditions for hotel name and service type
if ($searchTerm) {
    $query .= " AND (hotel_name LIKE '%$searchTerm%' OR 
                     (SELECT service_type FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%' OR 
                     (SELECT service_address FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%' OR 
                     (SELECT service_city FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%' OR 
                     (SELECT service_state FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%')";
}

$query .= " ORDER BY id DESC";


/*$query = "SELECT DISTINCT sh.*, vs.service_type, vs.service_address, vs.service_city, vs.service_state, vs.service_pincode 
          FROM service_hotels sh
          JOIN vendor_service vs ON vs.service_name = sh.hotel_name
          WHERE sh.status='active'";

if ($searchTerm) {
    $query .= " AND (sh.hotel_name LIKE '%$searchTerm%' OR 
                     vs.service_type LIKE '%$searchTerm%' OR 
                     vs.service_address LIKE '%$searchTerm%' OR 
                     vs.service_city LIKE '%$searchTerm%' OR 
                     vs.service_state LIKE '%$searchTerm%')";
}

$query .= " ORDER BY sh.id DESC";
*/






/*
$query = "SELECT DIS sh.*, vs.service_type, vs.service_address, vs.service_city, vs.service_state, vs.service_pincode 
          FROM service_hotels sh
          LEFT JOIN vendor_service vs ON vs.service_name = sh.hotel_name
          WHERE sh.status='active'";

if ($searchTerm) {
    $query .= " AND (sh.hotel_name LIKE '%$searchTerm%' OR 
                     vs.service_type LIKE '%$searchTerm%' OR 
                     vs.service_address LIKE '%$searchTerm%' OR 
                     vs.service_city LIKE '%$searchTerm%' OR 
                     vs.service_state LIKE '%$searchTerm%')";
}*/

//$query .= " ORDER BY sh.id DESC";

echo $query;
$service = mysqli_query($conn2, $query);

// Check for errors in the query
if (!$service) {
    echo mysqli_error($conn2);
}

while ($services = mysqli_fetch_array($service)) {
    $vendor = mysqli_query($conn2, "SELECT * FROM vendor_service WHERE status='active' AND service_name='" . $services["hotel_name"] . "' ORDER BY id DESC");
    $vendors = mysqli_fetch_array($vendor);
?>
    <div class="listing-wrapper">
        <div class="card card-flex">
            <a href="hotel-view-details" class="card-image">
                <img src="../<?php echo $services["banner"]; ?>" class="card-img-top" alt="card image" />
                <span class="badge text-bg-info badge-pill"><?php echo $vendors["service_type"]; ?></span>
            </a>
            <div class="card-body">
                <div class="d-flex align-items-center mb-1">
                    <h4 class="card-title mb-0">
                        <a href="hotel-view-details"><?php echo $services["hotel_name"]; ?></a>
                    </h4>
                    <i class="fa fa-check-circle ms-1 text-success" data-bs-toggle="tooltip"
                       data-placement="top" title="Claimed"></i>
                </div>
                <p class="card-text"><?php echo $vendors["service_address"] ?> <?php echo $vendors["service_city"] ?> , <?php echo $vendors["service_state"] ?>-<?php echo $vendors["service_pincode"] ?></p>
                <ul class="info-list mt-3">
                    <li>
                        <img src="icons/wifi.png" height="26px;" alt="">&nbsp;Wifi &nbsp;
                        <img src="icons/air-conditioner.png" height="26px;" alt="">&nbsp;AC &nbsp;
                        <img src="icons/smart-tv.png" height="26px;" alt="">&nbsp;TV
                    </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="price">
                        <h5><b>&#8377;4999</b></h5>
                    </span>
                </div>
                <div class="d-flex align-items-end mt-3" style="float: right;">
                    <button onclick="window.location.href='hotel-detail.php?id=<?php echo $services["id"]; ?>';" class="btn btn-info btn-sm">View Details</button>&nbsp;
                    <button onclick="window.location.href='modify-your-booking';" class="btn btn-success btn-sm">Book Now</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

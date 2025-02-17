<?php
// For Connection
require("conn.php");

// Check update condition
$update_mode = isset($_POST['update_trip']) ? true : false;

if (isset($_POST['add_trip']) || $update_mode) {
    // Get form data
    $vendor_uid = mysqli_real_escape_string($conn, $_POST['vendor_uid']);
    $package_name = mysqli_real_escape_string($conn, $_POST['package_name']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $pickup_location = mysqli_real_escape_string($conn, $_POST['pickup_location']);
    $bookings_no = mysqli_real_escape_string($conn, $_POST['bookings_no']);
    $amenities = mysqli_real_escape_string($conn, $_POST['amenities']);
    // Define upload path
    $uploadDir = "../uploaded_images/";
    $bannerNewName = '';

    // Handle Image - compress
    require("functions.php");
    // Process banner
    if (isset($_FILES['banner']) && $_FILES['banner']['error'] == UPLOAD_ERR_OK) {
        $bannerName = $_FILES['banner']['name'];
        $bannerTmp = $_FILES['banner']['tmp_name'];
        $bannerExt = pathinfo($bannerName, PATHINFO_EXTENSION);
        $bannerNewName = generateUniqueFileName($bannerExt);
        $bannerDestination = $uploadDir . $bannerNewName;
        compressImage($bannerTmp, $bannerDestination, 50);
    }

    if ($update_mode) {
        // Update Logic
        $trip_id = mysqli_real_escape_string($conn, $_POST['trip_id']);
        // Handle image update - remove/update in server
        $old_banner = mysqli_query($conn, "SELECT `banner` FROM `service_trip` WHERE `trip_id` = '$trip_id' ");
        $old_banner_row = mysqli_fetch_assoc($old_banner);
        $old_banner_name_with_path = "../uploaded_images/" . $old_banner_row['banner'];
        if (file_exists($old_banner_name_with_path)) {
            unlink($old_banner_name_with_path);
        }

        $trip_update_sql = "UPDATE `service_trip` SET `vendor_uid` = '$vendor_uid', `package_name` = '$package_name', `duration` = '$duration',
            `pickup_location` = '$pickup_location', `bookings_no` = '$bookings_no', `amenities` = '$amenities' " .
            (!empty($bannerNewName) ? ", `banner` = '$bannerNewName'" : "") .
            " WHERE `trip_id` = '$trip_id'";

        $trip_run = mysqli_query($conn, $trip_update_sql);
        $success_msg = "Updated";
    } else {
        // Generate Unique TripID
        // Fetch the current sequence from the table `24Trip_imp` where id = 1
        // $sql_fetch = ;
        $result = $conn->query("SELECT `value` FROM `24Trip_imp` WHERE `id` = 2");
        $row = $result->fetch_assoc();
        $sequence = $row['value'] + 1;
        $trip_id = "TR" . $sequence;
        // Insert
        $trip_insql = "INSERT INTO `service_trip` ( `trip_id`, `vendor_uid`, `package_name`, `duration`, `pickup_location`, `bookings_no`, `amenities`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) 
                VALUES ('$trip_id','$vendor_uid', '$package_name', '$duration', '$pickup_location', '$bookings_no', '$amenities', '$bannerNewName', 'Pending', '$updated_by', '$updated_at', '$updated_at')";

        $trip_run = mysqli_query($conn, $trip_insql);
        // Update Trip_id sequence
        $conn->query("UPDATE `24Trip_imp` SET value = '$sequence' WHERE `id` = 2");

        // Prepare vehicle price insertion
        $vehicles = $_POST['vehicle'];
        $prices = $_POST['price'];

        foreach ($vehicles as $index => $vehicle_id) {
            $price = mysqli_real_escape_string($conn, $prices[$index]);
            $vehicle_id = mysqli_real_escape_string($conn, $vehicle_id);

            // Insert vehicle price into `service_trip_vehicles_price`
            $price_insql = "INSERT INTO `service_trip_vehicles_price` (`trip_id`, `vendor_uid`, `vehicle_id`, `price`, `status`, `updated_by`, `updated_at`, `created_at`) 
                             VALUES ('$trip_id', '$vendor_uid', '$vehicle_id', '$price', 'Active', '$updated_by', '$updated_at', '$updated_at')";

            mysqli_query($conn, $price_insql);
            $success_msg = "Added";
        }
    }

    // Display success message
    if ($trip_run) {
        echo '<div class="alert text-white bg-success alert-icon-success alert-dismissible fade show" role="alert">
            <strong>Trip ' . $success_msg . ' successfully!</strong> You have ' . strtolower($success_msg) . ' a trip successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    } else {
        echo '<div class="alert text-white alert-icon-danger bg-danger alert-dismissible fade show" role="alert">
            <strong>Error!!</strong>' . mysqli_error($conn) . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    }
}

// Add or update or Delete vehicle price 
if (isset($_POST['update_price']) || isset($_POST['add_price']) || isset($_POST['delete_price'])) {
    $in_run = False;
    $del_run = False;
    $price_update_run = False;
    if (isset($_POST['add_price'])) {
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $trip_id = mysqli_real_escape_string($conn, $_POST['trip_id']);
        $vendor_uid = mysqli_real_escape_string($conn, $_POST['vendor_uid']);
        $vehicle_id = mysqli_real_escape_string($conn, $_POST['vehicle_id']);

        // Insert vehicle price into `service_trip_vehicles_price`
        $price_insql = "INSERT INTO `service_trip_vehicles_price` (`trip_id`, `vendor_uid`, `vehicle_id`, `price`, `status`, `updated_by`, `updated_at`, `created_at`) 
            VALUES ('$trip_id', '$vendor_uid', '$vehicle_id', '$price', 'Active', '$updated_by', '$updated_at', '$updated_at')";
        $in_run = mysqli_query($conn, $price_insql);
        $success_msg = "Added";
    } else if (isset($_POST['delete_price'])) {
        $stvp_id = mysqli_real_escape_string($conn, $_POST['stvp_id']);
        $del_run = mysqli_query($conn, "DELETE FROM `service_trip_vehicles_price`WHERE `id` = '$stvp_id'");
        $success_msg = "Deleted";
    } else {
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $stvp_id = mysqli_real_escape_string($conn, $_POST['stvp_id']);
        $price_update_run = mysqli_query($conn, "UPDATE `service_trip_vehicles_price` SET `price` ='$price' WHERE `id` = '$stvp_id'");
        $success_msg = "Updated";
    }
    // Display success message
    if ($in_run || $del_run || $price_update_run) {
        // If any operation is true, set a flag for JavaScript
        echo "<script>var showSuccessToast = true;</script>";

        echo '<div class="alert text-white bg-success alert-icon-success alert-dismissible fade show" role="alert">
            <strong>Trip Price ' . $success_msg . ' successfully!</strong> You have ' . strtolower($success_msg) . ' a trip price successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    } else {
        echo '<div class="alert text-white alert-icon-danger bg-danger alert-dismissible fade show" role="alert">
            <strong>Error!!</strong>' . mysqli_error($conn) . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';
    }
}

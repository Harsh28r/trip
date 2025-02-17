<?php
// For Connection
require("conn.php");


// // <!-- bike Add -->
// /check update condition
$update_mode = isset($_POST['update_bike']) ? true : false;

if (isset($_POST['add_bike']) || $update_mode) {
    // Get form data
    $vendor_uid = mysqli_real_escape_string($conn, $_POST['vendor_uid']);
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $capacity = mysqli_real_escape_string($conn, $_POST['capacity']);
    $bike_no = mysqli_real_escape_string($conn, $_POST['bike_no']);
    $pickup_location = mysqli_real_escape_string($conn, $_POST['pickup_location']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $unit = mysqli_real_escape_string($conn, $_POST['unit']);
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
        $bike_id = mysqli_real_escape_string($conn, $_POST['bike_id']);
        // handle image updated - remove /update in server
        $old_banner = mysqli_query($conn, "SELECT `banner` FROM `service_bikes` WHERE `bike_id` = '$bike_id' ");
        $old_banner_row = mysqli_fetch_assoc($old_banner);
        $old_banner_name_with_path = "../uploaded_images/" . $old_banner_row['banner'];
        if (file_exists($old_banner_name_with_path)) {
            unlink($old_banner_name_with_path);
        }

        $bike_update_sql = "UPDATE `service_bikes` SET `vendor_uid` = '$vendor_uid',`brand` = '$brand',`model` = '$model',
            `year` = '$year',`capacity` = '$capacity',`bike_no` = '$bike_no',`pickup_location` = '$pickup_location',`price` = '$price',
            `unit` = '$unit',`amenities` = '$amenities' " . (!empty($bannerNewName) ? ", `banner` = '$bannerNewName'" : "") .
            " WHERE `bike_id` = '$bike_id'";

        $bike_run = mysqli_query($conn, $bike_update_sql);
        $success_msg = "Updated";
    } else {
        // Insert Logic
        $bike_insql = "INSERT INTO `service_bikes` (`vendor_uid`, `brand`, `model`, `year`, `capacity`, `bike_no`, `pickup_location`, `price`, `unit`, `amenities`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) 
                VALUES ('$vendor_uid', '$brand', '$model', '$year', '$capacity', '$bike_no', '$pickup_location', '$price', '$unit', '$amenities', '$bannerNewName', 'Pending', '$updated_by', '$updated_at', '$updated_at')";

        $bike_run = mysqli_query($conn, $bike_insql);
        $success_msg = "Added";
    }

    // Display success message
    if ($bike_run) {
        echo '<div class="alert text-white bg-success alert-icon-success alert-dismissible fade show" role="alert">
            <strong>Bike ' . $success_msg . ' successfully!</strong> You have ' . strtolower($success_msg) . ' a bike successfully.
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

<?php
// For Connection
require("conn.php");

// Check update condition
$update_mode = isset($_POST['update_activity']) ? true : false;

if (isset($_POST['add_activity']) || $update_mode) {
    // Get form data
    $vendor_id = mysqli_real_escape_string($conn, $_POST['vendor_id']);
    $vendor_uid = mysqli_real_escape_string($conn, $_POST['vendor_uid']);
    $activity_type = mysqli_real_escape_string($conn, $_POST['activity_type']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $unit = mysqli_real_escape_string($conn, $_POST['unit']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $pickup_location = mysqli_real_escape_string($conn, $_POST['pickup_location']);
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
        $activity_id = mysqli_real_escape_string($conn, $_POST['activity_id']);
        // Handle image update - remove/update in server
        $old_banner = mysqli_query($conn, "SELECT `banner` FROM `service_activities` WHERE `activity_id` = '$activity_id' ");
        $old_banner_row = mysqli_fetch_assoc($old_banner);
        $old_banner_name_with_path = "../uploaded_images/" . $old_banner_row['banner'];
        if (file_exists($old_banner_name_with_path)) {
            unlink($old_banner_name_with_path);
        }

        $activity_update_sql = "UPDATE `service_activities` SET `vendor_uid` = '$vendor_uid', `activity_type` = '$activity_type', `name` = '$name',
            `duration` = '$duration', `unit` = '$unit', `price` = '$price', `pickup_location` = '$pickup_location', `amenities` = '$amenities' " .
            (!empty($bannerNewName) ? ", `banner` = '$bannerNewName'" : "") .
            " WHERE `activity_id` = '$activity_id'";

        $activity_run = mysqli_query($conn, $activity_update_sql);
        $success_msg = "Updated";
    } else {
        // Insert
        $activity_insql = "INSERT INTO `service_activities` (`vendor_id`, `vendor_uid`, `activity_type`, `name`, `duration`, `unit`, `price`, `pickup_location`, `amenities`, `banner`, `status`, `updated_by`, `updated_at`, `created_at`) 
                VALUES ('$vendor_id', '$vendor_uid', '$activity_type', '$name', '$duration', '$unit', '$price', '$pickup_location', '$amenities', '$bannerNewName', 'Pending', '$updated_by', '$updated_at', '$updated_at')";

        $activity_run = mysqli_query($conn, $activity_insql);
        $success_msg = "Added";
    }

    // Display success message
    if ($activity_run) {
        echo '<div class="alert text-white bg-success alert-icon-success alert-dismissible fade show" role="alert">
            <strong>Activity ' . $success_msg . ' successfully!</strong> You have ' . strtolower($success_msg) . ' an activity successfully.
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

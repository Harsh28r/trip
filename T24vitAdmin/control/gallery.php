<?php
require_once 'conn.php';

// Ensure `category` is provided in the URL
if (empty($_GET['category']) || empty($_GET['id']) || empty($_GET['name'])) {
    die("Access Denied !!");
} else {
    $service_type = mysqli_real_escape_string($conn, $_GET['category']);
    $service_id = mysqli_real_escape_string($conn, $_GET['id']);
    $service_name = mysqli_real_escape_string($conn, $_GET['name']);
}

$save_gallery_db = FALSE;
$del_gallery = FALSE;
// Handle image upload
if (isset($_POST['upload_gallery'])) {
    // Define upload path
    $uploadDir = "../uploaded_images/gallery/";
    // Handle Image - compress
    require("functions.php");
    // Process gallery_image
    if (isset($_FILES['gallery_image']) && $_FILES['gallery_image']['error'] == UPLOAD_ERR_OK) {
        $gallery_imageName = $_FILES['gallery_image']['name'];
        $gallery_imageTmp = $_FILES['gallery_image']['tmp_name'];
        $gallery_imageExt = pathinfo($gallery_imageName, PATHINFO_EXTENSION);
        $gallery_imageNewName = generateUniqueFileName($gallery_imageExt);
        $gallery_imageDestination = $uploadDir . $gallery_imageNewName;
        compressImage($gallery_imageTmp, $gallery_imageDestination, 50);
        $gallery_sql = "INSERT INTO `service_galleries` (`id`, `service_type`, `service_id`, `image`, `path`, `status`, `updated_by`, `updated_at`, `created_at`) 
                        VALUES (NULL, '$service_type', '$service_id', '$gallery_imageNewName', '$gallery_imageDestination', 'active', '$updated_by', '$updated_at', '$updated_at');";
        $save_gallery_db = mysqli_query($conn, $gallery_sql);
        $success_msg = "Added";
    }
}

// Handle Delete GAllery
if (!empty($_GET['did'])) {
    $did = mysqli_real_escape_string($conn, $_GET['did']);
    // find Record & delete from Server
    $del_gal_run_ser = mysqli_query($conn, "SELECT `path` FROM `service_galleries` WHERE `id` = '$did'");
    if (mysqli_num_rows($del_gal_run_ser) > 0) {
        $del_gal_run_ser_row = mysqli_fetch_assoc($del_gal_run_ser);
        $image_path = $del_gal_run_ser_row['path'];
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        // Delete from DB
        $del_gallery = mysqli_query($conn, "DELETE FROM `service_galleries` WHERE `id` = '$did'");
        if ($del_gallery) {
            $success_msg = "Deleted";
        }
    }
}


// Success Message
if ($save_gallery_db || $del_gallery) {
    if ($save_gallery_db || $del_gallery) {
        // display success message 
        echo '<div class="alert text-white bg-success alert-icon-success alert-dismissible fade show" role="alert">
            <strong>Gallery ' . $success_msg . ' in ' . $service_name . ' !</strong> You have ' . $success_msg . ' a gallery successfully.
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

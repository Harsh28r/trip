
<?php
// For Connection
require("conn.php");


// <!-- Vendor Add -->
$login_uid = 'TR24SUPADMIN';
$updated_by = 'TR24SUPADMIN'; //current loggedin uid from session
$update_mode = isset($_POST['update_vendor']) ? true : false;

if (isset($_POST['add_vendor']) || $update_mode) {

    // Personal Details    
    $vendor_name = mysqli_real_escape_string($conn, $_POST['vendor_name']);
    $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $aadhar_no = $_POST['aadhar_no'];
    $mobile_no = $_POST['mobile_no'];
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    // Actual password
    $actual_password = mysqli_real_escape_string($conn, $_POST['password']);
    // Hash the password before storing it
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    // Business Details
    $business_name = mysqli_real_escape_string($conn, $_POST['business_name']);
    $gst_no = mysqli_real_escape_string($conn, $_POST['gst_no']);
    $registration_date =  $_POST['registration_date'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $pinCode =  $_POST['pinCode'];
}
// handle Images - ---

// Define upload path
$uploadDir = "../uploaded_images/";

// Function to generate a random unique string for file names
function generateUniqueFileName($extension)
{
    return uniqid() . '.' . $extension;
}

// Function to reduce image quality by 50%
function compressImage($source, $destination, $quality)
{
    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    } elseif ($info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
    } else {
        return false;
    }

    return imagejpeg($image, $destination, $quality);
}

// Fetch existing file names from the database if updating
// Assuming you have the $vendor_uid or other identifier
// For example: $existingFiles = fetchExistingFiles($vendor_uid);

// $existingFiles = [
//     'front_aadhar' => $existingFrontAadharName,
//     'back_aadhar' => $existingBackAadharName,
//     'gst_certificate' => $existingGstCertificateName,
//     'other_document' => $existingOtherDocumentName
// ];

$newFileNames = [];

// Process Front Aadhaar
if (isset($_FILES['frontAadhar']) && $_FILES['frontAadhar']['error'] == UPLOAD_ERR_OK) {
    $frontAadharName = $_FILES['frontAadhar']['name'];
    $frontAadharTmp = $_FILES['frontAadhar']['tmp_name'];
    $frontAadharExt = pathinfo($frontAadharName, PATHINFO_EXTENSION);
    $frontAadharNewName = generateUniqueFileName($frontAadharExt);
    $frontAadharDestination = $uploadDir . $frontAadharNewName;
    $newFileNames['front_aadhar'] = $frontAadharNewName;
    compressImage($frontAadharTmp, $frontAadharDestination, 50);
} else {
    if (!(isset($_POST['old_frontAadhar']))) {
        $frontAadharNewName = null;
    } else {
        $frontAadharNewName = $_POST['old_frontAadhar']; // Use existing file if not updated
    }
}

// Process Back Aadhaar
if (isset($_FILES['backAadhar']) && $_FILES['backAadhar']['error'] == UPLOAD_ERR_OK) {
    $backAadharName = $_FILES['backAadhar']['name'];
    $backAadharTmp = $_FILES['backAadhar']['tmp_name'];
    $backAadharExt = pathinfo($backAadharName, PATHINFO_EXTENSION);
    $backAadharNewName = generateUniqueFileName($backAadharExt);
    $backAadharDestination = $uploadDir . $backAadharNewName;
    $newFileNames['back_aadhar'] = $backAadharNewName;
    compressImage($backAadharTmp, $backAadharDestination, 50);
} else {
    if (!(isset($_POST['old_backAadhar']))) {
        $backAadharNewName = null;
    } else {
        $backAadharNewName = $_POST['old_backAadhar']; // Use existing file if not updated
    }
}

// Process GST Certificate
if (isset($_FILES['gstCertificate']) && $_FILES['gstCertificate']['error'] == UPLOAD_ERR_OK) {
    $gstCertificateName = $_FILES['gstCertificate']['name'];
    $gstCertificateTmp = $_FILES['gstCertificate']['tmp_name'];
    $gstCertificateExt = pathinfo($gstCertificateName, PATHINFO_EXTENSION);
    $gstCertificateNewName = generateUniqueFileName($gstCertificateExt);
    $gstCertificateDestination = $uploadDir . $gstCertificateNewName;
    $newFileNames['gst_certificate'] = $gstCertificateNewName;
    compressImage($gstCertificateTmp, $gstCertificateDestination, 50);
} else {
    if (!(isset($_POST['old_gstCertificate']))) {
        $gstCertificateNewName = null;
    } else {
        $gstCertificateNewName = $_POST['old_gstCertificate']; // Use existing file if not updated
    }
}

// Optional: Process Other Document
if (isset($_FILES['otherDocument']) && $_FILES['otherDocument']['error'] == UPLOAD_ERR_OK) {
    $otherDocumentName = $_FILES['otherDocument']['name'];
    $otherDocumentTmp = $_FILES['otherDocument']['tmp_name'];
    $otherDocumentExt = pathinfo($otherDocumentName, PATHINFO_EXTENSION);
    $otherDocumentNewName = generateUniqueFileName($otherDocumentExt);
    $otherDocumentDestination = $uploadDir . $otherDocumentNewName;
    $newFileNames['other_document'] = $otherDocumentNewName;
    compressImage($otherDocumentTmp, $otherDocumentDestination, 50);
} else {
    if (!(isset($_POST['old_otherDocument']))) {
        $otherDocumentNewName = null;
    } else {
        $otherDocumentNewName = $_POST['old_otherDocument']; // Use existing file if not updated
    }
}



// ----------------------------------------
// insert Into database personal details
$add_vendor_run = False;
$update_vendor_run = False;
if (isset($_POST['add_vendor'])) {
    // For UID -
    require_once("uid.php");
    // Insert Personal Details in vendor table
    $add_vendor_sql = "INSERT INTO `vendor` (`uid`, `vendor_name`, `father_name`, `gender`, `aadhar_no`, `mobile_no`, `email_id`, `password`, `front_aadhar`, `back_aadhar`, `business_name`, `gst_no`, `registration_date`, `address`, `city`, `district`, `state`, `pincode`, `gst_certificate`, `other_certificate`, `updated_by`, `updated_at`,`created_at`) VALUES ('$generated_uid', '$vendor_name', '$father_name', '$gender', '$aadhar_no', '$mobile_no', '$email_id', '$password', '$frontAadharNewName', '$backAadharNewName', '$business_name', '$gst_no', '$registration_date', '$address', '$city', '$district', '$state', '$pinCode', '$gstCertificateNewName', '$otherDocumentNewName', '$updated_by', '$updated_at','$updated_at');";
    $add_vendor_run = mysqli_query($conn, $add_vendor_sql);
    $success_msg = "Added";
    // Send Email - 
    require_once("control/email_templates.php");
} else if ($update_mode) {
    // Update query
    $update_vendor_uid = $_POST['vendor_uid'];
    // Update query
    $update_vendor_sql = "UPDATE `vendor` SET `vendor_name`='$vendor_name', `father_name`='$father_name', `gender`='$gender', `aadhar_no`='$aadhar_no', `mobile_no`='$mobile_no', `email_id`='$email_id',  `front_aadhar`='$frontAadharNewName', `back_aadhar`='$backAadharNewName', `business_name`='$business_name', `gst_no`='$gst_no', `registration_date`='$registration_date', `address`='$address', `city`='$city', `district`='$district', `state`='$state', `pincode`='$pinCode', `gst_certificate`='$gstCertificateNewName', `other_certificate`='$otherDocumentNewName', `updated_by`='$updated_by', `updated_at`='$updated_at' WHERE `uid`='$update_vendor_uid'";
    $update_vendor_run = mysqli_query($conn, $update_vendor_sql);

    $success_msg = "Updated";
}
// display success message 
if ($add_vendor_run || $update_vendor_run) {
    if ($add_vendor_run || $update_vendor_run) {
        echo '<div class="alert text-white bg-success alert-icon-success alert-dismissible fade show" role="alert">
            <strong>Vendor ' . $success_msg . ' successfully!</strong> You have added a vendor successfully, now that vendor can login using their credential which has been sent on ' . $email_id . '.
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
// Service Details
$update_service = false;
$srvc_service_update_run = false;
$insert_service = false;
$srvc_service_insert_run = false;

// Direct vendor Add SErvice msg & vendor_uid to add direct service into any vendor
if ($vendor_add_service_msg = isset($_POST['vendor_uid'])) {
    if (empty($generated_uid)) {
        $generated_uid = mysqli_real_escape_string($conn, $_POST['vendor_uid']);
    }
    $success_msg = "Service Added";
}


if (isset($_POST['hotel']) || $update_service = isset($_POST['update_hotel'])) {


    $hotelName = mysqli_real_escape_string($conn, $_POST['hotelName']);
    $hotelPhone = mysqli_real_escape_string($conn, $_POST['hotelPhone']);
    $hotelEmail = mysqli_real_escape_string($conn, $_POST['hotelEmail']);
    $hotelAddress = mysqli_real_escape_string($conn, $_POST['hotelAddress']);
    $hotelCity = mysqli_real_escape_string($conn, $_POST['hotelCity']);
    $hotelDistrict = mysqli_real_escape_string($conn, $_POST['hotelDistrict']);
    $hotelState = mysqli_real_escape_string($conn, $_POST['hotelState']);
    $hotelZip = $_POST['hotelZip'];

   

    if (isset($_POST['hotel'])) {
        $srvc_hotel_sql = "INSERT INTO `vendor_service` (`service_type`, `vendor_uid`, `service_name`, `service_no`, `service_email`, `service_address`, `service_city`, `service_district`, `service_state`, `service_pincode`, `status`, `updated_by`, `updated_at`, `created_at`) 
            VALUES ('Hotel', '$generated_uid', '$hotelName', '$hotelPhone', '$hotelEmail', '$hotelAddress', '$hotelCity', '$hotelDistrict', '$hotelState', '$hotelZip', 'active', '$updated_by', '$updated_at', '$updated_at');";
        $srvc_service_insert_run = mysqli_query($conn, $srvc_hotel_sql);
    } else if ($update_service) {
        $vendor_service_id = mysqli_real_escape_string($conn, $_POST['vendor_service_id']);
        $srvc_hotel_update_sql = "UPDATE `vendor_service` SET 
            `service_name` = '$hotelName', `service_no` = '$hotelPhone', `service_email` = '$hotelEmail', `service_address` = '$hotelAddress',
            `service_city` = '$hotelCity', `service_district` = '$hotelDistrict', `service_state` = '$hotelState', `service_pincode` = '$hotelZip', `status` = 'active', `updated_by` = '$updated_by', `updated_at` = '$updated_at' 
            WHERE `service_type` = 'Hotel' AND `id` = '$vendor_service_id';";
        $srvc_service_update_run = mysqli_query($conn, $srvc_hotel_update_sql);
        $success_msg = "Hotel Updated";
    }
}

// Bus Details
if (isset($_POST['bus']) || $update_service = isset($_POST['update_bus'])) {
    // echo "<script>alert('form submission ok');</script>";


    $busName = mysqli_real_escape_string($conn, $_POST['busName']);
    $busPhone = mysqli_real_escape_string($conn, $_POST['busPhone']);
    $busEmail = mysqli_real_escape_string($conn, $_POST['busEmail']);
    $busAddress = mysqli_real_escape_string($conn, $_POST['busAddress']);
    $busCity = mysqli_real_escape_string($conn, $_POST['busCity']);
    $busDistrict = mysqli_real_escape_string($conn, $_POST['busDistrict']);
    $busState = mysqli_real_escape_string($conn, $_POST['busState']);
    $busZip = $_POST['busZip'];

   
    if (isset($_POST['bus'])) {
        $srvc_bus_sql = "INSERT INTO `vendor_service` (`service_type`, `vendor_uid`, `service_name`, `service_no`, `service_email`, `service_address`, `service_city`, `service_district`, `service_state`, `service_pincode`, `status`, `updated_by`, `updated_at`, `created_at`) 
            VALUES ('Bus', '$generated_uid', '$busName', '$busPhone', '$busEmail', '$busAddress', '$busCity', '$busDistrict', '$busState', '$busZip', 'active', '$updated_by', '$updated_at', '$updated_at');";
        $srvc_service_insert_run = mysqli_query($conn, $srvc_bus_sql);
    } else if ($update_service) {
        $vendor_service_id = mysqli_real_escape_string($conn, $_POST['vendor_service_id']);
        $srvc_bus_update_sql = "UPDATE `vendor_service` SET 
            `service_name` = '$busName', `service_no` = '$busPhone', `service_email` = '$busEmail', `service_address` = '$busAddress',
            `service_city` = '$busCity', `service_district` = '$busDistrict', `service_state` = '$busState', `service_pincode` = '$busZip', `status` = 'active', `updated_by` = '$updated_by', `updated_at` = '$updated_at' 
            WHERE `service_type` = 'Bus' AND `id` = '$vendor_service_id';";
        $srvc_service_update_run = mysqli_query($conn, $srvc_bus_update_sql);
        $success_msg = "Bus Updated";
    }
}

// Bike on Rent Details
if (isset($_POST['bike']) || $update_service = isset($_POST['update_bike'])) {
    // echo "<script>alert('form submission ok');</script>";


    $bikeName = mysqli_real_escape_string($conn, $_POST['bikeName']);
    $bikePhone = mysqli_real_escape_string($conn, $_POST['bikePhone']);
    $bikeEmail = mysqli_real_escape_string($conn, $_POST['bikeEmail']);
    $bikeAddress = mysqli_real_escape_string($conn, $_POST['bikeAddress']);
    $bikeCity = mysqli_real_escape_string($conn, $_POST['bikeCity']);
    $bikeDistrict = mysqli_real_escape_string($conn, $_POST['bikeDistrict']);
    $bikeState = mysqli_real_escape_string($conn, $_POST['bikeState']);
    $bikeZip = $_POST['bikeZip'];
   
    if (isset($_POST['bike'])) {
        $srvc_bike_sql = "INSERT INTO `vendor_service` (`service_type`, `vendor_uid`, `service_name`, `service_no`, `service_email`, `service_address`, `service_city`, `service_district`, `service_state`, `service_pincode`, `status`, `updated_by`, `updated_at`, `created_at`) 
            VALUES ('Bike', '$generated_uid', '$bikeName', '$bikePhone', '$bikeEmail', '$bikeAddress', '$bikeCity', '$bikeDistrict', '$bikeState', '$bikeZip', 'active', '$updated_by', '$updated_at', '$updated_at');";
        $srvc_service_insert_run = mysqli_query($conn, $srvc_bike_sql);
    } else if ($update_service) {
        $vendor_service_id = mysqli_real_escape_string($conn, $_POST['vendor_service_id']);
        $srvc_bike_update_sql = "UPDATE `vendor_service` SET 
            `service_name` = '$bikeName', `service_no` = '$bikePhone', `service_email` = '$bikeEmail', `service_address` = '$bikeAddress',
            `service_city` = '$bikeCity', `service_district` = '$bikeDistrict', `service_state` = '$bikeState', `service_pincode` = '$bikeZip', `status` = 'active', `updated_by` = '$updated_by', `updated_at` = '$updated_at' 
            WHERE `service_type` = 'Bike' AND `id` = '$vendor_service_id';";
        $srvc_service_update_run = mysqli_query($conn, $srvc_bike_update_sql);
        $success_msg = "Bike Updated";
    }
}

// Trip Details
if (isset($_POST['trip']) || $update_service = isset($_POST['update_trip'])) {

    $tripName = mysqli_real_escape_string($conn, $_POST['tripName']);
    $tripAddress = mysqli_real_escape_string($conn, $_POST['tripAddress']);
    $tripPhone = mysqli_real_escape_string($conn, $_POST['tripPhone']);
    $tripEmail = mysqli_real_escape_string($conn, $_POST['tripEmail']);
    $tripCity = mysqli_real_escape_string($conn, $_POST['tripCity']);
    $tripDistrict = mysqli_real_escape_string($conn, $_POST['tripDistrict']);
    $tripState = mysqli_real_escape_string($conn, $_POST['tripState']);
   
    $tripZip =  $_POST['tripZip'];
    if (isset($_POST['trip'])) {
        $srvc_trip_sql = "INSERT INTO `vendor_service` ( `service_type`, `vendor_uid`, `service_name`, `service_no`, `service_email`, `service_address`, `service_city`, `service_district`, `service_state`, `service_pincode`, `status`, `updated_by`, `updated_at`,`created_at`) 
            VALUES ('Trip', '$generated_uid', '$tripName', '$tripPhone', '$tripEmail', '$tripAddress', '$tripCity', '$tripDistrict', '$tripState', '$tripZip', 'active', '$updated_by', '$updated_at','$updated_at');";
        $srvc_service_insert_run = mysqli_query($conn, $srvc_trip_sql);
    } else if ($update_service) {
        $vendor_service_id = mysqli_real_escape_string($conn, $_POST['vendor_service_id']);
        $srvc_trip_update_sql = "UPDATE `vendor_service` SET 
            `service_name` = '$tripName',`service_no` = '$tripPhone',`service_email` = '$tripEmail',`service_address` = '$tripAddress',
            `service_city` = '$tripCity',`service_district` = '$tripDistrict',`service_state` = '$tripState',`service_pincode` = '$tripZip',`status` = 'active', `updated_by` = '$updated_by',`updated_at` = '$updated_at' 
            WHERE `service_type` = 'Trip' AND `id` = '$vendor_service_id';";
        $srvc_service_update_run = mysqli_query($conn, $srvc_trip_update_sql);
        $success_msg = "Trip Updated";
    }
}
// Activity Details
if (isset($_POST['activity']) || $update_service = isset($_POST['update_activity'])) {
    // echo "<script>alert('form submission ok');</script>";

    $activityName = mysqli_real_escape_string($conn, $_POST['activityName']);
    $activityPhone = mysqli_real_escape_string($conn, $_POST['activityPhone']);
    $activityEmail = mysqli_real_escape_string($conn, $_POST['activityEmail']);
    $activityAddress = mysqli_real_escape_string($conn, $_POST['activityAddress']);
    $activityCity = mysqli_real_escape_string($conn, $_POST['activityCity']);
    $activityDistrict = mysqli_real_escape_string($conn, $_POST['activityDistrict']);
    $activityState = mysqli_real_escape_string($conn, $_POST['activityState']);
    $activityZip = $_POST['activityZip'];
   
    if (isset($_POST['activity'])) {
        // Insert new activity service
        $srvc_activity_sql = "INSERT INTO `vendor_service` (`service_type`, `vendor_uid`, `service_name`, `service_no`, `service_email`, `service_address`, `service_city`, `service_district`, `service_state`, `service_pincode`, `status`, `updated_by`, `updated_at`, `created_at`) 
            VALUES ('Activity', '$generated_uid', '$activityName', '$activityPhone', '$activityEmail', '$activityAddress', '$activityCity', '$activityDistrict', '$activityState', '$activityZip', 'active', '$updated_by', '$updated_at', '$updated_at');";
        $srvc_service_insert_run = mysqli_query($conn, $srvc_activity_sql);
    } else if ($update_service) {
        $vendor_service_id = mysqli_real_escape_string($conn, $_POST['vendor_service_id']);

        // Update existing activity service
        $srvc_activity_update_sql = "UPDATE `vendor_service` SET 
            `service_name` = '$activityName', `service_no` = '$activityPhone', `service_email` = '$activityEmail', `service_address` = '$activityAddress',
            `service_city` = '$activityCity', `service_district` = '$activityDistrict', `service_state` = '$activityState', `service_pincode` = '$activityZip', `status` = 'active', `updated_by` = '$updated_by', `updated_at` = '$updated_at' 
            WHERE `service_type` = 'Activity' AND `id` = '$vendor_service_id';";
        $srvc_service_update_run = mysqli_query($conn, $srvc_activity_update_sql);
        $success_msg = "Activity Updated";
    }
}



if ($srvc_service_update_run || $vendor_add_service_msg) {
    if ($srvc_service_update_run || $vendor_add_service_msg) {
        echo '<div class="alert text-white bg-success alert-icon-success alert-dismissible fade show" role="alert">
            <strong>' . $success_msg . '  successfully!</strong>. if changes not reflect, reload the page.
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

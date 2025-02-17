<?php
include("conn.php");
session_start();

// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["submit"])) {

    // Retrieve form data
    $service_id = $conn->real_escape_string($_POST['service_id']);
    $vendor_id = $conn->real_escape_string($_POST['vendor_id']);
    $room_type = $conn->real_escape_string($_POST['room_type']);
    $max_person = $conn->real_escape_string($_POST['max_person']);
    $price = $conn->real_escape_string($_POST['price']);
    $price_unit = $conn->real_escape_string($_POST['price_unit']);
    $amenities = $conn->real_escape_string($_POST['amenities']);
    // $map = $conn->real_escape_string($_POST['map']);
    $hotel_name = $conn->real_escape_string($_POST['hotel_name']);

    // Initialize variables
    $banner_image = '';
    $upload_dir = '../../images/uploads/';

    // Handle file upload
    if (isset($_FILES['banner_image']) && $_FILES['banner_image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['banner_image']['tmp_name'];
        $original_file_name = basename($_FILES['banner_image']['name']);
        $file_extension = pathinfo($original_file_name, PATHINFO_EXTENSION);

        // Generate a unique file name
        $unique_file_name = uniqid('hotelroom_', true) . '_' . $file_extension;
        $banner_image = $upload_dir . $unique_file_name;

        // Move the uploaded file to the target directory
        if (!move_uploaded_file($file_tmp, $banner_image)) {
            die('File upload failed');
        }
    }

    // Insert data into the database
    $strike_price = ''; // Default value or handle accordingly
    $status = 'active'; // Default value or handle accordingly
    $updated_by = 'admin'; // Replace with actual updated by info
    $updated_at = date('Y-m-d H:i:s');
    $created_at = date('Y-m-d H:i:s');
    $sql = "INSERT INTO service_hotels 
    (vendor_uid, service_id,  hotel_name, room_type, person, price, amenities, banner, `status`, updated_by, updated_at, created_at)
    VALUES 
    ('$vendor_id', '$service_id', '$hotel_name', '$room_type', '$max_person', '$price', '$amenities', '$unique_file_name', '$status', '$updated_by', '$updated_at', '$created_at')";


    if ($conn->query($sql) === TRUE) {

        echo '<script>alert("New Hotel added succcessfully")</script>';
        // echo '<script>window.location.href="hotel-list.php"</script>';
        // $conn->close();
    } else {
        // Not a POST request
        //    http_response_code(405);
        //  echo "Method not allowed";
    }
}
// ======================================================= Edit ==================== 🔴


if (isset($_POST["edit_submit"])) {

    // Retrieve form data
    $vendor_id = $conn->real_escape_string($_POST['vendor_id']);
    $room_type = $conn->real_escape_string($_POST['room_type']);
    $max_person = $conn->real_escape_string($_POST['max_person']);
    $price = $conn->real_escape_string($_POST['price']);
    $amenities = $conn->real_escape_string($_POST['amenities']);
    $hotel_name = $conn->real_escape_string($_POST["hotel_name"]);
    // Handle file upload
    //$banner_image = '';
    if (!empty($_FILES['banner_image']) && $_FILES['banner_image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['banner_image']['tmp_name'];
        $file_name = basename($_FILES['banner_image']['name']);
        $upload_dir = 'uploads/';
        $banner_image = $upload_dir . $file_name;

        if (move_uploaded_file($file_tmp, $banner_image)) {
            // File uploaded successfully
        } else {
            die('File upload failed');
        }
    } else {
        $banner_image = $_POST["img_name"];
    }


    // var_dump($_FILES);
    // die();
    // Insert data into the database
    $status = 'active'; // Default value or handle accordingly
    //   $updated_by = 'admin'; // Replace with actual updated by info

    // Set the default time zone to Indian Standard Time
    date_default_timezone_set('Asia/Kolkata');
    $updated_at = date('Y-m-d H:i:s');
    $created_at = date('Y-m-d H:i:s');
    $room_id = $_POST["room_id"];
    $price_unit = $_POST["price_unit"];
    $sql = "update service_hotels set  room_type='$room_type', hotel_name='$hotel_name', person='$max_person', price='$price', amenities='$amenities',price_unit='$price_unit', banner='$banner_image', updated_at='$updated_at' where room_id='$room_id'";

    if ($conn->query($sql) === TRUE) {

        echo '<script>alert("Hotel Updated succcessfully")</script>';
        echo '<script>window.location.href="../add-rooms?uid=' . $vendor_id . '&category=Hotel"</script>';
        // $conn->close();
    } else {
        // Not a POST request
        //    http_response_code(405);
        //  echo "Method not allowed";
    }
}
?>

            <?php
            if (isset($_POST['vendor_add'])) {

                $vendor_name = $_POST['vendor_name'];
                $father_name = $_POST['father_name'];
                $gender = $_POST['gender'];
                $mobile_no = $_POST['mobile_no'];
                $email_id = $_POST['email_id'];
                $aadhar_no = $_POST['aadhar_no'];
                $gst_no = $_POST['gst_no'];
                $password = $_POST['password'];

                // Handle file uploads
                $front_aadhar = $_FILES['front_aadhar']['name'];
                $back_aadhar = $_FILES['back_aadhar']['name'];

                // Specify directory to save files
                $target_dir = "uploads/";
                $target_file_front = $target_dir . basename($front_aadhar);
                $target_file_back = $target_dir . basename($back_aadhar);

                // Move uploaded files to the server
                move_uploaded_file($_FILES['front_aadhar']['tmp_name'], $target_file_front);
                move_uploaded_file($_FILES['back_aadhar']['tmp_name'], $target_file_back);

                // Capture form data
                $business_name = $_POST['business_name'];
                $gst_no = $_POST['gst_no'];
                $registration_date = $_POST['registration_date'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $district = $_POST['district'];
                $state = $_POST['state'];
                $pincode = $_POST['pincode'];
                //$aadhar_no = $_POST['aadhar_no'];

                // Handle file uploads
                $gst_certificate = $_FILES['gst_certificate']['name'];
                $other_certificate = $_FILES['other_certificate']['name'];

                // Specify directory to save files
                $target_dir = "uploads/";
                $target_file_gst = $target_dir . basename($gst_certificate);
                $target_file_other = $target_dir . basename($other_certificate);

                // Move uploaded files to the server
                move_uploaded_file($_FILES['gst_certificate']['tmp_name'], $target_file_gst);
                move_uploaded_file($_FILES['other_certificate']['tmp_name'], $target_file_other);

                /*
                // Insert into vendor table
             echo   $query = "INSERT INTO vendor (vendor_name, father_name, gender, mobile_no, email_id, aadhar_no, gst_no, password, front_aadhar, back_aadhar) 
                          VALUES ('$vendor_name', '$father_name', '$gender', '$mobile_no', '$email_id', '$aadhar_no', '$gst_no', '$password', '$front_aadhar', '$back_aadhar')";*/
                $query = "INSERT INTO vendor (vendor_name, father_name, gender, mobile_no, email_id,business_name, gst_no, registration_date, address, city, district, state, pincode, aadhar_no, password, gst_certificate, other_certificate,front_aadhar, back_aadhar) 
          VALUES ('$vendor_name', '$father_name', '$gender', '$mobile_no', '$email_id','$business_name', '$gst_no', '$registration_date', '$address', '$city', '$district', '$state', '$pincode', '$aadhar_no', '$password', '$target_file_gst', '$target_file_other','$front_aadhar', '$back_aadhar')";

                if (mysqli_query($conn, $query)) {
                    /*echo "<script>Swal.fire('Success', 'Vendor added successfully!', 'success');</script>";*/
                    echo '<script>alert("Vendor Added succcessfully")</script>';
                    echo '<script>window.location.href="vendor-list.php"</script>';
                } else {
                    //                    echo "<script>Swal.fire('Error', 'Error adding vendor: " . mysqli_error($conn) . "', 'error');</script>";
                    echo '<script>alert("Error", "Error adding vendor: ' . mysqli_error($conn) . '")</script>';
                    echo '<script>window.location.href="vendor-list.php"</script>';
                }
            }
            ?>


            <?php
            if (isset($_POST['vendor_submit'])) {

                $vendor_name = $_POST['vendor_name'];
                $father_name = $_POST['father_name'];
                $gender = $_POST['gender'];
                $mobile_no = $_POST['mobile_no'];
                $email_id = $_POST['email'];
                $aadhar_no = $_POST['aadhar_no'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $district = $_POST['district'];
                $state = $_POST['state'];
                $pincode = $_POST['pincode'];

                // Handle file uploads
                $front_aadhar = $_FILES['front_aadhar']['name'];
                $back_aadhar = $_FILES['back_aadhar']['name'];

                // Specify directory to save files
                $target_dir = "uploads/";
                $target_file_front = $target_dir . basename($front_aadhar);
                $target_file_back = $target_dir . basename($back_aadhar);

                // Move uploaded files to the server
                move_uploaded_file($_FILES['front_aadhar']['tmp_name'], $target_file_front);
                move_uploaded_file($_FILES['back_aadhar']['tmp_name'], $target_file_back);

                // Capture form data
                /*$business_name = $_POST['business_name'];
$gst_no = $_POST['gst_no'];
$registration_date = $_POST['registration_date'];*/
                //$aadhar_no = $_POST['aadhar_no'];

                // Handle file uploads
                // $gst_certificate = $_FILES['gst_certificate']['name'];
                // $other_certificate = $_FILES['other_certificate']['name'];

                // Specify directory to save files
                // $target_dir = "uploads/";
                // $target_file_gst = $target_dir . basename($gst_certificate);
                // $target_file_other = $target_dir . basename($other_certificate);

                // Move uploaded files to the server
                /*move_uploaded_file($_FILES['gst_certificate']['tmp_name'], $target_file_gst);
move_uploaded_file($_FILES['other_certificate']['tmp_name'], $target_file_other);
*/
                /*
                // Insert into vendor table
             echo   $query = "INSERT INTO vendor (vendor_name, father_name, gender, mobile_no, email_id, aadhar_no, gst_no, password, front_aadhar, back_aadhar) 
                          VALUES ('$vendor_name', '$father_name', '$gender', '$mobile_no', '$email_id', '$aadhar_no', '$gst_no', '$password', '$front_aadhar', '$back_aadhar')";*/
                //$query = "INSERT INTO vendor (vendor_name, father_name, gender, mobile_no, email_id,business_name, gst_no, registration_date, address, city, district, state, pincode, aadhar_no, password, gst_certificate, other_certificate,front_aadhar, back_aadhar) 
                //          VALUES ('$vendor_name', '$father_name', '$gender', '$mobile_no', '$email_id','$business_name', '$gst_no', '$registration_date', '$address', '$city', '$district', '$state', '$pincode', '$aadhar_no', '$password', '$target_file_gst', '$target_file_other','$front_aadhar', '$back_aadhar')";
                echo $p = "update vendor set vendor_name='$vendor_name',father_name='$father_name',gender='$gender',mobile_no='$mobile_no',email_id='$email_id',aadhar_no='$aadhar_no',front_aadhar='$front_aadhar',back_aadhar='$back_aadhar' where uid='$uid'";
                $query = mysqli_query($conn, $p);
                if ($query) {
                    /*echo "<script>Swal.fire('Success', 'Vendor added successfully!', 'success');</script>";*/
                    echo '<script>alert("Vendor Basic Details Updated succcessfully")</script>';
                    echo '<script>window.location.href="profile.php"</script>';
                } else {
                    //                    echo "<script>Swal.fire('Error', 'Error adding vendor: " . mysqli_error($conn) . "', 'error');</script>";
                    echo '<script>alert("Error", "Error adding vendor: ' . mysqli_error($conn) . '")</script>';
                    echo '<script>window.location.href="profile.php"</script>';
                }
            }
            ?>

            <?php
            if (isset($_POST['vendor_submit2'])) {

                $business_name = $_POST['business_name'];
                $gst_no = $_POST['gst_no'];
                $gender = $_POST['gender'];
                $mobile_no = $_POST['mobile_no'];
                $email_id = $_POST['email_id'];
                $aadhar_no = $_POST['aadhar_no'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $district = $_POST['district'];
                $state = $_POST['state'];
                $pincode = $_POST['pincode'];

                // Handle file uploads
                $front_aadhar = $_FILES['front_aadhar']['name'];
                $back_aadhar = $_FILES['back_aadhar']['name'];

                // Specify directory to save files
                $target_dir = "uploads/";
                $target_file_front = $target_dir . basename($front_aadhar);
                $target_file_back = $target_dir . basename($back_aadhar);

                // Move uploaded files to the server
                move_uploaded_file($_FILES['front_aadhar']['tmp_name'], $target_file_front);
                move_uploaded_file($_FILES['back_aadhar']['tmp_name'], $target_file_back);

                $registration_date = $_POST["registration_date"];
                // Capture form data
                /*$business_name = $_POST['business_name'];
$gst_no = $_POST['gst_no'];
$registration_date = $_POST['registration_date'];*/
                //$aadhar_no = $_POST['aadhar_no'];

                //Handle file uploads
                $gst_certificate = $_FILES['gst_certificate']['name'];
                $other_certificate = $_FILES['other_certificate']['name'];

                //Specify directory to save files
                $target_dir = "uploads/";
                $target_file_gst = $target_dir . basename($gst_certificate);
                $target_file_other = $target_dir . basename($other_certificate);

                // Move uploaded files to the server
                move_uploaded_file($_FILES['gst_certificate']['tmp_name'], $target_file_gst);
                move_uploaded_file($_FILES['other_certificate']['tmp_name'], $target_file_other);

                /*
                // Insert into vendor table
             echo   $query = "INSERT INTO vendor (vendor_name, father_name, gender, mobile_no, email_id, aadhar_no, gst_no, password, front_aadhar, back_aadhar) 
                          VALUES ('$vendor_name', '$father_name', '$gender', '$mobile_no', '$email_id', '$aadhar_no', '$gst_no', '$password', '$front_aadhar', '$back_aadhar')";*/
                //$query = "INSERT INTO vendor (business_name, gst_no, registration_date, address, city, district, state, pincode,gst_certificate, other_certificate) 
                //  VALUES ('$vendor_name', '$father_name', '$gender', '$mobile_no', '$email_id','$business_name', '$gst_no', '$registration_date', '$address', '$city', '$district', '$state', '$pincode', '$aadhar_no', '$password', '$target_file_gst', '$target_file_other','$front_aadhar', '$back_aadhar')";
                echo $o = "update vendor set business_name='$business_name',address='$address',registration_date='$registration_date',gst_no='$gst_no',city='$city',district='$district',state='$state',pincode='$pincode',gst_certificate='$gst_certificate',other_certificate='$other_certificate' where uid='$uid'";
                $query = mysqli_query($conn, $o);
                if ($query) {
                    /*echo "<script>Swal.fire('Success', 'Vendor added successfully!', 'success');</script>";*/
                    echo '<script>alert("Vendor Business Details Updated succcessfully")</script>';
                    echo '<script>window.location.href="profile.php"</script>';
                } else {
                    //                    echo "<script>Swal.fire('Error', 'Error adding vendor: " . mysqli_error($conn) . "', 'error');</script>";
                    echo '<script>alert("Error", "Error adding vendor: ' . mysqli_error($conn) . '")</script>';
                    echo '<script>window.location.href="profile.php"</script>';
                }
            }
            ?>

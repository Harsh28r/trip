<?php
session_start();
//include('conn.php'); // Include database connection
  require_once("../tr24conn.php");
  
// Check if user is logged in
if (empty($_SESSION['useremail'])) {
    // If not logged in, store the form values in session (sanitized)
    $_SESSION['trip_id'] = mysqli_real_escape_string($conn, $_POST['trip_id'] ?? '');
    $_SESSION['tour_date'] = mysqli_real_escape_string($conn, $_POST['tour_date'] ?? '');
/*    $_SESSION['dropoff_date'] = mysqli_real_escape_string($conn, $_POST['dropoff_date'] ?? '');*/
    $_SESSION['vehicle'] = mysqli_real_escape_string($conn, $_POST['vehicle'] ?? '');

    // Store the current page URL in session to redirect after login
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    // Redirect to login page
    header("Location: ../login");
    exit;
}

// Booking page submit (Previous Page)=====
// bike > booking > checkout > success booking
if (isset($_POST['submit'])) {
    $_SESSION['trip_id'] = mysqli_real_escape_string($conn, $_POST['trip_id'] ?? '');
    $_SESSION['tour_date'] = mysqli_real_escape_string($conn, $_POST['tour_date'] ?? '');
    /*$_SESSION['dropoff_date'] = mysqli_real_escape_string($conn, $_POST['dropoff_date'] ?? '');*/
    $_SESSION['vehicle'] = mysqli_real_escape_string($conn, $_POST['vehicle'] ?? '');

    // Validate and redirect
    if (!empty($_SESSION['tour_date']) && !empty($_SESSION['vehicle'])) {
        // Redirect to a confirmation or next page
        header("Location: checkout");
        exit;
    } else {
        // Redirect back to the form with an error message if any field is missing
        $_SESSION['error'] = "Please fill in all required fields.";

        // Redirect back to the previous page (either from a session variable or the referrer URL)
        $redirect_to = $_SESSION['previous_page'] ?? $_SERVER['HTTP_REFERER'];
        // Clear the previous_page session after redirect
        unset($_SESSION['previous_page']);
        header("Location: $redirect_to");
        exit;
    }
} else {
    // If accessed directly, redirect to form page
    // header("Location: checkout-form.php");
    // exit;
}
// ====================================

if (isset($_POST['confirmbooking'])) {
    // Retrieve data from the form
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $trip_id = mysqli_real_escape_string($conn, $_POST['trip_id']);
    $vehicle = mysqli_real_escape_string($conn, $_POST['vehicle']);
    $tour_date = mysqli_real_escape_string($conn, $_POST['tour_date']);
    
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $total_cost = mysqli_real_escape_string($conn, $_POST['total_cost']);

    // Get the current timestamp for booking time
    $booking_time = date('d-m-Y H:i:s');
    // Insert query
 echo   $sql = "INSERT INTO trip_booking (user_id, trip_id, tour_date, vehicle, status, total_cost, booking_time) 
            VALUES ('$user_id', '$trip_id', '$tour_date', '$vehicle',  '$status', '$total_cost', '$booking_time')";

    if (mysqli_query($conn, $sql)) {

        // Retrieve the auto-generated request_id
        $request_id = mysqli_insert_id($conn);

        // Store the request_id in the session
        $_SESSION['bike_request_id'] = $request_id;

        // Success - Redirect to a success page or show confirmation
        $_SESSION['trip_id'] = "";
        
        $_SESSION['tour_date'] = "";
        //$_SESSION['dropoff_date'] = "";
        $_SESSION['vehicle'] = "";
        $_SESSION['allow_checkout'] = false;

/*    var_dump($_SESSION['bike_request_id']);
    die();*/
        // Redirect to booking-successful page
        header("Location: booking-successful");
        exit;
    } else {
        // Error - Display an error message
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}


    
                                                    // Fetch vehicles and their prices from the database
                                                    $vehicle_sql = "SELECT v.*, vp.price FROM service_trip_vehicles AS v
                                                        JOIN service_trip_vehicles_price AS vp ON v.id = vp.vehicle_id
                                                        
                                                        WHERE vp.trip_id = '".$_SESSION["trip_id"]."' AND vp.status = 'Active'  AND vp.id = '".$_SESSION['vehicle']."'
                                                        
                                                        ORDER BY vp.price ASC"; // Low to high price
                                                        

                                                    $vehicle_result = $conn->query($vehicle_sql);
                                                    
                                        
                            $vehicle = $vehicle_result->fetch_assoc();
                            
                                                            // Check if vehicle image is available; use a default icon if not
                                    
                                    $price=$vehicle['price'];
                                                    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Checkout</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/select2.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/owl.theme.default.min.css" />
    <!-- <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/jquery.fancybox.css" /> -->
    <!-- <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/daterangepicker.min.css" /> -->
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/style.css" />
    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body>
    <style>
        /* CSS for .mobile-none to hide on mobile devices */
        @media (max-width: 768px) {

            .mobile-none {
                display: none !important;
            }
        }
    </style>
    <!-- start per-loader -->
    <!-- <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- end per-loader -->
    <?php
    include("../header.php");
    ?>
    <?php
    // Database connection
    require_once("../tr24conn.php");
    // Get parameters from the URL

    if (isset($_SESSION['trip_id']) && !empty($_SESSION['trip_id'])) {
        // Store the 'bike_id' from session into a variable
        $trip_id = $_SESSION['trip_id'];
    } else {
        // If 'bike_id' is not found in the session, deny access
        echo '<script>window.location.href = "../trips";</script>';
        exit();
    }

   
    // Fetch Trip details from `service_trip` table
    $trip_sql = "SELECT * FROM service_trip WHERE trip_id = '$trip_id'";
    $trip_result = $conn->query($trip_sql);

    if ($trip_result->num_rows > 0) {
        // Fetch trip details
        $trip = $trip_result->fetch_assoc();

        // Extract trip details
        $vendor_uid = $trip['vendor_uid'];
        $package_name = $trip['package_name'];
        $duration = $trip['duration'];
        $pickup_location = $trip['pickup_location'];
        // $price = $trip['price'];
        $trips_idss=$trip["id"];
                            
        // $unit = $trip['unit'];
        $amenities = explode(',', $trip['amenities']);
        $banner = $trip['banner'];
        $year = $trip['created_at']; // Assuming the year is related to the trip creation date
    } else {
        echo "No details found for this trip.";
        die();
    }

    // Fetch vendor service details from `vendor_service` table using `vendor_uid` and `service_type = 'Trip'`
    $service_sql = "SELECT * FROM vendor_service WHERE vendor_uid = '$vendor_uid' AND service_type = 'Trip'";
    $service_result = $conn->query($service_sql);

    if ($service_result->num_rows > 0) {
        $service = $service_result->fetch_assoc();

        // Extract service details
        $service_name = $service['service_name'];
        $service_no = $service['service_no'];
        $service_email = $service['service_email'];
        $service_address = $service['service_address'];
        $service_city = $service['service_city'];
        $service_state = $service['service_state'];
        $service_pincode = $service['service_pincode'];
    } else {
        echo "No business details found for this vendor.";
        die();
    }

    // Fetch additional images from `service_galleries`
    $gallery_images = [];
    $gallery_sql = "SELECT image FROM service_galleries WHERE service_type = 'Trip' AND service_id = '$trip_id' AND status = 'active'";
    $gallery_result = $conn->query($gallery_sql);

    if ($gallery_result->num_rows > 0) {
        while ($row = $gallery_result->fetch_assoc()) {
            $gallery_images[] = $row['image'];
        }
    }
    ?>
    <style>
        .bread-bg {
            background-image: url(https://work.prcptnvt.site/trip24/img/DSC_0535-min.jpg);
        }

        .gallery-item {
            display: flex;
            justify-content: center;
            align-items: center;
        
            
        }
    </style>

    <section class="breadcrumb-area bread-bg">
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3"><?= $package_name; ?></h2>
            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>


    <!-- Bike Details UI -->
    <section class="card-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-4">
                    <div class="listing-wrapper">
                        <!-- Gallery Slider -->
                        <div class="listing-single-panel mb-5">
                            <div class="gallery-carousel owl-carousel owl-theme">
                                <!-- Display banner image first -->
                                <div class="gallery-item">
                                    <img src="https://work.prcptnvt.site/trip24/uploaded_images/<?= $banner; ?>" alt="Trip Banner Image" style="height:25rem;">
                                </div>

                                <!-- Display additional images from the gallery -->
                                <?php foreach ($gallery_images as $image) : ?>
                                    <div class="gallery-item">
                                        <img src="https://work.prcptnvt.site/trip24/uploaded_images/gallery/<?= $image; ?>" alt="Gallery Image" style="height:25rem;">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Description & Vehicles Tabs -->
                        <div class="dashboard-nav d-flex flex-wrap align-items-center justify-content-between">
                            <ul class="nav nav-tabs my-tabs my-tabs-2 justify-content-center my-1" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                        <i class="fal fa-list me-1 font-size-14"></i> Description
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="vehicles-tab" data-bs-toggle="tab" href="#vehicles" role="tab" aria-controls="vehicles" aria-selected="false" tabindex="-1">
                                        <i class="fal fa-car me-1 font-size-14"></i> Vehicles & Prices
                                    </a>
                                </li>
                            </ul>
                            <div class="my-1">
                                <span class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium me-1">
                                    <i class="bi bi-geo-alt-fill"></i>Pickup At: <?= $pickup_location; ?>
                                </span>
                            </div>
                        </div>

                        <div class="container">
                            <div class="tab-content mt-4" id="myTabContent">
                                <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="row">
                                        <div class="listing-single-panel mb-5">
                                            <h4 class="font-size-30 font-weight-semi-bold mb-3"><?= $package_name; ?></h4>
                                            <p><?= implode(', ', $amenities); ?></p>
                                        </div>
                                        <div class="listing-single-panel mb-5">
                                            <h4 class="font-size-30 font-weight-semi-bold mb-3">Vehicles & Price </h4>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <?php
                                                    // Fetch vehicles and their prices from the database
                                                    $vehicle_sql = "SELECT v.*, vp.price FROM service_trip_vehicles AS v
                                                        JOIN service_trip_vehicles_price AS vp ON v.id = vp.vehicle_id
                                                        
                                                        WHERE vp.trip_id = '$trip_id' AND vp.status = 'Active'  AND vp.id = '".$_SESSION['vehicle']."'
                                                        ORDER BY vp.price ASC"; // Low to high price
                                                        

                                                    $vehicle_result = $conn->query($vehicle_sql);
                                                    if ($vehicle_result->num_rows > 0) {
                                                        while ($vehicle = $vehicle_result->fetch_assoc()) {
                                                            // Check if vehicle image is available; use a default icon if not
                                                            $vehicle_image = !empty($vehicle['banner']) ? 'https://work.prcptnvt.site/trip24/uploaded_images/' . $vehicle['banner'] : 'https://example.com/default-vehicle-icon.png';
                                                    ?>
                                                            <!-- Vehicle details row -->
                                                            <div class="d-flex justify-content-between align-items-center mb-3 p-3 border rounded">
                                                                <div class="d-flex align-items-center col-lg-6">
                                                                    <img src="<?= $vehicle_image; ?>" alt="<?= $vehicle['name']; ?>" class="me-3" style="width: 50px; height: 50px; border-radius: 50%;">
                                                                    <span class="font-weight-bold"><?= $vehicle['name']; ?></span>
                                                                </div>
                                                                <div class="col-lg-6 text-end">
                                                                    <span class="font-size-18 text-success"><i class="bi bi-currency-rupee"></i> <?= $vehicle['price']; ?></span>
                                                                </div>
                                                            </div>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-single-panel mb-5">
                                            <h4 class="font-size-30 font-weight-semi-bold mb-3">Highlights</h4>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul class="list-items">
                                                        <li><i class="bi bi-geo-alt-fill"></i> Pickup Location: <?= $pickup_location; ?></li>
                                                        <li>
                                                            <i class="bi bi-envelope"></i>
                                                            <a href="mailto:<?= $service_email; ?>">Helpline Email: <?= $service_email; ?></a>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-geo-alt"></i>
                                                            Address: <?= $service_address . ', ' . $service_city . ', ' . $service_state . ' - ' . $service_pincode; ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="list-items">
                                                        <li>
                                                            <i class="bi bi-telephone"></i>
                                                            Helpline Phone: <?= $service_no; ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vehicles & Prices Tab -->
                                <div class="tab-pane fade" id="vehicles" role="tabpanel" aria-labelledby="vehicles-tab">
                                    <div class="listing-single-panel mb-5">
                                        <h4 class="font-size-30 font-weight-semi-bold mb-3">Vehicles & Price</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <?php
                                                // Fetch vehicles and their prices from the database
                                                $vehicle_sql = "SELECT v.*, vp.price FROM service_trip_vehicles AS v
                                                    JOIN service_trip_vehicles_price AS vp ON v.id = vp.vehicle_id
                                                    WHERE vp.trip_id = '$trip_id' AND vp.status = 'Active'
                                                    ORDER BY vp.price ASC"; // Low to high price

                                                $vehicle_result = $conn->query($vehicle_sql);
                                                if ($vehicle_result->num_rows > 0) {
                                                    while ($vehicle = $vehicle_result->fetch_assoc()) {
                                                      //  $v_name=$vehicle["name"];
                                                        // Check if vehicle image is available; use a default icon if not
                                                        $vehicle_image = !empty($vehicle['banner']) ? 'https://work.prcptnvt.site/trip24/uploaded_images/' . $vehicle['banner'] : 'https://example.com/default-vehicle-icon.png';
                                                ?>
                                                        <!-- Vehicle details row -->
                                                        <div class="d-flex justify-content-between align-items-center mb-3 p-3 border rounded">
                                                            <div class="d-flex align-items-center col-lg-6">
                                                                <img src="<?= $vehicle_image; ?>" alt="<?= $vehicle['name']; ?>" class="me-3" style="width: 50px; height: 50px; border-radius: 50%;">
                                                                <span class="font-weight-bold"><?= $vehicle['name']; ?></span>
                                                            </div>
                                                            <div class="col-lg-6 text-end">
                                                                <span class="font-size-18 text-success"><i class="bi bi-currency-rupee"></i> <?= $vehicle['price']; ?></span>
                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Section -->
                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Booking Summary</h4>
                            <hr class="border-top-gray my-0">
                            <?php
                            // Ensure pickup_date and dropoff_date are set in the session
                            $tour_date = $_SESSION['tour_date'] ?? null;
                            
                            //$dropoff_date = $_SESSION['dropoff_date'] ?? null;


                /*            $total_days = 0; // Default to 0 days if dates are invalid
                            if ($pickup_date && $dropoff_date) {
                                // Calculate total days
                                $pickup = new DateTime($pickup_date);
                                $dropoff = new DateTime($dropoff_date);
                                $interval = $pickup->diff($dropoff);
                                $total_days = max($interval->days, 1); // Ensure at least 1 day
                            }*/
                            ?>

                            <ul class="list-items mt-3 mb-3">
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Tour Date</span> <?= htmlspecialchars($tour_date); ?>
                                </li>
                                <!--<li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Dropoff Date</span> <= htmlspecialchars($dropoff_date); ?>
                                </li>-->
            <!--                    <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Booking Duration</span> <= $total_days; ?> days
                                </li>-->
                                
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Vehicles</span>
                                                <?php
                                                    // Fetch vehicles and their prices from the database
                                                    $vehicle_sql = "SELECT v.*, vp.price FROM service_trip_vehicles AS v
                                                        JOIN service_trip_vehicles_price AS vp ON v.id = vp.vehicle_id
                                                        
                                                        WHERE vp.trip_id = '$trip_id' AND vp.status = 'Active'  AND vp.id = '".$_SESSION['vehicle']."'
                                                        ORDER BY vp.price ASC"; // Low to high price
                                                        

                                                    $vehicle_result = $conn->query($vehicle_sql);
                                                    if ($vehicle_result->num_rows > 0) {
                                                        while ($vehicle = $vehicle_result->fetch_assoc()) {
                                                            // Check if vehicle image is available; use a default icon if not
                                                    echo $vehicle["name"];}}?>
                                </li>
                                
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Cost Vehicle</span> ₹ <?= $price; ?>
                                </li>
                                
                            <!----    <php
                                // Calculate total cost
                                $no_of_bikes = $_SESSION['no_of_bike'] ?? 1; // Default to 1 if not set
                                $price = $price ?? 0; // Default to 0 if not set
                                $total_cost = $price; // Adjust for total days
                                ?>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Total Bike Cost</span> ₹ <?= $price; ?> days
                                </li>--->
                                <li>
                                    <hr class="border-top-gray">
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Total Cost</span>
                                    <span class="text-success">₹ <?= number_format($price, 2); ?></span>
                                </li>
                            </ul>

                            <form method="post">
                                <input type="hidden" name="user_id" value="<?= htmlspecialchars($_SESSION['userid']); ?>" />
                                <input type="hidden" name="trip_id" value="<?= $trips_idss; ?>" />
                                <input type="hidden" name="vehicle" value="<?= htmlspecialchars($_SESSION['vehicle']); ?>" />
                                <input type="hidden" name="tour_date" value="<?= htmlspecialchars($tour_date); ?>" />
                                <input type="hidden" name="pickup_location" value="<?= htmlspecialchars($_SESSION['pickup_location'] ?? ''); ?>" />
                            
                                <input type="hidden" name="status" value="Pending" />
                                
                                <input type="hidden" name="total_cost" value="<?= htmlspecialchars($price); ?>" />

                                <button type="submit" name="confirmbooking" class="theme-btn border-0 w-100">
                                    Confirm Booking
                                </button>
                            </form>

                        </div>
                        <!-- end card-body -->
                    </div>
                </div>

            </div>
    </section>


    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
    <!-- end modal -->
    <?php
    include("../footer.php");
    ?>
    <script>
        // Initialize Flatpickr
        flatpickr("#custom-date-picker", {
            dateFormat: "Y-m-d",
            minDate: "today",
            enableTime: false
        });
    </script>
    <!-- Date picker for custom date format -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Flatpickr with dynamic minDate (greater than current date & time)
            flatpickr("#date-time-picker", {
                enableTime: true, // Enable time selection
                dateFormat: "d/m/Y H:i", // Format: DD/MM/YYYY HH:MM
                minDate: new Date(), // Set minimum date to current date and time
                time_24hr: true // Use 24-hour format
            });
        });
    </script>
    <!-- Template JS Files -->
    <script src="https://work.prcptnvt.site/trip24/js/jquery-3.7.1.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/bootstrap.bundle.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/select2.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/owl.carousel.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/jquery.lazy.min.js"></script>
    <!-- <script src="https://work.prcptnvt.site/trip24/js/jquery.fancybox.min.js"></script> -->
    <!-- Start google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_my4aX1ULOXNZcIxmpBnJmVF7U544p2k"></script>
    <script src="https://work.prcptnvt.site/trip24/js/maps.js"></script>
    <!-- End google map -->
    <script src="https://work.prcptnvt.site/trip24/js/jquery.MultiFile.min.js"></script>
    <!-- Start Date range picker -->
    <script src="https://work.prcptnvt.site/trip24/js/moment.min.js"></script>
    <!-- <script src="https://work.prcptnvt.site/trip24/js/daterangepicker.min.js"></script> -->
    <!-- end Date range picker -->
    <script src="https://work.prcptnvt.site/trip24/js/rating-script.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/main.js"></script>
</body>

</html>
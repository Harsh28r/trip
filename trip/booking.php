<?php

session_start();

error_reporting(0);

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="author" content="trip24" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Trip Booking - Trip24</title>

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
        .form-icon {

            top: 48px !important;

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

    // Database connection

    require_once("../tr24conn.php");



    // Get parameters from the URL

    if (isset($_GET['id'])) {



        $trip_id = $_GET['id'];



        // Now you can use $trip_id and other parameters as needed

    } else {

        // Handle the case where parameters are missing

        echo "Missing trip details.";
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

    <?php

    include("../header.php");

    ?>

    <style>
        .bread-bg {

            background-image: url(https://work.prcptnvt.site/trip24/img/Manali-Taxi-Service-343543.jpg);

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

                    <div class="sidebar">



                        <form method="post" action="https://work.prcptnvt.site/trip24/trip/checkout.php">

                            <div class="card">

                                <div class="card-body">

                                    <h4 class="card-title mb-3">Booking</h4>

                                    <p class="text-danger mb-3">

                                        <?= !empty($_SESSION['error']) ? $_SESSION['error'] : '' ?>

                                    </p>



                                    <input type="hidden" name="trip_id" value="<?= $trip_id; ?>">

                                    <div class="form-group">

                                        <label for="date-time-picker">Tour Date</label>

                                        <span class="fal fa-calendar-alt form-icon"></span>

                                        <input

                                            name="tour_date"

                                            id="tour-date"

                                            class="form-control form--control pickup-date custom-date-picker"

                                            type="text"

                                            placeholder="Select Tour Date"

                                            required />

                                    </div>

                                    <div class="form-group">

                                        <label for="date-time-picker">Choose Vehicle</label>

                                        <span class="fal fa-car-alt form-icon"></span>

                                        <select class="form-control form--control" name="vehicle">

                                            <option selected disabled>Select Vehicle</option>

                                            <?php

                                            // Fetch vehicles and their prices from the database

                                            $vehicle_sql = "SELECT v.*, vp.price , vp.id AS vp_id FROM service_trip_vehicles AS v

                                         JOIN service_trip_vehicles_price AS vp ON v.id = vp.vehicle_id

                                         WHERE vp.trip_id = '$trip_id' AND vp.status = 'Active'";

                                            $vehicle_result = $conn->query($vehicle_sql);

                                            if ($vehicle_result->num_rows > 0) {

                                                while ($vehicle = $vehicle_result->fetch_assoc()) {

                                            ?>

                                                    <option value="<?= $vehicle['vp_id']; ?>"><?= $vehicle['name']; ?></option>

                                            <?php

                                                }
                                            }

                                            ?>



                                        </select>

                                    </div>

                                    <button name="submit" class="theme-btn border-0 w-100" type="submit">Book Now</button>

                                </div>

                                <!-- end card-body -->

                            </div>

                        </form>



                        <!-- Sidebar Section: Updated Vendor Details with Business Information -->



                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title mb-3">Business Details</h4>

                                <div class="media mt-4">

                                    <img src="https://work.prcptnvt.site/trip24/images/small-team1.jpg" alt="avatar" class="user-avatar flex-shrink-0 me-3" />

                                    <div class="media-body align-self-center">

                                        <h4 class="font-size-18 font-weight-semi-bold mb-1">

                                            <?= $service_name; ?> <!-- Updated to business name -->

                                        </h4>

                                        <p class="font-size-14">Business Helpline: <?= $service_no; ?></p>

                                    </div>

                                </div>

                                <ul class="list-items mt-4">

                                    <li>

                                        <span class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>

                                        <a href="mailto:<?= $service_email; ?>"><?= $service_email; ?></a>

                                    </li>

                                    <li>

                                        <span class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>

                                        <?= $service_no; ?> <!-- Updated to show business phone number -->

                                    </li>

                                    <li>

                                        <span class="fal fa-map-marker-alt icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>

                                        <?= $service_address . ', ' . $service_city . ', ' . $service_state . ' - ' . $service_pincode; ?>

                                    </li>

                                </ul>

                            </div>

                        </div>





                    </div>

                </div>

                <h4 class="font-size-25 font-weight-semi-bold">People Also View</h4>

                <div class="card-carousel owl-carousel owl-theme mt-4 mx-lg-n2">

                    <?php

                    $query = "SELECT * FROM service_trip ORDER BY trip_id DESC LIMIT 10";

                    $result = $conn->query($query);



                    // Display trips

                    if ($result->num_rows > 0) {

                        while ($trip = $result->fetch_assoc()) {

                            echo '<div class="card">';



                            // Display the trip image

                            $trip_image = !empty($trip['banner']) ? 'https://work.prcptnvt.site/trip24/uploaded_images/' . htmlspecialchars($trip['banner']) : 'https://example.com/default-trip-image.png';

                            echo '    <img src="' . $trip_image . '" class="card-img-top" alt="' . htmlspecialchars($trip['package_name']) . '" style="height:200px; object-fit:cover;">';



                            // Card body containing trip details

                            echo '    <div class="card-body">';

                            echo '        <h5 class="card-title">';

                            echo '            <i class="fas fa-map-signs"></i> ' . htmlspecialchars($trip['package_name']); // Trip package name with an icon

                            echo '        </h5>';

                            echo '        <p class="card-text">';

                            echo '            <i class="fas fa-clock"></i> Duration: ' . htmlspecialchars($trip['duration']) . ' days'; // Duration with icon

                            echo '        </p>';

                            echo '        <p class="card-text">';

                            echo '            <i class="fas fa-map-marker-alt"></i> Pickup at: ' . htmlspecialchars($trip['pickup_location']); // Pickup location with icon

                            echo '        </p>';



                            // Button group with "View Details" and "Book Now" buttons

                            echo '        <div class="d-flex justify-content-between mt-3">';



                            // Correct SEO-friendly URL for trip details

                            $seoFriendlyUrl = 'https://work.prcptnvt.site/trip24/trip/booking/' . str_replace(" ", "-", $trip['package_name']) . '/' . htmlspecialchars($trip['trip_id']);



                            // View Details button

                            echo '<a href="' . $seoFriendlyUrl . '" class="btn btn-info btn-sm">';

                            echo '    <i class="fas fa-info-circle"></i> View Details';

                            echo '</a>';



                            // Book Now button

                            echo '            <a href="' . $seoFriendlyUrl . '" class="btn btn-success btn-sm">';

                            echo '                Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i>';

                            echo '            </a>';



                            echo '        </div>'; // End of button group

                            echo '    </div>'; // End of card body

                            echo '</div>'; // End of card

                        }
                    } else {

                        echo '<div class="col-12"><p>No trips found.</p></div>';
                    }

                    ?>

                </div>



            </div>

    </section>



    <!-- start back-to-top -->

    <div id="back-to-top">

        <i class="fal fa-angle-up" title="Go top"></i>

    </div>

    <!-- end back-to-top -->

    <!-- end modal -->

    <?php

    include("../footer.php");

    ?>

    <!-- Date picker for custom date format -->

    <script>
        // Initialize Flatpickr for Pickup Date

        flatpickr("#tour-date", {

            dateFormat: "Y-m-d",

            minDate: "today",

            enableTime: false,

            onChange: function(selectedDates, dateStr) {

                const dropoffPicker = document.querySelector("#dropoff-date")._flatpickr;

                // Update the minDate for dropoff date picker

                dropoffPicker.set("minDate", dateStr);

            }

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
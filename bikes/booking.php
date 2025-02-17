<?php
session_start();
if (empty($_SESSION['error'])) {
    $_SESSION['error'] = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bike On Rent Details - Trip24</title>
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
    // Get parameters from the URL
    if (isset($_GET['bike_brand'], $_GET['bike_model'], $_GET['pickup_location'], $_GET['bike_id'])) {
        $bikeBrand = $_GET['bike_brand'];
        $bikeModel = $_GET['bike_model'];
        $pickupLocation = $_GET['pickup_location'];
        echo $bike_id = $_GET['bike_id'];

        // Now you can use $bikeId and other parameters as needed
    } else {
        // Handle the case where parameters are missing
        echo "Missing bike details.";
    }
    // Fetch Bike ID from the GET request
    // if (!empty($_GET['id'])) {
    //     $bike_id = mysqli_real_escape_string($conn, $_GET['id']);
    // } else {
    //     die("Access Denied.");
    // }

    // Fetch `vendor_uid` and bike details from `service_bikes` table
    $bike_sql = "SELECT * FROM service_bikes WHERE bike_id = '$bike_id'";
    $bike_result = $conn->query($bike_sql);

    if ($bike_result->num_rows > 0) {
        // Fetch bike details
        $bike = $bike_result->fetch_assoc();

        // Extract bike details
        $vendor_uid = $bike['vendor_uid'];
        $brand = $bike['brand'];
        $model = $bike['model'];
        $capacity = $bike['capacity'];
        $pickup_location = $bike['pickup_location'];
        $price = $bike['price'];
        $unit = $bike['unit'];
        $amenities = explode(',', $bike['amenities']);
        $banner = $bike['banner'];
        $year = $bike['year']; // Manufacturing year
    } else {
        echo "No details found for this bike.";
        die();
    }

    // Fetch vendor service details from `vendor_service` table using `vendor_uid` and `service_type = 'Bike'`
    $service_sql = "SELECT * FROM vendor_service WHERE vendor_uid = '$vendor_uid' AND service_type = 'Bike'";
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
    $gallery_sql = "SELECT image FROM service_galleries WHERE service_type = 'Bike' AND service_id = '$bike_id' AND status = 'active'";
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
                <h2 class="sec__title text-white mb-3"><?= $brand . " - " . $model . " (" . $capacity . ")"; ?></h2>
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
                                    <img src="https://work.prcptnvt.site/trip24/uploaded_images/<?= $banner; ?>" alt="Bike Banner Image" style="max-width:65%;">
                                </div>

                                <!-- Display additional images from the gallery -->
                                <?php foreach ($gallery_images as $image) : ?>
                                    <div class="gallery-item">
                                        <img src="https://work.prcptnvt.site/trip24/uploaded_images/gallery/<?= $image; ?>" alt="Gallery Image" style="max-width:65%; ">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Description & Specifications Tabs -->
                        <div class="dashboard-nav d-flex flex-wrap align-items-center justify-content-between">
                            <ul class="nav nav-tabs my-tabs my-tabs-2 justify-content-center my-1" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                        <i class="fal fa-list me-1 font-size-14"></i> Description
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="specification-tab" data-bs-toggle="tab" href="#specification" role="tab" aria-controls="specification" aria-selected="false" tabindex="-1">
                                        <i class="fal fa-cog me-1 font-size-14"></i> Specification
                                    </a>
                                </li>
                            </ul>
                            <div class="my-1">
                                <span class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium me-1">
                                    <i class="bi bi-geo-alt-fill"></i>Pickup At: <?= $pickup_location; ?>
                                </span>
                                <span class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium">
                                    <i class="bi bi-currency-rupee"></i> <?= $price . " / " . $unit; ?>
                                </span>
                            </div>
                        </div>

                        <div class="container">
                            <div class="tab-content mt-4" id="myTabContent">
                                <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="row">
                                        <div class="listing-single-panel mb-5">
                                            <h4 class="font-size-30 font-weight-semi-bold mb-3"><?= $brand . " - " . $model . " (" . $capacity . ")"; ?></h4>
                                            <p>Amenities: <?= implode(', ', $amenities); ?></p>
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
                                                        <li><i class="bi bi-currency-rupee"></i> Rent: <?= $price . " / " . $unit; ?></li>
                                                        <li>
                                                            <i class="bi bi-telephone"></i>
                                                            Helpline Phone: <?= $service_no; ?> <!-- Updated to show business phone number -->
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specifications Tab -->
                                <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="font-size-24 font-weight-semi-bold mb-4">Bike Specifications</h4>
                                            <ul class="list-items">
                                                <li>Brand Name: <?= $brand; ?></li>
                                                <li>Model: <?= $model; ?></li>
                                                <li>Engine Capacity: <?= $capacity; ?></li>
                                                <li>Manufacturing Year: <?= $year; ?></li>
                                            </ul>
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
                        <?php

                        ?>
                        <form method="post" action="../checkout">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Booking</h4>
                                    <p class="text-danger mb-3">
                                        <?= $_SESSION['error']; ?>
                                    </p>
                                    <input type="hidden" name="bike_id" value="<?= $bike_id; ?>">
                                    <div class="form-group">
                                        <span class="fas fa-calendar-alt form-icon"></span>
                                        <input
                                            name="pickup_date"
                                            id="pickup-date"
                                            class="form-control form--control pickup-date custom-date-picker"
                                            type="text"
                                            placeholder="Pick-up Date"
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <span class="fas fa-calendar-alt form-icon"></span>
                                        <input
                                            name="dropoff_date"
                                            id="dropoff-date"
                                            class="form-control form--control dropoff-date custom-date-picker"
                                            type="text"
                                            placeholder="Drop-off Date"
                                            required />
                                    </div>

                                    <div class="form-group">
                                        <span class="fas fa-motorcycle form-icon"></span>
                                        <input
                                            name="no_of_bike"
                                            class="form-control form--control"
                                            type="number"
                                            placeholder="No. of Bikes"
                                            min="1"
                                            max="20"
                                            step="1"
                                            oninput="validateBikeInput(this)"
                                            required />
                                    </div>

                                    <!-- end quantity-wrap -->
                                    <button name="submit" class="theme-btn border-0 w-100" type="submit">Book Now</button>
                                </div>
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
                    $query = "SELECT * FROM service_bikes ORDER BY bike_id DESC LIMIT 10";
                    $result = $conn->query($query);

                    // Display bikes
                    if ($result->num_rows > 0) {
                        while ($bike = $result->fetch_assoc()) {

                            echo '    <div class="card">';

                            // Display the bike image
                            echo '        <img src="https://work.prcptnvt.site/trip24/uploaded_images/' . htmlspecialchars($bike['banner']) . '" class="card-img-top" alt="' . htmlspecialchars($bike['model']) . '"  style="height:200px; object-fit:cover;">';

                            // Card body containing bike details
                            echo '        <div class="card-body">';
                            echo '            <h5 class="card-title">';
                            echo '                <i class="fas fa-motorcycle"></i> ' . htmlspecialchars($bike['brand'] . " " . $bike['model']); // Bike brand and model with an icon
                            echo '            </h5>';
                            echo '            <p class="card-text">';
                            echo '                <i class="fas fa-users"></i> Capacity: ' . htmlspecialchars($bike['capacity']) . ' persons'; // Capacity with icon
                            echo '            </p>';
                            echo '            <p class="card-text">';
                            echo '                <i class="fas fa-rupee-sign"></i> Price: ' . htmlspecialchars($bike['price'] . "/" . $bike['unit']); // Price with icon
                            echo '            </p>';
                            echo '            <p class="card-text">';
                            echo '                <i class="fas fa-map-marker-alt"></i> Pickup at: ' . htmlspecialchars($bike['pickup_location']); // Location with icon
                            echo '            </p>';

                            // Button group with "View Details" and "Book Now" buttons
                            echo '            <div class="d-flex justify-content-between mt-3">';

                            // View Details button
                            $seoFriendlyUrl = '' . str_replace(" ", "-", $bike['brand']) . '-' .
                                str_replace(" ", "-", $bike['model']) . '-' .
                                str_replace(" ", "-", $bike['pickup_location']) . '-' .
                                htmlspecialchars($bike['bike_id']);
                            echo '<a href="' . $seoFriendlyUrl . '" class="btn btn-info btn-sm">';
                            echo '    <i class="fas fa-info-circle"></i> View Details';
                            echo '</a>';



                            // Book Now button
                            echo '                <a href="' . $seoFriendlyUrl . '" class="btn btn-success btn-sm">';
                            echo '              Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i>';
                            echo '                </a>';

                            echo '            </div>'; // End of button group
                            echo '        </div>'; // End of card body
                            echo '    </div>'; // End of card


                        }
                    } else {
                        echo '<div class="col-12"><p>No bikes found.</p></div>';
                    }
                    ?>
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

    <!-- ==================================== -->
    <script>
        // Initialize Flatpickr for Pickup Date
        flatpickr("#pickup-date", {
            dateFormat: "Y-m-d",
            minDate: "today",
            enableTime: false,
            onChange: function(selectedDates, dateStr) {
                const dropoffPicker = document.querySelector("#dropoff-date")._flatpickr;
                // Update the minDate for dropoff date picker
                dropoffPicker.set("minDate", dateStr);
            }
        });

        // Initialize Flatpickr for Dropoff Date
        flatpickr("#dropoff-date", {
            dateFormat: "Y-m-d",
            minDate: "today",
            enableTime: false
        });

        // ==================
        function validateBikeInput(input) {
            // Remove anything that is not a digit (0-9)
            input.value = input.value.replace(/[^0-9]/g, '');

            // Ensure value stays within range
            if (input.value > 20) {
                input.value = 20; // Cap at max
            }
            if (input.value < 1 && input.value !== "") {
                input.value = 1; // Reset to minimum if less than 1
            }
        }
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
<?
$_SESSION['error'] = "";
?>

</html>
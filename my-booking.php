<?php
session_start();
include('conn.php'); // Include database connection

// Check if user is logged in
if (empty($_SESSION['useremail'])) {
    // Store the current page URL in session to redirect after login
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
    // Redirect to login page
    header("Location: ../login");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My Booking</title>
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
    include("header.php");
    ?>


    <style>
        .bread-bg {
            background-image: url(https://png.pngtree.com/thumb_back/fw800/background/20231006/pngtree-unique-3d-render-depicting-winter-travel-and-sports-image_13577446.png);
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
                <h2 class="sec__title text-dark mb-3">My Booking</h2>
            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <section class="top-author padding-top-60px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card hover-y">
                        <div class="card-body">
                            <div class="media mb-4">
                                <div class="media-body align-self-center">
                                    <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                        Volvo Bus Ticket
                                    </h4>
                                    <p class="font-size-15">Book your bus tickets to popular destinations. Safe and comfortable travel options available.</p>
                                </div>
                            </div>

                            <button class="theme-btn border-0 theme-btn-gray w-100">
                                <i class="fal fa-list me-2"></i>View all booking
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card hover-y">
                        <div class="card-body">
                            <div class="media mb-4">
                                <div class="media-body align-self-center">
                                    <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                        Hotels
                                    </h4>
                                    <p class="font-size-15">Find the best hotel deals in top locations. Comfortable stays for every budget.</p>
                                </div>
                            </div>

                            <button class="theme-btn border-0 theme-btn-gray w-100">
                                <i class="fal fa-list me-2"></i>View all booking
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card hover-y">
                        <div class="card-body">
                            <div class="media mb-4">
                                <div class="media-body align-self-center">
                                    <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                        Trip
                                    </h4>
                                    <p class="font-size-15">Plan your next adventure with our curated trips to stunning locations.</p>
                                </div>
                            </div>

                            <button class="theme-btn border-0 theme-btn-gray w-100">
                                <i class="fal fa-list me-2"></i>View all booking
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card hover-y">
                        <div class="card-body">
                            <div class="media mb-4">
                                <div class="media-body align-self-center">
                                    <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                        Bike On Rent
                                    </h4>
                                    <p class="font-size-15">Rent bikes for a day, weekend, or longer. Explore the city with ease and freedom.</p>
                                </div>
                            </div>

                            <a href="bikes/all-booking" class="theme-btn border-0 theme-btn-gray w-100">
                                <i class="fal fa-list me-2"></i>View all booking
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card hover-y">
                        <div class="card-body">
                            <div class="media mb-4">
                                <div class="media-body align-self-center">
                                    <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                        Activities
                                    </h4>
                                    <p class="font-size-15">Book exciting activities like city tours, adventures, and cultural experiences.</p>
                                </div>
                            </div>

                            <a href="activity/all-activity-bookings.php" class="theme-btn border-0 theme-btn-gray w-100">
                                <i class="fal fa-list me-2"></i>View all booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end row -->
        </div>
        <!-- end container -->
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
    include("footer.php");
    ?>

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
<?php
session_start();
include('../tr24conn.php'); // Include database connection


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Activities Booking</title>
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

        .activity-type {
            font-size: 12px;
            border-radius: 5px;
            background-color: #cde5ff;
            color: #000000;
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
    <style>
        .bread-bg {
            background-image: url(https://work.perceptionvita.in/trip24ui/img/banner.jpg);
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
                <h2 class="sec__title mb-3 text-dark">Activity Bookings</h2>
            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <?php
    $user_id = $_SESSION['userid'];
    $query = "SELECT * FROM `activity_booking` WHERE `user_id` = '$user_id' ORDER BY `request_id` DESC";
    $run = mysqli_query($conn, $query);

    ?>
    <section class="top-author padding-top-60px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($run)) {
                    $query2 = "SELECT `name`, `price`, `activity_type` FROM `service_activities` WHERE `activity_id` = '$row[activity_id]'";
                    $run2 = mysqli_query($conn, $query2);
                    $activity_row = mysqli_fetch_assoc($run2);
                ?>
                    <div class="col-lg-4">
                        <div class="card hover-y">
                            <div class="card-body">
                                <div class="media mb-4 position-relative">
                                    <div class="media-body align-self-center">
                                        <div class="d-flex">
                                            <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                                <?= $activity_row['name']; ?>
                                            </h4>
                                            <!-- Removed activity_type here, we'll place it in the top-right corner -->
                                        </div>

                                        <small>Booked On : <?= $row['booking_time']; ?></small>
                                        <p>Booking ID : TR24ACT-<?= $row['request_id']; ?></p>
                                        <p>Tour Date : <?= $row['tour_date']; ?></p>
                                    </div>
                                    <!-- Activity type in the top-right corner -->
                                    <div class="activity-type position-absolute top-0 end-0 px-2 py-1">
                                        <?= $activity_row['activity_type']; ?>
                                    </div>
                                </div>
                                <a href="invoice.php?request_id=<?= $row['request_id']; ?>" class="theme-btn border-0 theme-btn-gray w-100">
                                    <i class="fas fa-file-invoice me-2"></i>View Invoice
                                </a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
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
    include("../footer.php");
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
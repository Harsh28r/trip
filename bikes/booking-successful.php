<?php
session_start();
include('conn.php'); // Include database connection

// Check if user is logged in
if (empty($_SESSION['bike_request_id'])) {
    // Redirect to login page
    echo "<script>window.location.href = '../index'; </script>";
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
    <title>Booking Successful - Trip24</title>
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
    <!-- Include jsPDF and html2pdf.js libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>


</head>

<body style="background-color: #FAFAFA;">

    <style>
        /* CSS for .mobile-none to hide on mobile devices */
        @media (max-width: 768px) {

            .mobile-none {
                display: none !important;
            }
        }
    </style>
    <!-- start per-loader -->

    <!-- end per-loader -->
    <?php
    include("../header.php");

    // Fetching booking detail using request id stored in session
    $booking_id = $_SESSION['bike_request_id'];

    // Prevent SQL injection by using prepared statements
    $query = "SELECT * FROM `bike_booking` WHERE request_id = '$booking_id'";
    $run = mysqli_query($conn, $query);
    $book_row = mysqli_fetch_assoc($run);

    $bike_id = $book_row['bike_id'];

    // Query to fetch bike detail based on bike id from booking data --------------------
    $query2 = "SELECT * FROM `service_bikes` WHERE `bike_id` = '$bike_id'";
    $run2 = mysqli_query($conn, $query2);
    $bike_row = mysqli_fetch_assoc($run2);

    $vendor_uid = $bike_row['vendor_uid'];

    // Query to fetch Vendor detail based on vendor_uid from bike data --------------------
    $query3 = "SELECT * FROM `vendor_service` WHERE `vendor_uid` = '$vendor_uid' AND service_type = 'Bike'";
    $run3 = mysqli_query($conn, $query3);

    $vendor_row = mysqli_fetch_assoc($run3);

    // $vendor_row['service_name'];

    // Query to fetch user detail based on user_id from booking OR Session data --------------------
    $user_id = $_SESSION['userid'];
    $query4 = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
    $run4 = mysqli_query($conn, $query4);

    $user_row = mysqli_fetch_assoc($run4);

    // $user_row['email'];
    ?>

    <!-- fetch using booking id and need to join user, vendor, bike-booking -->
    <section class="booking-area section-padding text-center" style="margin-top: 3rem;">
        <div class="container">
            <span class="fal fa-check-circle font-size-100 text-success"></span>
            <h2 class="sec__title mt-4 mb-3">Thanks for your booking!</h2>
            <p class="sec__desc mb-4">
                You'll receive a confirmation email at <?= $user_row['email']; ?>
            </p>
            <!-- <a href="invoice.html" class="theme-btn theme-btn-gray">View Invoice</a> -->
        </div>
        <!-- end container -->
    </section>
    <section class="invoice-area">
        <div class="container">
            <div class="col-lg-10 mx-auto">
                <div class="card" id="print-card">
                    <div class="card-body">
                        <!-- <h2 class="font-size-24 font-weight-semi-bold text-center mb-5">
                            Thank you for your order!
                        </h2> -->
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- <img src="images/logo2.png" alt="logo"> -->
                            </div>
                            <!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <ul class="invoice-details text-end">
                                    <li><strong class="text-black">Booking ID:</strong> TR24BK-<?= $_SESSION['bike_request_id'] ?></li>
                                    <li>
                                        <strong class="text-black">Date:</strong> <?= $book_row['booking_time']; ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- end col-lg-6 -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="font-size-30 font-weight-semi-bold my-4">
                                    Invoice
                                </h2>
                            </div>
                            <!-- end col-lg-12 -->
                            <div class="col-lg-6">
                                <div class="invoice-info">
                                    <!-- <strong class="text-black font-weight-semi-bold d-block pb-1">Author:</strong> -->
                                    <ul class="invoice-details">
                                        <li><?= $vendor_row['service_name']; ?></li>
                                        <li><?= $vendor_row['service_address'] . ', ' . $vendor_row['service_city']; ?>
                                        </li>
                                        <li><?= $vendor_row['service_pincode']; ?></li>
                                        <li><?= $vendor_row['service_email']; ?></li>

                                    </ul>
                                </div>
                                <!-- end invoice-info -->
                            </div>
                            <!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="invoice-info">
                                    <strong class="text-black font-weight-semi-bold d-block pb-1">To:</strong>
                                    <ul class="invoice-details">
                                        <li><?= $user_row['name']; ?></li>
                                        <li><?= $user_row['email']; ?></li>
                                        <li><?= $user_row['phone']; ?></li>
                                        <li>Pickup Date - <?= $book_row['start_date'] ?></li>
                                        <li>Dropoff Date - <?= $book_row['end_date'] ?></li>
                                        <li>Pickup Location - <?= $bike_row['pickup_location'] ?></li>
                                    </ul>
                                </div>
                                <!-- end invoice-info -->
                            </div>
                            <!-- end col-lg-6 -->
                        </div>
                        <?php
                        $start_date = new DateTime($book_row['start_date']);
                        $end_date = new DateTime($book_row['end_date']);
                        $interval = $start_date->diff($end_date);
                        $no_of_days = $interval->days === 0 ? 1 : $interval->days;
                        ?>
                        <!-- end row -->
                        <div class="invoice-table table-responsive mt-5">
                            <table class="table table-bordered text-black">
                                <thead>
                                    <tr>
                                        <th class="font-weight-semi-bold">Bike Detail</th>
                                        <th class="font-weight-semi-bold">Quantity</th>
                                        <th class="font-weight-semi-bold">Price per bike</th>
                                        <th class="font-weight-semi-bold">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $bike_row['brand'] . " " . $bike_row['model'] . " " . $bike_row['year'] . " " . $bike_row['capacity'] ?></td>
                                        <td><?= $book_row['no_of_bikes'] ?></td>
                                        <td><?= $bike_row['price'] ?></td>
                                        <td>₹<?= number_format($book_row['no_of_bikes'] * $bike_row['price'], 2) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                        <div class="text-end">
                            <h4 class="font-size-16 ">Subtotal : ₹<?= number_format($book_row['no_of_bikes'] * $bike_row['price']) . " x " . $no_of_days . " days"; ?></h4>
                            <h4 class="font-size-18 font-weight-semi-bold">Total: ₹<?= $book_row['total_cost']; ?></h4>
                            <h4 class="font-size-16 ">Paid Amount: ₹ 0</h4>
                            <h4 class="font-size-16 ">Payable Amount: ₹<?= $book_row['total_cost']; ?></h4>
                            <!-- <p class="font-size-15">Paid via Credit Card</p> -->
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
                <!-- ========= PRINT AND DOWNLOAD BUTTON ========== -->
                <div class="d-flex justify-content-center align-items-center mb-5">
                    <div class="text-center me-3 mobile-none">
                        <a style="cursor: pointer;" id="print-button" class="theme-btn">
                            <i class="far fa-print me-2"></i> Print
                        </a>
                    </div>
                    <div class="text-center">
                        <a style="cursor: pointer;" id="download-button" class="theme-btn">
                            <i class="far fa-download me-2"></i> Download this invoice
                        </a>
                    </div>
                </div>
                <!-- =============================================== -->
            </div>
        </div>
    </section>


    <?php include("../footer.php"); ?>
    <script>
        document.getElementById("print-button").addEventListener("click", function() {
            // Get the content to print
            const printContent = document.getElementById("print-card").outerHTML;

            // Save the original page content
            const originalContent = document.body.innerHTML;

            // Replace the page content with the printable content
            document.body.innerHTML = `
            <html>
                <head>
                    <title>Trip24-Bike-on-rent-invoice</title>
                    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/style.css" />
                    <style>
                        body {
                            font-family: "Work Sans", sans-serif;
                            margin: 20px;
                        }
                        .card {
                            border: 1px solid #ddd;
                            border-radius: 8px;
                            padding: 20px;
                            margin: 20px;
                        }
                        table {
                            width: 100%;
                            border-collapse: collapse;
                            margin-top: 20px;
                        }
                        th, td {
                            border: 1px solid #ddd;
                            padding: 8px;
                            text-align: left;
                        }
                        th {
                            background-color: #f2f2f2;
                            font-weight: bold;
                        }
                        .text-end {
                            text-align: right;
                        }
                        .text-black {
                            color: #000;
                        }
                        ul {
                            list-style: none;
                            padding: 0;
                        }
                        ul li {
                            margin: 5px 0;
                        }
                        h2, h4 {
                            margin: 10px 0;
                        }
                    </style>
                </head>
                <body>${printContent}</body>
            </html>
        `;

            // Trigger the print dialog
            window.print();

            // Restore the original page content after printing
            document.body.innerHTML = originalContent;

            // Rebind JavaScript events (optional, if dynamic elements are affected)
            location.reload();
        });
    </script>
    <script>
        // Trigger the PDF download with margins
        document.getElementById("download-button").addEventListener("click", function() {
            const element = document.getElementById("print-card");

            // Add a wrapper div around the content to simulate margin space
            const wrapper = document.createElement('div');
            wrapper.style.padding = '10mm'; // Adding padding to simulate margins

            // Append the card content inside the wrapper
            wrapper.appendChild(element.cloneNode(true));

            // Options for the PDF download
            const options = {
                filename: 'bike-on-rent-invoice.pdf', // Name of the PDF file
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            // Download the PDF with the added wrapper for margins
            html2pdf().from(wrapper).set(options).save();
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
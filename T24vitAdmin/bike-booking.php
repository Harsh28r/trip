<?php
include("control/universal.php");
include("control/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Bike Booking - Trip-24</title>
    <meta name="description" content="Dashboard - Trip24">
    <meta name="author" content="trip-24.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/css/tables/datatables.min.css">
    <link rel="stylesheet" href="assets/css/tables/buttons.dataTables.min.css">
    <!-- Custom CSS Starts -->
    <link rel="stylesheet" href="assets/css/skin/all-skins.css">
    <link rel="stylesheet" href="assets/css/general/style.css">
    <link rel="stylesheet" href="assets/css/sidebar/side-nav.css">
    <link rel="stylesheet" href="assets/css/fonts/fonts-style.css">
    <link rel="stylesheet" href="assets/css/nanoscroller/nanoscroller.css">
</head>

<body class="sidebar-mini fixed skin-blue">
    <div class="wrapper">
        <?php
        include("header.php");

        include("sidebar.php");
        ?>
        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Bike Booking List
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">View Bike Booking</h6>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Booking ID</th>
                                <th>Vendor ID</th>
                                <th>Cus. No</th>
                                <th>Bike Name</th>
                                <th>Booking Date</th>
                                <th>Pickup Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            // Prevent SQL injection by using prepared statements
                            $logtype = $_SESSION['logtype'];
                            if ($logtype == 'vendor') {
                                $query = "SELECT * FROM `bike_booking`  ORDER BY `request_id` DESC ";
                            } else {
                                $query = "SELECT * FROM `bike_booking`  ORDER BY `request_id` DESC ";
                            }
                            $run = mysqli_query($conn, $query);

                            // $user_row['email'];
                            while ($book_row = mysqli_fetch_assoc($run)) {
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
                                $user_id = $book_row['user_id'];
                                $query4 = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
                                $run4 = mysqli_query($conn, $query4);

                                $user_row = mysqli_fetch_assoc($run4);
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>TR24BK-<?= $book_row['request_id']; ?></td>
                                    <td>
                                        <a href="#"><?= $bike_row['vendor_uid']; ?></a>
                                    </td>
                                    <td><?= $user_row['phone']; ?></td>
                                    <td>
                                        <?= $bike_row['brand'] . " " . $bike_row['model'] . " " . $bike_row['year'] . " " . $bike_row['capacity'] ?></td>
                                    <td><?= $book_row['booking_time']; ?></td>
                                    <td><?= $book_row['start_date']; ?></td>
                                    <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-modal-lg<?= $book_row['request_id']; ?>"><i class="fa fa-eye"></i>

                                        </button>
                                        &nbsp;
                                        <!-- <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button> -->
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-modal-lg<?= $book_row['request_id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        TR24BK-<?= $book_row['request_id'] ?> Detail
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="card" id="print-card">
                                                    <div class="card-body">
                                                        <!-- <h2 class="font-size-24 font-weight-semi-bold text-center mb-5">
                            Thank you for your order!
                        </h2> -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h2 class="font-size-30 font-weight-semi-bold my-4">
                                                                    Invoice
                                                                </h2>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <!-- <img src="images/logo2.png" alt="logo"> -->
                                                            </div>
                                                            <!-- end col-lg-6 -->
                                                            <div class="col-lg-6">
                                                                <ul class="invoice-details text-end" style="list-style: none;">
                                                                    <li><strong class="text-black">Booking ID:</strong> TR24BK-<?= $book_row['request_id'] ?></li>
                                                                    <li>
                                                                        <strong class="text-black">Date:</strong> <?= $book_row['booking_time']; ?>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <!-- end col-lg-12 -->
                                                            <div class="col-lg-6">
                                                                <div class="invoice-info">
                                                                    <strong class="text-black font-weight-semi-bold d-block pb-1">Vendor:</strong>
                                                                    <ul class="invoice-details" style="list-style: none;">
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
                                                                    <ul class="invoice-details" style="list-style: none;">
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
                                                            <div class="bike-details-list">
                                                                <ul class="list-group" style="list-style: none;">
                                                                    <li class="list-group-item d-flex justify-content-between">
                                                                        <span class="font-weight-semi-bold">Bike Detail:</span>
                                                                        <span><?= $bike_row['brand'] . " " . $bike_row['model'] . " " . $bike_row['year'] . " " . $bike_row['capacity'] ?></span>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between">
                                                                        <span class="font-weight-semi-bold">Quantity:</span>
                                                                        <span><?= $book_row['no_of_bikes'] ?></span>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between">
                                                                        <span class="font-weight-semi-bold">Price per bike:</span>
                                                                        <span>₹<?= number_format($bike_row['price'], 2) ?></span>
                                                                    </li>
                                                                    <li class="list-group-item d-flex justify-content-between">
                                                                        <span class="font-weight-semi-bold">Subtotal:</span>
                                                                        <span>₹<?= number_format($book_row['no_of_bikes'] * $bike_row['price'], 2) ?></span>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                        <!-- end table-responsive -->
                                                        <div class="text-end" style="float: right; padding-top: 1rem;">
                                                            <h6 class="font-size-16 ">Subtotal : ₹<?= number_format($book_row['no_of_bikes'] * $bike_row['price']) . " x " . $no_of_days . " days"; ?></h6>
                                                            <h6 class="font-size-18 font-weight-semi-bold">Total: ₹<?= $book_row['total_cost']; ?></h6>
                                                            <h6 class="font-size-16 ">Paid Amount: ₹ 0</h6>
                                                            <h6 class="font-size-16 ">Payable Amount: ₹<?= $book_row['total_cost']; ?></h6>
                                                            <!-- <p class="font-size-15">Paid via Credit Card</p> -->
                                                        </div>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>
                                                <!-- <div class="cardbg">
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Booking Id</span>
                                                            <span class="float-right">TR24BK-<?= $book_row['request_id']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Booking Date</span>
                                                            <span class="float-right"><?= $book_row['booking_time']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Customer Name</span>
                                                            <span class="float-right">Raj Kumar</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Customer Phone</span>
                                                            <span class="float-right">Raj Kumar</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Vendor </span>
                                                            <span class="float-right"><?= $vendor_row['service_name'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Vendor No</span>
                                                            <span class="float-right"><?= $vendor_row['service_no'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Vendor Email</span>
                                                            <span class="float-right"><?= $vendor_row['service_email'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Pickup Date</span>
                                                            <span class="float-right"><?= $book_row['start_date'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Dropoff Date</span>
                                                            <span class="float-right"><?= $book_row['end_date'] ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Fair</span>
                                                            <span class="float-right">Rs <?= $book_row['total_cost'] ?>, Pay at Bike</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress-section">
                                                        <div class="progress-title mb-2">
                                                            <span class="title">Status</span>
                                                            <span class="float-right">Booked</span>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Print</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <!-- Page Content Ends -->
    <!-- <script>
        $('.js__action--print').click(function() {
            window.print();
            return false;
        });
    </script> -->
    <!-- Back to Top Starts -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    <!-- Back to Top Ends -->
    <?php
    include("footer.php");
    ?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/tables/datatables.min.js"></script>
    <script src="assets/js/tables/dataTables.buttons.min.js"></script>
    <script src="assets/js/tables/jszip.min.js"></script>
    <script src="assets/js/tables/pdfmake.min.js"></script>
    <script src="assets/js/tables/vfs_fonts.js"></script>
    <script src="assets/js/tables/buttons.html5.min.js"></script>
    <script src="assets/js/tables/buttons.print.min.js"></script>
    <script src="assets/js/tables/datatable.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
</body>

</html>
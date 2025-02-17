<?php
include("control/universal.php");
include("control/conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Activity Booking - Activity-24</title>
    <meta name="description" content="Dashboard - Activity24">
    <meta name="author" content="Activity-24.com">
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
<style>
    ul{
        list-style-type:none;
    }
</style>
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
                    Activity Booking
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase"> Activity Booking</h6>
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
                                <th>Customer Name</th>
                                <th>Phone </th>
                                <th>Activity Name</th>
                                <th>Vendor</th>
                                <th>Booking Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php      
                    
                            $i = 1;
    // Fetching booking detail using request id stored in session

    // Prevent SQL injection by using prepared statements
    $query = "SELECT * FROM `activity_booking`";
    $run = mysqli_query($conn, $query);

    // Check if any rows are returned
    if (mysqli_num_rows($run) == 0) {
        // If no rows are returned, redirect to the previous page
        echo "<script>window.history.back();</script>";
        exit(); // Make sure to stop further script execution
    }
   while($book_row = mysqli_fetch_assoc($run)){

    $activity_id = $book_row['activity_id'];

    // Query to fetch bike detail based on bike id from booking data --------------------
    $query2 = "SELECT * FROM `service_activities` WHERE `activity_id` = '$activity_id'";
    $run2 = mysqli_query($conn, $query2);
    $activity_row = mysqli_fetch_assoc($run2);

     $vendor_id = $activity_row['vendor_id'];

    // Query to fetch Vendor detail based on vendor_id from bike data --------------------
     $query3 = "SELECT * FROM `vendor_service` WHERE `id` = '$vendor_id' AND service_type = 'Activity'";
    $run3 = mysqli_query($conn, $query3);

    $vendor_row = mysqli_fetch_assoc($run3);

    // Query to fetch user detail based on user_id from booking OR Session data --------------------

                                // Query to fetch user detail based on user_id from booking OR Session data --------------------
                                $user_id = $book_row['user_id'];
    $query4 = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
    $run4 = mysqli_query($conn, $query4);

    $user_row = mysqli_fetch_assoc($run4);

    // $user_row['email'];
    ?>

                            <tr>
                                
                                    <td><?= $i; ?></td>
                                
                                    <td>
                                        <a href="#"><?= $user_row['name']; ?></a>
                                    </td>
                                    <td><?= $user_row['phone']; ?></td>
                                       <td>
                                        <?= $activity_row['name']; ?></td>
                                    <td>
                                        <?= $activity_row['vendor_uid']; ?></td>
                                    <td><?= $book_row['booking_time']; ?></td>
                                
                                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $book_row['request_id']; ?>"><i class="fa fa-eye"></i>
                                        View
                                    </button>
                                    &nbsp;<!--<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>--></td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $book_row['request_id']; ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View Activity Booking Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="cardbg">
                                        <div class="row">
                            <div class="col-lg-6">
                                <!-- <img src="images/logo2.png" alt="logo"> -->
                            </div>
                            <!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <ul class="invoice-details text-end">
                                    <li><strong class="text-black">Booking ID:</strong> TR24ACT-<?=  $book_row['request_id']; ?></li>
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
                                        <li><?= $activity_row['name']; ?></li>
                                        <li><?= $activity_row['pickup_location']; ?></li>
                                        <li><?= $vendor_row['service_name']; ?></li>
                                        <li><?= $vendor_row['service_no']; ?></li>
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
                                        <li>Tour Date - <?= $book_row['tour_date'] ?></li>
                                        <li>Pickup Location - <?= $activity_row['pickup_location'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="invoice-table table-responsive mt-5">
                                          <ul class="list-group" style="list-style: none;">
                    
                    <li class="list-group-item d-flex justify-content-between">
                      <span class="font-weight-semi-bold">Activity Detail</span>
                    
                     <span><?= $activity_row['name']; ?></span>  </li>
                
                    <li class="list-group-item d-flex justify-content-between">
                      <span class="font-weight-semi-bold">No Of Person</span>
                    
                     <span><?= $book_row['no_of_person']; ?></span>  </li>
                     
                     
                    <li class="list-group-item d-flex justify-content-between">
                      <span class="font-weight-semi-bold">Price Per Person</span>
                    
                     <span><?= $activity_row['price']; ?></span>  </li>
                     
                         <li class="list-group-item d-flex justify-content-between">
                      <span class="font-weight-semi-bold">Duration</span>
                    
                     <span><?= $book_row['duration']; ?></span>  </li>
                     
                     
                         <li class="list-group-item d-flex justify-content-between">
                      <span class="font-weight-semi-bold">Subtotal</span>
                    
                     <span>₹<?= $book_row['total_amount'];  ?></span>  </li>
                
                            
                            </ul>
                        </div>
                        <!-- end table-responsive -->
                        <div class="text-end">

                            <!-- <h4 class="font-size-18 font-weight-semi-bold">Total: ₹<?= $book_row['total_cost']; ?></h4> -->
                            <h4 class="font-size-16 ">Paid Amount: ₹ 0</h4>
                            <h4 class="font-size-16 ">Payable Amount: ₹<?= $book_row['total_amount']; ?></h4>
                            <!-- <p class="font-size-15">Paid via Credit Card</p> -->
                        </div>
                
                    <!-- end card-body -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Print</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php $i++;}?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <!-- Page Content Ends -->
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
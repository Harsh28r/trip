<?php include('control/universal.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hotel List - Trip-24</title>
    <meta name="description" content="Hotel Vendor - Trip24">
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
                    Hotel Vendor List
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">All Hotel Vendors </h6>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Vendor UID</th>
                                <th>Hotel Name</th>
                                <th>Phone</th>
                                <!-- <th>Email</th> -->
                                <th>City & District</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        $service_type == 'Hotel';
                        require_once("control/conn.php");
                        $i = 1;
                        if (isset($_GET['main-category'])) {
                            $service_type = mysqli_real_escape_string($conn, $_GET['main-category']);
                            $service_type_vendor = mysqli_query($conn, "SELECT * FROM `vendor_service` WHERE `service_type` = '$service_type'");
                            while ($service_type_vendor_rows = mysqli_fetch_assoc($service_type_vendor)) {
                        ?><tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="#">
                                            <?php echo $vendor_uid = $service_type_vendor_rows['vendor_uid']; ?>
                                    </td>
                                    </a>
                                    <td><?php echo $name = $service_type_vendor_rows['service_name']; ?></td>
                                    <td>+91 <?php echo $service_type_vendor_rows['service_no']; ?></td>
                                    <!-- <td><?php echo $service_type_vendor_rows['service_email']; ?></td> -->
                                    <td><?php echo $service_type_vendor_rows['service_city'] . ", " . $service_type_vendor_rows['service_district']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal<?php echo $service_type_vendor_rows['id']; ?>"><i class="fa fa-eye"></i> View</button>
                                        &nbsp;<button type="button" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Active</button> &nbsp;
                                        <?php
                                        echo '<a href="add-rooms?name=' . strtolower(str_replace(' ', '-', $name)) . '&uid=' . $vendor_uid . '&category=' . $service_type . '&service_id=' . $service_type_vendor_rows['id'] . '"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add Rooms</button></a>';
                                        // if ($service_type == 'Hotel') { 
                                        //     // echo '<a href="hotel-add/'.$service_type.'/' . str_replace(' ', '-', $name) . '/'.$vendor_uid.'"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add Hotel</button></a>';
                                        //     echo '<a href="hotel-add?name=' . str_replace(' ', '-', $name) . '&uid='.$vendor_uid.'&category='.$service_type.'"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add Hotel</button></a>';
                                        // } else if ($service_type == '') {
                                        //     echo '<a href="hotel-add?name=' . $name . '"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add Hotel</button></a>';
                                        // }
                                        ?>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="largeModal<?php echo $service_type_vendor_rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal<?php echo $service_type_vendor_rows['id']; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <center>
                                                    <h5 class="modal-title" id="exampleModalLabel">View Vendor Details</h5>
                                                </center>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Personal Details -->
                                                <?php
                                                $vendor_sql = "SELECT * FROM `vendor` WHERE `uid` = '$vendor_uid'";
                                                $vendor_result = mysqli_query($conn, $vendor_sql);
                                                $vendor_rows = mysqli_fetch_assoc($vendor_result);
                                                ?>
                                                <!-- Personal Details -->
                                                <h6 class="title-inner">Personal Details</h6>
                                                <div class="row">
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label for="name">Full Name</label>
                                                            <input class="form-control input-0" id="name" readonly name="vendor_name" value="<?php echo $vendor_rows['vendor_name']; ?>" placeholder="e.g. - Ramesh Kumar Varma" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label for="father_name">Father's Name</label>
                                                            <input class="form-control input-0" id="father_name" readonly name="father_name" value="<?php echo $vendor_rows['father_name']; ?>" placeholder="e.g. - Mohan Varma" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select class="form-control custom-select input-0" readonly name="gender" id="gender">
                                                                <option value="" disabled>Choose</option>
                                                                <option value="Male" <?php echo $vendor_rows['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                                                                <option value="Female" <?php echo $vendor_rows['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                                                                <option value="Other" <?php echo $vendor_rows['gender'] == 'Other' ? 'selected' : ''; ?>>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label for="aadhar_no">Aadhaar / ID</label>
                                                            <input class="form-control input-0" id="aadhar_no" readonly name="aadhar_no" value="<?php echo $vendor_rows['aadhar_no']; ?>" placeholder="e.g. - 6454218576" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label for="mobNo">Mobile No.</label>
                                                            <input class="form-control input-0" id="mobNo" readonly name="mobile_no" value="<?php echo $vendor_rows['mobile_no']; ?>" placeholder="e.g. - 8150010101" type="number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label for="email">Email Id</label>
                                                            <input class="form-control input-0" id="email" readonly name="email_id" value="<?php echo $vendor_rows['email_id']; ?>" placeholder="e.g. - ramesh123@gmail.com" type="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Business Details -->
                                                <h6 class="title-inner">Business Details</h6>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label for="business_name">Business Name</label>
                                                            <input class="form-control input-0" id="businessName" readonly name="business_name" value="<?php echo $vendor_rows['business_name']; ?>" placeholder="e.g. - Ramesh Enterprises" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="gst">GST/PAN No.</label>
                                                            <input class="form-control input-0" id="gst" readonly name="gst_no" value="<?php echo $vendor_rows['gst_no']; ?>" placeholder="e.g. - BXLP545800121NT" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="registration_date">Registration Date</label>
                                                            <input class="form-control input-0" id="registration_date" readonly name="registration_date" value="<?php echo $vendor_rows['registration_date']; ?>" max="<?php echo date('Y-m-d'); ?>" type="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="form-group">
                                                            <label for="address">Office Address</label>
                                                            <textarea id="officeAddress" readonly name="address" class="form-control input-0" placeholder="e.g. -" rows="2"><?php echo $vendor_rows['address']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input class="form-control input-0" id="city" readonly name="city" value="<?php echo $vendor_rows['city']; ?>" placeholder="e.g. - Golghar" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="district">District</label>
                                                            <input class="form-control input-0" id="district" readonly name="district" value="<?php echo $vendor_rows['district']; ?>" placeholder="e.g. - Gorakhpur" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="state">State</label>
                                                            <input class="form-control input-0" id="state" readonly name="state" value="<?php echo $vendor_rows['state']; ?>" placeholder="e.g. - UP" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="pinCode">Pin Code</label>
                                                            <input class="form-control input-0" id="pinCode" readonly name="pinCode" value="<?php echo $vendor_rows['pincode']; ?>" placeholder="e.g. -" type="number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="Front Aadha">Front Aadhar</label>
                                                            <img id="aadharFrontPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['front_aadhar']; ?>" alt="Front Aadhaar Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="back ">Back Aadhar</label>
                                                            <img id="aadharBackPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['back_aadhar']; ?>" alt="Back Aadhaar Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="back ">GST/PAN</label>
                                                            <img id="gstCertificatePreview" src="<?php echo '../uploaded_images/' . $vendor_rows['gst_certificate']; ?>" alt="GST Certificate Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 col-xl-3">
                                                        <div class="form-group">
                                                            <label for="back ">Other</label>
                                                            <img id="otherDocumentPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['other_certificate']; ?>" alt="Other Document Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-sm btn-primary">Update</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $i++;
                            }
                        }
                        // Service Vendor Basic Info if any service added--
                        // echo "welcome";
                        // $basic_vendor_info = FALSE;
                        if (isset($_GET['uid']) && isset($_GET['category'])) {
                            $vendor_get_uid = mysqli_real_escape_string($conn, $_GET['uid']);
                            $vendor_get_category = mysqli_real_escape_string($conn, $_GET['category']);
                            //     $basic_vendor_info = TRUE;
                            // } else if (!empty($vendor_get_category) && !empty($vendor_get_uid)) {
                            //     $basic_vendor_info = TRUE;
                            // }
                            // if ($basic_vendor_info) {
                            //     $vendor_get_uid;
                            //     $vendor_get_category;
                            $vendor_service_add_sql = "SELECT * FROM `vendor_service` 
                                                            JOIN `vendor` ON `vendor`.`uid` = `vendor_service`.`vendor_uid` 
                                                            WHERE `vendor_service`.`vendor_uid` = '$vendor_get_uid' AND `vendor_service`.`service_type` = '$vendor_get_category' ";
                            $vendor_service_add_run = mysqli_query($conn, $vendor_service_add_sql);
                            $vendor_service_add_rows = mysqli_fetch_assoc($vendor_service_add_run);
                            ?>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xl-6">
                                    <div class="form-group">
                                        <label for="hotelName">Vendor Name</label>
                                        <input type="text" class="form-control" id="" value="<?php echo $vendor_service_add_rows['vendor_name']; ?>" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xl-6">
                                    <div class="form-group">
                                        <label for="hotelName">Vendor Mobile No.</label>
                                        <input type="text" class="form-control" id="hotelName" value="<?php echo $vendor_service_add_rows['mobile_no']; ?>" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xl-6">
                                    <div class="form-group">
                                        <label for="hotelPhone">Business Name</label>
                                        <input type="text" class="form-control" id="" value="<?php echo $vendor_service_add_rows['service_name']; ?>" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="hotelPhone">Helpline Number</label>
                                        <input type="tel" class="form-control" id="hotelPhone" value="<?php echo $vendor_service_add_rows['service_no']; ?>" placeholder="Enter phone number" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="hotelEmail">Helpline Email</label>
                                        <input type="email" value="<?php echo $vendor_service_add_rows['service_email']; ?>" class="form-control" id="hotelEmail" placeholder="Enter email" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="form-group">
                                        <label for="hotelAddress">Office Address</label>
                                        <textarea name="" rows="2" id="" class="form-control" placeholder="Hotel Address" readonly><?php echo $vendor_service_add_rows['service_address']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-xl-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="hotelAddress">City</label>
                                        <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_city']; ?>" id="hotelAddress" placeholder=" City" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="hotelCity">District</label>
                                        <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_district']; ?>" id="hotelCity" placeholder=" District" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="hotelState">State</label>
                                        <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_state']; ?>" id="hotelState" placeholder=" state" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="hotelZip">Pin/Zip Code</label>
                                        <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_pincode']; ?>" id="hotelZip" placeholder=" zip code" readonly>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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
    <script src="js/vendor.js"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/elements/modals/velocity.min.js"></script>
    <script src="assets/js/elements/modals/velocity.ui.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
    <script type="text/javascript">
        $(".modal").each(function(l) {
            $(this).on("show.bs.modal", function(l) {
                var o = $(this).attr("data-easein");
                "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
            })
        });
    </script>
    <script src="assets/js/tables/datatables.min.js"></script>
    <script src="assets/js/tables/dataTables.buttons.min.js"></script>
    <script src="assets/js/tables/jszip.min.js"></script>
    <script src="assets/js/tables/pdfmake.min.js"></script>
    <script src="assets/js/tables/vfs_fonts.js"></script>
    <script src="assets/js/tables/buttons.html5.min.js"></script>
    <script src="assets/js/tables/buttons.print.min.js"></script>
    <script src="assets/js/tables/datatable.js"></script>
</body>

</html>
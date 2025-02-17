<?php include('control/universal.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View All Vendor - Trip-24</title>
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
                    Vendors
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">All Vendor Details</h6>
                        <ul class="list-inline panel-actions">

                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <!-- <th>Name</th> -->
                                <th>Sr.</th>
                                <th>Business Name</th>
                                <th>Mo. Number</th>
                                <th>Email</th>
                                <th>City & District</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("control/conn.php");
                            require_once("control/vendor.php");
                            $vendor_sql = "SELECT * FROM vendor ORDER BY `id` DESC";
                            $vendor_result = mysqli_query($conn, $vendor_sql);
                            $i = 1;
                            while ($vendor_rows  = mysqli_fetch_assoc($vendor_result)) {
                            ?>
                                <tr>
                                    <!-- <td><?php echo $vendor_rows['vendor_name']; ?></td> -->
                                    <td><?php echo $i; ?> </td>
                                    <td><?php echo $vendor_rows['business_name']; ?> </td>
                                    <td>+91 <?php echo $vendor_rows['mobile_no']; ?></td>
                                    <td><?php echo $vendor_rows['email_id']; ?></td>
                                    <td><?php echo $vendor_rows['city'] . ", " . $vendor_rows['district']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeModal<?php echo $vendor_rows['id']; ?>"><i class="fa fa-eye"></i> View</button>
                                        &nbsp; <a href="vendor-services-list?uid=<?php echo $vendor_rows['uid']; ?>"><button type="button" class="btn btn-success"><i class="fa fa-list"></i> Services</button></a>
                                        &nbsp;<button type="button" class="btn btn-danger"><i class="fa fa-ban"></i> Ban</button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="largeModal<?php echo $vendor_rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal<?php echo $vendor_rows['id']; ?>Label" aria-hidden="true">
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
                                            <form action="" enctype="multipart/form-data" method="post">
                                                <div class="modal-body">
                                                    <!-- Personal Details -->
                                                    <h6 class="title-inner">Personal Details</h6>
                                                    <div class="row">
                                                        <div class="col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="name">Full Name</label>
                                                                <input class="form-control input-0" id="name" name="vendor_name" value="<?php echo $vendor_rows['vendor_name']; ?>" placeholder="e.g. - Ramesh Kumar Varma" type="text">
                                                                <input class="form-control input-0" name="vendor_uid" value="<?php echo $vendor_rows['uid']; ?>" placeholder="e.g. - uid" type="text" hidden>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="father_name">Father's Name</label>
                                                                <input class="form-control input-0" id="father_name" name="father_name" value="<?php echo $vendor_rows['father_name']; ?>" placeholder="e.g. - Mohan Varma" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="gender">Gender</label>
                                                                <select class="form-control custom-select input-0" name="gender" id="gender">
                                                                    <option value="" disabled>Choose</option>
                                                                    <option value="Male" <?php echo $vendor_rows['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                                                                    <option value="Female" <?php echo $vendor_rows['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                                                                    <option value="Other" <?php echo $vendor_rows['gender'] == 'Other' ? 'selected' : ''; ?>>Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="aadhar_no">Aadhaar / ID</label>
                                                                <input class="form-control input-0" id="aadhar_no" name="aadhar_no" value="<?php echo $vendor_rows['aadhar_no']; ?>" placeholder="e.g. - 6454218576" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="mobNo">Mobile No.</label>
                                                                <input class="form-control input-0" id="mobNo" name="mobile_no" value="<?php echo $vendor_rows['mobile_no']; ?>" placeholder="e.g. - 8150010101" type="number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="email">Email Id</label>
                                                                <input class="form-control input-0" id="email" name="email_id" value="<?php echo $vendor_rows['email_id']; ?>" placeholder="e.g. - ramesh123@gmail.com" type="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input class="form-control input-0" id="password" name="password" value="" placeholder="Enter New password ?" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="frontAadharInput">Choose Front Aadhaar ID</label>
                                                                <input type="file" class="form-control input-0" name="frontAadhar" id="frontAadharInput" onchange="previewFrontAadhar(event)" accept="image/*">
                                                                <input type="text" class="form-control input-0" hidden name="old_frontAadhar" value="<?php echo $vendor_rows['front_aadhar']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <img id="aadharFrontPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['front_aadhar']; ?>" alt="Front Aadhaar Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="backAadharInput">Choose Back Aadhaar ID</label>
                                                                <input type="file" class="form-control input-0" name="backAadhar" id="backAadharInput" onchange="previewBackAadhar(event)" accept="image/*">
                                                                <input type="text" class="form-control input-0" hidden name="old_backAadhar" value="<?php echo $vendor_rows['back_aadhar']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <img id="aadharBackPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['back_aadhar']; ?>" alt="Back Aadhaar Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <!-- Business Details -->
                                                    <h6 class="title-inner">Business Details</h6>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="business_name">Business Name</label>
                                                                <input class="form-control input-0" id="businessName" name="business_name" value="<?php echo $vendor_rows['business_name']; ?>" placeholder="e.g. - Ramesh Enterprises" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="gst">GST/PAN No.</label>
                                                                <input class="form-control input-0" id="gst" name="gst_no" value="<?php echo $vendor_rows['gst_no']; ?>" placeholder="e.g. - BXLP545800121NT" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="registration_date">Registration Date</label>
                                                                <input class="form-control input-0" id="registration_date" name="registration_date" value="<?php echo $vendor_rows['registration_date']; ?>" max="<?php echo date('Y-m-d'); ?>" type="date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="address">Office Address</label>
                                                                <textarea id="officeAddress" name="address" class="form-control input-0" placeholder="e.g. -" rows="2"><?php echo $vendor_rows['address']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <input class="form-control input-0" id="city" name="city" value="<?php echo $vendor_rows['city']; ?>" placeholder="e.g. - Golghar" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="district">District</label>
                                                                <input class="form-control input-0" id="district" name="district" value="<?php echo $vendor_rows['district']; ?>" placeholder="e.g. - Gorakhpur" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input class="form-control input-0" id="state" name="state" value="<?php echo $vendor_rows['state']; ?>" placeholder="e.g. - UP" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="pinCode">Pin Code</label>
                                                                <input class="form-control input-0" id="pinCode" name="pinCode" value="<?php echo $vendor_rows['pincode']; ?>" placeholder="e.g. -" type="number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="gstCertificateInput">Choose GST Certificate</label>
                                                                <input type="file" class="form-control input-0" name="gstCertificate" id="gstCertificateInput" onchange="previewGstCertificate(event)" accept="image/*">
                                                                <input type="text" hidden value="<?php echo $vendor_rows['gst_certificate']; ?>" class="form-control input-0" name="old_gstCertificate" id="gstCertificateInput" onchange="previewGstCertificate(event)" accept="image/*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <img id="gstCertificatePreview" src="<?php echo '../uploaded_images/' . $vendor_rows['gst_certificate']; ?>" alt="GST Certificate Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <label for="otherDocumentInput">Choose Other Document</label>
                                                                <input type="file" class="form-control input-0" name="otherDocument" id="otherDocumentInput" onchange="previewOtherDocument(event)" accept="image/*">
                                                                <input type="text" hidden class="form-control input-0" name="old_otherDocument" value="<?php echo $vendor_rows['other_certificate']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xl-3">
                                                            <div class="form-group">
                                                                <img id="otherDocumentPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['other_certificate']; ?>" alt="Other Document Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Service  Detail -->
                                                    <h6 class="title-inner">Service Details</h6>
                                                    <hr>
                                                    <div class="row">
                                                        <?php
                                                        // $vendor_uid = $vendor_rows['uid'];
                                                        // $vendor_service_run = mysqli_query($conn, "SELECT * FROM `vendor_service` WHERE `uid` = '$vendor_uid'");
                                                        // while ($vendor_service_rows = mysqli_fetch_assoc($vendor_service_run)) {
                                                        ?>
                                                        <!-- <div class="col-md-6 col-xl-6" id="hotelForm" style="display: none;">
                                                            <div class="card-header bg-secondary " data-toggle="" href="">
                                                                <a class="card-title"><?php echo $vendor_service_rows['service_type']; ?></a>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="hotelName"><?php echo $vendor_service_rows['service_type']; ?> Name</label> 
                                                                            <input type="text" class="form-control" id="hotelName" name="hotelName" readonly value="<?php echo $vendor_service_rows['service_name']; ?>" placeholder="Enter hotel name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="hotelPhone">Helpline Number</label>
                                                                            <input type="tel" class="form-control" id="hotelPhone" name="hotelPhone" readonly value="<?php echo $vendor_service_rows['service_no']; ?>" placeholder="Enter phone number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="hotelEmail">Helpline Email</label>
                                                                            <input type="email" readonly value="<?php echo $vendor_service_rows['service_email']; ?>" class="form-control" id="hotelEmail" name="hotelEmail" placeholder="Enter email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="hotelAddress">Address</label>
                                                                            <textarea rows="1" id="hotelAddress" name="hotelAddress" class="form-control" placeholder="Hotel Address"><?php echo $vendor_service_rows['service_address']; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="hotelCity">City</label>
                                                                            <input type="text" class="form-control" readonly value="<?php echo $vendor_service_rows['service_city']; ?>" id="hotelCity" name="hotelCity" placeholder="Enter City">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="hotelDistrict">District</label>
                                                                            <input type="text" class="form-control" id="hotelDistrict" readonly value="<?php echo $vendor_service_rows['service_district']; ?>" name="hotelDistrict" placeholder="Enter District">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="hotelState">State</label>
                                                                            <input type="text" class="form-control" id="hotelState" readonly value="<?php echo $vendor_service_rows['service_state']; ?>" name="hotelState" placeholder="Enter state">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="hotelZip">Pin/Zip Code</label>
                                                                            <input type="text" class="form-control" id="hotelZip" readonly value="<?php echo $vendor_service_rows['service_pincode']; ?>" name="hotelZip" placeholder="Enter zip code">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <?php
                                                        // }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="update_vendor" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- JavaScript for Image Preview -->
                                <script>
                                    function showPreview(event, previewId) {
                                        const input = event.target;
                                        const reader = new FileReader();

                                        reader.onload = function() {
                                            const preview = document.getElementById(previewId);
                                            preview.src = reader.result;
                                            preview.style.display = 'block';
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                </script>
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
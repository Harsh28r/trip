<?php include('control/universal.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Service List of Vendor - Trip-24</title>
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
            <?php
            require_once("control/conn.php");

            require_once("control/vendor.php");

            if (isset($_GET['uid'])) {
                $vendor_uid = mysqli_real_escape_string($conn, $_GET['uid']);
                $vendor_result = mysqli_query($conn, "SELECT  * FROM `vendor` WHERE   `uid` = '$vendor_uid'");
                $vendor_detail_rows = mysqli_fetch_assoc($vendor_result);

                // if service list found
                $vendor_service_result = mysqli_query($conn, "SELECT * FROM `vendor_service` WHERE `vendor_uid` = '$vendor_uid'");

                if (mysqli_num_rows($vendor_service_result) > 0) {
            ?>
                    <section class="content-header">
                        <h1>
                            <small> Vendor Name:</small> <?php echo $vendor_detail_rows['vendor_name']; ?>
                        </h1>
                    </section>
                    <!-- View Vendors Section Starts -->
                    <div class="card panel panel-default">
                        <div class="card-header" id="headingTwo">
                            <div class="panel-heading">
                                <h6 class="title-inner text-uppercase"><small>Business Name: </small> <?php echo  $vendor_detail_rows['business_name']; ?> &nbsp;&nbsp;<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Add_service_modal">Add Services</a></h6>
                                <ul class="list-inline panel-actions">
                                    <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                            <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <!-- <th>Name</th> -->
                                        <th>Business Name</th>
                                        <th>Mo. Number</th>
                                        <!-- <th>Email</th> -->
                                        <!-- <th>City & District</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($vendor_service_rows  = mysqli_fetch_assoc($vendor_service_result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $service_type =  $vendor_service_rows['service_type']; ?></td>
                                            <td><?php echo $vendor_service_rows['service_name']; ?> </td>
                                            <td>+91 <?php echo $vendor_service_rows['service_no']; ?></td>
                                            <td><?php echo  $vendor_service_rows['service_city'] . ", " . $vendor_service_rows['service_district']; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeModal<?php echo $service_type; ?>"><i class="fa fa-eye"></i> View</button>
                                                &nbsp;<button type="button" class="btn btn-danger"><i class="fa fa-ban"></i> Ban</button>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="largeModal<?php echo $service_type; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal<?php echo $service_type; ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <center>
                                                            <h5 class="modal-title" id="exampleModalLabel">Service Details</h5>
                                                        </center>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="" method="post">
                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo ucfirst($service_type); ?>Name"><?php echo strtolower($service_type); ?> Name</label> &nbsp;&nbsp;
                                                                            <input type="text" class="form-control" id="<?php echo strtolower($service_type); ?>Name" name="<?php echo strtolower($service_type); ?>Name" value="<?php echo $vendor_service_rows['service_name']; ?>" placeholder="Enter <?php echo strtolower($service_type); ?> name">
                                                                            <input type="text" class="form-control" id="" name="vendor_service_id" value="<?php echo $vendor_service_rows['id']; ?>" placeholder="Enter  name" hidden>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo strtolower($service_type); ?>Address">Address</label>
                                                                            <textarea rows="1" id="<?php echo strtolower($service_type); ?>Address" name="<?php echo strtolower($service_type); ?>Address" class="form-control" placeholder="<?php echo strtolower($service_type); ?> Address"><?php echo $vendor_service_rows['service_address']; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo strtolower($service_type); ?>Phone">Helpline Number</label>
                                                                            <input type="tel" class="form-control" id="<?php echo strtolower($service_type); ?>Phone" name="<?php echo strtolower($service_type); ?>Phone" value="<?php echo $vendor_service_rows['service_no']; ?>" placeholder="Enter Helpline number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo strtolower($service_type); ?>Email">Helpline Email</label>
                                                                            <input type="email" class="form-control" id="<?php echo strtolower($service_type); ?>Email" name="<?php echo strtolower($service_type); ?>Email" value="<?php echo $vendor_service_rows['service_email']; ?>" placeholder="Enter Helpline email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo strtolower($service_type); ?>City">City</label>
                                                                            <input type="text" class="form-control" id="<?php echo strtolower($service_type); ?>City" name="<?php echo strtolower($service_type); ?>City" value="<?php echo $vendor_service_rows['service_city']; ?>" placeholder="Enter City">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo strtolower($service_type); ?>District">District</label>
                                                                            <input type="text" class="form-control" id="<?php echo strtolower($service_type); ?>District" name="<?php echo strtolower($service_type); ?>District" value="<?php echo $vendor_service_rows['service_district']; ?>" placeholder="Enter District">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo strtolower($service_type); ?>State">State</label>
                                                                            <input type="text" class="form-control" id="<?php echo strtolower($service_type); ?>State" name="<?php echo strtolower($service_type); ?>State" value="<?php echo $vendor_service_rows['service_state']; ?>" placeholder="Enter state">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="<?php echo strtolower($service_type); ?>Zip">Pin/Zip Code</label>
                                                                            <input type="text" class="form-control" id="<?php echo strtolower($service_type); ?>Zip" name="<?php echo strtolower($service_type); ?>Zip" value="<?php echo $vendor_service_rows['service_pincode']; ?>" placeholder="Enter zip code">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="update_<?php echo strtolower($service_type); ?>" class="btn btn-primary">Update <?php echo strtoupper($service_type); ?></button>
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
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <section class="content-header">
                        <h1>
                            <small> Vendor Name:</small> <?php echo $vendor_detail_rows['vendor_name']; ?>
                        </h1>
                    </section>
                    <!-- View Vendors Section Starts -->
                    <div class="card panel panel-default">
                        <div class="card-header" id="headingTwo">
                            <div class="panel-heading">
                                <h6 class="title-inner text-uppercase"><small>Business Name2: </small> <?php echo  $vendor_detail_rows['business_name']; ?> &nbsp;&nbsp;<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Add_service_modal">Add Services</a></h6>
                                <ul class="list-inline panel-actions">
                                    <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                        </div>


                        <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                            <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    No Service Found
                                </thead>
                            </table>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
            <?php
            $vendor_service_result = mysqli_query($conn, "SELECT `service_type` FROM `vendor_service` WHERE `vendor_uid` = '$vendor_uid'");
            $existing_services = [];
            while ($row = mysqli_fetch_assoc($vendor_service_result)) {
                $existing_services[] = $row['service_type'];
            }
            $all_services = ['Hotel', 'Trip', 'Bus', 'Bike', 'Activity'];
            $remaining_services = array_diff($all_services, $existing_services);

            ?>
            <!-- Add Service  Modal -->
            <div class="modal fade" id="Add_service_modal" tabindex="-1" role="dialog" aria-labelledby="Add_service_modal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center>
                                <h5 class="modal-title" id="exampleModalLabel">Add Service Details</h5>
                            </center>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- form here -->
                        <?php if (empty($remaining_services)) {
                            echo "<p>All services are already added.</p>";
                        } else {
                        ?>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="service_type">Service Type</label> &nbsp;&nbsp;
                                                    <select name="service_type" id="service_type" class="form-control" onchange="updateInputNames()">
                                                        <option value="" selected disabled>Select Service</option>
                                                        <?php
                                                        foreach ($remaining_services as $service) {
                                                            echo "<option value='$service'>$service</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Name">Name</label> &nbsp;&nbsp;
                                                    <input type="text" class="form-control" id="Name" name="serviceName" placeholder="Enter name">
                                                    <input type="text" class="form-control" name="vendor_uid" value="<?php echo $vendor_uid; ?>" hidden>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="Address">Address</label>
                                                    <textarea rows="1" id="Address" name="serviceAddress" class="form-control" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Phone">Helpline Number</label>
                                                    <input type="number" class="form-control" id="Phone" name="servicePhone" value="" placeholder="Enter Helpline number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Email">Helpline Email</label>
                                                    <input type="email" class="form-control" id="Email" name="serviceEmail" value="" placeholder="Enter Helpline email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="City">City</label>
                                                    <input type="text" class="form-control" id="City" name="serviceCity" value="" placeholder="Enter City">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="District">District</label>
                                                    <input type="text" class="form-control" id="District" name="serviceDistrict" value="" placeholder="Enter District">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="State">State</label>
                                                    <input type="text" class="form-control" id="State" name="serviceState" value="" placeholder="Enter state">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Zip">Pin/Zip Code</label>
                                                    <input type="number" class="form-control" id="Zip" name="serviceZip" value="" placeholder="Enter zip code">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="add_service" class="btn btn-primary" id="submitBtn">Add Service</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <script>
                                function updateInputNames() {
                                    const serviceType = document.getElementById('service_type').value.toLowerCase();
                                    document.getElementById('Name').name = serviceType + 'Name';
                                    document.getElementById('Address').name = serviceType + 'Address';
                                    document.getElementById('Phone').name = serviceType + 'Phone';
                                    document.getElementById('Email').name = serviceType + 'Email';
                                    document.getElementById('City').name = serviceType + 'City';
                                    document.getElementById('District').name = serviceType + 'District';
                                    document.getElementById('State').name = serviceType + 'State';
                                    document.getElementById('Zip').name = serviceType + 'Zip';

                                    // Update the submit button name and value
                                    document.getElementById('submitBtn').name = serviceType;
                                    document.getElementById('submitBtn').textContent = 'Add ' + capitalizeFirstLetter(serviceType);
                                }

                                function capitalizeFirstLetter(string) {
                                    return string.charAt(0).toUpperCase() + string.slice(1);
                                }
                            </script>

                        <?php
                        }
                        ?>

                    </div>
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
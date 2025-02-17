<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehicle Price - Trip-24</title>
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
            require_once("control/trip.php");

            if (empty($_GET['uid'])) {
                die("Access Denied.");
            }
            $vendor_uid = mysqli_real_escape_string($conn, $_GET['uid']);
            $package_name = mysqli_real_escape_string($conn, $_GET['name']);
            $trip_id = mysqli_real_escape_string($conn, $_GET['tid']);
            // Query for vendor details
            $vendor_result = mysqli_query($conn, "SELECT  * FROM `vendor` WHERE   `uid` = '$vendor_uid'");
            $vendor_detail_rows = mysqli_fetch_assoc($vendor_result);

            // Query for Vehicle Price 
            $vehicle_price_sql = "SELECT stv.name AS vehicle_name, stvp.price AS vehicle_price, stvp.vehicle_id,stvp.id AS stvp_id
            FROM service_trip_vehicles_price stvp 
            JOIN service_trip_vehicles stv ON stvp.vehicle_id = stv.id
            WHERE stvp.trip_id = '$trip_id' AND stvp.vendor_uid = '$vendor_uid' ";
            $vehicle_price_run = mysqli_query($conn, $vehicle_price_sql);

            ?>
            <section class="content-header">
                <h1>
                    <small> Vendor Name:</small> <?= $vendor_detail_rows['vendor_name']; ?>
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase"><small>Package Name: </small> <?= str_replace("-", " ", $package_name); ?> &nbsp;&nbsp;
                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add_vehicles"> <i class="fa fa-plus"></i> Add More Vehicle</a>
                        </h6>
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
                                <th>Vehicle Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($vehicle_price_row = mysqli_fetch_assoc($vehicle_price_run)) {
                            ?>
                                <tr>
                                    <td><img src="https://png.pngtree.com/png-clipart/20221028/original/pngtree-grey-car-png-image_8736355.png" alt="Vehicle Image" srcset="" style="max-height: 5rem;transform: scaleX(-1);"></td>
                                    <td><?= $vehicle_price_row['vehicle_name']; ?></td>
                                    <td><?= $vehicle_price_row['vehicle_price']; ?> </td>
                                    <td class="d-flex">
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal<?= $vehicle_price_row['stvp_id']; ?>"><i class="fa fa-pen"></i> Edit</a>
                                      <form action="" method="post">
                                        <input type="text" name="stvp_id" value="<?= $vehicle_price_row['stvp_id']; ?>" id="" hidden>
                                         &nbsp;<button type="submit" name="delete_price" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button>
                                         </form> 
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="largeModal<?= $vehicle_price_row['stvp_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal<?= $vehicle_price_row['stvp_id']; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <center>
                                                    <h5 class="modal-title" id="exampleModalLabel">Vehicle Price</h5>
                                                </center>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="" method="post">
                                                <input type="text" name="stvp_id" value="<?= $vehicle_price_row['stvp_id']; ?>" id="" hidden>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="TripCategory">Vehicle</label>
                                                                    <select name="vehicle" class="form-control" id="vehicle" readonly>
                                                                        <option value="<?= $vehicle_price_row['vehicle_id']; ?>"><?= $vehicle_price_row['vehicle_name']; ?></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="TripCategory">₹ Price</label>
                                                                    <input type="number" class="form-control" name="price" value="<?= $vehicle_price_row['vehicle_price']; ?>" placeholder="₹  ..">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="update_price" class="btn btn-primary">Update Price</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php
            //  Fetch the available vehicles (already added) for the given trip_id
            $vehicle_result = mysqli_query($conn, "SELECT `vehicle_id` FROM `service_trip_vehicles_price` WHERE `trip_id` = '$trip_id'");
            $existing_vehicles = [];
            while ($row = mysqli_fetch_assoc($vehicle_result)) {
                $existing_vehicles[] = $row['vehicle_id'];
            }

            //  Fetch all vehicles from the service_trip_vehicles table
            $all_vehicles_result = mysqli_query($conn, "SELECT `id`, `name` FROM `service_trip_vehicles` ORDER BY `name` ASC");
            $all_vehicles = [];
            while ($vehicle_row = mysqli_fetch_assoc($all_vehicles_result)) {
                $all_vehicles[] = $vehicle_row;
            }

            // Filter out the already added vehicles
            $remaining_vehicles = array_filter($all_vehicles, function ($vehicle) use ($existing_vehicles) {
                return !in_array($vehicle['id'], $existing_vehicles);
            });
            ?>

            <!-- Add Vehicle Modal -->
            <div class="modal fade" id="add_vehicles" tabindex="-1" role="dialog" aria-labelledby="add_vehicles" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center>
                                <h5 class="modal-title" id="exampleModalLabel">Add Vehicle Details</h5>
                            </center>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Form -->
                        <?php if (empty($remaining_vehicles)) {
                            echo "<p>All vehicles are already added for this trip.</p>";
                        } else { ?>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Vehicle Dropdown -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="vehicle_type">Vehicle Type</label> &nbsp;&nbsp;
                                                    <select name="vehicle_id" id="vehicle_type" class="form-control">
                                                        <option value="" selected disabled>Select Vehicle</option>
                                                        <?php
                                                        foreach ($remaining_vehicles as $vehicle) {
                                                            echo "<option value='{$vehicle['id']}'>{$vehicle['name']}</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Price Input -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="vehicle_price">Vehicle Price</label> &nbsp;&nbsp;
                                                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
                                                    <input type="text" class="form-control" name="vendor_uid" value="<?php echo $vendor_uid; ?>" hidden>
                                                    <input type="text" class="form-control" name="trip_id" value="<?php echo $trip_id; ?>" hidden>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_price" class="btn btn-primary">Add Vehicle</button>
                                </div>
                            </form>
                        <?php } ?>
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
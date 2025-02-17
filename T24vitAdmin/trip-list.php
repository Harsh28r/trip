<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Listed Trips - Trip-24</title>
    <meta name="description" content="Trip List - Trip24">
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
                    Trip Lists
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner">Trips List
                            <?php
                            if (isset($_GET['vendor'])) {
                                echo "of Vinod Enterprises - TR24VE12541";
                            }
                            ?>
                        </h6>
                        <a href="trip-add?v=Beenod" class="btn btn-info btn-sm">Add Trip</a>

                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i
                                        class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Vendor UID</th>
                                <th>Package name</th>
                                <!-- <th>Price</th> -->
                                <th>Duration</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $service_type = 'trip';
                            require_once("control/trip.php");
                            if (isset($_GET['uid'])) {
                                $vendor_get_uid = mysqli_real_escape_string($conn, $_GET['uid']);
                                $trip_sql = "SELECT * FROM `service_trip` WHERE `vendor_uid` ='$vendor_get_uid' ";
                            } else {
                                $trip_sql = "SELECT * FROM `service_trip` ORDER BY `trip_id` DESC";
                            }
                            $trip_run = mysqli_query($conn, $trip_sql);
                            while ($trip_rows = mysqli_fetch_assoc($trip_run)) {
                            ?>
                                <tr>
                                    <td><?= $vendor_uid = $trip_rows['vendor_uid'];  ?></td>
                                    <td><?= $name = $trip_rows['package_name'];  ?></td>
                                    <td><?= $trip_rows['duration'];  ?></td>
                                    <td><?= $trip_rows['pickup_location'];  ?></td>
                                    <td>

                                        <a href="trip-vehicle-price?name=<?= strtolower(str_replace(' ', '-', $name)) . '&uid=' . $vendor_uid . '&tid=' . $trip_rows['trip_id']; ?>"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-car"></i> ₹ Price </button></a>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal<?= $trip_rows['trip_id']; ?>"><i class="fa fa-eye"></i>View</button>
                                        <a href="add-gallery?category=Trip&name=<?= str_replace(' ', '-', $trip_rows['package_name']); ?>&id=<?= $trip_rows['trip_id']; ?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Gallery</a>&nbsp;
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Ban</button>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="largeModal<?= $trip_rows['trip_id']; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document"
                                            style="max-width: 75% !important;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <center>
                                                        <h5 class="modal-title" id="exampleModalLabel">View Trip Details
                                                        </h5>
                                                    </center>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <!-- Vendor & Service  Details -->
                                                            <?php
                                                            // Show vendor details for the trip
                                                            $vendor_get_uid = $trip_rows['vendor_uid'];
                                                            $vendor_get_category = 'Trip';
                                                            $vendor_service_sql = "SELECT * FROM `vendor_service` 
                                                                                    JOIN `vendor` ON `vendor`.`uid` = `vendor_service`.`vendor_uid` 
                                                                                    WHERE `vendor_service`.`vendor_uid` = '$vendor_get_uid' AND `vendor_service`.`service_type` = '$vendor_get_category' ";
                                                            $vendor_service_run = mysqli_query($conn, $vendor_service_sql);
                                                            $vendor_service_rows = mysqli_fetch_assoc($vendor_service_run);
                                                            ?>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="vendorName">Vendor Name</label>
                                                                        <input type="text" class="form-control" value="<?= $vendor_service_rows['vendor_name']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="vendorPhone">Vendor Mobile No.</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $vendor_service_rows['mobile_no']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="businessName">Business Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $vendor_service_rows['service_name']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12 col-xl-3">
                                                                    <div class="form-group">
                                                                        <label for="helplineNumber">Helpline Number</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $vendor_service_rows['service_no']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12 col-xl-3">
                                                                    <div class="form-group">
                                                                        <label for="helplineEmail">Helpline Email</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $vendor_service_rows['service_email']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Trip Details -->
                                                            <input type="hidden" name="vendor_uid"
                                                                value="<?= $vendor_get_uid; ?>">
                                                            <input type="hidden" name="trip_id"
                                                                value="<?= $trip_rows['trip_id'];  ?>">
                                                            <!-- Trip Details -->
                                                            <div class="row">
                                                                <div class="col-md-8 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="TripCategory">Package Name</label>
                                                                        <input type="text" name="package_name" class="form-control" value="<?= $trip_rows['package_name'] ?>" id="" placeholder="Enter Package Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="TripCategory">Tour Duration</label>
                                                                        <input type="text" class="form-control" id="" name="duration" value="<?= $trip_rows['duration'] ?>" placeholder="5 Days">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="TripCategory">Pickup Location</label>
                                                                        <input type="text" class="form-control" name="pickup_location" value="<?= $trip_rows['pickup_location'] ?>" placeholder="Pickup Location">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="TripCategory">No. of Bookings Accepted / day</label>
                                                                        <input type="text" class="form-control" name="bookings_no" value="<?= $trip_rows['bookings_no'] ?>" placeholder="2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Price Here -->
                                                            <div class="row">
                                                                <?php
                                                                // SQL to fetch vehicle names and prices based on trip_id and vendor_uid
                                                                $trip_id = $trip_rows['trip_id'];
                                                                $vendor_uid = $trip_rows['vendor_uid'];

                                                                $vehicle_price_sql = "SELECT stv.name AS vehicle_name, stvp.price AS vehicle_price, stvp.vehicle_id
                                                                                FROM service_trip_vehicles_price stvp 
                                                                                JOIN service_trip_vehicles stv ON stvp.vehicle_id = stv.id
                                                                                WHERE stvp.trip_id = '$trip_id' AND stvp.vendor_uid = '$vendor_uid' ";

                                                                $vehicle_price_run = mysqli_query($conn, $vehicle_price_sql);
                                                                while ($vehicle_price_row = mysqli_fetch_assoc($vehicle_price_run)) {
                                                                    $vehicle_id = $vehicle_price_row['vehicle_id'];
                                                                    $vehicle_name = $vehicle_price_row['vehicle_name'];
                                                                    $vehicle_price = $vehicle_price_row['vehicle_price'];

                                                                    // Output vehicle as an option in the dropdown

                                                                ?>
                                                                    <div class="col-md-4 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="TripCategory">Vehicle</label>
                                                                            <select name="vehicle[]" class="form-control" id="vehicle" readonly>
                                                                                <?php
                                                                                echo '<option value="' . $vehicle_id . '" selected>' . $vehicle_name . '</option>';
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="TripCategory">₹ Price</label>
                                                                            <input type="number" class="form-control" name="price[]" value="<?= $vehicle_price; ?>" placeholder="₹  .." readonly>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for="TripDescription">Description / TripAmenities</label>
                                                                        <textarea class="form-control" name="amenities" id="editor<?= $trip_rows['id']; ?>" rows="3" placeholder="Enter Trip Amenities"><?= $trip_rows['amenities'] ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Banner Image Upload -->
                                                            <div class="form-group">
                                                                <label for="bannerImage">Upload Banner Image</label>
                                                                <input type="file" name="banner" class="form-control-file" id="bannerImage" onchange="showBannerPreview(event)">
                                                                <img id="bannerPreview" src="#" alt="Banner Preview" style="display: none; max-height: 200px; max-width: 100%; margin-top: 10px;">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" name="update_trip" class="btn btn-primary "><i class="fa fa-save"></i> Save</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        ClassicEditor
                                            .create(document.querySelector('#editor<?= $trip_rows['id']; ?>'))
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    });
                                </script>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <!-- Page Content Ends -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>


    <script>
        function preview_images() {
            var total_file = document.getElementById("images").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append(`
                <div class='col-md-3'>
                    <img style='width:100%' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
                </div>`);
            }
        }

        function resetForm() {
            $("#image_preview").html("");
            return true;
        }
    </script>
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
<?php
include "control/universal.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Listed Activitys - Activity-24</title>
    <meta name="description" content="Activity List - Activity24">
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
                    Activity Lists
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner">Activitys List
                            <?php
                            if (isset($_GET['vendor'])) {
                                echo "of Vinod Enterprises - TR24VE12541";
                            }
                            ?>
                        </h6>
                        <a href="activity-vendor?main-category=Activity" class="btn btn-info btn-sm">Add Activity</a>

                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-sActivityed table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Vendor UID </th>
                                <th>Activity </th>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Price</th>
                                <th>Pickup Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("control/activity.php");
                            if (isset($_GET['uid'])) {
                                $vendor_get_uid = mysqli_real_escape_string($conn, $_GET['uid']);
                                $activity_sql = "SELECT * FROM `service_activities` WHERE `vendor_uid` ='$vendor_get_uid' ";
                            } else {
                                $activity_sql = "SELECT * FROM `service_activities` ORDER BY `activity_id` DESC";
                            }
                            $activity_run = mysqli_query($conn, $activity_sql);
                            while ($activity_rows = mysqli_fetch_assoc($activity_run)) {
                            ?>
                                <tr>
                                    <td><?php echo $activity_rows['vendor_uid'];  ?></td>
                                    <td><?php echo $activity_rows['activity_type'];  ?></td>
                                    <td><?php echo $activity_rows['name'];  ?></td>
                                    <td><?php echo $activity_rows['duration'] . " " . $activity_rows['unit'];  ?></td>
                                    <td><?php echo $activity_rows['price'];  ?></td>
                                    <td><?php echo $activity_rows['pickup_location'];  ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal<?= $activity_rows['activity_id']; ?>"><i class="fa fa-eye"></i> View</button>
                                        <a href="add-gallery?category=activity&name=<?= str_replace(' ', '-', $activity_rows['name']); ?>&id=<?= $activity_rows['activity_id']; ?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Gallery</a>&nbsp;
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Ban</button>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="largeModal<?= $activity_rows['activity_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <center>
                                                        <h5 class="modal-title" id="exampleModalLabel">View activity Details</h5>
                                                    </center>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <!-- Vendor & Service  Details -->
                                                            <?php
                                                            // /show personal details of particular activity
                                                            $vendor_get_uid = $activity_rows['vendor_uid'];
                                                            $vendor_get_category = 'Activity';
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

                                                            <!-- ---- -->
                                                            <!-- activity Details here... -->
                                                            <div class="row">
                                                                <input type="text" class="form-control" name="vendor_uid" value="<?php echo $vendor_get_uid; ?>" hidden>
                                                                <input type="text" class="form-control" name="activity_id" value="<?php echo $activity_rows['activity_id'];  ?>" hidden>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="ActivityCategory">Activity Type</label>
                                                                        <select name="activity_type" class="form-control" id="">
                                                                            <option value="Paragliding" <?= ($activity_rows['activity_type'] == 'Paragliding') ? 'selected' : '' ?>>Paragliding</option>
                                                                            <option value="Rafting" <?= ($activity_rows['activity_type'] == 'Rafting') ? 'selected' : '' ?>>Rafting</option>
                                                                            <option value="Snow-Suit-On-Rent" <?= ($activity_rows['activity_type'] == 'Snow-Suit-On-Rent') ? 'selected' : '' ?>>Snow Suit on Rent</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="ActivityCategory">Activity Name</label>
                                                                        <input type="text" name="name" value="<?= $activity_rows['name']; ?>" class="form-control" id="" placeholder="Enter Activity Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="ActivityCategory">Duration</label>
                                                                        <input type="text" class="form-control" id="duration" name="duration" value="<?= $activity_rows['duration']; ?>" placeholder="5">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="BikeCategory">Unit </label>
                                                                        <select name="unit" class="form-control" id="">
                                                                            <option value="Hour" <?= ($activity_rows['unit'] == 'Hour') ? 'selected' : '' ?>>Hour</option>
                                                                            <option value="Day" <?= ($activity_rows['unit'] == 'Day') ? 'selected' : '' ?>>Day</option>
                                                                            <option value="Week" <?= ($activity_rows['unit'] == 'Week') ? 'selected' : '' ?>>Week</option>
                                                                            <option value="Month" <?= ($activity_rows['unit'] == 'Month') ? 'selected' : '' ?>>Month</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="ActivityCategory">₹ Price </label>
                                                                        <input type="text" class="form-control" id="" name="price" value="<?= $activity_rows['price']; ?>" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="ActivityCategory">Pickup Location</label>
                                                                        <input type="text" class="form-control" id="ActivityName" name="pickup_location" value="<?= $activity_rows['pickup_location']; ?>" placeholder="Himalya Ground">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for="activityDescription">Description / activity Amenities / Terms </label>
                                                                        <textarea class="form-control" id="editor<?= $activity_rows['activity_id']; ?>" name="amenities" rows="3" placeholder="Enter activity Amenities"><?= $activity_rows['amenities'] ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Banner Image Upload -->
                                                            <div class="form-group">
                                                                <label for="bannerImage">Upload Banner Image</label>
                                                                <input type="file" class="form-control-file" name="banner" id="bannerImage">
                                                                <img id="" src="../uploaded_images/<?= $activity_rows['banner']; ?>" alt="Banner Preview" style=" max-height: 200px; max-width: 100%; margin-top: 10px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <center>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="update_activity" class="btn btn-primary">Update</button>
                                                        </center>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        ClassicEditor
                                            .create(document.querySelector('#editor<?= $activity_rows['activity_id']; ?>'))
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
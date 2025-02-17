<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Add Activitys - Activity-24</title>
    <meta name="description" content="Activity Add - Activity24">
    <meta name="author" content="Activity-24.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    include("head.php");
    ?>
</head>

<body class="sidebar-mini fixed skin-blue">
    <div class="wrapper">
        <?php
        include("header.php");
        include("sidebar.php");
        ?>
        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <!-- Handle Form Data -->
            <?php require_once('control/activity.php'); ?>
            <section class="content-header">
                <h1>
                    Add Activity
                </h1>
            </section>
            <form method="post" enctype="multipart/form-data">
                <div class="cardbg">

                    <h6 class="title-inner">Enter Activity Details <a href="activity-list?vendor=TRUE" class="btn btn-info btn-sm"> Activitys List</a></h6>
                    <!-- Vendor & Service  Details -->
                    <?php
                    require_once("control/service_vendor.php");
                    ?>
                    <input type="text" class="form-control" name="vendor_uid" value="<?php echo $vendor_get_uid; ?>" hidden>
                    <input type="text" class="form-control" name="vendor_id" value="<?php echo $vendor_id; ?>" hidden>
                    <!-- Activity Details -->
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="ActivityCategory">Activity Type</label>
                                <select name="activity_type" class="form-control" id="">
                                    <option value="Paragliding">Paragliding</option>
                                    <option value="Rafting">Rafting</option>
                                    <option value="Snow-Suit-On-Rent">Snow Suit on Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <label for="ActivityCategory">Activity Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Enter Activity Name">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="ActivityCategory">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" value="15" placeholder="5" readonly>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">Unit </label>
                                <select name="unit" class="form-control" id="" readonly>
                                    <option value="min" selected>Minutes</option>
                                    <!-- <option value="Hour">Hour</option>
                                    <option value="Day">Day</option> -->
                                    <!-- <option value="Week">Week</option>
                                    <option value="Month">Month</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="ActivityCategory">₹ Price (per 15 min)</label>
                                <input type="text" class="form-control" id="" name="price" placeholder="eg - 1100">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="ActivityCategory">Pickup Location</label>
                                <input type="text" class="form-control" id="ActivityName" name="pickup_location" value="" placeholder="eg - Himalya Ground">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="ActivityDescription">Description / Activity Amenities</label>
                                <textarea class="form-control" id="editor" rows="3" name="amenities" placeholder="Enter Activity Amenities">

                                </textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Banner Image Upload -->
                    <div class="form-group">
                        <label for="bannerImage">Upload Banner Image</label>
                        <input type="file" name="banner" class="form-control-file" id="bannerImage" onchange="showBannerPreview(event)">
                        <img id="bannerPreview" src="#" alt="Banner Preview" style="display: none; max-height: 200px; max-width: 100%; margin-top: 10px;">
                    </div>

                    <button type="submit" name="add_activity" class="btn btn-primary">Submit</button>

                </div>
            </form>


        </div>
        <!-- Page Content Ends -->

        <?php
        include("footer.php");
        ?>
    </div>
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

    <!-- js for preview image -->
    <script>
        function showBannerPreview(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const preview = document.getElementById('bannerPreview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/jquery/jquery.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/charts/Chart.bundle.min.js"></script>
    <script src="assets/js/charts/bar/grouped-bar-chart.js"></script>
    <script src="assets/js/charts/pie/doughnut-chart-multiline.js"></script>
    <script src="assets/js/dashboard/dashboard1.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
</body>

</html>
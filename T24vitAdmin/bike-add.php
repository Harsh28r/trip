<?php
include('control/universal.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Add Bikes - Trip-24</title>
    <meta name="description" content="Bike Add - Trip24">
    <meta name="author" content="trip-24.com">
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
            <?php
            // Handle form data
            require_once("control/bike.php");
            ?>
            <section class="content-header">
                <h1>
                    Add Bike
                </h1>
            </section>
            <form method="post" enctype="multipart/form-data">
                <div class="cardbg">
                    <!-- Personal Details -->

                    <h6 class="title-inner">Enter Bike Details <a href="bike-list?vendor=TRUE" class="btn btn-info btn-sm"> Bikes List</a></h6>
                    <!-- Bike Details -->
                    <!-- Vendor & Service  Details -->
                    <?php
                    require_once("control/service_vendor.php");
                    ?>
                    <!-- ---- -->
                    <div class="row">
                        <input type="text" class="form-control" name="vendor_uid" value="<?php echo $vendor_get_uid; ?>" hidden>

                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">Brand Name</label>
                                <input type="text" class="form-control" name="brand" id="brand" value="" placeholder="eg. Hero Moto Corp">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">Model</label>
                                <input type="text" class="form-control" name="model" value="" placeholder="eg. HF Deluxe">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">Manufacturing Year</label>
                                <input type="text" class="form-control" name="year" value="" placeholder="2024">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">Engine Capacity</label>
                                <input type="text" class="form-control" name="capacity" value="" placeholder="125 CC">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">Bike No. </label>
                                <input type="text" class="form-control" name="bike_no" placeholder="eg. UP57AB7455">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">Pickup Location</label>
                                <input type="text" class="form-control" name="pickup_location" placeholder="eg. Krishna Nagar">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">₹ Price </label>
                                <input type="text" class="form-control" name="price" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label for="BikeCategory">₹ Price per </label>
                                <select name="unit" class="form-control" id="">
                                    <option value="Kilo Meter">Kilo Meter</option>
                                    <option value="Day">Day</option>
                                    <option value="Week">Week</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="BikeDescription">Description / Bike Amenities / Terms </label>
                                <textarea class="form-control" id="editor" name="amenities" rows="3" placeholder="Enter Bike Amenities"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Banner Image Upload -->
                    <div class="form-group">
                        <label for="bannerImage">Upload Banner Image</label>
                        <input type="file" class="form-control-file" name="banner" id="bannerImage" onchange="showBannerPreview(event)">
                        <img id="bannerPreview" src="#" alt="Banner Preview" style="display: none; max-height: 200px; max-width: 100%; margin-top: 10px;">
                    </div>

                    <button type="submit" name="add_bike" class="btn btn-primary">Submit</button>

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
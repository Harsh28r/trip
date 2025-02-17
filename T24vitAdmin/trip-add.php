<?php
include "control/universal.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Trips - Trip-24</title>
    <meta name="description" content="Trip Add - Trip24">
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
            require_once('control/trip.php');
            ?>
            <section class="content-header">
                <h1>Add Trip </h1>
            </section>
            <form method="post" enctype="multipart/form-data">
                <div class="cardbg">
                    <!-- Personal Details -->
                    <h6 class="title-inner">Enter Trip Details &nbsp;<a href="trip-list?vendor=TRUE" class="btn btn-info btn-sm"> Trips List</a></h6>
                    <!-- Vendor & Service  Details -->
                    <?php
                    require_once("control/service_vendor.php");
                    ?>
                    <!--  -->
                    <input type="text" class="form-control" name="vendor_uid" value="<?php echo $vendor_get_uid; ?>" hidden>
                    <!-- Trip Details -->
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <label for="TripCategory">Package Name</label>
                                <input type="text" name="package_name" class="form-control" id="" placeholder="Enter Package Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="TripCategory">Tour Duration</label>
                                <input type="text" class="form-control" id="" name="duration" value="" placeholder="5 Days">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <label for="TripCategory">Pickup Location</label>
                                <input type="text" class="form-control" name="pickup_location" value="" placeholder="Pickup Location">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="TripCategory">No. of Bookings Accepted / day</label>
                                <input type="text" class="form-control" name="bookings_no" value="" placeholder="2">
                            </div>
                        </div>
                    </div>
                    <div id="vehicle-container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="TripCategory">Vehicle</label>
                                    <select name="vehicle[]" class="form-control" id="vehicle">
                                        <option value="" selected disabled>Select a vehicle</option>
                                        <?php
                                        $vehicle_run = mysqli_query($conn, "SELECT * FROM `service_trip_vehicles` ORDER BY `name` ASC");
                                        while ($vehicle_row = mysqli_fetch_assoc($vehicle_run)) {
                                            echo '<option value="' . $vehicle_row['id'] . '"> ' . $vehicle_row['name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <label for="TripCategory">₹ Price</label>
                                    <input type="number" class="form-control" name="price[]" placeholder="₹  ..">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary" id="add-more-vehicle">
                            <i class="fa fa-plus"></i> Add More Vehicle
                        </button>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="TripDescription">Description / Trip Amenities</label>
                                <textarea class="form-control" name="amenities" id="editor" rows="3" placeholder="Enter Trip Amenities">
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
                    <button type="submit" name="add_trip" class="btn btn-primary">Submit</button>
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
    <!-- Form js -->
    <!-- new js -->
    <script>
        document.getElementById('add-more-vehicle').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent the button from submitting the form or reloading the page

            var vehicleContainer = document.getElementById('vehicle-container');

            // Save the current selections of all existing dropdowns
            var currentSelections = [];
            var vehicleSelects = vehicleContainer.querySelectorAll('select[name="vehicle[]"]');
            vehicleSelects.forEach(function(select) {
                currentSelections.push(select.value);
            });

            var lastRow = vehicleContainer.lastElementChild;
            var totalColsInLastRow = lastRow ? lastRow.querySelectorAll('.col-md-4, .col-md-2').length : 0;

            if (lastRow && totalColsInLastRow < 12) {
                lastRow.innerHTML += `
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="TripCategory">Vehicle</label>
                        <select name="vehicle[]" class="form-control">
                            <option value="" selected disabled>Select a vehicle</option>
                            <?php
                            $vehicle_run = mysqli_query($conn, "SELECT * FROM `service_trip_vehicles` ORDER BY `name` ASC");
                            while ($vehicle_row = mysqli_fetch_assoc($vehicle_run)) {
                                echo '<option value="' . $vehicle_row['id'] . '"> ' . $vehicle_row['name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="form-group">
                        <label for="TripCategory">₹ Price</label>
                        <input type="number" class="form-control" name="price[]" placeholder="₹  ..">
                    </div>
                </div>
            `;
            } else {
                var newRow = document.createElement('div');
                newRow.classList.add('row');
                newRow.innerHTML = `
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="TripCategory">Vehicle</label>
                        <select name="vehicle[]" class="form-control">
                            <option value="" selected disabled>Select a vehicle</option>
                            <?php
                            $vehicle_run = mysqli_query($conn, "SELECT * FROM `service_trip_vehicles` ORDER BY `name` ASC");
                            while ($vehicle_row = mysqli_fetch_assoc($vehicle_run)) {
                                echo '<option value="' . $vehicle_row['id'] . '"> ' . $vehicle_row['name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="form-group">
                        <label for="TripCategory">₹ Price</label>
                        <input type="number" class="form-control" name="price[]" placeholder="₹  ..">
                    </div>
                </div>
            `;
                vehicleContainer.appendChild(newRow);
            }

            // Restore the previous selections after adding new fields
            vehicleSelects = vehicleContainer.querySelectorAll('select[name="vehicle[]"]');
            vehicleSelects.forEach(function(select, index) {
                if (currentSelections[index]) {
                    select.value = currentSelections[index]; // Restore the value
                }
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
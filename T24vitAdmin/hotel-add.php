<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Add Hotels - Trip-24</title>
    <meta name="description" content="Hotel Add - Trip24">
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
            <section class="content-header">
                <h1>
                    Add Hotel
                </h1>
            </section>
            <form method="post" enctype="multipart/form-data">
                <div class="cardbg">
                    <!-- Personal Details -->

                    <h6 class="title-inner">Enter Hotel Details <a href="hotel-list?vendor=TRUE" class="btn btn-info btn-sm"> Hotels List</a></h6>
                    <!-- Vendor & Service  Details -->
                    <?php 
                        require_once("control/service_vendor.php");
                    ?> 
                    <!-- ---- -->
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="hotelCategory">Room Type</label>
                                <select class="form-control" id="hotelCategory">
                                    <option>Choose...</option>
                                    <option>AC - Premium</option>
                                    <option>Non AC - Mid Range</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="hotelCategory">Max Person</label>
                                <input type="text" class="form-control" id="hotelName" value="15" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="hotelCategory">₹ Price per Person</label>
                                <input type="text" class="form-control" id="hotelName" value="15" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="hotelDescription">Description / Hotel Amenities</label>
                                <textarea class="form-control" id="editor" rows="3" placeholder="Enter Hotel Amenities">
                                <h2>Hotel Amenities</h2>

                                    <!-- Table Format -->
                                    <h3>Facilities Overview</h3>
                                    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                                        <thead>
                                            <tr>
                                                <th>Amenity</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Free Wi-Fi</td>
                                                <td>High-speed internet access available throughout the hotel.</td>
                                            </tr>
                                            <tr>
                                                <td>Swimming Pool</td>
                                                <td>Outdoor pool with loungers for relaxation and leisure.</td>
                                            </tr>
                                            <tr>
                                                <td>Fitness Center</td>
                                                <td>Fully equipped gym with modern exercise equipment.</td>
                                            </tr>
                                            <tr>
                                                <td>Spa and Wellness</td> 
                                                <td>Relaxing spa treatments and wellness services.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- List Format -->
                                    <h3>Additional Amenities</h3>
                                    <ul>
                                        <li><strong>Restaurant:</strong> Enjoy gourmet meals at our in-house dining options.</li>
                                        <li><strong>Bar:</strong> A wide selection of beverages and cocktails available.</li>
                                        <li><strong>Room Service:</strong> 24/7 room service for your convenience.</li>
                                        <li><strong>Conference Rooms:</strong> Modern facilities for meetings and events.</li>
                                        <li><strong>Airport Shuttle:</strong> Convenient shuttle service to and from the airport.</li>
                                    </ul>

                                    <!-- Paragraph Format -->
                                    <h3>Additional Information</h3>
                                    <p>Our hotel offers a range of services and amenities to ensure a comfortable and enjoyable stay. From our well-equipped fitness center and relaxing spa to our exquisite dining options and convenient airport shuttle, we strive to provide everything you need for a pleasant experience. For any special requests or further information about our amenities, please do not hesitate to contact our concierge desk.</p>

                                </textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Banner Image Upload -->
                    <div class="form-group">
                        <label for="bannerImage">Upload Banner Image</label>
                        <input type="file" class="form-control-file" id="bannerImage" onchange="showBannerPreview(event)">
                        <img id="bannerPreview" src="#" alt="Banner Preview" style="display: none; max-height: 200px; max-width: 100%; margin-top: 10px;">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

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
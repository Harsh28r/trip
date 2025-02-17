<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Add Buss - Trip-24</title>
    <meta name="description" content="Bus Add - Trip24">
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
                    Add Bus
                </h1>
            </section>
            <form method="post" enctype="multipart/form-data">
                <div class="cardbg">
                    <!-- Personal Details -->

                    <h6 class="title-inner">Enter Bus Details <a href="bus-list?vendor=TRUE" class="btn btn-info btn-sm"> Bus List</a></h6>
                    <!-- Bus Details -->
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xl-6">
                            <div class="form-group">
                                <label for="BusName">Vendor Name</label>
                                <input type="text" class="form-control" id="" value="Beenod Kumar" placeholder="" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-6">
                            <div class="form-group">
                                <label for="BusName">Vendor Mobile No.</label>
                                <input type="text" class="form-control" id="BusName" value="8181008181" placeholder="" readonly>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xl-6">
                            <div class="form-group">
                                <label for="BusPhone">Business Name</label>
                                <input type="text" class="form-control" id="" value="Green Valley Courtyard" placeholder="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusPhone">Helpline Number</label>
                                <input type="tel" class="form-control" id="BusPhone" value="1200001800" placeholder="Enter phone number" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusEmail">Helpline Email</label>
                                <input type="email" value="book@Bus.com" class="form-control" id="BusEmail" placeholder="Enter email" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="BusAddress">office Address</label>
                                <textarea name="" rows="1" id="" class="form-control" placeholder="Bus Address" readonly></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xl-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusAddress">City</label>
                                <input type="text" class="form-control" id="BusAddress" placeholder=" City" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCity">District</label>
                                <input type="text" class="form-control" id="BusCity" placeholder=" District" readonly>
                            </div>
                        </div>

                        <div class="col-md-3 col-xl-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusState">State</label>
                                <input type="text" class="form-control" id="BusState" placeholder=" state" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusZip">Pin/Zip Code</label>
                                <input type="text" class="form-control" id="BusZip" placeholder=" zip code" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Bus Type</label>
                                <select class="form-control" id="BusCategory">
                                    <option>Choose...</option>
                                    <option>AC </option>
                                    <option>Non-AC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Bus No.</label>
                                <input type="text" class="form-control" id="BusName" value="UP57AB4477" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Source </label>
                                <input type="text" class="form-control" id="BusName" value="Lucknow" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Destination </label>
                                <input type="text" class="form-control" id="BusName" value="Gorakhpur" placeholder="">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Arrival Time </label>
                                <input type="time" class="form-control" id="BusName" value="<?php echo date("h:i"); ?>" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Depart Time </label>
                                <input type="time" class="form-control" id="BusName" value="<?php echo date("h:i"); ?>" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Driver Name </label>
                                <input type="text" class="form-control" id="BusName" value="Sonu" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="BusCategory">Driver No. </label>
                                <input type="text" class="form-control" id="BusName" value="987440001" placeholder="">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="BusDescription">Description / Bus Amenities</label>
                                <textarea class="form-control" id="editor" rows="3" placeholder="Enter Bus Amenities">
                                <h2>Bus Amenities</h2>

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
                                                <td>High-speed internet access available throughout the Bus.</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Fitness Center</td>
                                                <td>Fully equipped gym with modern exercise equipment.</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                    <!-- List Format -->
                                    <h3>Additional Amenities</h3>
                                    <ul>
                                        <li><strong>Bus Service:</strong> 24/7 Bus service for your convenience.</li>
                                        <li><strong>Conference Buss:</strong> Modern facilities for meetings and events.</li>
                                    </ul>

                                    <!-- Paragraph Format -->
                                    <h3>Additional Information</h3>
                                    <p>Our Bus offers a range of services and amenities to ensure a comfortable and enjoyable stay. From our well-equipped fitness center and relaxing spa to our exquisite dining options and convenient airport shuttle, we strive to provide everything you need for a pleasant experience. For any special requests or further information about our amenities, please do not hesitate to contact our concierge desk.</p>

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
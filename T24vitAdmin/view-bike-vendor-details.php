<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Bike Vendor - Trip-24</title>
    <meta name="keywords" content="View Bike Vendor -Trip24" />
    <meta name="description" content="View Bike Vendor ">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
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
                    View Bike Vendor Details
                </h1>
            </section>
            <!-- Form Formatter Section Starts -->
            <div class="cardbg">
                <h6 class="title-inner text-uppercase">View Bike Vendor Details</h6>
                <div class="col-md-12 col-xl-12">
                    <div class="form-group">
                        <label>Vendor ID</label>
                        <input type="text" class="form-control input-0" placeholder="Kl4567">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label>Document Type</label>
                            <input type="text" class="form-control input-0" placeholder="Pan Card">
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label>Document Number</label>
                            <input type="text" class="form-control input-0" placeholder="HKUR4567891">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label>Bike Name</label>
                            <input type="text" class="form-control input-0" placeholder="Hero">
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label>Bike No</label>
                            <input type="text" class="form-control input-0" placeholder="DOD789">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control input-0" placeholder="1500./">
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label>Pick Up Date</label>
                            <input type="text" class="form-control input-0" placeholder="12/02/2024">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="form-group " id="mapForm">
                            <label for="gmapLink">Google Maps Link:</label><br>
                            <input type="url" id="gmapLink" name="gmapLink" placeholder="Paste Google Maps URL here" required><br><br>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-success btn-block">Update</button>
            </div>
            <!-- Form Formatter Section Ends -->
        </div>
        <!-- Page Content Ends -->



    </div>
    <!-- Page Content Ends -->
    <!-- Back to Top Starts -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    <!-- Back to Top Ends -->
    <?php
    include("footer.php");
    ?>

    <script>
        document.getElementById('mapForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting

            const gmapLink = document.getElementById('gmapLink').value;

            // Basic validation to check if the link is a Google Maps URL
            if (gmapLink.startsWith("https://www.google.com/maps")) {
                console.log("Valid Google Maps URL: ", gmapLink);
                // Process the link as needed
            } else {
                alert("Please enter a valid Google Maps link.");
            }
        });
    </script>
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/forms/jquery.clave.js"></script>
    <script src="assets/js/forms/jquery.clave-phone.js"></script>
    <script src="assets/js/forms/clave-script.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
</body>

</html>
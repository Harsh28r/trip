<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Hotel Vendor Details - Trip-24</title>
    <meta name="description" content="">
    <meta name="author" content="perfectusinc.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/css/forms/step-wizard.css">
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
        <style>
            .wizard>.content {
                min-height: 51em;
            }
        </style>

        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    View Hotel Vendor Details
                </h1>
            </section>
            <!-- Horizontal Form Example Section Starts -->
            <section>
                <div class="cardbg">
                    <h6 class="title-inner text-uppercase">View Hotel Vendor Detail</h6>
                    <form id="example-form" action="#" id="mapForm">
                        <div>
                            <h3>Business Details</h3>
                            <section>
                                <!-- <label for="">Vendor Id</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Business Id</label>
                                <input id="" name="" type="text" class="form-control "> -->
                                <label for="">Business Name</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Document Type</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Document No</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">GST No</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Phone No</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Alternating Number </label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Email</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Location</label>
                                <input id="" name="" type="text" class="form-control ">

                                <label for="gmapLink">Google Maps Link:</label><br>
                                <input type="url" id="gmapLink" name="gmapLink" class="form-control " placeholder="Paste Google Maps URL here"><br><br>
                            </section>
                            <h3> Services Details</h3>
                            <section>
                                <!-- <label for="">Business Id</label>
                                <input id="" name="" type="text" class="form-control "> -->
                                <label for="">Room Type</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Image</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Price</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">No.Of Room</label>
                                <input id="" name="" type="text" class="form-control ">
                                <label for="">Description</label>
                                <textarea id="" name="" type="text" class="form-control "></textarea>
                            </section>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Horizontal Form Example Section Ends -->
        </div>
        <!-- Page Content Ends -->



    </div>
    </div>
    <!-- Page Content Ends-->




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

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/jquery/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/forms/jquery.steps.min.js"></script>
    <script src="assets/js/forms/step-wizard.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
</body>

</html>
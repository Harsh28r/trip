<?php
session_start()
?>
<?php include('control/universal.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Vendor - Trip-24</title>
    <meta name="description" content="Vendor Add - Trip24">
    <meta name="author" content="trip-24.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    include("head.php");
    ?>
    <link rel="stylesheet" href="assets/css/elements/accordion.css">
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
                    Create New Vendor
                </h1>
            </section>
            <?php

            // handle form data 
            include("control/vendor.php");
            ?>
            <form method="post" enctype="multipart/form-data">
                <div class="cardbg">
                    <!-- Personal Details -->
                    <h6 class="title-inner">Personal Details</h6>
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input class="form-control input-0" id="name" name="vendor_name" value="" placeholder="e.g. - Ramesh Kumar Varma" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="father_name">Father's Name</label>
                                <input class="form-control input-0" id="father_name" name="father_name" value="" placeholder="e.g. - Mohan Varma" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="gender">gender</label>
                                <select class="form-control custom-select input-0" name="gender" id="gender">
                                    <option value="" selected disabled>Choose</option>
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="aadhar_no">Aadhaar / ID</label>
                                <input class="form-control input-0" id="aadhar_no" name="aadhar_no" value="" placeholder="e.g. - 6454218576" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="mobNo">Mobile No.</label>
                                <input class="form-control input-0" id="mobNo" name="mobile_no" value="" placeholder="e.g. - 8150010101" type="number">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="email">Email Id</label>
                                <input class="form-control input-0" id="email" name="email_id" value="" placeholder="e.g. - ramesh123@gmail.com" type="email">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control input-0" id="password" name="password" value="" placeholder="e.g. -..." type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="frontAadharInput">Choose Front Aadhaar ID</label>
                                <input type="file" class="form-control input-0" name="frontAadhar" id="frontAadharInput" style="margin-bottom: 2rem;" onchange="previewFrontAadhar(event)" accept="image/*" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="aadharFrontPreview" src="#" alt="Front Aadhaar Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>

                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="backAadharInput">Choose Back Aadhaar ID</label>
                                <input type="file" class="form-control input-0" name="backAadhar" id="backAadharInput" style="margin-bottom: 2rem;" onchange="previewBackAadhar(event)" accept="image/*" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="aadharBackPreview" src="#" alt="Back Aadhaar Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>

                    <!-- Business Details -->
                    <h6 class="title-inner">Business Details</h6>
                    <div class="row">
                        <div class="col-md-6 col-xl-6">
                            <div class="form-group">
                                <label for="business_name">Business Name</label>
                                <input class="form-control input-0" id="businessName" name="business_name" value="" placeholder="e.g. - Ramesh Enterprises" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="gst">GST/PAN No.</label>
                                <input class="form-control input-0" id="gst" name="gst_no" value="" placeholder="e.g. - BXLP545800121NT" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="registration_date">Registration Date</label>
                                <input class="form-control input-0" id="registration_date" name="registration_date" max="<?php echo date('Y-m-d'); ?>" value="" type="date">
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="address">Office Address</label>
                                <textarea id="officeAddress" name="address" class="form-control input-0" placeholder="e.g. -" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control input-0" id="city" name="city" value="" placeholder="e.g. - Golghar" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input class="form-control input-0" id="district" name="district" value="" placeholder="e.g. - Gorakhpur" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control input-0" id="state" name="state" value="" placeholder="e.g. - UP" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="pinCode">Pin Code</label>
                                <input class="form-control input-0" id="pinCode" name="pinCode" value="" placeholder="e.g. - " type="number">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="gstCertificateInput">Choose GST Certificate</label>
                                <input type="file" class="form-control input-0" name="gstCertificate" id="gstCertificateInput" style="margin-bottom: 2rem;" onchange="previewGstCertificate(event)" accept="image/*" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="gstCertificatePreview" src="#" alt="GST Certificate Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>

                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="otherDocumentInput">Choose Other Document</label>
                                <input type="file" class="form-control input-0" name="otherDocument" id="otherDocumentInput" style="margin-bottom: 2rem;" onchange="previewOtherDocument(event)" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="otherDocumentPreview" src="#" alt="Other Document Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>
                    </div>

                    <!-- Business Detail -->
                    <h6 class="title-inner">Service Details</h6>
                    <!-- Checkboxes -->
                    <div class="form-check">
                        <input type="checkbox" name="hotel" id="hotelCheckbox" class="form-check-input" onclick="toggleForm('hotelForm')">
                        <label class="form-check-label" for="hotelCheckbox">Hotel</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="bus" id="busCheckbox" class="form-check-input" onclick="toggleForm('busForm')">
                        <label class="form-check-label" for="busCheckbox">Bus</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="bike" id="bikeCheckbox" class="form-check-input" onclick="toggleForm('bikeForm')">
                        <label class="form-check-label" for="bikeCheckbox">Bike on Rent</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="trip" id="tripCheckbox" class="form-check-input" onclick="toggleForm('tripForm')">
                        <label class="form-check-label" for="tripCheckbox">Trip</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="activity" id="activityCheckbox" class="form-check-input" onclick="toggleForm('activityForm')">
                        <label class="form-check-label" for="activityCheckbox">Activity</label>
                    </div>
                    <div class="row">
                        <!-- Hotel -->
                        <div class="col-md-6 col-xl-6" id="hotelForm" style="display: none;">
                            <div class="card-header bg-secondary " data-toggle="" href="">
                                <a class="card-title">
                                    Hotel
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="hotelName">Hotel Name</label> &nbsp;&nbsp;<button type="button" id="copyDataBtn" class="btn btn-sm btn-secondary">Same As Business Details</button>
                                            <input type="text" class="form-control" id="hotelName" name="hotelName" value="Ocean Luxuries Hotels 4 in one" placeholder="Enter hotel name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hotelPhone">Helpline Number</label>
                                            <input type="tel" class="form-control" id="hotelPhone" name="hotelPhone" value="1200001800" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hotelEmail">Helpline Email</label>
                                            <input type="email" value="book@hotel.com" class="form-control" id="hotelEmail" name="hotelEmail" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="hotelAddress">Address</label>
                                            <textarea rows="1" id="hotelAddress" name="hotelAddress" class="form-control" placeholder="Hotel Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hotelCity">City</label>
                                            <input type="text" class="form-control" id="hotelCity" name="hotelCity" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hotelDistrict">District</label>
                                            <input type="text" class="form-control" id="hotelDistrict" name="hotelDistrict" placeholder="Enter District">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hotelState">State</label>
                                            <input type="text" class="form-control" id="hotelState" name="hotelState" placeholder="Enter state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hotelZip">Pin/Zip Code</label>
                                            <input type="text" class="form-control" id="hotelZip" name="hotelZip" placeholder="Enter zip code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bus -->
                        <div class="col-md-6 col-xl-6" id="busForm" style="display: none;">
                            <div class="card-header bg-secondary" data-toggle="" href="">
                                <a class="card-title">
                                    Bus or Volvo Ticket
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="busName">Bus Name</label> &nbsp;&nbsp;
                                            <button type="button" id="copyBusDataBtn" class="btn btn-sm btn-secondary">Same As Business Details</button>
                                            <input type="text" class="form-control" id="busName" name="busName" placeholder="Enter bus name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="busAddress">Address</label>
                                            <textarea rows="1" id="busAddress" name="busAddress" class="form-control" placeholder="Bus Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="busPhone">Helpline Number</label>
                                            <input type="tel" class="form-control" id="busPhone" name="busPhone" placeholder="Enter Helpline number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="busEmail">Helpline Email</label>
                                            <input type="email" class="form-control" id="busEmail" name="busEmail" placeholder="Enter Helpline email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="busCity">City</label>
                                            <input type="text" class="form-control" id="busCity" name="busCity" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="busDistrict">District</label>
                                            <input type="text" class="form-control" id="busDistrict" name="busDistrict" placeholder="Enter District">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="busState">State</label>
                                            <input type="text" class="form-control" id="busState" name="busState" placeholder="Enter state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="busZip">Pin/Zip Code</label>
                                            <input type="text" class="form-control" id="busZip" name="busZip" placeholder="Enter zip code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bike on Rent -->
                        <div class="col-md-6 col-xl-6" id="bikeForm" style="display: none;">
                            <div class="card-header bg-secondary" data-toggle="" href="">
                                <a class="card-title">
                                    Bike on Rent
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bikeName">Bike Name</label> &nbsp;&nbsp;
                                            <button type="button" id="copyBikeDataBtn" class="btn btn-sm btn-secondary">Same As Business Details</button>
                                            <input type="text" class="form-control" id="bikeName" name="bikeName" placeholder="Enter bike name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bikePhone">Helpline Number</label>
                                            <input type="tel" class="form-control" id="bikePhone" name="bikePhone" placeholder="Enter Helpline number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bikeEmail">Helpline Email</label>
                                            <input type="email" class="form-control" id="bikeEmail" name="bikeEmail" placeholder="Enter Helpline email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bikeAddress">Address</label>
                                            <textarea rows="1" id="bikeAddress" name="bikeAddress" class="form-control" placeholder="Bike Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bikeCity">City</label>
                                            <input type="text" class="form-control" id="bikeCity" name="bikeCity" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bikeDistrict">District</label>
                                            <input type="text" class="form-control" id="bikeDistrict" name="bikeDistrict" placeholder="Enter District">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bikeState">State</label>
                                            <input type="text" class="form-control" id="bikeState" name="bikeState" placeholder="Enter state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bikeZip">Pin/Zip Code</label>
                                            <input type="text" class="form-control" id="bikeZip" name="bikeZip" placeholder="Enter zip code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Trip -->
                        <div class="col-md-6 col-xl-6" id="tripForm" style="display: none;">
                            <div class="card-header bg-secondary" data-toggle="" href="">
                                <a class="card-title">
                                    Trip
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tripName">Trip Name</label> &nbsp;&nbsp;
                                            <button type="button" id="copyTripDataBtn" class="btn btn-sm btn-secondary">Same As Business Details</button>
                                            <input type="text" class="form-control" id="tripName" name="tripName" placeholder="Enter trip name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tripAddress">Address</label>
                                            <textarea rows="1" id="tripAddress" name="tripAddress" class="form-control" placeholder="Trip Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tripPhone">Helpline Number</label>
                                            <input type="tel" class="form-control" id="tripPhone" name="tripPhone" placeholder="Enter Helpline number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tripEmail">Helpline Email</label>
                                            <input type="email" class="form-control" id="tripEmail" name="tripEmail" placeholder="Enter Helpline email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tripCity">City</label>
                                            <input type="text" class="form-control" id="tripCity" name="tripCity" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tripDistrict">District</label>
                                            <input type="text" class="form-control" id="tripDistrict" name="tripDistrict" placeholder="Enter District">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tripState">State</label>
                                            <input type="text" class="form-control" id="tripState" name="tripState" placeholder="Enter state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tripZip">Pin/Zip Code</label>
                                            <input type="text" class="form-control" id="tripZip" name="tripZip" placeholder="Enter zip code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Activity -->
                        <div class="col-md-6 col-xl-6" id="activityForm" style="display: none;">
                            <div class="card-header bg-secondary" data-toggle="" href="">
                                <a class="card-title">
                                    Activity
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="activityName">Activity Name</label> &nbsp;&nbsp;
                                            <button type="button" id="copyActivityDataBtn" class="btn btn-sm btn-secondary">Same As Business Details</button>
                                            <input type="text" class="form-control" id="activityName" name="activityName" placeholder="Enter activity name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="activityAddress">Address</label>
                                            <textarea rows="1" id="activityAddress" name="activityAddress" class="form-control" placeholder="Activity Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activityPhone">Helpline Number</label>
                                            <input type="tel" class="form-control" id="activityPhone" name="activityPhone" placeholder="Enter Helpline number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activityEmail">Helpline Email</label>
                                            <input type="email" class="form-control" id="activityEmail" name="activityEmail" placeholder="Enter Helpline email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activityCity">City</label>
                                            <input type="text" class="form-control" id="activityCity" name="activityCity" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activityDistrict">District</label>
                                            <input type="text" class="form-control" id="activityDistrict" name="activityDistrict" placeholder="Enter District">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activityState">State</label>
                                            <input type="text" class="form-control" id="activityState" name="activityState" placeholder="Enter state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activityZip">Pin/Zip Code</label>
                                            <input type="text" class="form-control" id="activityZip" name="activityZip" placeholder="Enter zip code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <center>
                        <button class="btn btn-success btn-lg" type="submit" name="add_vendor" value>Add Vendor</button>
                    </center>
                </div>
            </form>


        </div>
        <!-- Page Content Ends -->
        <!-- Back to Top Ends -->
        <?php
        include("footer.php");
        ?>
    </div>
    <!-- Custom JS For this page -->
    <script src="js/vendor.js"></script>
    <script>

    </script>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/jquery/jquery.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/elements/accordion.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Vendor - Trip-24</title>
    <meta name="" content="Add Vendor - Trip-24" />
    <meta name="" content="Trip-24">
    <meta name="" content="trip-24.com">
    <meta name="" content="width=device-width, initial-scale=1.0">
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
                    Vendors
                </h1>
            </section>
            <form method="post" enctype="multipart/form-data">
                <div class="cardbg">
                    <!-- Personal Details -->
                    <h6 class="title-inner">Personal Details</h6>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="name">Full name</label>
                                <input class="form-control input-0" id="name" name="" placeholder="e.g. - Ramesh Kumar Varma" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="fatherName">Father name</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - Mohan Varma" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control custom-select input-0" name="" id="gender">
                                    <option value="">Choose</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="id">Aadhar / ID</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - 6454218576" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="mobNo">Mobile No.</label>
                                <input class="form-control input-0" id="name" name="" placeholder="e.g. - 8150010101" type="number">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="fatherName">Email Id</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - ramesh123@gmail.com" type="email">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="fatherName">Password</label>
                                <input class="form-control input-0" name="" placeholder="e.g. -..." type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="name">Choose Front ID</label>
                                <input type="file" class="form-control input-0" name="" id="productInput" style="margin-bottom: 2rem;" onchange="productImage(event)" accept="image/*" required="">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="productPreview" src="#" alt="Product Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="name">Choose Back Id</label>
                                <input type="file" class="form-control input-0" name="" id="productInput2" style="margin-bottom: 2rem;" onchange="productImage2(event)" accept="image/*" required="">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="productPreview2" src="#" alt="Product Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <!-- Business Detail -->
                    <h6 class="title-inner">Business Details</h6>
                   
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="id">Business Name</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - Ramesh Enterprises" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="jod">GST/PAN No.</label>
                                <input class="form-control input-0" id="gst" name="" placeholder="e.g. - BXLP545800121NT" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="jod">Registration Date</label>
                                <input class="form-control input-0" max="2024-08-17" id="registrationDate" name="" type="date">
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="mobNo">Office Address</label>
                                <textarea name="" class="form-control input-0" placeholder="e.g. - Shop No. Q-45,Shashtri Chowk" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - Golghar" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="District">District</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - Gorakhpur" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="State">State</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - UP" type="text">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="PinCode">Pin Code</label>
                                <input class="form-control input-0" name="" placeholder="e.g. - 273001" type="number">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="name">Choose GST Certificate</label>
                                <input type="file" class="form-control input-0" name="" id="productInput" style="margin-bottom: 2rem;" onchange="productImage(event)" accept="image/*" required="">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="productPreview" src="#" alt="Product Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <label for="name">Other Document</label>
                                <input type="file" class="form-control input-0" name="" id="productInput2" style="margin-bottom: 2rem;" onchange="productImage2(event)" accept="image/*" required="">
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3">
                            <div class="form-group">
                                <img id="productPreview2" src="#" alt="Product Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                            </div>
                        </div>

                    </div>
                    <center>
                        <button class="btn btn-primary" type="submit" name="">Add Vendor</button>
                    </center>
                </div>
            </form>

          
        </div>
        <!-- Page Content Ends -->
        <!-- Back to Top Starts -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        <!-- Back to Top Ends -->
        <?php
        include("footer.php");
        ?>
    </div>
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
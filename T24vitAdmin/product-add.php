<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product - Trip-24</title>
    <meta name="keywords" content="Add Product - Trip-24" />
    <meta name="description" content="Trip-24">
    <meta name="author" content="trip-24.com">
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
    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/css/dashboard/dashboard1.css">
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
                    Product
                </h1>
            </section>
            <!-- Form Formatter Section Starts -->
            <div class="cardbg">
                
                <h6 class="title-inner ">Add Product &nbsp;&nbsp;<a href="product-list?v=Beenod" class="btn btn-info btn-sm"> Product List</a></h6>

                <div class="row">
                    <div class="col-md-8 col-xl-8 col-sm-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control input-0" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="form-group">
                            <label>Product Code</label>
                            <input type="text" class="form-control input-0" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control input-0" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="form-group">
                            <label>Strike Price</label>
                            <input type="number" class="form-control input-0" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="form-group">
                            <label>Stocks</label>
                            <input type="number" class="form-control input-0" placeholder="">
                        </div>
                    </div>

                   

                    <div class="col-md-12 col-xl-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control input-0" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" class="form-control input-0" placeholder="">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success">Submit</button>
            </div>
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
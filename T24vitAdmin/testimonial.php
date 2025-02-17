<?php
session_start()
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Testimonial - Trip-24</title>
    <meta name="keywords" content="Add Testimonial - Trip-24" />
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
                    Add Testimonial
                </h1>
            </section>
            <!-- Form Formatter Section Starts -->
            <div class="cardbg">
                <h6 class="title-inner text-uppercase">Add Testimonial</h6>
                <div class="row">

                    <div class="col-md-6 col-xl-6">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="Text" class="form-control input-0" placeholder="">

                        </div>
                        <div class="form-group">
                            <label>User Message</label>
                            <input type="Text" class="form-control input-0" placeholder="">

                        </div>
                        <button type="button" class="btn btn-success " style=" margin-top: 30px;">Submit</button>

                    </div>

                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <section class="content-header">
                <h1>
                    View Testimonial
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">View Testimonial</h6>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>User Name
                                </th>
                                <th>User Message

                                </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Amit </td>
                                <td>ABC.. </td>
                                <td><a href="" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Show/Hide</a>&nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
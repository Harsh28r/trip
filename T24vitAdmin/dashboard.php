<?php
include('control/universal.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Trip24</title>
    <meta name="keywords" content="Trip-24" />
    <meta name="description" content="Dashboard - Trip24">
    <meta name="author" content="perfectusinc.com">
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
        ?>
        <?php
        include("sidebar.php");
        ?>
        <!-- Page Content Starts -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
            <!-- Counters Section Starts -->
            <div class="dashboard1">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="shadow bg1">
                                <div class="text-white text-center">
                                    <i class="fa fa-user-o fa-2x"></i>
                                    <div class="mt-2">Visitors</div>
                                    <h3 class="mt-1 count">10000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="shadow bg2">
                                <div class="text-center text-white">
                                    <i class="fa fa-money fa-2x"></i>
                                    <div class="mt-2">Today's Booking</div>
                                    <div class="money">
                                        <!-- <h3>₹</h3> -->
                                        <h3 class="mt-1 count">757</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="shadow bg3">
                                <div class="text-center text-white">
                                    <i class="fa fa-thumbs-o-up fa-2x"></i>
                                    <div class="mt-2">Total Likes</div>
                                    <h3 class="mt-1 count">5000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="shadow bg4">
                                <div class="text-center text-white">
                                    <i class="fa fa-opencart fa-2x"></i>
                                    <div class="mt-2">Order Placed</div>
                                    <h3 class="mt-1 count">7000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counters Section Ends -->
                <!-- Chart Section Starts -->
                <!-- <div class="row chartjs">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="cardbg">
                            <h6 class="title-inner text-uppercase">Population Growth</h6>
                            <div class="chart-wrapper">
                                <canvas id="grouped-bar-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="cardbg">
                            <h6 class="title-inner text-uppercase">World Population</h6>
                            <div class="chart-wrapper">
                                <canvas id="multiline-doughnut-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Chart Section Ends -->
                <!-- Client Section Starts -->
                <div class="row">
                    <div class="col-xl-9 col-lg-6 col-12">
                        <div class="cardbg">
                            <h6 class="title-inner text-uppercase">New Users</h6>
                            <div class="table-responsive">
                                <table class="table m-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Ordered</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sonu</td>
                                            <td>Doe</td>
                                            <td>Sonu@example.com</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Neha</td>
                                            <td>Moe</td>
                                            <td>Neha@example.com</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>Satish</td>
                                            <td>Dooley</td>
                                            <td>Satish@example.com</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>Shivam</td>
                                            <td>Dubey</td>
                                            <td>shivam@example.com</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <td>vineet</td>
                                            <td>singh</td>
                                            <td>vineet@example.com</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>vivek</td>
                                            <td>kumar</td>
                                            <td>vivek@example.com</td>
                                            <td>04</td>
                                        </tr>
                                        <tr>
                                            <td>amit</td>
                                            <td>kumar</td>
                                            <td>amit@example.com</td>
                                            <td>09</td>
                                        </tr>
                                        <tr>
                                            <td>kunal</td>
                                            <td>kumar</td>
                                            <td>kunal@example.com</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td>varun</td>
                                            <td>kumar</td>
                                            <td>varun@example.com</td>
                                            <td>14</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Client Section Ends -->
                    <!-- Profile Section Starts -->
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="cardbg">
                            <img class="card-img-top" src="assets/images/img_avatar2.png" alt="Card image">
                            <div class="card-body">
                                <?php
                                if ($_SESSION['logtype'] == 'superadmin' && $_SESSION['website'] == 'trip24.co.in') {
                                ?>
                                    <h4 class="card-title"><?= $_SESSION['adminname'] ?></h4>
                                    <p class="card-text">Some example text some example text. </p>
                                    <a href="#" class="btn btn-priNeha">See Profile</a>
                                <?php
                                } else {
                                ?>
                                    <h4 class="card-title"><?= $_SESSION['vendorname'] ?></h4>
                                    <p class="card-text">Some example text some example text. </p>
                                    <a href="#" class="btn btn-priNeha">See Profile</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Section Ends -->
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
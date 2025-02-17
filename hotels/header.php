<?php include("../T24vitAdmin/control/conn.php");
ob_start();
session_start();
//error_reporting(0);
ini_set('display_errors', 1);

$user_id = $_SESSION['user_id'];

if (!empty($user_id)) {
    $query = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'");
    $fetch = mysqli_fetch_array($query);
    $user_email = $fetch["email"];
} else {
    $user_email = null; // Or handle it as needed
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hotel- Trip24</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/select2.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style type="text/css">
        .pagination {
            display: flex;
            justify-content: center;
            /* Center the pagination */
            margin: 20px 0;
            /* Space around pagination */
        }

        .pagination a {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            /* Space between buttons */
            border: 1px solid #007bff;
            /* Border color */
            border-radius: 5px;
            /* Rounded corners */
            color: #007bff;
            /* Text color */
            text-decoration: none;
            /* No underline */
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transitions */
        }

        .pagination a:hover {
            background-color: #007bff;
            /* Background on hover */
            color: #ffffff;
            /* Text color on hover */
        }

        .pagination a.active {
            background-color: #007bff;
            /* Active page background */
            color: #ffffff;
            /* Active page text color */
            border-color: #007bff;
            /* Match border color with active */
        }

        .pagination a.disabled {
            color: #ccc;
            /* Disabled text color */
            border-color: #ccc;
            /* Disabled border color */
            pointer-events: none;
            /* Disable clicking */
        }

        .theme-btn {
            padding: 10px;
        }

        .theme-btn {
            position: relative;
            display: inline-block;
            text-decoration: none;
            /* Adjust if needed */
            color: #000;
            /* Change to your desired color */
        }

        .cart-count {
            position: absolute;
            top: 0;
            right: 0;
            background-color: red;
            /* Change to your desired color */
            color: white;
            /* Text color */
            border-radius: 50%;
            width: 20px;
            /* Adjust size */
            height: 20px;
            /* Adjust size */
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translate(50%, -50%);
            /* Adjust position */
            font-size: 12px;
            /* Adjust font size */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- start per-loader --
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->
    <style>
        .bg-white {
            --bs-bg-opacity: 1;
            background-color: #c7d7ff !important;
        }
    </style>
    <header class="header-area">
        <div class="main-header py-3 bg-white">
            <div class="container">
                <div class="main-header-action-wrap">
                    <div class="logo">
                        <!-- <a href="index"><img src="images/logo2.png" alt="logo" /></a> -->
                        <h2>Trip24</h2>
                    </div>
                    <!-- end logo -->
                    <nav class="main-menu me-4 ms-auto main-menu-black">
                        <ul>
                            <li>
                                <a href="index">Home</a>
                            </li>
                            <li>
                                <a href="bus">Volvo Bus Ticket</a>
                            </li>
                            <li>
                                <a href="hotels">Hotels</a>
                            </li>
                            <li>
                                <a href="trip">Trip
                                </a>
                            </li>
                            <li>
                                <a href="bike-on-rent">Bike On Rent</a>
                            </li>
                            <li>
                                <a href="#">Activities <span class="fal fa-angle-down"></span></a>
                                <ul class="dropdown-menu-item">
                                    <li><a href="paragliding">Paragliding</a></li>
                                    <li><a href="rafting">Rafting</a></li>
                                    <!-- <li><a href="hot-air-ballons">Hot Air Balloons</a></li> -->
                                    <li><a href="snow-suit">Snow Suit On Rent</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="nav-right-content d-flex align-items-center">
                        <div class="author-access-list author-access-list-black me-3">
                            <?php if (!isset($_SESSION['user_id'])) { ?>
                                <a href="login">Login</a>
                            <?php } else { ?>
                                <a href="dashboard"><?php echo $fetch["username"]; ?></a>
                            <?php } ?>
                        </div>
                        <?php if (isset($_SESSION['user_id'])) { ?>
                            <a href="cart" class="theme-btn">
                                <span class="fal fa-shopping-cart me-1"></span>
                                <span class="cart-count">
                                    <?php
                                    // Fetch all bookings for the current user from the cart
                                    $sql = "SELECT * FROM cart WHERE user_id ='" . $_SESSION['user_id'] . "'";
                                    $result = mysqli_query($conn, $sql);
                                    $total_price2 = 0;
                                    $n_p = mysqli_num_rows($result);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Fetch hotel name (you can replace this with actual hotel name logic)
                                            $hotel_id = $row['hotel_id'];
                                            //$ = "Hotel $hotel_id";  // Dummy hotel name, replace with actual logic
                                            $hotel = mysqli_query($conn, "select * from service_hotels where id='$hotel_id'");
                                            $hotels = mysqli_fetch_array($hotel);
                                            $hotel_name = $hotels["hotel_name"];
                                            // Calculate total price
                                            $total_price2 += $row['total_amount'];
                                        }
                                    }
                                    echo $n_p;
                                    ?>
                                </span> <!-- Replace 5 with your dynamic count -->
                            </a>
                        <?php } ?>
                        <div class="side-menu-open ms-2 side-menu-open-black">
                            <i class="fal fa-bars"></i>
                        </div>
                        <!-- end side-menu-open -->
                    </div>
                    <!-- end nav-right-content -->
                </div>
                <!-- end main-header-action-wrap -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end main-header -->
        <div class="off-canvas">
            <div
                class="off-canvas-close icon-element icon-element-sm bg-white shadow-sm">
                <i class="fal fa-times"></i>
            </div>
            <!-- end off-canvas-close -->
            <ul class="off-canvas-menu padding-top-60px">
                <li>
                    <a href="index">Home</a>
                </li>
                <li>
                    <a href="bus">Volvo Bus Ticket</a>
                </li>
                <li>
                    <a href="hotels">Hotels</a>
                </li>
                <li>
                    <a href="trip">Trip</a>
                </li>
                <li>
                    <a href="bike-on-rent">Bike On Rent</a>
                </li>
                <li>
                    <a href="#">Activities
                        <span class="fal fa-angle-down sub-menu-toggler"></span></a>
                    <ul class="off-canvas-sub-menu">
                        <li><a href="paragliding"> Paragliding</a></li>
                        <li><a href="rafting">Rafting</a></li>
                        <li><a href="snow-suit">Snow Suit On Rent</a></li>
                    </ul>
                </li>
            </ul>
            <div class="mt-4 text-center">
                <!--   <a href="login" class="theme-btn me-2">Login</a> -->
                <?php if (!isset($_SESSION['user_id'])) { ?>
                    <a href="login" class="theme-btn me-2">Login</a>
                <?php } else { ?>
                    <a href="dashboard" class="theme-btn me-2"><?php echo $fetch["username"]; ?></a>
                <?php } ?>
                <!-- <a href="signUp" class="theme-btn">Sign up</a> -->
            </div>
        </div>
        <!-- end off-canvas -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->
    <style>
        .bread-bg {
            background-image: url(https://img.freepik.com/free-photo/landscape-with-colorful-rainbow-appearing-sky_23-2151521474.jpg?t=st=1724865143~exp=1724868743~hmac=d4a6ca523e55df725eb4368d41ffffb5626900c275745fc87ad793b2b9d70e67&w=1060);
        }
    </style>
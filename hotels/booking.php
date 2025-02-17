<?php include("../T24vitAdmin/control/conn.php");
$id = mysqli_real_escape_string($conn, $_GET["id"]);
if (empty($id)) {
    die('Invalid URL');
}
if (isset($_GET['checkin']) && isset($_GET['checkout'])) {
    $checkin = mysqli_real_escape_string($conn, $_GET['checkin']);
    $checkout = mysqli_real_escape_string($conn, $_GET['checkout']);
    $booking_data = "&checkin=" . $checkin . "&checkout=" . $checkout;
} else {
    $booking_data = "";
}
?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/select2.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
        rel="stylesheet">

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
            border: 1px solid #092f1f;
            /* Border color */
            border-radius: 5px;
            /* Rounded corners */
            color: #092f1f;
            /* Text color */
            text-decoration: none;
            /* No underline */
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transitions */
        }

        .pagination a:hover {
            background-color: #092f1f;
            /* Background on hover */
            color: #ffffff;
            /* Text color on hover */
        }

        .pagination a.active {
            background-color: #092f1f;
            /* Active page background */
            color: #ffffff;
            /* Active page text color */
            border-color: #092f1f;
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
<?php include("../header.php");
$service = mysqli_query($conn, "SELECT * FROM service_hotels WHERE status='active' AND room_id='$id'");
if (mysqli_num_rows($service) == 0) {
    echo '<script type="text/javascript">
            window.location.href = "../";
          </script>';
    exit();
}
$services = mysqli_fetch_assoc($service);
$vendor_uid = $services['vendor_uid'];
$vendor = mysqli_query($conn, "SELECT * FROM vendor_service WHERE `status`='active' AND vendor_uid = '$vendor_uid' AND service_type = 'Hotel' ");
$vendors = mysqli_fetch_array($vendor);
$vendor1 = mysqli_query($conn, "SELECT  * FROM vendor WHERE `uid`='" . $services["vendor_uid"] . "' ");
$vendors1 = mysqli_fetch_array($vendor1);
?>
<title><?php echo ucwords(str_replace("-", " ", $services["hotel_name"])); ?> - Trip24</title>
<style>
    /* .bg-white {
        --bs-bg-opacity: 1;
        background-color: #c7d7ff !important;
    } */

    .bread-bg {
        background-image: url(https://img.freepik.com/free-photo/table-texture-looking-out-building_23-2147701336.jpg?t=st=1739624406~exp=1739628006~hmac=893113c6f074c2b2de581ffbf6e718734e6e05bdd32235de82e4d08a05cff157&w=900);
    }

    @media (min-width: 992px) {
        .sidebar {
            position: sticky;
            top: 90px;
            /* Adjust this value if needed */
        }
    }
</style>
<section class="breadcrumb-area bread-bg" style="padding: 10rem 0 8rem 0;">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2 class="sec__title text-black mb-3"><?php echo ucwords(str_replace("-", " ", $services["hotel_name"])); ?></h2>
        </div>
    </div>
</section>
<!-- end breadcrumb-area -->
<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area padding-top-60px  padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="listing-wrapper">
                    <!-- end listing-single-panel -->
                    <div class="listing-single-panel mb-5">
                        <!-- <h4 class="font-size-20 font-weight-semi-bold mb-3">Photos</h4> -->
                        <div class="gallery-carousel owl-carousel owl-theme">
                            <div class="gallery-item">
                                <img src="../../images/uploads/<?php echo $services["banner"]; ?>" alt="gallery-image" />
                            </div>
                            <?php
                            $gallery = mysqli_query($conn, "SELECT * FROM service_hotel_gallery where hotel_id='$id'");
                            while ($gallerys = mysqli_fetch_array($gallery)) {
                            ?>
                                <div class="gallery-item">
                                    <img src="../../images/uploads/<?php echo $gallerys["image"]; ?>" alt="gallery-image" />
                                </div>
                            <?php } ?>
                            <!-- <div class="gallery-item">
                                <img src="https://pix8.agoda.net/hotelImages/1147232/-1/1495ef0fd8db259d68eb8e81e9c03372.jpg?ca=20&ce=0&s=1024x" alt="gallery-image" />
                            </div>
                            <div class="gallery-item">
                                <img src="https://pix8.agoda.net/hotelImages/1147232/-1/261d547ff6ba2cfa3392cf582d0e7800.jpg?ca=20&ce=0&s=1024x" alt="gallery-image" />
                            </div>
                            <div class="gallery-item">
                                <img src="https://pix8.agoda.net/hotelImages/1147232/-1/c65bfec17e38846a04b9a05a57d2711f.jpg?ca=20&ce=0&s=1024x" alt="gallery-image" />
                            </div> -->
                        </div>
                    </div>
                    <!-- end listing-single-panel -->
                    <div class="listing-single-panel mb-5">
                        <div class="card col-lg-12">
                            <div class="card-body">
                                <span class="badge  badge-pill" style='color:red; font-size:30px; float: right; '>&#8377;<?php echo $services["price"]; ?>/<span style="color:black; font-size:10px; ">&nbsp;<?php echo $services["price_unit"]; ?></span> </span>
                                <!-- <button class="theme-btn border-0 w-30" type="submit" style="float:right; border-radius: 30px; ">
                                            View This Del
                                        </button> -->
                                <h4 class="font-size-30 font-weight-semi-bold mb-4 card-title ">
                                    <?php echo ucwords(str_replace("-", " ", $services["hotel_name"])); ?>
                                </h4>
                                <div class="row media mt-4">
                                    <p>
                                        <?php echo $vendors["service_address"] ?> <?php echo $vendors["service_city"] ?> , <?php echo $vendors["service_state"] ?>-<?php echo $vendors["service_pincode"] ?>
                                    </p>
                                </div>
                                <div class="row media mt-4">
                                    <h6>
                                        <?php echo $services["amenities"]; ?>
                                    </h6>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end row -->
                    </div>
                    <style>
                        .room-card {
                            border: 1px solid #ddd;
                            border-radius: 10px;
                            overflow: hidden;
                            margin-bottom: 20px;
                            margin-top: 10px;
                            padding: 15px;
                            position: relative;
                        }

                        .room-image img {
                            width: 100px;
                            height: 70px;
                            border-radius: 5px;
                            cursor: pointer;
                        }

                        .selected {
                            border: 2px solid green;
                        }

                        /* 
                        .sold-out {
                            background-color: #e0e0e0;
                            pointer-events: none;
                            opacity: 0.6;
                        } */

                        .selected-category {
                            background: linear-gradient(90deg, #aaa, #ddd);
                            padding: 10px;
                            font-weight: bold;
                            border-radius: 5px;
                            display: flex;
                            align-items: center;
                        }

                        .theme-btn {
                            float: right;
                        }

                        .room-card {
                            border: 1px solid #ddd;
                            border-radius: 10px;
                            overflow: hidden;
                            margin-bottom: 20px;
                            padding: 15px;
                            position: relative;
                        }

                        .room-image img {
                            width: 100px;
                            height: 70px;
                            border-radius: 5px;
                            cursor: pointer;
                        }

                        .modal-img {
                            max-width: 100%;
                            border-radius: 10px;
                        }

                        .modal-content {
                            background: rgba(0, 0, 0, 0.9);
                            color: white;
                        }

                        .carousel-control-prev,
                        .carousel-control-next {
                            width: 5%;
                        }
                    </style>
                    <div class="container mt-4">
                        <h2 class="mb-3">Choose your room</h2>

                        <div class="selected-category">
                            <span>&#11088; SELECTED CATEGORY</span>
                        </div>

                        <div class="room-card selected">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>SPOT ON NON-AC <span class="text-success">&#10004;</span></h5>
                                    <p>Room size: 9 sqm</p>
                                    <p>
                                        <i class="bi bi-tv" style="font-size: 20px;"></i> TV &nbsp;
                                        <i class="bi bi-wind" style="font-size: 20px;"></i> AC
                                    </p>

                                    <h5>
                                        ₹6554 <del class="text-danger">₹21333</del>
                                        <small class="text-muted">+ ₹1213 taxes & fee</small>
                                    </h5>
                                </div>
                                <div class="room-image">
                                    <img src="https://img.freepik.com/free-photo/bed-arrangements-still-life_23-2150533003.jpg?t=st=1739627366~exp=1739630966~hmac=8ad4bcb5d6a4393b33dd84f91c237ff9e834eb63a45400cd6d20f5b4599ee701&w=1060" alt="Room Image" onclick="openSlider(0)">
                                </div>
                            </div>
                            <button class="theme-btn w-60 mt-2  text-white"> Selected</button>
                        </div>

                        <div class="room-card sold-out">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>Classic</h5>
                                    <p>Room size: 9 sqm</p>
                                    <p>
                                        <i class="bi bi-wind"></i> AC &nbsp;
                                        <i class="bi bi-tv"></i> TV
                                    </p>
                                    <h5>
                                        ₹6554 <del class="text-danger">₹17472</del>
                                        <small class="text-muted">+ ₹1213 taxes & fee</small>
                                    </h5>
                                </div>
                                <div class="room-image">
                                    <img src="https://img.freepik.com/free-photo/bedroom-decor-with-potted-plants_23-2149428016.jpg?t=st=1739630073~exp=1739633673~hmac=211d0e9ac92c5658ccb87d6ae2724ee2ab0290b683b3467929c51424aaedc60c&w=1060" alt="Room Image" onclick="openSlider(1)">
                                </div>
                            </div>
                            <button class="btn btn-secondary w-60 mt-2  text-white" disabled style="float:right;"> Sold Out</button>

                        </div>
                    </div>
                    <!-- image modal -->
                    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://img.freepik.com/free-photo/bed-arrangements-still-life_23-2150533003.jpg" class="d-block w-100 modal-img" alt="Room Image">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://img.freepik.com/free-photo/bedroom-decor-with-potted-plants_23-2149428016.jpg?t=st=1739630073~exp=1739633673~hmac=211d0e9ac92c5658ccb87d6ae2724ee2ab0290b683b3467929c51424aaedc60c&w=1060" class="d-block w-100 modal-img" alt="Room Image">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>
                        </div>
                    </div>


                    <!-- image modal slider -->

                    <script>
                        function openSlider(index) {
                            var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
                            var carousel = document.getElementById('roomCarousel');
                            var carouselInstance = bootstrap.Carousel.getInstance(carousel) || new bootstrap.Carousel(carousel);

                            carouselInstance.to(index);
                            myModal.show();
                        }
                    </script>

                    <div class="listing-single-panel mb-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                    Contact Details
                                </h4>
                                <!--     <div
                                id="map-single"
                                data-latitude="32.243187"
                                data-longitude="77.189176"
                                class="w-100 height-300"></div> -->
                                <?php if (!empty($services["map"])) { ?>
                                    <iframe src="<?php echo $services["map"]; ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <?php } ?>
                                <ul class="list-items mt-4">
                                    <li>
                                        <span
                                            class="fal fa-map-marker-alt icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                        <?php echo $vendors["service_address"] ?> <?php echo $vendors["service_city"] ?> , <?php echo $vendors["service_state"] ?>-<?php echo $vendors["service_pincode"] ?>
                                    </li>
                                    <li>
                                        <span
                                            class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="mailto:<?php echo $vendors["service_email"]; ?>"><?php echo $vendors["service_email"]; ?></a>
                                    </li>
                                    <li>
                                        <span
                                            class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="tel:<?php echo $vendors["service_no"]; ?>">
                                            <?php echo $vendors["service_no"]; ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Booking</h4>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <span class="fal fa-calendar-alt form-icon"></span>
                                    <input class="form-control form--control date-picker" type="text" placeholder="Check-in Date" value="<?php echo isset($_GET['checkin']) ? htmlspecialchars($_GET['checkin']) : '' ?>" name="checkin" required />
                                </div>
                                <div class="form-group">
                                    <span class="fal fa-calendar-alt form-icon"></span>
                                    <input class="form-control form--control date-picker" type="text" placeholder="Check-out Date" value="<?php echo isset($_GET['checkout']) ? htmlspecialchars($_GET['checkout']) : '' ?>" name="checkout" required />
                                </div>
                                <div class="quantity-wrap d-flex align-items-center justify-content-between mb-3">
                                    <p class="text-black"><i class="fal fa-user me-1"></i> Guest:</p>
                                    <div class="quantity-box d-flex align-items-center">
                                        <a href="javascript:void(0)" class="qtyBtn qtyDec"><i class="fal fa-minus"></i></a>
                                        <input class="qtyInput" type="number" name="guest" value="1" required />
                                        <a href="javascript:void(0)" class="qtyBtn qtyInc"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Assume price per night is fixed for simplicity -->
                                <input type="hidden" name="price_per_night" value="<?php echo $services["price"]; ?>" />
                                <button type="submit" class="theme-btn border-0 w-100 text-white" name="add_to_cart">Book Now</button>
                            </form>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card --->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Vendor Details</h4>
                            <div class="media mt-4">
                                <!-- <img
                                        src="images/small-team1.jpg"
                                        alt="avatar"
                                        class="user-avatar flex-shrink-0 me-3" /> -->
                                <div class="media-body align-self-center" style="width:100%">
                                    <h4 class="font-size-18 font-weight-semi-bold mb-1" style="text-align:center;">
                                        <a href="user-modify-your-booking" class="btn-link text-black"><?php echo $vendors1["vendor_name"]; ?></a>
                                    </h4>
                                    <p style="
    color: #808996;
    font-size: 15px;
    font-weight: 500;
    text-align: center;
"> <?php echo $vendors1["business_name"]; ?> (<?php echo $vendors1["gst_no"]; ?>)</p>
                                    <ul class="list-items mt-4">
                                        <li>
                                            <span
                                                class="fal fa-map-marker-alt icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                            <?php echo $vendors1["address"] ?> <?php echo $vendors1["city"] ?> , <?php echo $vendors1["state"] ?>-<?php echo $vendors1["pincode"] ?>
                                        </li>
                                        <li>
                                            <span
                                                class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="mailto:<?php echo $vendors1["email_id"]; ?>"><?php echo $vendors1["email_id"]; ?></a>
                                        </li>
                                        <li>
                                            <span
                                                class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="tel:<?php echo $vendors1["mobile_no"]; ?>">
                                                <?php echo $vendors1["mobile_no"]; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <ul class="list-items mt-4">
                                    <li>
                                        <span
                                            class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="mailto:rahul@gmail.com">rahul@gmail.com</a>
                                    </li>
                                    <li>
                                        <span
                                            class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                        +7(111)123456789
                                    </li>
                                </ul> -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end sidebar -->
            </div>
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<?php
include "../footer.php";
?>
<!-- Template JS Files -->
<script src="https://work.prcptnvt.site/trip24/js/jquery-3.7.1.min.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/bootstrap.bundle.min.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/select2.min.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/owl.carousel.min.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/jquery.lazy.min.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/jquery.fancybox.min.js"></script>
<!-- Start google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_my4aX1ULOXNZcIxmpBnJmVF7U544p2k"></script>
<script src="https://work.prcptnvt.site/trip24/js/maps.js"></script>
<!-- End google map -->
<script src="https://work.prcptnvt.site/trip24/js/jquery.MultiFile.min.js"></script>
<!-- Start Date range picker -->
<script src="https://work.prcptnvt.site/trip24/js/moment.min.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/daterangepicker.min.js"></script>
<!-- end Date range picker -->
<script src="https://work.prcptnvt.site/trip24/js/rating-script.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/main.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/particles.min.js"></script>
<script src="https://work.prcptnvt.site/trip24/js/particles-script.js"></script>
</body>

</html>
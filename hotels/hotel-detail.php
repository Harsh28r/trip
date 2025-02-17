<?php include("../T24vitAdmin/control/conn.php");
$id = mysqli_real_escape_string($conn, $_GET["id"]);
if (empty($id)) {
    die('Invalid URL');
}
?>

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
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../css/jquery.fancybox.css" />
    <link rel="stylesheet" href="../css/daterangepicker.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
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
<?php include("../header.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);


$service = mysqli_query($conn, "select * from service_hotels where status='active' and room_id='$id'");
//echo mysqli_error($conn);
$services = mysqli_fetch_assoc($service);
$vendor_uid = $services['vendor_uid'];
$vendor = mysqli_query($conn, "select * from vendor_service where status='active' AND vendor_uid = '$vendor_uid' AND service_type = 'Hotel' ");
$vendors = mysqli_fetch_array($vendor);
$vendor1 = mysqli_query($conn, "select * from vendor where uid='" . $services["vendor_uid"] . "' ");
$vendors1 = mysqli_fetch_array($vendor1);

?>
<title>Hotel Details-Trip24</title>
<style>
    .bg-white {
        --bs-bg-opacity: 1;
        background-color: #c7d7ff !important;
    }

    .bread-bg {
        background-image: url(https://img.freepik.com/free-photo/landscape-with-colorful-rainbow-appearing-sky_23-2151521474.jpg?t=st=1724865143~exp=1724868743~hmac=d4a6ca523e55df725eb4368d41ffffb5626900c275745fc87ad793b2b9d70e67&w=1060);
    }
</style>
<section class="breadcrumb-area bread-bg">
    <div id="particles-js"></div>
    <!-- <div class="overlay"></div> -->
    <!-- end overlay -->
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2 class="sec__title text-white mb-3">Hotel Details</h2>
            <!-- <ul style="color: white;" class="bread-list text-dark">
                    <li><a href="index" style="color: white;" ;>Home</a></li>
                    <li style="color: white;" ;>Hotel Details</li>
                </ul> -->
        </div>
        <!-- end breadcrumb-content -->
    </div>
</section>
<!-- end breadcrumb-area -->
<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area padding-top-60px padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="listing-wrapper">
                    <!-- end listing-single-panel -->
                    <div class="listing-single-panel mb-5">
                        <!-- <h4 class="font-size-20 font-weight-semi-bold mb-3">Photos</h4> -->
                        <div class="gallery-carousel owl-carousel owl-theme">
                            <div class="gallery-item">
                                <img src="../images/uploads/<?php echo $services["banner"]; ?>" alt="gallery-image" />
                            </div>
                            <?php
                            $gallery = mysqli_query($conn, "select * from service_hotel_gallery where hotel_id='$id'");
                            while ($gallerys = mysqli_fetch_array($gallery)) {
                            ?>
                                <div class="gallery-item">
                                    <img src="../images/uploads/<?php echo $gallerys["image"]; ?>" alt="gallery-image" />
                                </div>
                            <?php } ?>
                            <!--  <div class="gallery-item">
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
                    <div class="listing-single-panel mb-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                    Features
                                </h4>
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <ul class="list-items">
                                            <li>
                                                <img src="icons/wifi.png" height="26px;" alt="" srcset="">&nbsp;Room Type: <?php echo $services["room_type"]; ?></img>
                                            </li>
                                            <li>
                                                <img src="icons/wifi.png" height="26px;" alt="" srcset="">&nbsp;Person ALlowed: <?php echo $services["person"]; ?></img>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
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
                    <div
                        class="author-verified bg-success p-3 rounded text-white text-center mb-4"
                        data-bs-toggle="tooltip"
                        data-placement="top"
                        title="Listing has been verified and belongs the business owner or manager">
                        <i class="far fa-check me-2"></i>
                        Verified Listing
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Booking</h4>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <span class="fal fa-calendar-alt form-icon"></span>
                                    <input class="form-control form--control date-picker" type="text" placeholder="Check-in Date" name="checkin" required />
                                </div>
                                <div class="form-group">
                                    <span class="fal fa-calendar-alt form-icon"></span>
                                    <input class="form-control form--control date-picker" type="text" placeholder="Check-out Date" name="checkout" required />
                                </div>
                                <!--  <div class="form-group">
            <span class="fal fa-user-alt form-icon"></span>
            <input class="form-control form--control" type="text" placeholder="Name" name="name" required />
        </div> -->
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
                                <?php if (!empty($_SESSION['user_id'])) { ?>
                                    <button type="submit" class="theme-btn w-100" name="add_to_cart">Add to Cart</button>
                                <?php } else {
                                    $_SESSION['hotel_id'] = $id;
                                ?>
                                    <a href="login.php" class="theme-btn w-100">Add to Cart</a>
                                <?php } ?>
                            </form>
                            <!-- <div class="form-group">
                                    <span class="fal fa-calendar-alt form-icon"></span>
                                    <input
                                        class="form-control form--control date-picker"
                                        type="text"
                                        placeholder="Date" />
                                </div>
                                <div class="form-group">
                                    <span class="fal fa-calendar-alt form-icon"></span>
                                    <input
                                        class="form-control form--control date-picker"
                                        type="text"
                                        placeholder="Date" />
                                </div>
                                <div class="form-group">
                                    <span class="fal fa-user-alt form-icon"></span>
                                    <input
                                        class="form-control form--control "
                                        type="text"
                                        placeholder="Name" />
                                </div>
                                <div
                                    class="quantity-wrap d-flex align-items-center justify-content-between mb-3">
                                    <p class="text-black">
                                        <i class="fal fa-user me-1"></i> Guest:
                                    </p>
                                    <div class="quantity-box d-flex align-items-center">
                                        <a href="javascript:void(0)" class="qtyBtn qtyDec"><i class="fal fa-minus"></i></a>
                                        <input
                                            class="qtyInput"
                                            type="text"
                                            name="qty-input"
                                            value="0" />
                                        <a href="javascript:void(0)" class="qtyBtn qtyInc"><i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                                <!-- end quantity-wrap --
                                <a href="modify-your-booking" class="theme-btn w-100">Request To Book</a> -->
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
<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.lazy.min.js"></script>
<script src="../js/jquery.fancybox.min.js"></script>
<!-- Start google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_my4aX1ULOXNZcIxmpBnJmVF7U544p2k"></script>
<script src="../js/maps.js"></script>
<!-- End google map -->
<script src="../js/jquery.MultiFile.min.js"></script>
<!-- Start Date range picker -->
<script src="../js/moment.min.js"></script>
<script src="../js/daterangepicker.min.js"></script>
<!-- end Date range picker -->
<script src="../js/rating-script.js"></script>
<script src="../js/main.js"></script>
<script src="../js/particles.min.js"></script>
<script src="../js/particles-script.js"></script>
</body>

</html>
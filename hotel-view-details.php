<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hotel Details-Trip24</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" />
    <link rel="stylesheet" href="css/daterangepicker.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->
    <?php
    include("header.php");
    ?>
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <style>
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
                                    <img src="https://pix8.agoda.net/hotelImages/1147232/-1/19dcbbb6f3fbd974bca23186d5012106.jpg?ca=20&ce=0&s=1024x" alt="gallery-image" />
                                </div>
                                <div class="gallery-item">
                                    <img src="https://pix8.agoda.net/hotelImages/1147232/-1/1495ef0fd8db259d68eb8e81e9c03372.jpg?ca=20&ce=0&s=1024x" alt="gallery-image" />
                                </div>
                                <div class="gallery-item">
                                    <img src="https://pix8.agoda.net/hotelImages/1147232/-1/261d547ff6ba2cfa3392cf582d0e7800.jpg?ca=20&ce=0&s=1024x" alt="gallery-image" />
                                </div>
                                <div class="gallery-item">
                                    <img src="https://pix8.agoda.net/hotelImages/1147232/-1/c65bfec17e38846a04b9a05a57d2711f.jpg?ca=20&ce=0&s=1024x" alt="gallery-image" />
                                </div>
                            </div>
                        </div>
                        <!-- end listing-single-panel -->
                        <div class="listing-single-panel mb-5">
                            <div class="card col-lg-12">
                                <div class="card-body">
                                    <span class="badge  badge-pill" style='color:red; font-size:30px; float: right; '><span style="color:black; font-size:10px; ">&nbsp;from</span>&#8377;5999./ &nbsp; </span>
                                    <!-- <button class="theme-btn border-0 w-30" type="submit" style="float:right; border-radius: 30px; ">
                                            View This Del
                                        </button> -->
                                    <h4 class="font-size-30 font-weight-semi-bold mb-4 card-title ">
                                        Hotel Woodstock Inn
                                    </h4>
                                    <div class="row media mt-4">
                                        <p>
                                            Left Bank Aleo, Naggar Highway, Aleo, Manali, India, 175131
                                        </p>
                                    </div>
                                    <div class="row media mt-4">
                                        <h6>
                                            The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Aleo, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Cafe 1986.
                                        </h6>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="listing-single-panel mb-5">
                            <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                Features
                            </h4>
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <ul class="list-items">
                                        <li>
                                            <img src="icons/wifi.png" height="26px;" alt="" srcset="">&nbsp;Wifi</img> &nbsp;<img src="icons/air-conditioner.png" height="26px;" alt="" srcset="">&nbsp;AC</img>&nbsp; <img src="icons/smart-tv.png" height="26px;" alt="" srcset="">&nbsp;TV</img><img src="icons/generator.png" height="26px;" alt="" srcset="">&nbsp;Power backup</img>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end col-lg-4 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="listing-single-panel mb-5">
                            <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                Location & Contact
                            </h4>
                            <div
                                id="map-single"
                                data-latitude="32.243187"
                                data-longitude="77.189176"
                                class="w-100 height-300"></div>
                            <ul class="list-items mt-4">
                                <li>
                                    <span
                                        class="fal fa-map-marker-alt icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                    789 Mountain View Lane, Manali, Himachal Pradesh
                                </li>
                                <li>
                                    <span
                                        class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="mailto:info@alpineheights.com">info@alpineheights.com</a>
                                </li>
                                <li>
                                    <span
                                        class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                    +91-9876543210
                                </li>
                            </ul>
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
                                <div class="form-group">
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
                                <!-- end quantity-wrap -->
                                <a href="modify-your-booking" class="theme-btn w-100">Request To Book</a>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Opening Hours</h4>
                                <ul class="list-items">
                                    <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Monday</span> 9am - 5pm
                                    </li>
                                    <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Tuesday</span> 9am - 5pm
                                    </li>
                                    <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Wednesday</span> 9am - 5pm
                                    </li>
                                    <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Thursday</span> 9am - 5pm
                                    </li>
                                    <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Friday</span> 9am - 5pm
                                    </li>
                                    <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Sat</span> 9am - 5pm
                                    </li>
                                    <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Sun</span>
                                        <span class="text-danger">Closed</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Vendor Details</h4>
                                <div class="media mt-4">
                                    <img
                                        src="images/small-team1.jpg"
                                        alt="avatar"
                                        class="user-avatar flex-shrink-0 me-3" />
                                    <div class="media-body align-self-center">
                                        <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                            <a href="user-modify-your-booking" class="btn-link text-black">Rahul Kumar</a>
                                        </h4>
                                        <p class="font-size-14">20 listing hosted</p>
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
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->
    <?php
    include("footer.php");
    ?>
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
    <!-- end modal -->
    <div
        class="modal fade modal-container"
        id="shareModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="shareModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <h5 class="modal-title" id="shareModalTitle">Share Business</h5>
                    <button
                        type="button"
                        class="btn-close close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true" class="fal fa-times"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-3">
                        <button
                            class="theme-btn flex-grow-1 mx-1 bg-primary"
                            type="button">
                            <i class="fab fa-facebook-f me-2"></i> Share on Facebook
                        </button>
                        <button
                            class="theme-btn flex-grow-1 mx-1 bg-success"
                            type="button">
                            <i class="fab fa-twitter me-2"></i> Share on Twitter
                        </button>
                    </div>
                    <div class="copy-to-clipboard mb-3 mx-1">
                        <span class="text-success-message">Link Copied!</span>
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control form--control copy-input ps-3"
                                value="https://www.dirto.com/share/101WxMB0oac1hVQQ==/" />
                            <div class="input-group-append">
                                <a href="javascript:void(0)" class="theme-btn copy-btn">Copy</a>
                            </div>
                        </div>
                    </div>
                    <!-- end copy-to-clipboard -->
                    <div class="d-flex align-items-center mb-3">
                        <hr class="border-top-gray flex-grow-1" />
                        <span class="bg-white text-uppercase mx-2 font-size-14">or</span>
                        <hr class="border-top-gray flex-grow-1" />
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <span class="fal fa-user form-icon"></span>
                            <input
                                type="text"
                                class="form-control form--control"
                                placeholder="Your name" />
                        </div>
                        <div class="form-group">
                            <span class="fal fa-envelope form-icon"></span>
                            <input
                                type="email"
                                class="form-control form--control"
                                placeholder="Your email" />
                        </div>
                        <div class="form-group">
                            <span class="fal fa-envelope form-icon"></span>
                            <input
                                type="email"
                                class="form-control form--control"
                                placeholder="To: Email address" />
                        </div>
                        <div class="form-group">
                            <textarea
                                class="form-control form--control ps-3"
                                rows="4"
                                name="message"
                                placeholder="Add a note (optional)"></textarea>
                        </div>
                        <button type="submit" class="theme-btn w-100">
                            Share <i class="fal fa-long-arrow-right ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div
        class="modal fade modal-container"
        id="reportModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="reportModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <h5 class="modal-title" id="reportModalTitle">Report Business</h5>
                    <button
                        type="button"
                        class="btn-close close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true" class="fal fa-times"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="font-size-15 pb-3">
                        Flagged content is reviewed by Dirto staff to determine whether it
                        violates Terms of Service or Community Guidelines. If you have a
                        question or technical issue, please contact our
                        <a href="modify-your-booking" class="btn-link">Support team here <i class="fal fa-angle-right ms-1"></i></a>
                    </p>
                    <form method="post">
                        <div class="form-group select2-container-wrapper">
                            <label class="label-text">Issue type</label>
                            <select class="select-picker" data-width="100%" data-size="5">
                                <option value="0">Select an issue</option>
                                <option value="1">Inappropriate listing Content</option>
                                <option value="2">Inappropriate Behavior</option>
                                <option value="3">Dirto Policy Violation</option>
                                <option value="4">Spammy Content</option>
                                <option value="5">Rude behavior with customer</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-text">Issue details</label>
                            <textarea
                                class="form-control form--control ps-3"
                                rows="4"
                                name="message"
                                placeholder="Explain report issue as clear as possible"></textarea>
                        </div>
                        <button type="submit" class="theme-btn w-100">
                            Report Listing <i class="fal fa-long-arrow-right ms-2"></i>
                        </button>
                        <p class="font-size-13 pt-1 text-center">
                            <span class="text-warning">Warning:</span> You can be banned for
                            violent messages.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Template JS Files -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- Start google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_my4aX1ULOXNZcIxmpBnJmVF7U544p2k"></script>
    <script src="js/maps.js"></script>
    <!-- End google map -->
    <script src="js/jquery.MultiFile.min.js"></script>
    <!-- Start Date range picker -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.min.js"></script>
    <!-- end Date range picker -->
    <script src="js/rating-script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particles-script.js"></script>
</body>

</html>
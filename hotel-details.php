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

    <!-- <style>
        .bread-bg {
            background-image: url(https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850_640.jpg);
        }

        .bread-list li {
            color: black;
        }
    </style> -->


    <section class="blog-area padding-top-140px padding-bottom-10px" style="background-color: #2984d1;">
        <div id="particles-js"></div>

        <div class="container">
            <section class="listing-area">
                <div class="fs-container d-flex">
                    <div class="fs-container-item w-100 px-3 pb-5">
                        <form action="">
                            <div class="card">
                                <div class="card-body row pb-0">
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pe-lg-0">
                                        <div class="form-group select2-container-wrapper">
                                            <select class="select-picker" data-width="100%" data-size="5">
                                                <span class="fal fa-map-marker-alt form-icon"></span>

                                                <option value>Manali </option>
                                                <option value="1">Snow Valley Resorts & Spa Manali, Manali, Himachal Pradesh, India</option>
                                                <option value="2">Manuallaya The Resort Spa in the Himalayas, Manali, Himachal Pradesh, India</option>
                                                <option value="2">Serenity Resort & Spa By Dls Hotels, Manali, Himachal Pradesh, India</option>
                                            </select>
                                        </div>
                                        <!-- end form-group -->
                                    </div>

                                    <div class="col-lg-2 pe-lg-0">
                                        <div class="form-group">
                                            <span class="fal fa-calendar-alt form-icon"></span>
                                            <input
                                                class="form-control form--control date-picker"
                                                type="text"
                                                placeholder="Date" />
                                        </div>
                                    </div>
                                    <div class="col-lg-2 pe-lg-0">
                                        <div class="form-group">
                                            <span class="fal fa-calendar-alt form-icon"></span>
                                            <input
                                                class="form-control form--control date-picker"
                                                type="text"
                                                placeholder="Date" />
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-2 pe-lg-0 quantity-wrap d-flex align-items-center justify-content-between mb-3">
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

                                    <!-- end col-lg-3 -->

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <button class="theme-btn border-0 w-100" type="submit">
                                                Update
                                            </button>
                                        </div>
                                        <!-- end form-group -->
                                    </div>

                                    <!-- end col-lg-3 -->
                                </div>
                                <!-- end card-body -->
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- end container -->
    </section>

    <!-- ================================
    START CARD AREA
================================= -->
    <section class="card-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
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
                        <div class="listing-single-panel mb-5">
                            <div class="card col-lg-12">
                                <div class="card-body">
                                    <span class="badge  badge-pill" style='color:red; font-size:30px; float: right; '><span style="color:black; font-size:10px; ">&nbsp;from</span>&#8377;5999./ &nbsp;<button class="theme-btn border-0 w-30" type="submit" style="float:right; border-radius: 30px; ">
                                            View This Del
                                        </button> </span>


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
                                            The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Aleo, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Cafe 1986. This 3-star property features restaurant to make your stay more indulgent and memorable.
                                        </h6>
                                    </div>

                                </div>
                                <!-- end card-body -->
                            </div>

                            <!-- end row -->
                        </div>

                        <div class="card col-lg-12">
                            <div class="card-body">
                                <h4 class="font-size-30 font-weight-semi-bold mb-4 card-title ">
                                    Highlights
                                </h4>
                                <div class="row media mt-4">
                                    <div class="col-lg-4">
                                        <ul class="list-items mt-4">
                                            <li>
                                                <img src="./icons/bus-stop.png" class="card-img-top  " style="height: 32px;" alt="card image" />
                                                Free High-Speed Wifi
                                            </li>
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Smart TV with Streaming Services
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <ul class="list-items">
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Air Conditioning in All Rooms
                                            </li>
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Secure Street Parking
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <ul class="list-items">
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Bike Rental Available
                                            </li>
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Accepts All Major Credit Cards
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>

                            </div>
                            <!-- end card-body -->
                        </div>

                        <!-- end row -->
                    </div>
                    <div class="listing-single-panel mb-5">
                        <div class="card col-lg-12">
                            <div class="card-body">
                                <h4 class="font-size-30 font-weight-semi-bold mb-4 card-title ">
                                    Facilities
                                </h4>
                                <div class="row media mt-4">
                                    <div class="col-lg-4">
                                        <ul class="list-items mt-4">
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Free High-Speed Wifi
                                            </li>
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Smart TV with Streaming Services
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <ul class="list-items">
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Air Conditioning in All Rooms
                                            </li>
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Secure Street Parking
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <ul class="list-items">
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Bike Rental Available
                                            </li>
                                            <li>
                                                <i class="fal fa-check-circle me-1 text-success"></i>
                                                Accepts All Major Credit Cards
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end col-lg-4 -->
                                </div>

                            </div>
                            <!-- end card-body -->
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
        </div>
        <!-- end container -->
    </section>

    <section class="card-area section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="sec__title mb-3">Recommended Hotels in Manali</h2>
            </div>
            <div class="card-carousel owl-carousel owl-theme mt-5">
                <div class="card mb-0 hover-y">
                    <a href="hotel-details" class="card-image">
                        <img src="https://pix8.agoda.net/hotelImages/334793/-1/b6942fc6f98fbf1ea10ed0f4811be879.jpg?ca=7&ce=1&s=375x" class="card-img-top" alt="card image" />
                        <span class="badge text-bg-info badge-pill" style='color:white; font-size:20px; border-radius: 2px 13px 0px 4px; '>&#8377;5999</span>
                    </a>
                    <div class="card-body position-relative">

                        <div class="d-flex align-items-center mb-1">
                            <h4 class="card-title mb-0">
                                <a href="hotel-details">Hotel Chaman Palace</a>
                            </h4>

                        </div>
                        <p class="card-text">Fingask Estate Near Kali Bari Temple, Shimla City Center, Shimla, India, 171003 </p>

                    </div>
                    <!-- end card-body -->
                    <div
                        class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between">
                        <div class="star-rating" data-rating="5">
                            <div class="rating-counter">4 reviews</div>
                        </div>
                        <a href="#" class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                            data-bs-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="fal fa-bookmark"></i>
                        </a>
                    </div>
                    <!-- end card-footer -->
                </div>
                <div class="card mb-0 hover-y">
                    <a href="hotel-details" class="card-image">
                        <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/470419117.jpg?k=49264965aa38f3382b65b7bbd96f8fe35f798c6da374dfe3d866930c7c370db7&o=&s=1024x" class="card-img-top" alt="card image" />
                        <span class="badge text-bg-info badge-pill" style='color:white; font-size:20px; border-radius: 2px 13px 0px 4px; '>&#8377;5999</span>
                    </a>
                    <div class="card-body position-relative">

                        <div class="d-flex align-items-center mb-1">
                            <h4 class="card-title mb-0">
                                <a href="hotel-details">Zu-Zu Hostel</a>
                            </h4>

                        </div>
                        <p class="card-text">Zu-Zu Hostel, Prairie Lodge Building, Shimla City Center, Shimla, India, 171003 </p>

                    </div>
                    <!-- end card-body -->
                    <div
                        class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between">
                        <div class="star-rating" data-rating="5">
                            <div class="rating-counter">4 reviews</div>
                        </div>
                        <a href="#" class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                            data-bs-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="fal fa-bookmark"></i>
                        </a>
                    </div>
                    <!-- end card-footer -->
                </div>
                <div class="card mb-0 hover-y">
                    <a href="hotel-details" class="card-image">
                        <img src="https://pix8.agoda.net/hotelImages/25963437/-1/67ccee3ae4b0c101ebe9f2e4e450a400.jpg?ca=20&ce=0&s=375x" class="card-img-top" alt="card image" />
                        <span class="badge text-bg-info badge-pill" style='color:white; font-size:20px; border-radius: 2px 13px 0px 4px; '>&#8377;5999</span>
                    </a>
                    <div class="card-body position-relative">

                        <div class="d-flex align-items-center mb-1">
                            <h4 class="card-title mb-0">
                                <a href="hotel-details">The Village Submontane

                                </a>
                            </h4>

                        </div>
                        <p class="card-text">Next to River Bank, opposite Golden Tulip, Club House Road ,Old Manali, Old Manali, Manali, India, 175131 </p>

                    </div>
                    <!-- end card-body -->
                    <div
                        class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between">
                        <div class="star-rating" data-rating="5">
                            <div class="rating-counter">4 reviews</div>
                        </div>
                        <a href="#" class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                            data-bs-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="fal fa-bookmark"></i>
                        </a>
                    </div>
                    <!-- end card-footer -->
                </div>
                <div class="card mb-0 hover-y">
                    <a href="hotel-details" class="card-image">
                        <img src="https://pix8.agoda.net/hotelImages/1147232/-1/261d547ff6ba2cfa3392cf582d0e7800.jpg?ca=20&ce=0&s=375x" class="card-img-top" alt="card image" />
                        <span class="badge text-bg-info badge-pill" style='color:white; font-size:20px; border-radius: 2px 13px 0px 4px; '>&#8377;5999</span>
                    </a>
                    <div class="card-body position-relative">

                        <div class="d-flex align-items-center mb-1">
                            <h4 class="card-title mb-0">
                                <a href="hotel-details">Hotel Woodstock Inn

                                </a>
                            </h4>

                        </div>
                        <p class="card-text">Left Bank Aleo, Naggar Highway, Aleo, Manali, India, 175131 </p>

                    </div>
                    <!-- end card-body -->
                    <div
                        class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between">
                        <div class="star-rating" data-rating="5">
                            <div class="rating-counter">5 reviews</div>
                        </div>
                        <a href="#" class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                            data-bs-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="fal fa-bookmark"></i>
                        </a>
                    </div>
                    <!-- end card-footer -->
                </div>
            </div>
            <!-- end card-carousel -->
        </div>
        <!-- end container -->
    </section>


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
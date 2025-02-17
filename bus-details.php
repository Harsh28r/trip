<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bus Details-Trip24</title>

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
    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
            background-image: url(img/banner_banner.jpg);
        }
    </style>
    <section class="breadcrumb-area bread-bg">
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Bus Details</h2>
                <!-- <ul class="bread-list">
                    <li><a href="index">Home</a></li>
                    <li>Bus Details</li>
                </ul> -->
            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START CARD AREA
================================= -->
    <section class="card-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <div class="row">
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
                                    <span class="fal fa-user form-icon"></span>
                                    <input
                                        class="form-control form--control "
                                        type="text"
                                        placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <span class="fal fa-phone form-icon"></span>
                                    <input
                                        class="form-control form--control "
                                        type="text"
                                        placeholder="Contact" />
                                </div>
                                <div
                                    class="quantity-wrap d-flex align-items-center justify-content-between mb-3">
                                    <p class="text-black">
                                        <i class="fal fa-user me-1"></i> Persons:
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
                                <a href="bus-ticket-booking" class="theme-btn w-100">Request To Book</a>
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
                                            <a href="" class="btn-link text-black">Varun Kumar</a>
                                        </h4>
                                        <p class="font-size-14">20 listing hosted</p>
                                    </div>
                                </div>
                                <ul class="list-items mt-4">
                                    <li>
                                        <span
                                            class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="mailto:example@gmail.com">example@gmail.com</a>
                                    </li>
                                    <li>
                                        <span
                                            class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                        +91 123456789
                                    </li>

                                </ul>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->

                <div class="col-lg-8 mb-5">
                    <div class="blog-card-wrapper">
                        <div class="card hover-y">
                            <a href="#" class="card-image">
                                <img
                                    src="img/v-bus.jpg"
                                    alt="blog image"
                                    class="card-img-top lazy" />
                            </a>
                            <div class="card-body">
                                <h4 class="card-title font-size-30 font-weight-semi-bold">
                                    <a href="#">Om Ji Om Travels</a>
                                </h4>
                                <p class="card-text mt-3">
                                    Discover the beauty and adventure that await you with Hira Lal Singh & Sons Tour and Travel. Our family-run business has been providing top-notch travel services for over 30 years, ensuring that every journey is safe, comfortable, and unforgettable. Whether you're looking to explore the stunning landscapes of Himachal Pradesh, embark on a spiritual pilgrimage, or simply enjoy a relaxing getaway, we have the perfect travel packages tailored to your needs.
                                </p>
                                <div class="listing-single-panel mb-5">
                                    <br>
                                    <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                        Highlights
                                    </h4>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list-items">
                                                <li>
                                                    <i class="bi bi-geo-alt-fill"></i>
                                                    Route - Shimla ----- Hampi
                                                </li>
                                                <li>
                                                    <i class="bi bi-person-fill"></i>
                                                    Vendor Name - Hira Lal Singh
                                                </li>
                                                <li>
                                                    <i class="bi bi-currency-rupee"></i>
                                                    Fair - Rs 86 / Person
                                                </li>
                                                <li>
                                                    <i class="bi bi-calendar-event-fill"></i>
                                                    Customizable Itineraries Available
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>

                            </div>
                            <!-- end card-body -->
                        </div>
                    </div>
                </div>
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
</body>


</html>
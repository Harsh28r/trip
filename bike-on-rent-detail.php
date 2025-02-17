<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bike On Rent Details - Trip24</title>
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
    <style>
        .bread-bg {
            background-image: url(img/DSC_0535-min.jpg);
        }
    </style>

    <section class="breadcrumb-area bread-bg">
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Bike On Rent Details</h2>

            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
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
                                    <img src="https://img.freepik.com/free-photo/full-shot-man-with-motorbike-outdoors_23-2150620938.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid" alt="gallery-image" />
                                </div>
                                <div class="gallery-item">
                                    <img src="https://img.freepik.com/premium-photo/motorcycle-with-red_184808-6592.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid" alt="gallery-image" />
                                </div>
                                <div class="gallery-item">
                                    <img src="https://img.freepik.com/premium-photo/photo-touring-motorbike-rider_1197970-18087.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid" alt="gallery-image" />
                                </div>
                            </div>
                        </div>
                        <!-- end listing-single-panel -->
                        <div class="listing-single-panel mb-5">
                            <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                Hero Super Splendor 125cc
                            </h4>
                            <p>
                                The Hero Super Splendor 125cc is the perfect blend of power, efficiency, and comfort, making it an ideal choice for your travels. Whether you're navigating city streets or exploring scenic routes, this bike delivers a smooth and reliable ride. Equipped with a robust 125cc engine, it ensures you get the best fuel efficiency without compromising on performance.
                                <br><br>
                                Renting the Hero Super Splendor 125cc offers you the freedom to explore at your own pace, with the assurance of a well-maintained, top-quality vehicle. Our rental service is designed to provide you with a hassle-free experience, so you can focus on enjoying the journey. Book your ride today and experience the road like never before.
                            </p>

                        </div>
                        <div class="listing-single-panel mb-5">
                            <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                Highlights
                            </h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-items">
                                        <li>
                                            <i class="bi bi-geo-alt-fill"></i>
                                            Pickup Location - Avantpuram
                                        </li>
                                        <li>
                                            <i class="bi bi-person-fill"></i>
                                            Vendor Name - Vineet Kumar
                                        </li>

                                    </ul>
                                </div>

                                <!-- end col-lg-4 -->
                                <div class="col-lg-6">
                                    <ul class="list-items">
                                        <li>
                                            <i class="bi bi-currency-rupee"></i>
                                            Rent - 299 per Day
                                        </li>
                                        <!-- <li>
                                            <i class="fal fa-check-circle me-1 text-success"></i>
                                            Accepts Credit Cards
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- end col-lg-4 -->
                            </div>
                            <!-- end row -->
                        </div>

                    </div>
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">

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
                                    <span class="fas fa-user form-icon"></span>
                                    <input
                                        class="form-control form--control "
                                        type="text"
                                        placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <span class="fas fa-phone form-icon"></span>
                                    <input
                                        class="form-control form--control "
                                        type="number"
                                        placeholder="Contact" />
                                </div>
                                <!-- end quantity-wrap -->
                                <a href="#" class="theme-btn w-100">Book Now</a>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Pickup Hours</h4>
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
                        <!-- <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Vendor Details</h4>
                                <div class="media mt-4">
                                    <img
                                        src="images/small-team1.jpg"
                                        alt="avatar"
                                        class="user-avatar flex-shrink-0 me-3" />
                                    <div class="media-body align-self-center">
                                        <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                            <a href="user-modify-your-booking" class="btn-link text-black">Mark Hardson</a>
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
                                        +7(111)123456789
                                    </li>
                                    <li>
                                        <span
                                            class="fal fa-external-link icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="#">www.techydevs.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
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
</body>

</html>
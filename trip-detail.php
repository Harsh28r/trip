<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trip Details-Trip24</title>

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
            background-image: url(https://img.freepik.com/free-vector/realistic-travel-background-with-elements_52683-77784.jpg?t=st=1724354906~exp=1724358506~hmac=cd37b333c3e3e8eb4e8645c30989da106c07b4a26907622e882b0ce7b8b36023&w=996);
        }

        .bread-list li {
            color: black;
        }
    </style>


    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="container">
            <div class="breadcrumb-content text-center text-black">
                <h2 class="sec__title text-black mb-3">Trip Details</h2>
                <ul class="bread-list ">
                    <li><a href="index" style="color:black">Home</a></li>
                    <li style="color:black;">Trip Details</li>
                </ul>
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
                <div class="col-lg-12 mb-6">
                    <div class="listing-wrapper">

                        <!-- end listing-single-panel -->
                        <div class="listing-single-panel mb-5">
                            <h4 class="font-size-30 font-weight-semi-bold mb-3">Trip Gallery</h4>
                            <div class="gallery-carousel owl-carousel owl-theme">
                                <div class="gallery-item">
                                    <img src="https://cdn.pixabay.com/photo/2020/04/28/04/17/monastery-5102601_960_720.jpg" alt="gallery-image" />
                                </div>
                                <div class="gallery-item">
                                    <img src="https://media.istockphoto.com/id/1341238075/photo/two-male-friends-looking-at-camera-with-sitting-on-stairs-of-buddhist-temple-in-tso-pema.jpg?s=612x612&w=0&k=20&c=JWWFaPKONTD9bPaANKUedF20F9pTTnzz6rOFCpRSK8A=" alt="gallery-image" />
                                </div>
                                <div class="gallery-item">
                                    <img src="https://media.istockphoto.com/id/1183549737/photo/two-lamas-are-passing-by-the-great-halls-of-langmusi-monasteries-of-tibetan-buddhism-in-qulu.jpg?s=612x612&w=0&k=20&c=QvNNYYCLXnSrO6b-3ris1QPQ5ad0ePX9lkic8LwXFs0=" alt="gallery-image" />
                                </div>
                            </div>
                        </div>
                        <!-- end listing-single-panel -->
                        <div class="listing-single-panel mb-5">
                            <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                Manali Tour Package &nbsp; <i class="bi bi-geo-alt-fill"></i> Manali &nbsp; <i class="bi bi-currency-rupee"></i> 2999
                            </h4>
                            <br>
                            <h3 class="font-size-30 font-weight-semi-bold mb-3">Description</h3>
                            <p>
                                Experience the breathtaking beauty of Manali with our exclusive tour package. For just ₹2999, immerse yourself in the serene landscapes, lush greenery, and snow-capped mountains that make Manali a top travel destination. This package offers a perfect blend of adventure and relaxation, including visits to popular attractions, comfortable accommodations, and a taste of local culture. Whether you're seeking a thrilling adventure or a peaceful retreat, this Manali tour has something for everyone. Don't miss out on this unforgettable experience!
                            </p>
                        </div>
                        <div class="listing-single-panel mb-5">
                            <h4 class="font-size-30 font-weight-semi-bold mb-3">
                                Features
                            </h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="list-items">
                                        <li>
                                            <i class="fal fa-check-circle me-1 text-success"></i>
                                            Free Wi-Fi
                                        </li>
                                        <li>
                                            <i class="fal fa-check-circle me-1 text-success"></i>
                                            TV
                                        </li>
                                    </ul>
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <ul class="list-items">
                                        <li>
                                            <i class="fal fa-check-circle me-1 text-success"></i>
                                            Air Conditioning (AC)
                                        </li>
                                        <li>
                                            <i class="fal fa-check-circle me-1 text-success"></i>
                                            Street Parking
                                        </li>
                                    </ul>
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <ul class="list-items">
                                        <li>
                                            <i class="fal fa-check-circle me-1 text-success"></i>
                                            Bike Parking
                                        </li>
                                        <li>
                                            <i class="fal fa-check-circle me-1 text-success"></i>
                                            Accepts Credit Cards
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
                                data-latitude="40.728157"
                                data-longitude="-74.077644"
                                class="w-100 height-300"></div>
                            <p>Nearly 6 -7 hours drive from both Bangalore and Chennai.</p>

                            <!-- Google Maps Link - https://goo.gl/maps/VqKbjsd1ucbSnZu89 -->
                            <!-- <ul class="list-items mt-4">
                                <li>
                                    <span
                                        class="fal fa-map-marker-alt icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                    101 East Parkview Road, New York
                                </li>
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
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="listing-single-panel mb-5">
                <h4 class="font-size-30 font-weight-semi-bold mb-3">
                    Itinerary
                </h4>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="category-item d-block hover-y">
                            <div class="overlay"></div>
                            <img
                                src="https://cdn.pixabay.com/photo/2020/04/28/04/17/monastery-5102601_1280.jpg"
                                data-src="https://cdn.pixabay.com/photo/2020/04/28/04/17/monastery-5102601_1280.jpg"
                                alt="category-image"
                                class="category-img lazy" />
                            <div
                                class="category-content d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="cat-title my-3">Manali</h4>
                                </div>
                            </div>
                            <!-- end category-content -->
                        </a><!-- end category-item -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="category-item d-block hover-y">
                            <div class="overlay"></div>
                            <img
                                src="https://cdn.pixabay.com/photo/2017/10/25/18/32/military-high-school-2888844_640.jpg"
                                data-src="https://cdn.pixabay.com/photo/2017/10/25/18/32/military-high-school-2888844_640.jpg"
                                alt="category-image"
                                class="category-img lazy" />
                            <div
                                class="category-content d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="cat-title my-3">Kullu</h4>
                                </div>
                            </div>
                            <!-- end category-content -->
                        </a><!-- end category-item -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="category-item d-block hover-y">
                            <div class="overlay"></div>
                            <img
                                src="https://cdn.pixabay.com/photo/2021/01/09/22/27/shimla-5903633_640.jpg"
                                data-src="https://cdn.pixabay.com/photo/2021/01/09/22/27/shimla-5903633_640.jpg"
                                alt="category-image"
                                class="category-img lazy" />
                            <div
                                class="category-content d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="cat-title my-3">Shimla</h4>
                                </div>
                            </div>
                            <!-- end category-content -->
                        </a><!-- end category-item -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="category-item d-block hover-y">
                            <div class="overlay"></div>
                            <img
                                src="https://cdn.pixabay.com/photo/2020/02/04/19/02/manali-4819132_640.jpg"
                                data-src="https://cdn.pixabay.com/photo/2020/02/04/19/02/manali-4819132_640.jpg"
                                alt="category-image"
                                class="category-img lazy" />
                            <div
                                class="category-content d-flex align-items-center justify-content-center">
                                <div>
                                    <h4 class="cat-title my-3">Manali </h4>
                                </div>
                            </div>
                            <!-- end category-content -->
                        </a><!-- end category-item -->
                    </div>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->

    <!-- ================================
    START MOBILE AREA
================================= -->
    <section class="mobile-area section-padding bg-gray position-relative">
        <img src="images/symble1.png" alt="" class="symble-img" />
        <img src="images/symble2.png" alt="" class="symble-img" />
        <img src="images/symble3.png" alt="" class="symble-img" />
        <img src="images/symble4.png" alt="" class="symble-img" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 me-auto">
                    <div class="mobile-img my-4">
                        <img
                            src="images/road-trip-4399206_960_720.webp"
                            data-src="images/road-trip-4399206_960_720.webp"
                            alt="mobile-img"
                            class="lazy" />
                    </div>
                </div>
                <!-- end col-lg-5 -->
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h2 class="sec__title mb-3">
                                Why Book With <br />
                                Us?
                            </h2>
                            <p>Discover unparalleled travel experiences with us. From competitive pricing to exceptional customer support, we ensure your journey is nothing short of perfect. Choose from carefully curated tours and activities that cater to your interests and needs. Plus, travel worry-free with our complimentary insurance coverage.</p>
                            <br>
                        </div>
                        <!-- end section-heading -->
                        <ul class="info-list mobile-feature-list">
                            <li class="d-flex align-items-center mb-3">
                                <span class="fal fa-check icon me-2"></span> No-hassle best price guarantee
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <span class="fal fa-check icon me-2"></span> Customer care available 24/7
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <span class="fal fa-check icon me-2"></span> Hand-picked Tours & Activities
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <span class="fal fa-check icon me-2"></span>
                                Free Travel Insurance
                            </li>
                        </ul>
                        <div class="btn-box mt-4">
                            <a href="contact" class="theme-btn me-2 bg-info"><i class="fa fa-mobile" aria-hidden="true"></i> Call Now</a>
                            <a href="trip-booking-details" class="theme-btn bg-success"><i class="fa fa-address-book" aria-hidden="true"></i> Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="bread-svg">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none">
                <path
                    d="M-4.22,89.30 C280.19,26.14 324.21,125.81 511.00,41.94 L500.00,150.00 L0.00,150.00 Z"></path>
            </svg>
        </div>
        <!-- end bread-svg -->
    </section>
    <!-- end mobile-area -->
    <!-- ================================




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
<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hotel Booking</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
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

    <style>
        .hero-bg-2 {
            background-image: url(https://snow-valley-resorts-manali.booked.net/data/Photos/OriginalPhoto/14988/1498897/1498897717/Snow-Valley-Resorts-Spa-Manali-Exterior.JPEG);
        }
    </style>
    <section class="hero-wrapper hero-bg-2">
        <div id="particles-js"></div>
        <div class="overlay"></div>
        <!-- end overlay -->
        <div class="container position-relative z-index-2">
            <div class="hero-heading text-center  pt-4">
                <h2 class="sec__title text-white">What's Your Plan Today?</h2>
                <p class="sec__desc text-white">
                    All the top locations – from restaurants and clubs, to galleries,
                    famous .
                </p>
            </div>
            <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade show active" id="places" aria-labelledby="places-tab">
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

                            <div class="col-lg-3 pe-lg-0">
                                <div class="form-group">
                                    <span class="fal fa-calendar-alt form-icon"></span>
                                    <input
                                        class="form-control form--control date-picker"
                                        type="text"
                                        placeholder="Date" />
                                </div>
                            </div>
                            <div class="col-lg-3 pe-lg-0">
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
                            <center>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <button class="theme-btn border-0 w-100" type="submit">
                                            Search
                                        </button>
                                    </div>
                                    <!-- end form-group -->
                                </div>
                            </center>
                            <!-- end col-lg-3 -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>

            </div>
            <!-- end tab-content -->
        </div>
        <!-- end container -->
    </section>
    <!-- end hero-wrapper -->


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
                        <!-- <p class="card-text">Fingask Estate Near Kali Bari Temple, Shimla City Center, Shimla, India, 171003 </p> -->

                    </div>
                    <!-- end card-body -->
                    <!-- <div
                        class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between">
                        <div class="star-rating" data-rating="5">
                            <div class="rating-counter">4 reviews</div>
                        </div>
                        <a href="#" class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                            data-bs-toggle="tooltip" data-placement="top" title="Bookmark">
                            <i class="fal fa-bookmark"></i>
                        </a>
                    </div> -->
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

                    </div>
                    <!-- end card-body -->
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

                    </div>
                    <!-- end card-body -->
                    <!-- end card-footer -->
                </div>
            </div>
            <!-- end card-carousel -->
        </div>
        <!-- end container -->
    </section>


    <section class="listing-area">
        <div class="text-center">
            <h2 class="sec__title mb-3">Top Rated Hotels In Manali And Shimla</h2>
        </div>
        <br>
        <div class="fs-container d-flex">


            <div class="fs-container-item w-50 px-3 pb-5">
                <!-- end card -->
                <div class="listing-wrapper my-4">
                    <!-- <p class="pb-4">14 Results Found</p> -->
                    <div class="card card-flex">
                        <a href="hotel-details" class="card-image">

                            <img src="https://pix8.agoda.net/hotelImages/25963437/-1/67ccee3ae4b0c101ebe9f2e4e450a400.jpg?ca=20&ce=0&s=375x" class="card-img-top" alt="card image" />
                            <span class="badge text-bg-info badge-pill" style='color:white; font-size:20px; border-radius: 2px 13px 0px 4px; '>&#8377;5999</span>
                        </a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">

                                <!-- <a
                                    href="#"
                                    class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                                    data-bs-toggle="tooltip"
                                    data-placement="top"
                                    title="Bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </a> -->
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <h4 class="card-title mb-0">
                                    <a href="hotel-details">The Village Submontane</a>
                                </h4>
                                <i
                                    class="fa fa-check-circle ms-1 text-success"
                                    data-bs-toggle="tooltip"
                                    data-placement="top"
                                    title="Claimed"></i>
                            </div>
                            <p class="card-text">Next to River Bank, opposite Golden Tulip</p>

                            <button onclick="window.location.href='hotel-details';" class="btn btn-info btn-sm " style=" float: right;">View Del</button>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <div class="card card-flex">
                        <a href="hotel-details" class="card-image">

                            <img src="https://pix8.agoda.net/hotelImages/25963437/-1/67ccee3ae4b0c101ebe9f2e4e450a400.jpg?ca=20&ce=0&s=375x" class="card-img-top" alt="card image" />
                            <span class="badge text-bg-info badge-pill" style='color:white; font-size:20px; border-radius: 2px 13px 0px 4px; '>&#8377;5999</span>
                        </a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">


                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <h4 class="card-title mb-0">
                                    <a href="hotel-details">The Village Submontane</a>
                                </h4>
                                <i
                                    class="fa fa-check-circle ms-1 text-success"
                                    data-bs-toggle="tooltip"
                                    data-placement="top"
                                    title="Claimed"></i>
                            </div>
                            <p class="card-text">Next to River Bank, opposite Golden Tulip</p>

                            <button onclick="window.location.href='hotel-details';" class="btn btn-info btn-sm " style=" float: right;">View Del</button>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <div class="card card-flex">
                        <a href="hotel-details" class="card-image">

                            <img src="https://pix8.agoda.net/hotelImages/25963437/-1/67ccee3ae4b0c101ebe9f2e4e450a400.jpg?ca=20&ce=0&s=375x" class="card-img-top" alt="card image" />
                            <span class="badge text-bg-info badge-pill" style='color:white; font-size:20px; border-radius: 2px 13px 0px 4px; '>&#8377;5999</span>
                        </a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">


                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <h4 class="card-title mb-0">
                                    <a href="hotel-details">The Village Submontane</a>
                                </h4>
                                <i
                                    class="fa fa-check-circle ms-1 text-success"
                                    data-bs-toggle="tooltip"
                                    data-placement="top"
                                    title="Claimed"></i>
                            </div>
                            <p class="card-text">Next to River Bank, opposite Golden Tulip</p>

                            <button onclick="window.location.href='hotel-details';" class="btn btn-info btn-sm " style=" float: right;">View Del</button>

                        </div>
                        <!-- end card-body -->
                    </div>
                </div>
                <!-- end listing-wrapper -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-list">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="fal fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true" class="fal fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End fs-container-item -->
            <div
                class="fs-container-item fs-container-item-map w-50 position-sticky top-0 right-0 height-100vh">
                <div class="map-container h-100 h-100 w-70">
                    <div id="map" class="h-100 w-70"></div>
                </div>
            </div>
            <!-- End fs-container-item -->
        </div>
    </section>



    <?php
    include("footer.php");
    ?>
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- Template JS Files -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particles-script.js"></script>
    <!-- Start date range picker -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.min.js"></script>
    <!-- End date range picker -->
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/rating-script.js"></script>
    <script src="js/main.js"></script>




    <!-- Start google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_my4aX1ULOXNZcIxmpBnJmVF7U544p2k"></script>
    <script src="js/infobox.js"></script>
    <script src="js/markerclusterer.js"></script>
    <script src="js/maps.js"></script>
    <!-- End google map -->
    <script src="js/rating-script.js"></script>



</body>


</html>
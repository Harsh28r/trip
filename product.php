<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product-Trip24</title>
    <!-- Favicon
    <link rel="icon" href="images/favicon.png" /> -->

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
        .bread-bg {
            background-image: url(https://img.freepik.com/premium-photo/marble-table-with-leaves-shadow-stucco-wall-texture-background-suitable-product-presentation-backdrop-display-mock-up_1028938-335337.jpg?w=740);
        }
    </style>
    <section class="breadcrumb-area bread-bg">
        <!-- <div class="overlay"></div> -->
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Product On Rent</h2>
                <ul class="bread-list text-white">
                    <li><a href="index" ;>Home</a></li>
                    <li ;>Product On Rent</li>
                </ul>
            </div>
            <!-- end breadcrumb-content -->
        </div>

        <!-- end bread-svg -->
    </section>

    <section class=" dashboard-area padding-bottom-70px">
        <div class="bg-white shadow-sm py-4">
            <div class="container">
                <div class="dashboard-nav d-flex flex-wrap align-items-center justify-content-between">
                    <ul class="nav nav-tabs my-tabs my-tabs-2 justify-content-center my-1" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="listings-tab" data-bs-toggle="tab" href="#listings"
                                role="tab" aria-controls="listings" aria-selected="true">
                                <i class=" me-1 font-size-14"></i> Snow Suit
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="bookmarks-tab" data-bs-toggle="tab" href="#bookmarks" role="tab"
                                aria-controls="bookmarks" aria-selected="false">
                                <i class=" me-1 font-size-14"></i> Product2
                            </a>
                        </li>
                    </ul>
                    <!-- <div class="my-1">
                        <a href="add-listing"
                            class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium me-1"><i
                                class="fal fa-plus me-1"></i> Add listing</a>
                        <a href="index"
                            class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium"><i
                                class="fal fa-sign-out me-1"></i> Log out</a>
                    </div> -->
                </div>
            </div>
            <!-- end container -->
        </div>
        <div class="container">
            <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade show active" id="listings" role="tabpanel" aria-labelledby="listings-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sidebar">

                                <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Product Description</h4>
                                        <p style="text-align: justify;">
                                            Gear up for your snowy adventures with our premium snow suits available for rent. Designed to keep you warm and comfortable in the harshest winter conditions, our snow suits are perfect for skiing, snowboarding, or any cold-weather activity. Each suit is crafted with high-quality, insulated materials, ensuring maximum protection against the elements. Stay cozy and enjoy your winter escapades without the hassle of purchasing expensive gear. Rent your snow suit today and make the most of your time in the snow!
                                        </p>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                                <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Details</h4>
                                        <ul class="list-items">
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Location</span> Kasmir
                                            </li>
                                            <!-- <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Distance</span> 10KM
                                            </li> -->
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Agency Name</span> Aman Gupta
                                            </li>
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Booking Time</span> 9am - 5pm
                                            </li>
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Price</span> 999 /-
                                            </li>

                                            <!-- <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Sun</span>
                                        <span class="text-danger">Closed</span>
                                    </li> -->
                                        </ul>
                                    </div>
                                    <!-- end card-body -->
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h4 class="card-title mb-3">Booking</h4>
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
                                </div> -->
                                        <!-- end quantity-wrap -->
                                        <a href="#" class="theme-btn w-100">Book On Rent</a>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                            </div>
                            <!-- end sidebar -->
                        </div>

                        <div class="col-lg-8 mb-4">
                            <div class="listing-wrapper">
                                <!-- end listing-single-panel -->
                                <div class="listing-single-panel mb-5">
                                    <h4 class="font-size-30 font-weight-semi-bold mb-3">Snow Suit</h4>
                                    <div class="gallery-carousel owl-carousel owl-theme">
                                        <div class="gallery-item">
                                            <img src="https://cdn-s3.touchofmodern.com/products/002/526/937/bb01136a83a581771af5d51c610c781e_large.jpg?1667425274" alt="gallery-image" />
                                        </div>
                                        <div class="gallery-item">
                                            <img src="https://img.freepik.com/free-photo/woman-blue-ski-jacket-pink-pants-stands-snowboard-somewhere-winter-forest_8353-1056.jpg?t=st=1724331088~exp=1724334688~hmac=07bfac0a965c73fb4b2a777147a7c44b73d395d758e68d3f60d4b01a73a04e87&w=996" alt="gallery-image" />
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end row -->
                </div>
                <!-- end tab-pane -->
                <div class="tab-pane fade" id="bookmarks" role="tabpanel" aria-labelledby="bookmarks-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sidebar">

                                <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Product Description</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur facilis reprehenderit, sapiente laboriosam nisi necessitatibus? Perspiciatis nisi nobis, rem consequuntur recusandae inventore quis eligendi aliquid deserunt vitae. Quasi, assumenda quia, dolorum esse, cum iure architecto hic rem tenetur corporis odit?</p>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                                <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Details</h4>
                                        <ul class="list-items">
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Location</span> Kasmir
                                            </li>
                                            <!-- <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Distance</span> 10KM
                                            </li> -->
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Agency Name</span> Aman Gupta
                                            </li>
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Booking Time</span> 9am - 5pm
                                            </li>
                                            <li
                                                class="d-flex align-items-center justify-content-between">
                                                <span class="text-black">Price</span> 999./
                                            </li>

                                            <!-- <li
                                        class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Sun</span>
                                        <span class="text-danger">Closed</span>
                                    </li> -->
                                        </ul>
                                    </div>
                                    <!-- end card-body -->
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h4 class="card-title mb-3">Booking</h4>
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
                                </div> -->
                                        <!-- end quantity-wrap -->
                                        <a href="#" class="theme-btn w-100">Book On Rent</a>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                            </div>
                            <!-- end sidebar -->
                        </div>

                        <div class="col-lg-8 mb-4">
                            <div class="listing-wrapper">
                                <!-- end listing-single-panel -->
                                <div class="listing-single-panel mb-5">
                                    <h4 class="font-size-30 font-weight-semi-bold mb-3">Product2</h4>
                                    <div class="gallery-carousel owl-carousel owl-theme">
                                        <div class="gallery-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXUUTsRiMwtKvcioniq5W_8jxiPLFKDlW1Iw&s" alt="gallery-image" />
                                        </div>
                                        <div class="gallery-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeFDNkp9pNh6Th9RB_EVZYJ3r9f7bwS5XEPw&s" alt="gallery-image" />
                                        </div>
                                        <div class="gallery-item">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTllo5bSs62t-AqwlZCaCZUY0MbXNUj9qM0IQ&s" alt="gallery-image" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- end tab-pane -->
            </div>
            <!-- end tab-content -->
        </div>
    </section>
    <!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

    <?php

    include("footer.php");
    ?>
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- Modal -->
    <div class="modal fade modal-container" id="deleteProductModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteProductModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="fal fa-exclamation-circle font-size-50 text-warning"></span>
                    <h5 class="font-size-22 font-weight-semi-bold mt-3 mb-2" id="deleteProductModalTitle">
                        Your item will be deleted permanently!
                    </h5>
                    <p>Are you sure to proceed.</p>
                </div>
                <div class="modal-footer border-top-gray">
                    <button type="button" class="theme-btn theme-btn-sm border-0 bg-success" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="theme-btn theme-btn-sm border-0 bg-danger">
                        Delete!
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-container" id="deleteAccountModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteAccountModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="fal fa-exclamation-circle font-size-50 text-warning"></span>
                    <h5 class="font-size-22 font-weight-semi-bold mt-3 mb-2" id="deleteAccountModalTitle">
                        Your account will be deleted permanently!
                    </h5>
                    <p>Are you sure to proceed.</p>
                </div>
                <div class="modal-footer border-top-gray">
                    <button type="button" class="theme-btn theme-btn-sm border-0 bg-success" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="theme-btn theme-btn-sm border-0 bg-danger">
                        Delete!
                    </button>
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
    <script src="js/jquery.MultiFile.min.js"></script>
    <script src="js/rating-script.js"></script>
    <script src="js/main.js"></script>
</body>


</html>
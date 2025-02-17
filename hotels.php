<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hotel- Trip24</title>
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
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
            background-image: url(https://img.freepik.com/free-photo/landscape-with-colorful-rainbow-appearing-sky_23-2151521474.jpg?t=st=1724865143~exp=1724868743~hmac=d4a6ca523e55df725eb4368d41ffffb5626900c275745fc87ad793b2b9d70e67&w=1060);
        }
    </style>

    <section class="breadcrumb-area bread-bg">
        <div id="particles-js"></div>

        <!-- <div class="overlay"></div> -->
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Hotels</h2>

            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <!-- end breadcrumb-area -->

    <section class="card-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Search</h4>
                                <div class="form-group select2-container-wrapper"
                                    <span class="fal fa-map-marker-alt form-icon"></span>
                                    <select class="select-picker" data-width="100%" data-size="5">
                                        <option value>Where are you looking for?</option>
                                        <option value="1">Shimla</option>
                                        <option value="2">Manali</option>

                                    </select>
                                    <!-- <input class="form-control form--control" type="text"
                                        placeholder="What are you looking for?" /> -->
                                </div>
                                <!-- end form-group -->
                                <!-- <div class="form-group">
                                    <span class="fal fa-map-marker-alt form-icon"></span>
                                    <input class="form-control form--control" type="text" placeholder="Location" />
                                </div> -->
                                <!-- end form-group -->

                                <!-- end form-group -->
                                <button class="theme-btn border-0 w-100" type="submit">
                                    Search
                                </button>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Price Range</h4>
                                <form action="#" class="d-flex align-items-center">
                                    <div class="form-group me-2">
                                        <input class="form-control form--control ps-3" type="number" placeholder="&#8377;999" />
                                    </div>
                                    <div class="form-group me-2">
                                        <input class="form-control form--control ps-3" type="number" placeholder="&#8377;5999" />
                                    </div>
                                    <button class="theme-btn theme-btn-gray border-0 mb-3" type="submit">
                                        <i class="fal fa-angle-right"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Hotel Facilities</h4>
                                <div class="mb-2">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="ElevatorInBuilding" />
                                        <label class="custom-control-label" for="ElevatorInBuilding">TV </label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="" />
                                        <label class="custom-control-label" for="">AC</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="" />
                                        <label class="custom-control-label" for="">WIFI</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="" />
                                        <label class="custom-control-label" for="">Full Sized Bed</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="" />
                                        <label class="custom-control-label" for="">King Sized Bed</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- end card -->

                        <!-- rating code comment -->
                        <!-- <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Ratings</h4>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="fiveStarRadio"
                                        name="radio-stacked" />
                                    <label class="custom-control-label" for="fiveStarRadio">
                                        <span class="star-rating d-inline-block line-height-24 font-size-15"
                                            data-rating="5"></span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="fourStarRadio"
                                        name="radio-stacked" />
                                    <label class="custom-control-label" for="fourStarRadio">
                                        <span class="star-rating d-inline-block line-height-24 font-size-15"
                                            data-rating="4"></span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="threeStarRadio"
                                        name="radio-stacked" />
                                    <label class="custom-control-label" for="threeStarRadio">
                                        <span class="star-rating d-inline-block line-height-24 font-size-15"
                                            data-rating="3"></span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="twoStarRadio"
                                        name="radio-stacked" />
                                    <label class="custom-control-label" for="twoStarRadio">
                                        <span class="star-rating d-inline-block line-height-24 font-size-15"
                                            data-rating="2"></span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="oneStarRadio"
                                        name="radio-stacked" />
                                    <label class="custom-control-label" for="oneStarRadio">
                                        <span class="star-rating d-inline-block line-height-24 font-size-15"
                                            data-rating="1"></span>
                                    </label>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="listing-wrapper">
                        <div class="card card-flex">
                            <a href="hotel-view-details" class="card-image">
                                <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/470419117.jpg?k=49264965aa38f3382b65b7bbd96f8fe35f798c6da374dfe3d866930c7c370db7&o=&s=1024x" class="card-img-top" alt="card image" />
                                <span class="badge text-bg-info badge-pill">T&C Apply</span>
                            </a>
                            <div class="card-body">



                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="card-title mb-0">
                                        <a href="hotel-view-details">Zu-Zu Hostel</a>
                                    </h4>
                                    <i class="fa fa-check-circle ms-1 text-success" data-bs-toggle="tooltip"
                                        data-placement="top" title="Claimed"></i>
                                </div>
                                <p class="card-text">Zu-Zu Hostel, Shimla City Center, Shimla</p>
                                <ul class="info-list mt-3">

                                    <li>
                                        <img src="icons/wifi.png" height="26px;" alt="" srcset="">&nbsp;Wifi</img> &nbsp;<img src="icons/air-conditioner.png" height="26px;" alt="" srcset="">&nbsp;AC</img>&nbsp; <img src="icons/smart-tv.png" height="26px;" alt="" srcset="">&nbsp;TV</img>

                                    </li>
                                </ul>
                                <!-- <div class="star-rating mt-1" data-rating="4.5">
                                    <div class="rating-counter">4 reviews</div>
                                </div> -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="price">
                                        <h5><b>&#8377;4999</b></h5>
                                    </span>
                                </div>
                                <div class="d-flex align-items-end mt-3" style="float: right;">
                                    <button onclick="window.location.href=' hotel-view-details';" class="btn btn-info btn-sm">View Details </button>&nbsp;

                                    <button onclick="window.location.href='modify-your-booking ';" class="btn btn-success btn-sm">Book Now</button>

                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                    </div>
                    <div class="listing-wrapper">
                        <div class="card card-flex">
                            <a href="hotel-view-details" class="card-image">
                                <img src="https://pix8.agoda.net/hotelImages/25963437/-1/67ccee3ae4b0c101ebe9f2e4e450a400.jpg?ca=20&ce=0&s=375x" class="card-img-top" alt="card image" />
                                <span class="badge text-bg-info badge-pill">T&C Apply</span>
                            </a>
                            <div class="card-body">



                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="card-title mb-0">
                                        <a href="hotel-view-details">The Village Submontane</a>
                                    </h4>
                                    <i class="fa fa-check-circle ms-1 text-success" data-bs-toggle="tooltip"
                                        data-placement="top" title="Claimed"></i>
                                </div>
                                <p class="card-text">River Bank, opposite Golden Tuli Manali</p>
                                <ul class="info-list mt-3">
                                    <li>
                                        <img src="icons/wifi.png" height="26px;" alt="" srcset="">&nbsp;Wifi</img> &nbsp;<img src="icons/air-conditioner.png" height="26px;" alt="" srcset="">&nbsp;AC</img>&nbsp; <img src="icons/smart-tv.png" height="26px;" alt="" srcset="">&nbsp;TV</img>

                                    </li>

                                </ul>
                                <!-- <div class="star-rating mt-1" data-rating="4.5">
                                    <div class="rating-counter">4 reviews</div>
                                </div> -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="price">
                                        <h5><b>&#8377;4999</b></h5>
                                    </span>
                                </div>
                                <div class="d-flex align-items-end mt-3" style="float: right;">
                                    <button onclick="window.location.href=' hotel-view-details';" class="btn btn-info btn-sm">View Details </button>&nbsp;

                                    <button onclick="window.location.href='modify-your-booking ';" class="btn btn-success btn-sm">Book Now</button>

                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                    </div>
                    <div class="listing-wrapper">
                        <div class="card card-flex">
                            <a href="hotel-view-details" class="card-image">
                                <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/470419117.jpg?k=49264965aa38f3382b65b7bbd96f8fe35f798c6da374dfe3d866930c7c370db7&o=&s=1024x" class="card-img-top" alt="card image" />
                                <span class="badge text-bg-info badge-pill">T&C Apply</span>
                            </a>
                            <div class="card-body">



                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="card-title mb-0">
                                        <a href="hotel-view-details">Zu-Zu Hostel</a>
                                    </h4>
                                    <i class="fa fa-check-circle ms-1 text-success" data-bs-toggle="tooltip"
                                        data-placement="top" title="Claimed"></i>
                                </div>
                                <p class="card-text">Zu-Zu Hostel, Shimla City Center, Shimla</p>
                                <ul class="info-list mt-3">
                                    <li>
                                        <img src="icons/wifi.png" height="26px;" alt="" srcset="">&nbsp;Wifi</img> &nbsp;<img src="icons/air-conditioner.png" height="26px;" alt="" srcset="">&nbsp;AC</img>&nbsp; <img src="icons/smart-tv.png" height="26px;" alt="" srcset="">&nbsp;TV</img>

                                    </li>

                                </ul>
                                <div class="star-rating mt-1" data-rating="4.5">
                                    <div class="rating-counter">4 reviews</div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="price">
                                        <h5><b>&#8377;4999</b></h5>
                                    </span>
                                </div>
                                <div class="d-flex align-items-end mt-3" style="float: right;">
                                    <button onclick="window.location.href=' hotel-view-details';" class="btn btn-info btn-sm">View Details </button>&nbsp;

                                    <button onclick="window.location.href=' modify-your-booking';" class="btn btn-success btn-sm">Book Now</button>

                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                    </div>
                </div>
                <!-- end col-lg-8 -->
            </div>
            <!-- end row -->
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
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <!-- Template JS Files -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/rating-script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particles-script.js"></script>

</body>

</html>
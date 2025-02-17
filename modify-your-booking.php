<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Modify Your booking-Trip24</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
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
                <h2 class="sec__title text-white mb-3">Booking Details</h2>

            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->


    <!-- ================================
    START BOOKING AREA
================================= -->
    <section class="booking-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Personal Details</h4>
                            <hr class="border-top-gray my-3" />
                            <div class="row">
                                <div class="form-group col-lg-6 pr-lg-0">
                                    <label class="label-text">First Name</label>
                                    <input class="form-control form--control ps-3" type="text" name="text"
                                        placeholder="First name" />
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-lg-6">
                                    <label class="label-text">Last Name</label>
                                    <input class="form-control form--control ps-3" type="text" name="text"
                                        placeholder="Last name" />
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-lg-6 pr-lg-0">
                                    <label class="label-text">Your Email</label>
                                    <input class="form-control form--control ps-3" type="email" name="email"
                                        placeholder="you@example.com" />
                                </div>
                                <!-- end form-group -->
                                <div class="form-group col-lg-6">
                                    <label class="label-text">Phone</label>
                                    <input class="form-control form--control ps-3" type="text" name="text"
                                        placeholder="Phone number" />
                                </div>
                                <!-- end form-group -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Payment Method</h4>
                            <hr class="border-top-gray mt-3 mb-4" />
                            <ul class="payment-method">
                                <li class="active">
                                    <label class="payment-method-label">
                                        <input name="payment_method" type="radio" checked />
                                        Direct Bank Transfer
                                    </label>
                                    <div class="expanded-payment-method">
                                        <p>
                                            Make your payment directly into our bank account. Please
                                            use your Order ID as the payment reference. Your order
                                            won't be shipped until the funds have cleared in our
                                            account.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <label class="payment-method-label">
                                        <input name="payment_method" type="radio" />
                                        Credit / Debit Card
                                        <img src="images/payment-img.png" alt="Payment logos"
                                            class="position-absolute top-0 right-0 mt-3 img-fluid" />
                                    </label>
                                    <div class="expanded-payment-method">
                                        <div class="row">
                                            <div class="form-group col-lg-6 pr-lg-0">
                                                <label class="label-text">Name on Card</label>
                                                <input class="form-control form--control ps-3" type="text" name="text"
                                                    placeholder="Name on Card" />
                                            </div>
                                            <!-- end form-group -->
                                            <div class="form-group col-lg-6">
                                                <label class="label-text">Card Number</label>
                                                <input class="form-control form--control ps-3" type="text" name="text"
                                                    placeholder="1234 567 8923 4567" />
                                            </div>
                                            <!-- end form-group -->
                                            <div class="form-group col-lg-4 pr-lg-0">
                                                <label class="label-text">Expiry Month</label>
                                                <input class="form-control form--control ps-3" type="text" name="text"
                                                    placeholder="MM" />
                                            </div>
                                            <!-- end form-group -->
                                            <div class="form-group col-lg-4 pr-lg-0">
                                                <label class="label-text">Expiry Year</label>
                                                <input class="form-control form--control ps-3" type="text" name="text"
                                                    placeholder="YY" />
                                            </div>
                                            <!-- end form-group -->
                                            <div class="form-group col-lg-4">
                                                <label class="label-text">CVV</label>
                                                <input class="form-control form--control ps-3" type="text" name="text"
                                                    placeholder="CVV" />
                                            </div>
                                            <!-- end form-group -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </li>
                                <li>
                                    <label class="payment-method-label">
                                        <input name="payment_method" type="radio" />
                                        PayPal
                                        <img src="images/paypal.png" alt="PayPal logo"
                                            class="position-absolute top-0 right-0 mt-3 img-fluid" />
                                    </label>
                                    <div class="expanded-payment-method">
                                        <p>
                                            You will be redirected to PayPal to complete payment.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <a href="#" class="theme-btn">Confirm and Pay</a>
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="card">
                        <a href="" class="card-image">
                            <img src="https://www.airvistara.com/content/dam/airvistara/global/english/club-vistara/partners/images/Booking_landing_page_banner.jpg" data-src="https://www.airvistara.com/content/dam/airvistara/global/english/club-vistara/partners/images/Booking_landing_page_banner.jpg" class="card-img-top lazy"
                                alt="card image" />
                            <span class="badge text-bg-success badge-pill">T&Cs Apply</span>
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
                        </div>
                        <!-- end card-body -->
                        <div
                            class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price">
                                    <h5><b>&#8377;1899./</b></h5>
                                </span>
                            </div>
                            <a href="#" class="bookmark-btn icon-element icon-element-sm bg-white shadow-sm text-black"
                                data-bs-toggle="tooltip" data-placement="top" title="Bookmark">
                                <i class="fal fa-bookmark"></i>
                            </a>
                        </div>

                        <!-- end card-footer -->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Booking Summary</h4>
                            <hr class="border-top-gray my-0" />
                            <ul class="list-items mt-3">
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Date</span> 10/20/2021
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Hour</span> 5:30 PM
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Guests</span> 2 Adults
                                </li>
                                <li>
                                    <hr class="border-top-gray" />
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Total Cost</span>
                                    <span class="text-success">1899./</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end card-body -->
                    </div>
                </div>
                <!-- end col-lg-4 -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end booking-area -->
    <!-- ================================
    END BOOKING AREA
================================= -->

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
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/rating-script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particles-script.js"></script>


</body>


</html>
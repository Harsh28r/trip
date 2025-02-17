<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trip24</title>
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
    <link rel="stylesheet" href="css/animated-headline.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" />
</head>

<body>
    <!-- start per-loader -->
    <!-- <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- end per-loader -->
    <?php include("header.php"); ?>
    <style>
        .hero-bg-2 {

            background-image: url(img/banner-image.webp);

        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background-color: #a19e9e47;
            opacity: 0.6;
            z-index: -1;
        }

        .icon-element {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background-color: #ffffff;
        }
    </style>

    <section class="hero-wrapper hero-bg-2">

        <div id="particles-js"></div>
        <div class="overlay"></div>

        <!-- end overlay -->

        <div class="container">

            <div class="hero-heading text-center">

                <h2 class="sec__title text-white cd-headline zoom">

                    Discover What You Need:

                    <span class="cd-words-wrapper text-white">

                        <b class="is-visible text-white">Top-Rated Hotels</b>

                        <b class="text-white">Custom Trip Packages</b>

                        <b>Bike Rentals</b>

                        <b>Bus Reservations</b>

                        <b>Adventure Activities</b>

                        <b>Rental Products</b>

                    </span>

                </h2>
                <br>



                <p class="sec__desc text-white">

                    Find the best hotels, tailor-made trip packages, bike rentals, bus reservations, thrilling activities, and top-quality rental products.

                </p>
                <br>

            </div>

            <div class="highlighted-categories text-center mt-5">


                <div class="highlight-lists d-flex flex-wrap justify-content-center mt-4">

                    <a href="bus" class="highlight-category">
                        <img src="https://img.icons8.com/?size=100&id=R07znxp6MgI0&format=png&color=000000" alt="Bus Icon" class="icon-element d-block mx-auto">
                        Volvo Bus
                    </a>

                    <a href="hotels" class="highlight-category">
                        <img src="https://img.icons8.com/?size=100&id=NzQr16GYSGfP&format=png&color=000000" alt="Hotel Icon" class="icon-element d-block mx-auto">
                        Hotels
                    </a>

                    <a href="trip-packages" class="highlight-category">
                        <img src="https://img.icons8.com/?size=100&id=hGBywG41r8zg&format=png&color=000000" alt="Trip Icon" class="icon-element d-block mx-auto">
                        Trip
                    </a>

                    <a href="bikes" class="highlight-category">
                        <img src="https://img.icons8.com/?size=100&id=5CgxfgEq7mBc&format=png&color=000000" alt="Bike Icon" class="icon-element d-block mx-auto">
                        Bike Rental
                    </a>

                    <a href="snow-suit" class="highlight-category">
                        <img src="https://img.icons8.com/?size=100&id=16581&format=png&color=000000" alt="Snow Suit Icon" class="icon-element d-block mx-auto">
                        Snow Suit
                    </a>

                    <a href="paragliding" class="highlight-category">
                        <img src="https://img.icons8.com/?size=100&id=PhN968WBxlkp&format=png&color=000000" alt="Paragliding Icon" class="icon-element d-block mx-auto">
                        Paragliding
                    </a>

                    <a href="rafting" class="highlight-category">
                        <img src="https://img.icons8.com/?size=100&id=xY0vqnbBzNTk&format=png&color=000000" alt="Rafting Icon" class="icon-element d-block mx-auto">
                        Rafting
                    </a>

                </div>

            </div>

        </div>

    </section>
    <hr class="border-top-gray my-0" />
    <section class="blog-area section-padding">
        <div class="container" style="text-align: justify;  ">
            <div class="text-center">
                <h2 class="sec__title mb-3">Top Travelled Bus Routes For Shimla Or Manali</h2>
                <p class="sec__desc">
                    Explore the most popular bus routes. Whether you're planning a trip for work or leisure,<br> these routes connect some of the country's most vibrant cities and destinations.
                </p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="bus" class="card-image">
                            <img src="https://www.jodytravel.com/images/manali-volvo-bus.jpg" alt="blog image" class="card-img-top lazy" />
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="bus">Buses from</a>
                            </h4>
                            <p>Shimla</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="bus" class="card-image">
                            <img src="https://5.imimg.com/data5/SELLER/Default/2024/10/461770681/WC/YI/WO/82169240/volvo-bus-services-500x500.jpg" alt="blog image" class="card-img-top lazy" />
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="bus">Buses from</a>
                            </h4>
                            <p>Manali</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="bus" class="card-image">
                            <img src="https://www.bharatbooking.com/admin/webroot/img/uploads/holiday-package-gallery/1699857084_454206-manali-tour-package-from-delhi-by-volvo-package-slider-image.webp" alt="blog image" class="card-img-top lazy" />
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="bus">Buses from</a>
                            </h4>
                            <p>Shimla</p>
                        </div>
                    </div>
                </div>
                <!-- <center>
                    <a href="bus" class="theme-btn">More Bus</a>
                </center> -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <section class="about-area section-padding" style="position: relative; margin: 0; height: 50rem; background: url('https://cdn.pixabay.com/photo/2020/09/17/05/12/river-5578051_1280.jpg') no-repeat center center fixed; background-size: cover; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold; text-align: center;">
        <!-- Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>

        <div id="particles-js"></div>

        <div class="container" style="position: relative; z-index: 1;">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-box row">
                        <div class="col-lg-6 mt-lg-4">
                            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/172808300.webp?k=8d41cfb03fa8943d03fb1b1a2a87f8d400a80775b606e604e610c05c18c543cf&o=" alt="about image" class="w-100 rounded-12 mb-4 lazy" />
                            <img src="https://rukmini-ct.flixcart.com/q_75,w_420,h_300,fl_progressive,e_sharpen:80,c_fill,dpr_2,f_auto/ct-hotel-images/places/hotels/cms/4787/47870/images/image_47870_23c6250f-1c41-4e07-a508-da00b17ae008.jpeg" alt="about image" class="w-100 rounded-12 mb-4 lazy" />
                        </div>
                        <div class="col-lg-6">
                            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/492603032.jpg?k=5051624a64731b730558a91b7cac8f710e0c365a17812375967b1f8bfc31f1ba&o=&hp=1" alt="about image" class="w-100 rounded-12 mb-4 lazy" />
                            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/529084433.jpg?k=7e630dee70e86664214cdcb257890065519e832499b56512e4c754fdaf9d6b10&o=&hp=1" alt="about image" class="w-100 rounded-12 mb-4 lazy" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="text-align: justify;">
                    <div class="section-heading mb-4 mb-lg-0">
                        <h1 class="sec__title mb-3 text-white ">Discover Top Hotels</h1>
                        <p class="sec__desc mb-4">
                            Experience unparalleled comfort and luxury at our handpicked hotels, designed to cater to all your needs. Whether you're on a business trip or a vacation, we ensure a memorable stay.
                        </p>
                        <p class="sec__desc mb-4">
                            Our hotels offer a blend of modern amenities and exceptional service, making them the perfect choice for travelers. Relax, unwind, and enjoy the best hospitality in prime locations.
                        </p>
                        <p class="sec__desc">
                            From premium rooms to exquisite dining options, every detail is crafted to provide you with a unique experience. Book your stay now and indulge in the best.
                        </p>
                        <br>
                        <a href="hotels" class="theme-btn">More Hotel</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-area section-padding position-relative">
        <center>
            <h2 class="sec__title mb-3">
                Enjoy Your <br />
                Best Cab Trip
            </h2>
        </center>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h6 class="sec__title mb-3">
                                Fixed Price
                            </h6>
                            <p class="sec__desc mb-4">
                                Enjoy a transparent and fixed fare for every trip. No hidden charges, just pay what you see.
                            </p>
                            <h6 class="sec__title mb-3">
                                No Fee
                            </h6>
                            <p class="sec__desc mb-4">
                                We do not charge any additional fees or commissions, ensuring you get the best value for your money.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6 me-auto">
                    <div class="mobile-img my-4">
                        <img
                            src="img/_car-big-removebg-preview.png"
                            alt="mobile-img"
                            class="lazy" />
                    </div>
                </div>
                <!-- end col-lg-5 -->
                <div class="col-lg-3">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h6 class="sec__title mb-3">
                                100% Pleasure
                            </h6>
                            <p class="sec__desc mb-4">
                                We have a large pool of loyal customers who love our service. Our ratings speak volumes!
                            </p>
                            <h6 class="sec__title mb-3">
                                Nationwide Service
                            </h6>
                            <p class="sec__desc mb-4">
                                Our platform offers the easiest and most reliable way to book a taxi across the country.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-6 -->
                <div class="btn-box mt-4">
                    <a href="trip" class="theme-btn">Go To Book Your Trip</a>
                </div>
                <!-- end btn-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <br>
    <br>
    <section class="hiw-area section--padding">
        <div class="container">
            <div class="text-center">
                <h2 class="sec__title mb-3">Why Choose Us</h2>
                <p class="sec__desc">
                    We are your one-stop destination for hassle-free travel and rental services. Here's why you should choose us:
                </p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6">
                    <div class="card card-pattern">
                        <div class="card-body media">
                            <div class="icon-element flex-shrink-0 me-3">
                                <span class="fal fa-bus"></span>
                            </div>
                            <!-- end icon-element-->
                            <div class="media-body">
                                <h4 class="card-title mb-3">Convenient Volvo Bus Tickets</h4>
                                <p class="card-text">
                                    Book your Volvo bus tickets with ease. We offer a seamless booking experience with multiple options for routes and schedules.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6 col-md-6">
                    <div class="card card-pattern">
                        <div class="card-body media">
                            <div class="icon-element flex-shrink-0 me-3">
                                <span class="fal fa-hotel"></span>
                            </div>
                            <!-- end icon-element-->
                            <div class="media-body">
                                <h4 class="card-title mb-3">Comfortable Hotels</h4>
                                <p class="card-text">
                                    Find and book hotels that suit your style and budget. From luxury resorts to cozy inns, we have options for every traveler.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6 col-md-6">
                    <div class="card card-pattern">
                        <div class="card-body media">
                            <div class="icon-element flex-shrink-0 me-3">
                                <span class="fal fa-map-signs"></span>
                            </div>
                            <!-- end icon-element-->
                            <div class="media-body">
                                <h4 class="card-title mb-3">Exciting Trips</h4>
                                <p class="card-text">
                                    Explore new destinations with our curated trips. We plan every detail so you can enjoy your journey without any worries.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6 col-md-6">
                    <div class="card card-pattern">
                        <div class="card-body media">
                            <div class="icon-element flex-shrink-0 me-3">
                                <span class="fal fa-bicycle"></span>
                            </div>
                            <!-- end icon-element-->
                            <div class="media-body">
                                <h4 class="card-title mb-3">Bike on Rent</h4>
                                <p class="card-text">
                                    Need a bike for your trip? We offer a variety of bikes for rent, perfect for exploring the city or embarking on an adventure.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <style>
        .mobile-img img {
            width: 100%;
            border-radius: 50px;
        }

        .card-pattern {
            background-color: #c4c7c4 !important;
            border-radius: 5px;
        }

        .icon-element span {
            font-size: 24px;
            color: #092f1f;
        }
    </style>

    <section class="blog-area section--padding">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center  justify-content-between">
                <div class="me-2 my-3">
                    <h2 class="sec__title mb-3">Activities</h2>
                    <p class="sec__desc">
                        Explore thrilling adventures and unique experiences that make your trip unforgettable.
                    </p>
                </div>
                <!-- <a href="" class="theme-btn">View all post</a> -->
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="" class="card-image">
                            <img
                                src="img/sunrise-paragliding-tour.webp"
                                data-src="img/sunrise-paragliding-tour.webp"
                                alt="Sunrise Paragliding Tour"
                                class="card-img-top lazy" />
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="">Sunrise Paragliding Tour</a>
                            </h4>
                            <p class="card-text mt-3">
                                Experience the thrill of flying as you soar over breathtaking landscapes at sunrise.
                            </p>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="" class="card-image">
                            <img
                                src="img/river-rafting-in-Manali.webp"
                                data-src="img/river-rafting-in-Manali.webp"
                                alt="River Rafting in Manali"
                                class="card-img-top lazy" />
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="">River Rafting in Manali</a>
                            </h4>
                            <p class="card-text mt-3">
                                Ride the thrilling rapids of the Beas River and enjoy an adrenaline-packed adventure.
                            </p>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-y">
                        <a href="" class="card-image">
                            <img
                                src="img/snow-dress-rental.webp"
                                data-src="img/snow-dress-rental.webp"
                                alt="Snow Dress in Rent"
                                class="card-img-top lazy" />
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="">Snow Dress in Rent</a>
                            </h4>
                            <p class="card-text mt-3">
                                Stay warm and stylish with our high-quality snow dress rentals for your winter adventures.
                            </p>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="contact-area padding-top-65px padding-bottom-90px">
        <div class="container">
            <div class="text-center">
                <h2 class="sec__title mb-3">Get in Touch with Us</h2>
                <p class="sec__desc">
                    Have questions or need assistance? We're here to help. Reach out to us for any inquiries regarding our services.
                </p>
            </div>
            <br>
            <!-- <div class="alert alert-success alert-message mb-3" role="alert">
                Thank you! Your message has been successfully sent.
            </div> -->
            <div class="row">
                <div class="col-lg-6">
                    <form action="#" class="contact-form card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Us</h4>
                            <hr class="border-top-gray" />
                            <div class="form-group">
                                <label class="label-text">Your Name</label>
                                <input
                                    id="name"
                                    class="form-control form--control ps-3"
                                    type="text"
                                    name="name"
                                    placeholder="Enter your name" />
                            </div>
                            <div class="form-group">
                                <label class="label-text">Your Email</label>
                                <input
                                    id="email"
                                    class="form-control form--control ps-3"
                                    type="email"
                                    name="email"
                                    placeholder="Enter your email" />
                            </div>
                            <div class="form-group">
                                <label class="label-text">Message</label>
                                <textarea
                                    id="message"
                                    class="form-control form--control ps-3"
                                    rows="4"
                                    name="message"
                                    placeholder="Type your message"></textarea>
                            </div>
                            <button
                                id="send-message-btn"
                                class="theme-btn border-0"
                                type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="mobile-img">
                        <img
                            src="https://img.freepik.com/free-vector/customer-service-week-flat-design-illustration_23-2149654086.jpg?t=st=1739618762~exp=1739622362~hmac=7d30c977254ec93ec6215147a890314b254d6708fc54a4f80b11a32252f547d9&w=740"
                            data-src="https://img.freepik.com/free-vector/customer-service-week-flat-design-illustration_23-2149654086.jpg?t=st=1739618762~exp=1739622362~hmac=7d30c977254ec93ec6215147a890314b254d6708fc54a4f80b11a32252f547d9&w=740"
                            alt="customer-support"
                            class="lazy" />
                    </div>
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <?php include("footer.php"); ?>
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
    <script src="js/moment.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/rating-script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particles-script.js"></script>

</body>

</html>
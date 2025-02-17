<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="author" content="Trip24" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Home-Trip24</title>

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

    <link rel="stylesheet" href="css/animated-headline.css" />

    <link rel="stylesheet" href="css/jquery.fancybox.css" />

    <link rel="stylesheet" href="css/daterangepicker.min.css" />



    <link rel="stylesheet" href="css/style.css" />
    <!-- Load Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

            background-image: url(https://img.freepik.com/free-photo/couple-summer-having-relaxing-picnic-day-together_23-2151426018.jpg?t=st=1739382350~exp=1739385950~hmac=19c52f0a06d57cc90fb8851f3ae31f4f6c636b772d011f9bd98caedfae415a72&w=996);

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

    <!-- <section class="hiw-area section--padding text-center">

        <div class="container">

            <h2 class="sec__title mb-3">What We Offer</h2>

            <p class="sec__desc">

                Morbi convallis bibendum urna ut viverra. Maecenas quis consequat

                libero, <br />

                a feugiat eros. Nunc ut lacinia tortors.

            </p>

            <div class="row mt-5">

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center card-pattern">

                        <div class="card-body">

                            <div

                                class="icon-element icon-element-lg bg-white text-black shadow-sm">

                                <span class="">&#x1F60D;</span>

                            </div>

                            <h4 class="card-title mt-4 mb-3">36 Million

                            </h4>

                            <p class="card-text">

                                Happy customers globally

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center card-pattern">

                        <div class="card-body">

                            <div

                                class="icon-element icon-element-lg bg-white text-black shadow-sm">

                                <span class="">&#128108;</span>

                            </div>

                            <h4 class="card-title mt-4 mb-3">Over 4000</h4>

                            <p class="card-text">

                                Companies worldwide

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center card-pattern">

                        <div class="card-body">

                            <div

                                class="icon-element icon-element-lg bg-white text-black shadow-sm">

                                <span class="">&#128228;</span>

                            </div>

                            <h4 class="card-title mt-4 mb-3">100,000+</h4>

                            <p class="card-text">

                                Booking everyday

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center card-pattern">

                        <div class="card-body">

                            <div

                                class="icon-element icon-element-lg bg-white text-black shadow-sm">

                                <span class="">&#128140;</span>

                            </div>

                            <h4 class="card-title mt-4 mb-3">24x7 Support</h4>

                            <p class="card-text">

                                Lorem ipsum dolor

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section> -->

    <!-- end hiw-area -->

    <hr class="border-top-gray my-0" />

    <section class="blog-area section-padding">

        <div class="container">

            <div class="text-center">

                <h2 class="sec__title mb-3">Top Travelled Bus Routes</h2>

                <p class="sec__desc">

                    Explore the most popular bus routes. Whether you're planning a trip for work or leisure,<br> these routes connect some of the country's most vibrant cities and destinations.

                </p>

            </div>

            <div class="row mt-5">

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y">

                        <a href="#" class="card-image">

                            <img

                                src="https://img.freepik.com/free-photo/monuments-prague_1204-452.jpg?t=st=1724363314~exp=1724366914~hmac=3a258e8f79289867d777ec97a2983ded436af703216f4d1864e74d324b29d904&w=996"

                                data-src="https://img.freepik.com/free-photo/monuments-prague_1204-452.jpg?t=st=1724363314~exp=1724366914~hmac=3a258e8f79289867d777ec97a2983ded436af703216f4d1864e74d324b29d904&w=996"

                                alt="blog image"

                                class="card-img-top lazy" />

                        </a>

                        <div class="card-body">

                            <h4 class="card-title">

                                <a href="#">Buses from

                                </a>

                            </h4>

                            <p>Shimla to Solon</p>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y">

                        <a href="#" class="card-image">

                            <img

                                src="https://img.freepik.com/free-photo/beautiful-aerial-shot-florence-italy-architecture-evening_181624-2203.jpg?t=st=1724363428~exp=1724367028~hmac=d5bfd0f219a075580215f646352599826474aea1f3f0fa1bd210846aac5474f0&w=996"

                                data-src="https://img.freepik.com/free-photo/beautiful-aerial-shot-florence-italy-architecture-evening_181624-2203.jpg?t=st=1724363428~exp=1724367028~hmac=d5bfd0f219a075580215f646352599826474aea1f3f0fa1bd210846aac5474f0&w=996"

                                alt="blog image"

                                class="card-img-top lazy" />

                        </a>

                        <div class="card-body">

                            <h4 class="card-title">

                                <a href="#">Buses from

                                </a>

                            </h4>

                            <p>Mandi to Kullu</p>

                        </div>

                        <!-- end card-body -->

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y">

                        <a href="#" class="card-image">

                            <img

                                src="https://img.freepik.com/free-photo/big-ben-houses-parliament-london-uk_268835-1400.jpg?t=st=1724363486~exp=1724367086~hmac=386d631ea0500d516da24efc64f9695b69c57075d689546814ee01ffc33b8ba8&w=996"

                                data-src="https://img.freepik.com/free-photo/big-ben-houses-parliament-london-uk_268835-1400.jpg?t=st=1724363486~exp=1724367086~hmac=386d631ea0500d516da24efc64f9695b69c57075d689546814ee01ffc33b8ba8&w=996"

                                alt="blog image"

                                class="card-img-top lazy" />

                        </a>

                        <div class="card-body">

                            <h4 class="card-title">

                                <a href="#">Buses from

                                </a>

                            </h4>

                            <p>Kullu to Chamba</p>

                        </div>

                        <!-- end card-body -->

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y">

                        <a href="#" class="card-image">

                            <img

                                src="https://img.freepik.com/free-photo/equipment-tourism-sun-landscape-yellow-wave_1417-1197.jpg?t=st=1724363555~exp=1724367155~hmac=8e0534c60dd7e7cebfc68a724483ed8cc589bce8e8e28f45a70f478bf4d4a299&w=996"

                                data-src="https://img.freepik.com/free-photo/equipment-tourism-sun-landscape-yellow-wave_1417-1197.jpg?t=st=1724363555~exp=1724367155~hmac=8e0534c60dd7e7cebfc68a724483ed8cc589bce8e8e28f45a70f478bf4d4a299&w=996"

                                alt="blog image"

                                class="card-img-top lazy" />

                        </a>

                        <div class="card-body">

                            <h4 class="card-title">

                                <a href="#">Buses from

                                </a>

                            </h4>

                            <p>Hamirpur to Kangra</p>

                        </div>

                        <!-- end card-body -->

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y">

                        <a href="#" class="card-image">

                            <img

                                src="https://img.freepik.com/free-photo/young-woman-standing-temple-gates-lempuyang-luhur-temple-bali-indonesia-vintage-tone_335224-369.jpg?t=st=1724363630~exp=1724367230~hmac=94f10ed44c2a4fd90e3c444ce6096ca2d6cd9683c3891bd693649e2d02d1af09&w=996"

                                data-src="https://img.freepik.com/free-photo/young-woman-standing-temple-gates-lempuyang-luhur-temple-bali-indonesia-vintage-tone_335224-369.jpg?t=st=1724363630~exp=1724367230~hmac=94f10ed44c2a4fd90e3c444ce6096ca2d6cd9683c3891bd693649e2d02d1af09&w=996"

                                alt="blog image"

                                class="card-img-top lazy" />

                        </a>

                        <div class="card-body">

                            <h4 class="card-title">

                                <a href="#">Buses from

                                </a>

                            </h4>

                            <p>Dharamsala to Hamirpur</p>

                        </div>

                        <!-- end card-body -->

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y">

                        <a href="#" class="card-image">

                            <img

                                src="https://img.freepik.com/free-photo/monuments-prague_1204-452.jpg?t=st=1724363314~exp=1724366914~hmac=3a258e8f79289867d777ec97a2983ded436af703216f4d1864e74d324b29d904&w=996"

                                data-src="https://img.freepik.com/free-photo/monuments-prague_1204-452.jpg?t=st=1724363314~exp=1724366914~hmac=3a258e8f79289867d777ec97a2983ded436af703216f4d1864e74d324b29d904&w=996"

                                alt="blog image"

                                class="card-img-top lazy" />

                        </a>

                        <div class="card-body">

                            <h4 class="card-title">

                                <a href="#">Buses from

                                </a>

                            </h4>

                            <p>Mandi to Chamba</p>

                        </div>

                        <!-- end card-body -->

                    </div>

                    <!-- end card -->

                </div>

            </div>

        </div>

        <!-- end container -->

    </section>

    <!-- <section class="cta-area bg-gray padding-top-60px padding-bottom-60px">

        <div class="container">

            <div

                class="d-flex flex-wrap align-items-center justify-content-between">

                <div class="section-heading py-3">

                    <h2 class="mb-3 font-size-28 font-weight-bold">

                        A new way of travelling

                    </h2>

                    <p class="font-size-17">

                        Stay up to date with the latest tips on navigating travel during COVID-19, based on your location

                    </p>

                </div>

                <a href="bus" class="theme-btn">Know More</a>

            </div>

        </div>

    </section> -->

    <section class="about-area section-padding">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">



                    <div class="section-heading mb-4 mb-lg-0">

                        <h2 class="sec__title mb-3">

                            Discover Top Hotels for Your Stay

                        </h2>

                        <!-- add  -->

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

                        <a href="hotel" class="theme-btn">Learn More</a>

                    </div>

                    <!-- end section-heading -->

                </div>

                <!-- end col-lg-6 -->

                <div class="col-lg-6">

                    <div class="image-box row">

                        <div class="col-lg-6 mt-lg-4">

                            <img

                                src="https://img.freepik.com/free-photo/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg?t=st=1724364153~exp=1724367753~hmac=e156a8cc6dd6fed4dedc81acc2aaa47f7c38775bdddc9c97e5b87aa08f92f358&w=900"

                                data-src="https://img.freepik.com/free-photo/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg?t=st=1724364153~exp=1724367753~hmac=e156a8cc6dd6fed4dedc81acc2aaa47f7c38775bdddc9c97e5b87aa08f92f358&w=900"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                            <img

                                src="https://img.freepik.com/free-photo/swimming-pool_74190-1977.jpg?t=st=1724364215~exp=1724367815~hmac=61100fea0f8161a50dc528dc389cceea36c644e507288132501750a481b3430c&w=996"

                                data-src="https://img.freepik.com/free-photo/swimming-pool_74190-1977.jpg?t=st=1724364215~exp=1724367815~hmac=61100fea0f8161a50dc528dc389cceea36c644e507288132501750a481b3430c&w=996"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                        </div>

                        <div class="col-lg-6">

                            <img

                                src="https://img.freepik.com/premium-photo/ratan-tatataj-hotel-images_1015255-250093.jpg?w=826"

                                data-src="https://img.freepik.com/premium-photo/ratan-tatataj-hotel-images_1015255-250093.jpg?w=826"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                            <img

                                src="https://img.freepik.com/premium-photo/hotel-with-palm-trees-building-with-sky-background_590832-1604.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                data-src="https://img.freepik.com/premium-photo/hotel-with-palm-trees-building-with-sky-background_590832-1604.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                        </div>

                    </div>

                    <!-- end image-box -->

                </div>

                <!-- end col-lg-6 -->

            </div>

            <!-- end row -->

        </div>

        <!-- end container -->

    </section>



    <!-- <section class="location-area padding-top-60px padding-bottom-90px">

        <div class="container">

            <h2 class="sec__title mb-3 text-center">All Locations</h2>

            <br>

            <div class="row">

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>United States (2)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>Japan (9)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>New Zealand (17)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>India (19)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>Netherlands (15)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>London (4)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>Saudi Arabia (29)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>Scotland (10)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>Canada (43)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>Mexico (45)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>Bangladesh (50)</span>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3">

                    <a href="#" class="card text-center text-gray hover-y">

                        <div class="card-body">

                            <span>South Africa (60)</span>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section> -->

    <!-- end location-area -->

    <section class="cat-area section--padding">

        <div class="container">

            <div class="text-center">

                <h2 class="sec__title mb-3">Explore Your Dream Places</h2>

                <p class="sec__desc">Explore most popular destination and places</p>

            </div>

            <!-- end section-heading -->

            <div class="row mt-5">

                <div class="col-lg-4 col-md-6">

                    <a

                        href="#"

                        class="category-item d-block text-start overflow-hidden">

                        <img

                            src="https://img.freepik.com/free-photo/theatine-church-sunlight-cloudy-sky-munich-germany_181624-10436.jpg?t=st=1724364938~exp=1724368538~hmac=ebb21ba69140c4398751d6773838373c0539dc09b3ee607904f1bceb5c7fe173&w=900"

                            data-src="https://img.freepik.com/free-photo/theatine-church-sunlight-cloudy-sky-munich-germany_181624-10436.jpg?t=st=1724364938~exp=1724368538~hmac=ebb21ba69140c4398751d6773838373c0539dc09b3ee607904f1bceb5c7fe173&w=900"

                            alt="category-image"

                            class="category-img lazy" />

                        <div class="category-content">

                            <div class="category-content-inner">

                                <h4 class="cat-title mb-2">Shimla</h4>

                            </div>

                        </div>

                        <!-- end category-content -->

                    </a><!-- end category-item -->

                </div>

                <!-- end col-lg-4 -->

                <div class="col-lg-4 col-md-6">

                    <a

                        href="#"

                        class="category-item d-block text-start overflow-hidden">

                        <img

                            src="https://img.freepik.com/free-photo/cathedral-church-saint-maria-murcia-spain_1398-4617.jpg?t=st=1724364970~exp=1724368570~hmac=02a549ada8bcf7107f5fda2a80c9e568516657c7b39d3fe9ea2f3b8f85d0018a&w=900"

                            data-src="https://img.freepik.com/free-photo/cathedral-church-saint-maria-murcia-spain_1398-4617.jpg?t=st=1724364970~exp=1724368570~hmac=02a549ada8bcf7107f5fda2a80c9e568516657c7b39d3fe9ea2f3b8f85d0018a&w=900"

                            alt="category-image"

                            class="category-img lazy" />

                        <div class="category-content">

                            <div class="category-content-inner">

                                <h4 class="cat-title mb-2">Shimla</h4>

                            </div>

                        </div>

                        <!-- end category-content -->

                    </a><!-- end category-item -->

                </div>

                <!-- end col-lg-4 -->

                <div class="col-lg-4 col-md-6">

                    <a

                        href="#"

                        class="category-item d-block text-start overflow-hidden">

                        <img

                            src="https://img.freepik.com/free-photo/indian-travel-destination-beautiful-attractive_53876-14206.jpg?t=st=1724365043~exp=1724368643~hmac=62bdf53ab6189b903c90b7cf6c8ea496315d963a177d4889ca93989ba4d8d279&w=900"

                            data-src="https://img.freepik.com/free-photo/indian-travel-destination-beautiful-attractive_53876-14206.jpg?t=st=1724365043~exp=1724368643~hmac=62bdf53ab6189b903c90b7cf6c8ea496315d963a177d4889ca93989ba4d8d279&w=900"

                            alt="category-image"

                            class="category-img lazy" />

                        <div class="category-content">

                            <div class="category-content-inner">

                                <h4 class="cat-title mb-2">Shimla</h4>

                            </div>

                        </div>

                        <!-- end category-content -->

                    </a><!-- end category-item -->

                </div>

                <!-- end col-lg-4 -->

                <div class="col-lg-3 col-md-6">

                    <a

                        href="#"

                        class="category-item d-block text-start overflow-hidden">

                        <img

                            src="https://as2.ftcdn.net/v2/jpg/00/86/93/13/1000_F_86931350_yys0clXOBmAZLq2cKQwoy0cG9aS3qCDf.jpg"

                            data-src="https://as2.ftcdn.net/v2/jpg/00/86/93/13/1000_F_86931350_yys0clXOBmAZLq2cKQwoy0cG9aS3qCDf.jpg"

                            alt="category-image"

                            class="category-img lazy" />

                        <div class="category-content">

                            <div class="category-content-inner">

                                <h4 class="cat-title mb-2">Shimla</h4>

                            </div>

                        </div>

                        <!-- end category-content -->

                    </a><!-- end category-item -->

                </div>

                <!-- end col-lg-3 -->

                <div class="col-lg-3 col-md-6">

                    <a

                        href="#"

                        class="category-item d-block text-start overflow-hidden">

                        <img

                            src="https://as2.ftcdn.net/v2/jpg/08/44/56/93/1000_F_844569323_Q0O9fIJ7Ggmp12Xd3fvhVt2doprlnHxG.jpg"

                            data-src="https://as2.ftcdn.net/v2/jpg/08/44/56/93/1000_F_844569323_Q0O9fIJ7Ggmp12Xd3fvhVt2doprlnHxG.jpg"

                            alt="category-image"

                            class="category-img lazy" />

                        <div class="category-content">

                            <div class="category-content-inner">

                                <h4 class="cat-title mb-2">Shimla</h4>

                            </div>

                        </div>

                        <!-- end category-content -->

                    </a><!-- end category-item -->

                </div>

                <!-- end col-lg-3 -->

                <div class="col-lg-3 col-md-6">

                    <a

                        href="#"

                        class="category-item d-block text-start overflow-hidden">

                        <img

                            src="https://img.freepik.com/premium-photo/varanasi-ghats-india-landscape_78361-5056.jpg?w=900"

                            data-src="https://img.freepik.com/premium-photo/varanasi-ghats-india-landscape_78361-5056.jpg?w=900"

                            alt="category-image"

                            class="category-img lazy" />

                        <div class="category-content">

                            <div class="category-content-inner">

                                <h4 class="cat-title mb-2">Shimla</h4>

                            </div>

                        </div>

                        <!-- end category-content -->

                    </a><!-- end category-item -->

                </div>

                <!-- end col-lg-3 -->

                <div class="col-lg-3 col-md-6">

                    <a

                        href="#"

                        class="category-item d-block text-start overflow-hidden">

                        <img

                            src="https://img.freepik.com/free-photo/porto-portugal-august-192021-view-famous-douro-river-porto-portugal_268835-3638.jpg?t=st=1724365219~exp=1724368819~hmac=a894aac5425f268f72d899d5665effe97a56681ac9bf8710d2c9a8ae8ff07f28&w=1060"

                            data-src="https://img.freepik.com/free-photo/porto-portugal-august-192021-view-famous-douro-river-porto-portugal_268835-3638.jpg?t=st=1724365219~exp=1724368819~hmac=a894aac5425f268f72d899d5665effe97a56681ac9bf8710d2c9a8ae8ff07f28&w=1060s"

                            alt="category-image"

                            class="category-img lazy" />

                        <div class="category-content">

                            <div class="category-content-inner">

                                <h4 class="cat-title mb-2">Shilma</h4>

                            </div>

                        </div>

                        <!-- end category-content -->

                    </a><!-- end category-item -->

                </div>

                <!-- end col-lg-3 -->

            </div>

            <!-- end row -->

        </div>

        <!-- end container -->

    </section>

    <!-- end cat-area -->

    <!-- ================================

    END CAT AREA

================================= -->

    <hr class="border-top-gray my-0" />

    <!-- ================================

    START TEAM AREA

================================= -->

    <section class="team-area section--padding">

        <div class="container">

            <div class="text-center">

                <h2 class="sec__title mb-3">Most Popular Biketypes</h2>

                <p class="sec__desc">

                    When your rental day arrives, head to the specified pick-up location.

                    <br />

                    Your bike will be there, fully prepared and equipped, ready for you to start your journey.

                </p>

            </div>

            <!-- end section-heading -->

            <div class="row mt-5">

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center">

                        <div class="card-image">

                            <img

                                src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                data-src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                alt="team image"

                                class="card-img-top lazy" />

                            <svg

                                class="card-svg-shape"

                                version="1.1"

                                xmlns="http://www.w3.org/2000/svg"

                                x="0px"

                                y="0px"

                                viewBox="0 0 74 7"

                                xml:space="preserve">

                                <path

                                    d="M57.7,5c-6.2-1.6-13.5-5-20.8-5c-7.2,0-14.4,3.3-20.5,4.8C11.2,6.1,5.3,6.7,0,7v0h72.4 C67.4,6.7,62.2,6.1,57.7,5z"></path>

                            </svg>

                        </div>

                        <div class="card-body">

                            <h4 class="card-title mb-1">MPV Bike</h4>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center">

                        <div class="card-image">

                            <img

                                src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                data-src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                alt="team image"

                                class="card-img-top lazy" />

                            <svg

                                class="card-svg-shape"

                                version="1.1"

                                xmlns="http://www.w3.org/2000/svg"

                                x="0px"

                                y="0px"

                                viewBox="0 0 74 7"

                                xml:space="preserve">

                                <path

                                    d="M57.7,5c-6.2-1.6-13.5-5-20.8-5c-7.2,0-14.4,3.3-20.5,4.8C11.2,6.1,5.3,6.7,0,7v0h72.4 C67.4,6.7,62.2,6.1,57.7,5z"></path>

                            </svg>

                        </div>

                        <div class="card-body">

                            <h4 class="card-title mb-1">MPV Bike</h4>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center">

                        <div class="card-image">

                            <img

                                src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                data-src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                alt="team image"

                                class="card-img-top lazy" />

                            <svg

                                class="card-svg-shape"

                                version="1.1"

                                xmlns="http://www.w3.org/2000/svg"

                                x="0px"

                                y="0px"

                                viewBox="0 0 74 7"

                                xml:space="preserve">

                                <path

                                    d="M57.7,5c-6.2-1.6-13.5-5-20.8-5c-7.2,0-14.4,3.3-20.5,4.8C11.2,6.1,5.3,6.7,0,7v0h72.4 C67.4,6.7,62.2,6.1,57.7,5z"></path>

                            </svg>

                        </div>

                        <div class="card-body">

                            <h4 class="card-title mb-1">MPV Bike</h4>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <div class="card hover-y text-center">

                        <div class="card-image">

                            <img

                                src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                data-src="https://img.freepik.com/premium-vector/blue-motorcycle-with-blue-cover-that-says-speed_481747-91880.jpg?ga=GA1.1.1284369193.1700073199"

                                alt="team image"

                                class="card-img-top lazy" />

                            <svg

                                class="card-svg-shape"

                                version="1.1"

                                xmlns="http://www.w3.org/2000/svg"

                                x="0px"

                                y="0px"

                                viewBox="0 0 74 7"

                                xml:space="preserve">

                                <path

                                    d="M57.7,5c-6.2-1.6-13.5-5-20.8-5c-7.2,0-14.4,3.3-20.5,4.8C11.2,6.1,5.3,6.7,0,7v0h72.4 C67.4,6.7,62.2,6.1,57.7,5z"></path>

                            </svg>

                        </div>

                        <div class="card-body">

                            <h4 class="card-title mb-1">MPV Bike</h4>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

            </div>

            <!-- end row -->

        </div>

        <!-- end container -->

    </section>

    <!-- end team-area -->

    <!-- ================================

    END TEAM AREA

================================= -->

    <!-- ================================

    START HIW AREA

================================= -->

    <style>
        .card-hover-effect:before {

            background-image: url(https://img.freepik.com/premium-vector/drawing-motorcycle-with-number-3-it_481747-64771.jpg?ga=GA1.1.1284369193.1700073199);

        }
    </style>

    <section class="hiw-area bg-gray section--padding">

        <div class="container">

            <div class="text-center">

                <h2 class="sec__title mb-3">Simple Steps to Ride</h2>

                <p class="sec__desc">

                    Renting a bike has never been easier with our streamlined process and convenient pick-up locations.

                </p>

            </div>

            <!-- end section-heading -->

            <div class="row mt-5">

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y text-center card-hover-effect">

                        <div class="card-body">

                            <div class="icon-element icon-element-lg">

                                <span class="fal fa-map-marker-alt"></span>

                                <span class="info-number">1</span>

                            </div>

                            <!-- end icon-element-->

                            <h4 class="card-title mt-4 mb-3">1. Select Your Location</h4>

                            <p class="card-text">

                                Choose from a variety of locations where you want to pick up your bike. We have multiple points across the city for your convenience.

                            </p>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

                <!-- end col-lg-3 -->

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y text-center card-hover-effect">

                        <div class="card-body">

                            <div class="icon-element icon-element-lg">

                                <span class="fal fa-bicycle"></span>

                                <span class="info-number">2</span>

                            </div>

                            <!-- end icon-element-->

                            <h4 class="card-title mt-4 mb-3">2. Choose Your Bike</h4>

                            <p class="card-text">

                                Browse through our wide range of bikes and select the one that best suits your needs and preferences.

                            </p>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

                <!-- end col-lg-3 -->

                <div class="col-lg-4 col-md-6">

                    <div class="card hover-y text-center card-hover-effect">

                        <div class="card-body">

                            <div class="icon-element icon-element-lg">

                                <span class="fal fa-check-circle"></span>

                                <span class="info-number">3</span>

                            </div>

                            <!-- end icon-element-->

                            <h4 class="card-title mt-4 mb-3">3. Confirm and Ride</h4>

                            <p class="card-text">

                                Complete your booking, pick up your bike, and hit the road! Enjoy a hassle-free ride with our top-quality bikes.

                            </p>

                        </div>

                    </div>

                    <!-- end card -->

                </div>

            </div>

            <!-- end row -->

        </div>

        <!-- end container -->

    </section>



    <!-- end hiw-area -->



    <section class="mobile-area section-padding bg-gray position-relative">

        <div class="container">

            <div class="text-center">

                <h2 class="sec__title mb-3">Choose Your Paragliding Experience</h2>

                <p class="sec__desc">

                    Our team of passionate paragliding experts in Himachal Pradesh is dedicated to providing you with a safe and thrilling flying adventure. We strive to make your booking process as easy and enjoyable as your flight itself.

                </p>

            </div>

            <br>

            <br>

            <div class="row align-items-center">

                <div class="col-lg-5 me-auto">

                    <div class="mobile-img my-4">

                        <img

                            src="https://t3.ftcdn.net/jpg/01/35/22/60/240_F_135226020_GtvTk6FLbrdTzBoRytPPyLGECim8fTsl.jpg"

                            data-src="https://t3.ftcdn.net/jpg/01/35/22/60/240_F_135226020_GtvTk6FLbrdTzBoRytPPyLGECim8fTsl.jpg"

                            alt="Paragliding Experience"

                            class="lazy" />

                    </div>

                </div>

                <!-- end col-lg-5 -->

                <div class="col-lg-6">

                    <div class="mobile-app-content">

                        <div class="section-heading">

                            <h4 class="sec__title mb-3">

                                Tandem Paragliding <br />

                            </h4>

                            <p class="sec__desc mb-4">

                                Soar through the skies of Himachal Pradesh with a professional pilot. Ideal for beginners and thrill-seekers alike, our tandem flights promise an unforgettable experience.

                            </p>

                        </div>

                        <div class="btn-box mt-4">

                            <a href="activities-paragliding" class="theme-btn bg-info"> Learn More</a>

                        </div>

                        <!-- end btn-box -->

                    </div>

                </div>

                <!-- end col-lg-6 -->

            </div>

            <div class="row align-items-center">

                <!-- end col-lg-5 -->

                <div class="col-lg-6">

                    <div class="mobile-app-content">

                        <div class="section-heading">

                            <h4 class="sec__title mb-3">

                                Solo Paragliding <br />

                            </h4>

                            <p class="sec__desc mb-4">

                                For experienced paragliders, our solo flights offer the freedom to explore the skies on your own terms. Enjoy the breathtaking views and the thrill of flight.

                            </p>

                        </div>

                        <div class="btn-box mt-4">

                            <a href="activities-paragliding" class="theme-btn bg-info"> Learn More</a>

                        </div>

                        <!-- end btn-box -->

                    </div>

                </div>

                <div class="col-lg-5 me-auto">

                    <div class="mobile-img my-4">

                        <img

                            src="https://t4.ftcdn.net/jpg/02/97/49/97/240_F_297499730_wFgmq7SXGoneIaWbnj0tUN4q3hvJy2kl.jpg"

                            data-src="https://t4.ftcdn.net/jpg/02/97/49/97/240_F_297499730_wFgmq7SXGoneIaWbnj0tUN4q3hvJy2kl.jpg"

                            alt="Solo Paragliding"

                            class="lazy" />

                    </div>

                </div>

                <!-- end col-lg-6 -->

            </div>

            <!-- end row -->

        </div>

        <!-- end container -->

    </section>



    <section class="about-area section-padding">

        <div class="container">

            <div class="row align-items-center">

                <!-- end col-lg-6 -->

                <div class="col-lg-6">

                    <div class="image-box row">

                        <div class="col-lg-6 mt-lg-4">

                            <img

                                src="https://img.freepik.com/free-vector/collection-flat-design-cozy-winter-clothes_23-2148743928.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                data-src="https://img.freepik.com/free-vector/collection-flat-design-cozy-winter-clothes_23-2148743928.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                            <img

                                src="https://img.freepik.com/premium-vector/cartoon-child-winter-clothes-white-background_95264-2505.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                data-src="https://img.freepik.com/premium-vector/cartoon-child-winter-clothes-white-background_95264-2505.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                        </div>

                        <div class="col-lg-6">

                            <img

                                src="https://img.freepik.com/premium-vector/female-skier-illustration-winter-gear-holding-ski-poles_95264-2354.jpg?w=740"

                                data-src="https://img.freepik.com/premium-vector/female-skier-illustration-winter-gear-holding-ski-poles_95264-2354.jpg?w=740"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                            <img

                                src="https://img.freepik.com/free-vector/flat-winter-clothes-essentials_23-2147722096.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                data-src="https://img.freepik.com/free-vector/flat-winter-clothes-essentials_23-2147722096.jpg?ga=GA1.1.1284369193.1700073199&semt=ais_hybrid"

                                alt="about image"

                                class="w-100 rounded-12 mb-4 lazy" />

                        </div>

                    </div>

                    <!-- end image-box -->

                </div>

                <!-- end col-lg-6 -->

                <div class="col-lg-6">

                    <div class="section-heading mb-4 mb-lg-0">

                        <h2 class="sec__title mb-3">

                            Products on Rent

                        </h2>

                        <p class="sec__desc mb-4">

                            Discover a wide range of high-quality products available for rent. Whether you need equipment for a short-term project or a long-term solution, we've got you covered.

                        </p>

                        <p class="sec__desc mb-4">

                            Our rental process is simple and hassle-free. Select the product you need, choose the rental duration, and enjoy the convenience of having it delivered to your doorstep.

                        </p>

                        <p class="sec__desc">

                            From electronics to outdoor gear, furniture to appliances, we offer flexible rental options to suit your needs. Experience the ease and affordability of renting with us.

                        </p>

                        <br>

                        <a href="product" class="theme-btn">Learn More</a>

                    </div>

                    <!-- end section-heading -->

                </div>



            </div>

            <!-- end row -->

        </div>

        <!-- end container -->

    </section>



    <!-- <section class="cta-area bg-dark padding-top-60px padding-bottom-60px">

        <div class="container">

            <div

                class="d-flex flex-wrap align-items-center justify-content-between">

                <div class="section-heading py-3">

                    <h2 class="mb-3 text-white font-size-28 font-weight-bold">

                        Buy A Rent On Products

                    </h2>

                    <p class="font-size-17 text-white">

                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat

                        libero

                    </p>

                </div>

                <a href="login" class="theme-btn">Login</a>

            </div>

        </div>

    </section> -->

    <!-- end cta-area -->



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



    <section class="contact-area padding-top-60px padding-bottom-90px">

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

                            src="https://img.freepik.com/free-vector/flat-customer-support-illustration_23-2148899114.jpg"

                            data-src="https://img.freepik.com/free-vector/flat-customer-support-illustration_23-2148899114.jpg"

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



    <?php

    include("footer.php");

    ?>

    <!-- start back-to-top -->

    <div id="back-to-top">

        <i class="far fa-angle-up" title="Go top"></i>

    </div>

    <!-- end back-to-top -->

    <!-- Template JS Files -->

    <script src="js/jquery-3.7.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/select2.min.js"></script>

    <script src="js/jquery.fancybox.min.js"></script>

    <script src="js/animated-headline.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/waypoints.min.js"></script>

    <script src="js/jquery.counterup.min.js"></script>

    <script src="js/rating-script.js"></script>

    <script src="js/jquery.lazy.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particles-script.js"></script>


</body>



</html>
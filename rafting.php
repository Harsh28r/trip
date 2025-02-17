<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Activities- Rafting</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />

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
    <?php
    include("header.php");
    ?>
    <style>
        .bread-bg {
            background-image: url(img/image-asset.jpeg);
        }
    </style>

    <section class="breadcrumb-area bread-bg">
        <!-- <div class="overlay"></div> -->
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Rafting</h2>

            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <section class="blog-area padding-top-60px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <!-- Hotel Card 1 -->
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <a href="#" class="card-image">
                            <img src="https://images.pexels.com/photos/1732281/pexels-photo-1732281.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="card image" />
                            <span class="badge text-bg-info badge-pill">T&C Apply</span>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="air-ballons-details"> River Rafting in Shimla</a></h5>

                            <ul class="info-list mt-3">
                                <li>
                                    <img src="icons/map.png" height="28px;" alt="" srcset="">Shimla</img>
                                </li>
                                <li>
                                    <img src="icons/man.png" height="28px;" alt="" srcset=""><b>By</b>&nbsp;Vivek Raj</img>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price">
                                    <h3><b>&#8377;789./</b></h3>
                                </span>
                                <button onclick="window.location.href=' rafting-details';" class="btn btn-info btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <a href="#" class="card-image">
                            <img src="https://images.pexels.com/photos/1732284/pexels-photo-1732284.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="card image" />
                            <span class="badge text-bg-info badge-pill">T&C Apply</span>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="air-ballons-details">River Rafting in Manali</a></h5>

                            <ul class="info-list mt-3">
                                <li>
                                    <img src="icons/map.png" height="28px;" alt="" srcset="">Manali</img>
                                </li>
                                <li>
                                    <img src="icons/man.png" height="28px;" alt="" srcset=""><b>By</b>&nbsp;Raj Kumar</img>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price">
                                    <h3><b>&#8377;799./</b></h3>
                                </span>
                                <button onclick="window.location.href='rafting-details';" class="btn btn-info btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hotel-card">
                        <a href="#" class="card-image">
                            <img src="https://images.pexels.com/photos/1732281/pexels-photo-1732281.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="card image" />
                            <span class="badge text-bg-info badge-pill">T&C Apply</span>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="rafting-details"> River Rafting in Shimla</a></h5>

                            <ul class="info-list mt-3">
                                <li>
                                    <img src="icons/map.png" height="28px;" alt="" srcset="">Shimla</img>
                                </li>
                                <li>
                                    <img src="icons/man.png" height="28px;" alt="" srcset=""><b>By</b>&nbsp;Vivek Raj</img>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price">
                                    <h3><b>&#8377;789./</b></h3>
                                </span>
                                <button onclick="window.location.href='rafting-details';" class="btn btn-info btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end container -->
    </section>
    <!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
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
    <script src="js/main.js"></script>
</body>


</html>
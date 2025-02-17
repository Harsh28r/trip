<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SignUp</title>

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
    <!-- end per-loader -->
    <?php

    include("header.php");
    ?>

    <style>
        .bread-bg {
            background-image: url(https://img.freepik.com/free-vector/digital-technology-polygon-connection-background_1035-17976.jpg?t=st=1724358043~exp=1724361643~hmac=51e5eaa980606f8b6e9b5d2a27a9016472dbd371bca403c06c01104b2e1c6c3b&w=996);
        }
    </style>
    <section class="breadcrumb-area bread-bg">
        <!-- <div class="overlay"></div> -->
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">SignUp</h2>
                <ul class="bread-list text-white">
                    <li><a href="index" ;>Home</a></li>
                    <li ;>SignUp</li>
                </ul>
            </div>
            <!-- end breadcrumb-content -->
        </div>

        <!-- end bread-svg -->
    </section>



    <!-- ================================
    START CONTACT AREA
================================= -->
    <section class="contact-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <div class="col-lg-7 mx-auto">
                <form action="#" class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="font-size-28 font-weight-semi-bold mb-1">
                                Create an account!
                            </h4>

                        </div>
                        <div class="d-flex align-items-center">
                            <hr class="border-top-gray flex-grow-1" />
                            <span class="mx-1 text-uppercase">or</span>
                            <hr class="border-top-gray flex-grow-1" />
                        </div>
                        <div class="form-group">
                            <label class="label-text">First Name</label>
                            <input
                                class="form-control form--control ps-3"
                                type="text"
                                name="name"
                                placeholder="e.g. Alex" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Last Name</label>
                            <input
                                class="form-control form--control ps-3"
                                type="text"
                                name="name"
                                placeholder="e.g. Smith" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Username</label>
                            <input
                                class="form-control form--control ps-3"
                                type="text"
                                name="name"
                                placeholder="e.g. alex_smith" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Email Address</label>
                            <input
                                class="form-control form--control ps-3"
                                type="email"
                                name="email"
                                placeholder="e.g. you@example.com" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Password</label>
                            <div class="position-relative">
                                <input
                                    class="form-control form--control ps-3 password-field"
                                    type="password"
                                    name="password"
                                    placeholder="Password" />
                                <a
                                    href="javascript:void(0)"
                                    class="position-absolute top-0 right-0 h-100 toggle-password"
                                    title="toggle show/hide password">
                                    <i class="far fa-eye eye-on"></i>
                                    <i class="far fa-eye-slash eye-off"></i>
                                </a>
                            </div>
                            <p class="font-size-14 mt-1 line-height-20 font-weight-regular">
                                Your password must be at least 6 characters long and must
                                contain letters, numbers and special characters. Cannot
                                contain whitespace.
                            </p>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2">
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="privacyCheckbox" />
                                <label class="custom-control-label" for="privacyCheckbox">I Agree to Dirto's
                                    <a href="#" class="btn-link">Privacy Policy</a></label>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="termsCheckbox" />
                                <label class="custom-control-label" for="termsCheckbox">I Agree to Dirto's
                                    <a href="#" class="btn-link">Terms of Services</a></label>
                            </div>
                        </div>
                        <!-- end form-group -->
                        <button class="theme-btn border-0" type="submit">
                            Register Account
                        </button>
                        <p class="mt-3">
                            Already have an account?
                            <a href="login" Hlass="btn-link">Login</a>
                        </p>
                    </div>
                </form>
            </div>
            <!-- end col-lg-7 -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
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
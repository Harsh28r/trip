<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact -Trip24</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
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

    <section class="contact-area padding-bottom-90px">
        <div class="container">
            <div class="alert alert-success alert-message mb-3" role="alert">
                Thank You! Your message has been sent.
            </div>
            <div class="row" style="margin-top: 9rem;">
                <div class="col-lg-8">
                    <form action="https://techydevs.com/demos/themes/html/dirto-demo/dirto/php/contact.php" class="contact-form card">
                        <div class="card-body">
                            <h4 class="card-title">Get in touch</h4>
                            <hr class="border-top-gray" />
                            <div class="form-group">
                                <label class="label-text">Your Name</label>
                                <input
                                    id="name"
                                    class="form-control form--control ps-3"
                                    type="text"
                                    name="name"
                                    placeholder="eg - Mohit Kumar" />
                            </div>
                            <div class="form-group">
                                <label class="label-text">Your Email</label>
                                <input
                                    id="email"
                                    class="form-control form--control ps-3"
                                    type="email"
                                    name="email"
                                    placeholder="eg - you@email.com" />
                            </div>
                            <div class="form-group">
                                <label class="label-text">Message</label>
                                <textarea
                                    id="message"
                                    class="form-control form--control ps-3"
                                    rows="4"
                                    name="message"
                                    placeholder="Write message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="checkbox">
                                <small class="lable-text">I concent to receiving RCS, Whatsapp, Email, or SMS from trip24.co.in & i have reviewed and agreed to Terms & Conditions and Privacy Policy.</small>

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
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Information</h4>
                            <hr class="border-top-gray" />
                            <ul class="list-items mb-5">
                                <li>
                                    <span
                                        class="fal fa-map-marker-alt icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                    101 East Parkview Road, New York
                                </li>
                                <li>
                                    <span
                                        class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span><a href="mailto:support@trip24.co.in">support@trip24.co.in</a>
                                </li>
                                <li>
                                    <span
                                        class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                    +91 000000000000
                                </li>
                            </ul>
                            <h4 class="card-title">Working Hours</h4>
                            <hr class="border-top-gray" />
                            <ul class="list-items mt-3">
                                <li class="d-flex align-items-center justify-content-between">
                                    Monday To Friday
                                    <span class="font-weight-regular">9am - 7pm</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    Saturday To Sunday
                                    <span class="font-weight-regular text-danger">Close</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
    ================================= -->
    <!-- Start map --->
    <!-- <div class="map-container">
        <div
            id="map-single"
            data-latitude="40.728157"
            data-longitude="-74.077644"
            class="w-100 height-500"></div>
    </div> -->
    <!-- End map --->
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
    <!-- Start google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_my4aX1ULOXNZcIxmpBnJmVF7U544p2k"></script>
    <script src="js/maps.js"></script>
    <!-- End google map -->
    <script src="js/main.js"></script>
</body>

</html>
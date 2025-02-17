<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home-Trip24</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap" rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/animated-headline.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" />

    <style>
        .hero-video {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
    </style>
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

    <?php include("header.php"); ?>

    <section class="hero-wrapper">
        <div id="particles-js"></div>

        <!-- Video section -->
        <div class="video-bg">
            <video id="video1" class="hero-video" muted>
                <source src="video/5690593-hd_1920_1080_25fps.mp4" type="video/mp4" />
                <!-- Your browser does not support the video tag. -->
            </video>
            <video id="video2" class="hero-video" muted style="display: none;">
                <source src="video/another-video.mp4" type="video/mp4" />
                <!-- Your browser does not support the video tag. -->
            </video>
            <!-- Add more video elements as needed -->
        </div>

        <div class="hero-heading text-center">
            <h2 class="sec__title text-white cd-headline zoom">
                Discover What You Need:
                <span class="cd-words-wrapper text-white">
                    <b class="is-visible">Top-Rated Hotels</b>
                    <b>Custom Trip Packages</b>
                    <b>Bike On Rent</b>
                    <b>Bus Reservations</b>
                    <b>Adventure Activities</b>
                    <b>Paragliding</b>
                    <b>Rafting</b>
                    <b>Hot Air Balloons</b>
                    <b>Snow Suit On Rent</b>
                </span>
            </h2>

            <p class="sec__desc text-white">
                Find the best hotels, tailor-made trip packages, bike rentals, bus reservations, thrilling activities, and top-quality rental products.
            </p>
        </div>
        <div class="highlighted-categories text-center mt-5">
            <div class="highlight-lists d-flex flex-wrap justify-content-center mt-4">
                <!-- Highlight categories -->
            </div>
        </div>

        <div class="hero-svg-content text-center d-flex align-items-center justify-content-center">
            <i class="fal fa-angle-down"></i>
        </div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const videos = document.querySelectorAll(".hero-video");
            let currentVideoIndex = 0;

            function playNextVideo() {
                // Hide current video and stop playback
                videos[currentVideoIndex].style.display = "none";
                videos[currentVideoIndex].pause();

                // Move to next video
                currentVideoIndex = (currentVideoIndex + 1) % videos.length;

                // Show next video and start playback
                videos[currentVideoIndex].style.display = "block";
                videos[currentVideoIndex].play();
            }

            // Set up event listeners
            videos.forEach((video, index) => {
                video.onended = playNextVideo;

                // Initially hide all videos except the first one
                if (index !== currentVideoIndex) {
                    video.style.display = "none";
                }
            });

            // Start playing the first video
            videos[currentVideoIndex].play();
        });
    </script>
</body>

</html>
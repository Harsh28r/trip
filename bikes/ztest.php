<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Primary Meta Tags -->
    <title>Bikes On Rent - Trip24 | Affordable Bike Rentals Across India</title>
    <meta name="description" content="Looking for bikes on rent in India? Trip24 offers affordable and reliable bike rentals with a wide range of options. Rent a bike easily with Trip24 and explore your destination with freedom.">
    <meta name="keywords" content="bike rentals, bikes on rent, rent a bike, bike hire, two wheeler rentals, affordable bike rentals, Trip24 bike rental, India bike hire, motorcycle rentals">
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bikes On Rent - Trip24" />
    <meta property="og:description" content="Rent a bike from Trip24 for affordable rates across India. Perfect for tourists and locals looking for easy transportation options." />
    <meta property="og:url" content="https://trip24.co.in/bikes.php" />
    <meta property="og:image" content="https://work.perceptionvita.in/trip24.co.in/img/trip24.png" />
    <meta property="og:site_name" content="Trip24" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Bikes On Rent - Trip24 | Affordable Bike Rentals" />
    <meta name="twitter:description" content="Rent bikes easily and affordably with Trip24, available in cities across India. Explore with freedom by booking your bike now!" />
    <meta name="twitter:image" content="https://work.perceptionvita.in/trip24.co.in/img/trip24.png" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://trip24.co.in/bikes.php" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap" rel="stylesheet" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://work.perceptionvita.in/trip24.co.in/img/trip24.png" />
</head>

<?php 
    
    include("conn.php"); // Include database connection
?>

<body>
   
    <?php include("../header.php"); ?>
    <style>
        .bread-bg {
            background-image: url(img/DSC_0535-min.jpg);
        }
    </style>

    <section class="breadcrumb-area bread-bg">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Bike On Rent</h2>
            </div>
        </div>
    </section>

    <section class="blog-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <section class="listing-area">
                <div class="fs-container d-flex">
                    <div class="fs-container-item w-100 px-3 pb-5">
                        <form method="GET" action="">
                            <div class="card mt-12">
                                <div class="card-body row pb-0">
                                    <div class="col-lg-4 pe-lg-0">
                                        <div class="form-group">
                                            <span class="fal fa-map-marker-alt form-icon"></span>
                                            <input class="form-control form--control" type="text" name="location" placeholder="Pickup Location" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="price" placeholder="Price Range" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <button class="theme-btn border-0 w-100" type="submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <div class="col-lg-12">
                <div class="row">
                    <?php
                    // Pagination setup
                    $limit = 6; // Number of items per page
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;

                    // Search filters
                    $location = isset($_GET['location']) ? $_GET['location'] : '';
                    $price = isset($_GET['price']) ? $_GET['price'] : '';

                    // Build query
                    $query = "SELECT * FROM service_bikes WHERE 1=1";
                    if ($location) {
                        $query .= " AND pickup_location LIKE '%$location%'";
                    }
                    if ($price) {
                        $query .= " AND price <= $price";
                    }
                    $query .= " LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($conn, $query);

                    // Fetch and display bikes
                    while ($bike = mysqli_fetch_assoc($result)) {
                        // echo $bike['banner'] ;
                        echo '
                        <div class="col-lg-4 col-sm-6">
                            <div class="card hover-y">
                                <a class="card-image">
                                    <img src="../uploaded_images/' . $bike["banner"] . '" alt="image" class="card-img-top lazy" />
                                    <span class="badge text-bg-info badge-pill">T & Cs Apply</span>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title"><p>' . htmlspecialchars($bike['brand'] . " " . $bike['model']) . '</p></h4>
                                    <p class="card-text mt-3">
                                        <i class="bi bi-geo-alt-fill"></i> ' . htmlspecialchars($bike['pickup_location']) . '<br>
                                        <i class="bi bi-currency-rupee"></i> ' . htmlspecialchars($bike['price']) . ' per day<br>
                                        Book Now To Ride
                                    </p>
                                    <div class="post-author d-flex align-items-center justify-content-between mt-4">
                                        <button onclick="window.location.href=\'bike-on-rent-detail\'" type="button" class="btn btn-info btn-sm">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>

                <!-- Pagination -->
                <div class="col-12 mt-4">
                    <?php
                    // Count total bikes for pagination
                    $countQuery = "SELECT COUNT(*) as total FROM service_bikes WHERE 1=1";
                    if ($location) {
                        $countQuery .= " AND pickup_location LIKE '%$location%'";
                    }
                    if ($price) {
                        $countQuery .= " AND price <= $price";
                    }
                    $countResult = mysqli_query($conn, $countQuery);
                    $totalBikes = mysqli_fetch_assoc($countResult)['total'];
                    $totalPages = ceil($totalBikes / $limit);

                    echo '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
                    if ($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '&location=' . urlencode($location) . '&price=' . urlencode($price) . '">Previous</a></li>';
                    }
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo '<li class="page-item ' . ($i === $page ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '&location=' . urlencode($location) . '&price=' . urlencode($price) . '">' . $i . '</a></li>';
                    }
                    if ($page < $totalPages) {
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '&location=' . urlencode($location) . '&price=' . urlencode($price) . '">Next</a></li>';
                    }
                    echo '</ul></nav>';
                    ?>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>

    <?php include("../footer.php"); ?>
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
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Start google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="js/infobox.js"></script>
    <script src="js/markerclusterer.js"></script>
    <!-- End google map -->
</body>
</html>

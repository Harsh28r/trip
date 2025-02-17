<?php
session_start();
include("../tr24conn.php");

// Pagination setup
$limit = 6; // Number of bikes per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Handle search and filters
$search = '';
$filterBrand = '';
$filterLocation = '';
$query = "SELECT * FROM service_bikes WHERE 1=1"; // Base query

if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $query .= " AND (pickup_location LIKE '%$search%' OR price LIKE '%$search%' OR capacity LIKE '%$search%' OR model LIKE '%$search%' OR brand LIKE '%$search%')";
}

if (isset($_GET['brand']) && $_GET['brand'] != '') {
    $filterBrand = $conn->real_escape_string($_GET['brand']);
    $query .= " AND brand = '$filterBrand'";
}

if (isset($_GET['location']) && $_GET['location'] != '') {
    $filterLocation = $conn->real_escape_string($_GET['location']);
    $query .= " AND pickup_location = '$filterLocation'";
}

// Pagination and limit
$totalQuery = "SELECT COUNT(*) as count FROM ($query) as temp"; // Get total records
$totalResult = $conn->query($totalQuery);
$totalBikes = $totalResult->fetch_assoc()['count'];
$totalPages = ceil($totalBikes / $limit);
$query .= " LIMIT $limit OFFSET $offset"; // Add limit to main query

$result = $conn->query($query);

// Fetching brands for filtering
$brandsQuery = "SELECT DISTINCT brand FROM service_bikes";
$brandsResult = $conn->query($brandsQuery);

// Fetching locations for filtering
$locationsQuery = "SELECT DISTINCT pickup_location FROM service_bikes";
$locationsResult = $conn->query($locationsQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bike On Rent</title>
    <?php include("head-seo.php"); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/font-awesome.min.css" />
    <style>
        .border-light-gray {
            border-color: #8b8b8b;
        }
    </style>
    <!-- <script src="bikes.js"></script> -->
    <script>
        $(document).ready(function() {
            // Function to load bikes based on filters and search
            function loadBikes(page) {
                const search = $('#searchInput').val();
                const brand = $('select[name="brand"]').val();
                const location = $('select[name="location"]').val();
                $.ajax({
                    url: 'search-pagination.php', // A separate PHP file to handle the search and pagination
                    type: 'GET',
                    data: {
                        page: page,
                        search: search,
                        brand: brand,
                        location: location
                    },
                    success: function(data) {
                        $('#bikeList').html(data); // Update the bike list
                    }
                });
            }

            // Live search functionality
            $('#searchInput').on('keyup', function() {
                loadBikes(1); // Load first page with updated search
            });

            // Filter functionality
            $('select[name="brand"], select[name="location"]').on('change', function() {
                loadBikes(1); // Load first page with updated filters
            });

            // Clear filters functionality
            $('#clearFilters').on('click', function() {
                $('#searchInput').val('');
                $('select[name="brand"]').val('');
                $('select[name="location"]').val('');
                loadBikes(1); // Reload bikes on clear
            });

            // Handle pagination
            $(document).on('click', '.page-link', function(e) {
                e.preventDefault();
                const page = $(this).data('page');
                loadBikes(page); // Load bikes for the selected page
            });

            // Initial load
            loadBikes(1); // Load first page on initial load
        });
    </script>
</head>

<body>
    <?php include("../header.php"); ?>
    <style>
        .bread-bg {
            background-image: url(../img/DSC_0535-min.jpg);
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
            <form id="filterForm" method="get">
                <div class="row mb-3">
                    <div class="col-lg-4 col-sm-12 form-group">
                        <span class="fas fa-motorcycle form-icon"></span>
                        <input id="searchInput" class="form-control form--control" type="text" name="search" placeholder="Search..."
                            value="<?php echo htmlspecialchars($search); ?>" />
                    </div>
                    <div class="col-lg-2 col-sm-6 form-group">
                        <span class="fas fa-motorcycle form-icon"></span>
                        <select name="brand" class="form-control form--control">
                            <option value="" selected disabled>Brand <i class="fa fa-filter"></i></option>
                            <?php while ($brand = $brandsResult->fetch_assoc()): ?>
                                <option value="<?php echo htmlspecialchars($brand['brand']); ?>"
                                    <?php if ($filterBrand == $brand['brand']) echo 'selected'; ?>>
                                    <?php echo htmlspecialchars($brand['brand']); ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-6 form-group">
                        <span class="fas fa-map form-icon"></span>
                        <select name="location" class="form-control form--control">
                            <option value="" selected disabled>Pickup Location </option>
                            <?php while ($location = $locationsResult->fetch_assoc()): ?>
                                <option value="<?php echo htmlspecialchars($location['pickup_location']); ?>"
                                    <?php if ($filterLocation == $location['pickup_location']) echo 'selected'; ?>>
                                    <?php echo htmlspecialchars($location['pickup_location']); ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <!-- <div class="col-lg-2 col-sm-6">
                        <button class="theme-btn btn-sm border-0 w-100" type="button" onclick="loadBikes(1)">Search</button>
                    </div> -->
                    <div class="col-lg-2 col-sm-6 form-group">

                        <button id="clearFilters" class="theme-btn border-0" type="button">Clear
                            Filter
                            <i class="fa fa-filter"></i>
                        </button>

                    </div>
                </div>
            </form>

            <div class="row" id="bikeList">
                <!-- Bikes will be loaded here dynamically -->
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination" id="pagination">
                    <!-- Pagination will be populated dynamically -->
                </ul>
            </nav>
        </div>
    </section>

    <?php include("../footer.php"); ?>
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>

    <!-- JS Files -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/select2.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.lazy.min.js"></script>
    <script src="../js/rating-script.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>

<?php
$conn->close();
?>
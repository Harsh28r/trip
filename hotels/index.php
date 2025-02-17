<?php include("../T24vitAdmin/control/conn.php");
if (isset($_GET['checkin']) && isset($_GET['checkout'])) {
    $checkin = mysqli_real_escape_string($conn, $_GET['checkin']);
    $checkout = mysqli_real_escape_string($conn, $_GET['checkout']);

    $booking_data = "&checkin=" . $checkin . "&checkout=" . $checkout;
} else {
    $booking_data = "";
}

?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hotel- Trip24</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../css/jquery.fancybox.css" />
    <link rel="stylesheet" href="../css/daterangepicker.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Include Flatpickr CSS & JS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- ===================================================== -->
    <style>
        /* Styling the sliders */
        .slider-container {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        input[type="range"] {
            width: 100%;
            height: 8px;
            background: #ddd;
            border-radius: 5px;
            outline: none;
            -webkit-appearance: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #092f1f;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="range"]:focus::-webkit-slider-thumb {
            background: #0056b3;
        }

        input[type="range"]:focus {
            background: #bbb;
        }

        /* Styling the value display next to the slider */
        .slider-value {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }

        button.theme-btn {
            padding: 10px 20px;
            background-color: #092f1f;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button.theme-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- ===================================================== -->
    <style type="text/css">
        .pagination {
            display: flex;
            justify-content: center;
            /* Center the pagination */
            margin: 20px 0;
            /* Space around pagination */
        }

        .pagination a {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            /* Space between buttons */
            border: 1px solid #092f1f;
            /* Border color */
            border-radius: 5px;
            /* Rounded corners */
            color: #092f1f;
            /* Text color */
            text-decoration: none;
            /* No underline */
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transitions */
        }

        .pagination a:hover {
            background-color: #092f1f;
            /* Background on hover */
            color: #ffffff;
            /* Text color on hover */
        }

        .pagination a.active {
            background-color: #092f1f;
            /* Active page background */
            color: #ffffff;
            /* Active page text color */
            border-color: #092f1f;
            /* Match border color with active */
        }

        .pagination a.disabled {
            color: #ccc;
            /* Disabled text color */
            border-color: #ccc;
            /* Disabled border color */
            pointer-events: none;
            /* Disable clicking */
        }

        .theme-btn {
            padding: 10px;
        }

        .theme-btn {
            position: relative;
            display: inline-block;
            text-decoration: none;
            /* Adjust if needed */
            color: #000;
            /* Change to your desired color */
        }

        .cart-count {
            position: absolute;
            top: 0;
            right: 0;
            background-color: red;
            /* Change to your desired color */
            color: white;
            /* Text color */
            border-radius: 50%;
            width: 20px;
            /* Adjust size */
            height: 20px;
            /* Adjust size */
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translate(50%, -50%);
            /* Adjust position */
            font-size: 12px;
            /* Adjust font size */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include("../header.php"); ?>
<section class="breadcrumb-area" style="    background-color: #dddddd;
    padding-top: 10rem;
    padding-bottom: 6rem;">
    <!-- <div id="particles-js"></div> -->
    <!-- <div class="overlay"></div> -->
    <!-- end overlay -->
    <div class="container">
        <form method="GET">
            <div class="row g-3 align-items-end">
                <div class="col-lg-3 col-md-6">
                    <label for="location" style="color: #5b5b5b;">Hotel / Location</label>
                    <input id="location" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" name="search" class="form-control form--control" placeholder="eg - Manali" type="text" required>
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="checkIn" style="color: #5b5b5b;">Check In</label>
                    <input id="checkIn" value="<?php echo isset($_GET['checkin']) ? htmlspecialchars($_GET['checkin']) : '' ?>" name="checkin" class="form-control form--control datepicker" type="text" placeholder="Select Check-in Date" required>
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="checkOut" style="color: #5b5b5b;">Check Out</label>
                    <input id="checkOut" value="<?php echo isset($_GET['checkout']) ? htmlspecialchars($_GET['checkout']) : '' ?>" name="checkout" class="form-control form--control datepicker" type="text" placeholder="Select Check-out Date" required>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button type="submit" class="btn theme-btn w-100">
                        Submit
                    </button>
                </div>
            </div>
        </form>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const checkIn = document.getElementById("checkIn");
                const checkOut = document.getElementById("checkOut");

                // Initialize Flatpickr for Check-in
                flatpickr(checkIn, {
                    dateFormat: "d-m-Y",
                    minDate: "today",
                    onChange: function(selectedDates) {
                        let minCheckOut = new Date(selectedDates[0]);
                        minCheckOut.setDate(minCheckOut.getDate() + 1);

                        checkOut.flatpickr({
                            dateFormat: "d-m-Y",
                            minDate: minCheckOut
                        });

                        // Auto-focus on Check-out field
                        setTimeout(() => checkOut.focus(), 200);
                    }
                });

                // Initialize Flatpickr for Check-out
                flatpickr(checkOut, {
                    dateFormat: "Y-m-d",
                    minDate: "today"
                });
            });
        </script>
    </div>
</section>
<!-- end breadcrumb-area -->
<section class="card-area padding-top-60px padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- <div class="card">
                        <div class="card-body">
                            <form method="get">
                                <h4 class="card-title mb-3">Search Hotel</h4>
                                <div class="form-group select2-container-wrapper">
                                    <input class="form-control form--control" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" name="search" type="text" placeholder=" What are you looking for?" />
                                </div>
                                <button class="theme-btn border-0 w-100" type="submit">Search</button>
                            </form>
                        </div>
                    </div> -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Price Range</h4>
                            <form method="get" class="d-flex align-items-center">
                                <div class="form-group me-3">
                                    <label for="fromSlider" class="form-label">From</label>
                                    <div class="slider-container">
                                        <!-- Slider for "from" value -->
                                        <input
                                            name="from"
                                            type="range"
                                            class="form-control form--control ps-3"
                                            value="<?php echo isset($_GET['from']) ? htmlspecialchars($_GET['from']) : 0; ?>"
                                            min="0"
                                            max="10000"
                                            step="100"
                                            id="fromSlider"
                                            onchange="updateFromValue()" />
                                        <div class="slider-value">
                                            <span id="fromValue"><?php echo isset($_GET['from']) ? htmlspecialchars($_GET['from']) : 0; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group me-3">
                                    <label for="toSlider" class="form-label">To</label>
                                    <div class="slider-container">
                                        <!-- Slider for "to" value -->
                                        <input
                                            name="to"
                                            type="range"
                                            class="form-control form--control ps-3"
                                            value="<?php echo isset($_GET['to']) ? htmlspecialchars($_GET['to']) : 0; ?>"
                                            min="0"
                                            max="10000"
                                            step="100"
                                            id="toSlider"
                                            onchange="updateToValue()" />
                                        <div class="slider-value">
                                            <span id="toValue"><?php echo isset($_GET['to']) ? htmlspecialchars($_GET['to']) : 0; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <button class="theme-btn theme-btn-gray border-0 mb-3" type="submit">
                                    <i class="fal fa-angle-right"></i>
                                </button>
                            </form>
                            <script>
                                // Function to update the "from" value display
                                function updateFromValue() {
                                    var fromSlider = document.getElementById('fromSlider');
                                    var fromValue = document.getElementById('fromValue');
                                    fromValue.textContent = fromSlider.value;
                                }
                                // Function to update the "to" value display
                                function updateToValue() {
                                    var toSlider = document.getElementById('toSlider');
                                    var toValue = document.getElementById('toValue');
                                    toValue.textContent = toSlider.value;
                                }
                                // Initial value updates
                                updateFromValue();
                                updateToValue();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <?php
                $limit = 6; // Number of results per page
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($page - 1) * $limit;
                // Capture the search term and price range from the URL
                $searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
                $priceFrom = isset($_GET['from']) ? (float)$_GET['from'] : 0;
                $priceTo = isset($_GET['to']) ? (float)$_GET['to'] : PHP_INT_MAX;
                // Prepare the SQL query to fetch active services
                // Prepare the base SQL query
                $query = "SELECT service_hotels.* 
                FROM service_hotels 
                LEFT JOIN vendor_service ON vendor_service.service_name = service_hotels.hotel_name
                WHERE service_hotels.status='active'";
                // Add search conditions
                if (!empty($searchTerm)) {
                    $query .= " AND (service_hotels.hotel_name LIKE '%$searchTerm%' 
                    OR vendor_service.service_type LIKE '%$searchTerm%' 
                    OR vendor_service.service_address LIKE '%$searchTerm%' 
                    OR vendor_service.service_city LIKE '%$searchTerm%' 
                    OR vendor_service.service_state LIKE '%$searchTerm%')";
                }
                // Add price filtering
                if ($priceFrom > 0 || $priceTo < PHP_INT_MAX) {
                    $query .= " AND service_hotels.price BETWEEN $priceFrom AND $priceTo";
                }
                // Ordering and pagination
                $query .= " ORDER BY service_hotels.room_id DESC LIMIT $limit OFFSET $offset";
                // Debugging the query (Optional)
                // echo $query;
                $service = mysqli_query($conn, $query);
                // Check for errors in the query
                if (!$service) {
                    echo "Error: " . mysqli_error($conn);
                }
                // Count total results for pagination
                $countQuery = "SELECT COUNT(*) FROM service_hotels WHERE status='active'";
                if (!empty($searchTerm)) {
                    $countQuery .= " AND (hotel_name LIKE '%$searchTerm%' OR 
                        (SELECT service_type FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%' OR 
                        (SELECT service_address FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%' OR 
                        (SELECT service_city FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%' OR 
                        (SELECT service_state FROM vendor_service WHERE service_name=service_hotels.hotel_name) LIKE '%$searchTerm%')";
                }
                if ($priceFrom > 0 || $priceTo < PHP_INT_MAX) {
                    $countQuery .= " AND price >= $priceFrom AND price <= $priceTo";
                }
                $result = mysqli_query($conn, $countQuery);
                $totalCount = mysqli_fetch_row($result)[0];
                $totalPages = ceil($totalCount / $limit);
                // Display services or message if none found
                if (mysqli_num_rows($service) > 0) {
                    while ($services = mysqli_fetch_array($service)) {
                        $vendor = mysqli_query($conn, "SELECT * FROM vendor_service WHERE status='active' AND vendor_uid='" . $services["vendor_uid"] . "' ORDER BY id DESC");
                        $vendors = mysqli_fetch_array($vendor);
                ?>
                        <div class="listing-wrapper">
                            <div class="card card-flex">
                                <a href="booking/<?php echo $services["hotel_name"]; ?><?= $booking_data; ?>-<?php echo $services['room_id']; ?>" class="card-image">
                                    <img src="../images/uploads/<?php echo $services["banner"]; ?>" class="card-img-top" alt="card image" />
                                    <!-- <span class="badge text-bg-info badge-pill"><?php echo $vendors["service_type"]; ?></span> -->
                                </a>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-1">
                                        <h4 class="card-title mb-0">
                                            <a href="booking/<?php echo $services["hotel_name"]; ?><?= $booking_data; ?>-<?php echo $services['room_id']; ?>">
                                                <?php echo ucwords(str_replace("-", " ", $services["hotel_name"])); ?>
                                            </a>
                                        </h4>
                                        <!-- <i class="fa fa-check-circle ms-1 text-success" data-bs-toggle="tooltip" data-placement="top" title="Claimed"></i> -->
                                    </div>
                                    <!-- Address -->
                                    <p class="card-text"><?php echo $vendors["service_address"] ?> <?php echo $vendors["service_city"] ?> , <?php echo $vendors["service_state"] ?>-<?php echo $vendors["service_pincode"] ?></p>
                                    <!-- Price -->
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="price">
                                            <h5><b>&#8377;<?php echo $services["price"]; ?></b></h5>
                                            <p style="color:#808996;font-size: 15px;font-weight: 500"><?php echo $services["price_unit"]; ?></p>
                                        </span>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex align-items-end mt-3" style="float: right;">
                                        <a href="booking/<?php echo $services["hotel_name"]; ?><?= $booking_data; ?>-<?php echo $services['room_id']; ?>" class="theme-btn text-white btn-sm">View Details</a>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning text-center" role="alert" style="margin-top: 20px;">
                        <h5>No results found for your search.</h5>
                        <p>Please try different search criteria.</p>
                    </div>
                <?php
                }
                ?>
                <div class="pagination">
                    <?php
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo '<a href="?page=' . $i;
                        if (!empty($searchTerm)) {
                            echo '&search=' . urlencode($searchTerm);
                        }
                        if (isset($_GET["from"]) || isset($_GET["to"])) {
                            echo '&from=' . $priceFrom . '&to=' . $priceTo;
                        }
                        echo '">' . $i . '</a> ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .alert {
        padding: 15px;
        border: 1px solid #f0ad4e;
        border-radius: 5px;
        background-color: #fcf8e3;
        color: #856404;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .pagination a {
        display: inline-block;
        padding: 10px 15px;
        margin: 0 5px;
        border: 1px solid #092f1f;
        border-radius: 5px;
        color: #092f1f;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
    }

    .pagination a:hover {
        background-color: #092f1f;
        color: #ffffff;
    }

    .pagination a.active {
        background-color: #092f1f;
        color: #ffffff;
        border-color: #092f1f;
    }

    .pagination a.disabled {
        color: #ccc;
        border-color: #ccc;
        pointer-events: none;
    }
</style>
<?php include '../footer.php'; ?>
<?php
session_start();
require_once("../tr24conn.php");

// Check if user is logged in
if (empty($_SESSION['useremail'])) {
    $_SESSION['paragliding'] = [
        'activity_id'   => mysqli_real_escape_string($conn, $_POST['activity_id'] ?? ''),
        'tour_date'     => mysqli_real_escape_string($conn, $_POST['tour_date'] ?? ''),
        'duration'      => mysqli_real_escape_string($conn, $_POST['duration'] ?? ''),
        'no_of_person'  => mysqli_real_escape_string($conn, $_POST['no_of_person'] ?? '')
    ];
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    header("Location: ../login");
    exit;
}

// Booking page submit (Previous Page)=====
// activity > paragliding > booking > *checkout* > success booking
if (isset($_POST['submit'])) {
    $_SESSION['paragliding'] = [
        'activity_id'   => mysqli_real_escape_string($conn, $_POST['activity_id'] ?? ''),
        'tour_date'     => mysqli_real_escape_string($conn, $_POST['tour_date'] ?? ''),
        'duration'      => mysqli_real_escape_string($conn, $_POST['duration'] ?? ''),
        'no_of_person'  => mysqli_real_escape_string($conn, $_POST['no_of_person'] ?? '')
    ];
    // Validate and redirect
    if (!empty($_SESSION['paragliding']['tour_date'])  && !empty($_SESSION['paragliding']['no_of_person']) && !empty($_SESSION['paragliding']['duration'])) {
        // Redirect to a confirmation or next page
        header("Location: checkout.php");
        exit;
    } else {
        // Redirect back to the form with an error message if any field is missing
        $_SESSION['paragliding'] = [
            'error' => "Please fill in all required fields."
        ];

        // Redirect back to the previous page (either from a session variable or the referrer URL)
        $redirect_to = $_SESSION['previous_page'] ?? $_SERVER['HTTP_REFERER'];
        // Clear the previous_page session after redirect
        unset($_SESSION['previous_page']);
        header("Location: $redirect_to");
        exit;
    }
} else {
    // If accessed directly, redirect to form page
    // header("Location: checkout-form.php");
    // exit;
}

// =============================================================================

if (isset($_POST['confirm_booking'])) {
    // Retrieve form data using mysqli_real_escape_string for security
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $vendor_id = mysqli_real_escape_string($conn, $_POST['vendor_id']);
    $activity_id = mysqli_real_escape_string($conn, $_POST['activity_id']);
    $no_of_person = mysqli_real_escape_string($conn, $_POST['no_of_person']);
    $tour_date = mysqli_real_escape_string($conn, $_POST['tour_date']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $paid_amount = mysqli_real_escape_string($conn, $_POST['paid_amout']);
    $total_amount = mysqli_real_escape_string($conn, $_POST['total']);

    // Set default status and get the current timestamp for booking time
    $status = 'pending';
    $booking_time = date('Y-m-d H:i:s'); // Use MySQL-compatible datetime format

    // Insert query to save booking details into the activity_booking table
    $sql = "INSERT INTO activity_booking (user_id, vendor_id, activity_id, no_of_person, duration, tour_date, paid_amount, total_amount, status, booking_time) 
            VALUES ('$user_id', '$vendor_id', '$activity_id', '$no_of_person', '$duration', '$tour_date', '$paid_amount', '$total_amount', '$status', '$booking_time')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Retrieve the auto-generated request_id
        $request_id = mysqli_insert_id($conn);

        // Store relevant information in the session
        $_SESSION['paragliding'] = [
            'request_id' => $request_id,
        ];
        $_SESSION['paragliding']['error'] = "";

        // Success - Redirect to a booking confirmation page
        header("Location: booking-successful.php");
        exit;
    } else {
        // Error handling - Display an alert with the error message
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Checkout - Paragliding Booking - Trip24</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&display=swap" rel="stylesheet" />
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/select2.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://work.prcptnvt.site/trip24/css/style.css" />
    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body>
    <?php
    include("../header.php");
    ?>
    <?php
    // Database connection
    require_once("../tr24conn.php");
    // Get parameters from the URL

    if (isset($_SESSION['paragliding']['activity_id']) && !empty($_SESSION['paragliding']['activity_id'])) {
        $activity_id = $_SESSION['paragliding']['activity_id'];
    } else {
        echo '<script>window.location.href = "paragliding";</script>';
        exit();
    }

    // $activityType = $_GET['activity_type'];
    $activityName = $_GET['name'];
    $activityId = $_SESSION['paragliding']['activity_id'];


    // Fetch activity details from `service_activities` table
    $activity_sql = "SELECT * FROM service_activities WHERE activity_id = '$activityId'";
    $activity_result = $conn->query($activity_sql);
    if ($activity_result->num_rows > 0) {
        // Fetch activity details
        $activity = $activity_result->fetch_assoc();
        // Extract activity details
        $vendor_id = $activity['vendor_id'];
        $vendor_uid = $activity['vendor_uid'];
        $name = $activity['name'];
        $duration = $activity['duration'];
        $price = $activity['price'];
        $unit = $activity['unit'];
        $pickup_location = $activity['pickup_location'];
        $amenities = explode(',', $activity['amenities']);
        $banner = $activity['banner'];
        $activity_type = $activity['activity_type'];
    } else {
        echo "No details found for this activity.";
        die();
    }
    // Fetch vendor service details from `vendor_service` table using `vendor_uid` and service_type
    $service_sql = "SELECT * FROM vendor_service WHERE vendor_uid = '$vendor_uid' AND service_type = 'Activity'";
    $service_result = $conn->query($service_sql);
    if ($service_result->num_rows > 0) {
        $service = $service_result->fetch_assoc();
        // Extract service details
        $service_name = $service['service_name'];
        $service_no = $service['service_no'];
        $service_email = $service['service_email'];
        $service_address = $service['service_address'];
        $service_city = $service['service_city'];
        $service_state = $service['service_state'];
        $service_pincode = $service['service_pincode'];
    } else {
        echo "No business details found for this vendor.";
        die();
    }
    // Fetch additional images from `service_galleries`
    $gallery_images = [];
    $gallery_sql = "SELECT image FROM service_galleries WHERE service_type = 'Activity' AND service_id = '$activityId' AND status = 'active'";
    $gallery_result = $conn->query($gallery_sql);
    if ($gallery_result->num_rows > 0) {
        while ($row = $gallery_result->fetch_assoc()) {
            $gallery_images[] = $row['image'];
        }
    }

    ?>
    <style>
        .bread-bg {
            background-image: url(https://work.prcptnvt.site/trip24/uploaded_images/<?= $banner; ?>);
        }

        .gallery-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-icon {
            top: 48px !important;
        }
    </style>
    <section class="breadcrumb-area bread-bg">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3"><?= $name; ?></h2>
            </div>
        </div>
    </section>
    <!-- Activity Details UI -->
    <section class="card-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="listing-wrapper">
                        <!-- Gallery Slider -->
                        <div class="listing-single-panel mb-5">
                            <div class="gallery-carousel owl-carousel owl-theme">
                                <div class="gallery-item">
                                    <img src="https://work.prcptnvt.site/trip24/uploaded_images/<?= $banner; ?>" alt="Bike Banner Image" style="height:25rem;">
                                </div>
                                <!-- Display additional images from the gallery -->
                                <?php foreach ($gallery_images as $image) : ?>
                                    <div class="gallery-item">
                                        <img src="https://work.prcptnvt.site/trip24/uploaded_images/gallery/<?= $image; ?>" alt="Gallery Image" style="height:25rem; ">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Description & Specifications Tabs -->
                        <div class="dashboard-nav d-flex flex-wrap align-items-center justify-content-between">
                            <ul class="nav nav-tabs my-tabs my-tabs-2 justify-content-center my-1" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                        <i class="fal fa-list me-1 font-size-14"></i> Description
                                    </a>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="specification-tab" data-bs-toggle="tab" href="#specification" role="tab" aria-controls="specification" aria-selected="false" tabindex="-1">
                                        <i class="fal fa-cog me-1 font-size-14"></i> Specification
                                    </a>
                                </li> -->
                            </ul>
                            <div class="my-1">
                                <span class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium me-1">
                                    <i class="bi bi-geo-alt-fill"></i> <?= $pickup_location; ?>
                                </span>
                                <span class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium">
                                    <i class="bi bi-currency-rupee"></i> <?= $price . " / " . $unit; ?>
                                </span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="tab-content mt-4" id="myTabContent">
                                <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="row">
                                        <div class="listing-single-panel mb-5">
                                            <h4 class="font-size-30 font-weight-semi-bold mb-3"><?= $name . " (" . $duration . ")"; ?></h4>
                                            <p><?= implode(', ', $amenities); ?></p>
                                        </div>
                                        <div class="listing-single-panel mb-5">
                                            <h4 class="font-size-30 font-weight-semi-bold mb-3">Highlights</h4>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul class="list-items">
                                                        <li><i class="bi bi-geo-alt-fill"></i> Pickup Location: <?= $pickup_location; ?></li>
                                                        <li>
                                                            <i class="bi bi-envelope"></i>
                                                            <a href="mailto:<?= $service_email; ?>">Helpline Email: <?= $service_email; ?></a>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-telephone"></i>
                                                            <a href="tel:<?= $service_no; ?>">Helpline No: <?= $service_no; ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                    <div class="row">
                                        <h4 class="font-size-30 font-weight-semi-bold mb-3">Specifications</h4>
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Activity Name</th>
                                                    <td><?= $name; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Duration</th>
                                                    <td><?= $duration; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Price</th>
                                                    <td><?= $price . " / " . $unit; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Pickup Location</th>
                                                    <td><?= $pickup_location; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Amenities</th>
                                                    <td><?= implode(', ', $amenities); ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <form action="booking.php" method="post">
                            <input type="hidden" name="activity_id" value="<?= $activityId; ?>">
                            <input type="hidden" name="pickup_location" value="<?= $pickup_location; ?>">
                            <button type="submit" class="theme-btn theme-btn-lg">Book Now</button>
                        </form> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Booking Detail</h4>

                                <ul class="list-items mt-3 mb-3">
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Tour Date</span> <?= $_SESSION['paragliding']['tour_date']; ?>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">No. of Person</span> <?= $_SESSION['paragliding']['no_of_person']; ?>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Fair per person</span> ₹ <?= $price; ?> / 15 min
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Duration</span> <?= $_SESSION['paragliding']['duration']; ?>
                                    </li>
                                    <hr>
                                    <?php
                                    // Fetch values from session
                                    $noOfPerson = $_SESSION['paragliding']['no_of_person'];
                                    $duration = $_SESSION['paragliding']['duration'];

                                    // Extract numeric value from duration (e.g., "15 min" -> 15)
                                    $duration = intval($duration); // Convert to integer

                                    $slots = $duration / 15; // Divide duration by 15
                                    $total = $slots * $price * $noOfPerson; // Total price calculation
                                    ?>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span class="text-black">Total</span> ₹ <?= $total; ?>
                                    </li>


                                </ul>
                                <form method="post">
                                    <input type="hidden" name="user_id" value="<?= $_SESSION['user']['id']; ?>">
                                    <input type="hidden" name="vendor_id" value="<?= $vendor_id; ?>">
                                    <input type="hidden" name="activity_id" value="<?= $activityId; ?>">
                                    <input type="hidden" name="no_of_person" value="<?= $_SESSION['paragliding']['no_of_person']; ?>">
                                    <input type="hidden" name="tour_date" value="<?= $_SESSION['paragliding']['tour_date']; ?>">
                                    <input type="hidden" name="duration" value="<?= $_SESSION['paragliding']['duration']; ?>">
                                    <!-- for future payment gateway integration -->
                                    <input type="hidden" name="paid_amout" value="0">
                                    <input type="hidden" name="total" value="<?= $total; ?>">
                                    <button name="confirm_booking" class="theme-btn border-0 w-100" type="submit">Book Now</button>
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- Sidebar Section: Updated Vendor Details with Business Information -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Business Details</h4>
                                <div class="media mt-4">
                                    <img src="https://work.prcptnvt.site/trip24/images/small-team1.jpg" alt="avatar" class="user-avatar flex-shrink-0 me-3" />
                                    <div class="media-body align-self-center">
                                        <h4 class="font-size-18 font-weight-semi-bold mb-1">
                                            <?= $service_name; ?> <!-- Updated to business name -->
                                        </h4>
                                        <p class="font-size-14">Business Helpline: <?= $service_no; ?></p>
                                    </div>
                                </div>
                                <ul class="list-items mt-4">
                                    <li>
                                        <span class="fal fa-envelope icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                        <a href="mailto:<?= $service_email; ?>"><?= $service_email; ?></a>
                                    </li>
                                    <li>
                                        <span class="fal fa-phone icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                        <?= $service_no; ?> <!-- Updated to show business phone number -->
                                    </li>
                                    <li>
                                        <span class="fal fa-map-marker-alt icon-element icon-element-sm bg-white shadow-sm text-black me-2 font-size-14"></span>
                                        <?= $service_address . ', ' . $service_city . ', ' . $service_state . ' - ' . $service_pincode; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <h4 class="font-size-25 font-weight-semi-bold">People Also View</h4>
                <div class="card-carousel owl-carousel owl-theme mt-4 mx-lg-n2">
                    <?php
                    $query = "SELECT * FROM service_activities WHERE activity_type = '$activity_type' ORDER BY activity_id DESC LIMIT 10";
                    $result = $conn->query($query);
                    ?>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($activity = $result->fetch_assoc()): ?>
                            <div class="card mb-0 hover-y" style="height:25rem;">
                                <a href='https://work.prcptnvt.site/trip24/activity/booking/<?= str_replace(' ', '-', $activity['name']); ?>/<?= htmlspecialchars($activity['activity_id']); ?>' class="card-image">
                                    <img src="https://work.prcptnvt.site/trip24/uploaded_images/<?= htmlspecialchars($activity['banner']); ?>" class="card-img-top" alt="<?= htmlspecialchars($activity['name']); ?>" style="height: 200px; object-fit: cover;">
                                </a>
                                <div class="card-body position-relative">
                                    <h4 class="card-title mb-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= htmlspecialchars($activity['name']); ?></h4>
                                    <p class="card-text"> <i class="fas fa-clock"></i> Duration : <?= htmlspecialchars($activity['duration']); ?> <?= htmlspecialchars($activity['unit']); ?></p>
                                    <p class="card-text"><i class="fas fa-rupee-sign"></i> Price : <?= htmlspecialchars($activity['price']); ?></p>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Location: <?= htmlspecialchars($activity['pickup_location']); ?></p>
                                </div>
                                <div class="card-footer bg-transparent border-top-gray d-flex align-items-center justify-content-between">
                                    <a href='https://work.prcptnvt.site/trip24/activity/booking/<?= str_replace(' ', '-', $activity['name']); ?>/<?= htmlspecialchars($activity['activity_id']); ?>' class="btn btn-info btn-sm text-white">
                                        <i class="fas fa-info-circle"></i> View Details
                                    </a>
                                    <a href='https://work.prcptnvt.site/trip24/activity/booking/<?= str_replace(' ', '-', $activity['name']); ?>/<?= htmlspecialchars($activity['activity_id']); ?>' class="btn btn-success btn-sm">
                                        Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <p>No activities found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
    </section>
    <?php
    include("../footer.php");
    ?>
    <script>
        // Initialize Flatpickr for Pickup Date
        flatpickr("#tour-date", {
            dateFormat: "Y-m-d",
            minDate: "today",
            enableTime: false,
            onChange: function(selectedDates, dateStr) {
                const dropoffPicker = document.querySelector("#dropoff-date")._flatpickr;
                // Update the minDate for dropoff date picker
                dropoffPicker.set("minDate", dateStr);
            }
        });
        // for no of person selector with + and - key
        const decrementBtn = document.getElementById('decrement-btn');
        const incrementBtn = document.getElementById('increment-btn');
        const numPersonInput = document.getElementById('num-person');
        decrementBtn.addEventListener('click', () => {
            let currentValue = parseInt(numPersonInput.value, 10);
            if (currentValue > parseInt(numPersonInput.min, 10)) {
                numPersonInput.value = currentValue - 1;
            }
        });
        incrementBtn.addEventListener('click', () => {
            let currentValue = parseInt(numPersonInput.value, 10);
            if (currentValue < parseInt(numPersonInput.max, 10)) {
                numPersonInput.value = currentValue + 1;
            }
        });
    </script>
    <!-- Template JS Files -->
    <script src="https://work.prcptnvt.site/trip24/js/jquery-3.7.1.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/bootstrap.bundle.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/select2.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/owl.carousel.min.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/jquery.lazy.min.js"></script>
    <!-- <script src="https://work.prcptnvt.site/trip24/js/jquery.fancybox.min.js"></script> -->
    <!-- Start google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_my4aX1ULOXNZcIxmpBnJmVF7U544p2k"></script>
    <script src="https://work.prcptnvt.site/trip24/js/maps.js"></script>
    <!-- End google map -->
    <script src="https://work.prcptnvt.site/trip24/js/jquery.MultiFile.min.js"></script>
    <!-- Start Date range picker -->
    <script src="https://work.prcptnvt.site/trip24/js/moment.min.js"></script>
    <!-- <script src="https://work.prcptnvt.site/trip24/js/daterangepicker.min.js"></script> -->
    <!-- end Date range picker -->
    <script src="https://work.prcptnvt.site/trip24/js/rating-script.js"></script>
    <script src="https://work.prcptnvt.site/trip24/js/main.js"></script>
</body>

</html>
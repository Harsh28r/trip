<?php
session_start();
if (empty($_SESSION['paragliding']['error'])) {
    $_SESSION['paragliding']['error'] = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Activity Details - Trip24</title>
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
    if (isset($_GET['name'], $_GET['id'])) {
        // $activityType = $_GET['activity_type'];
        $activityName = $_GET['name'];
        $activityId = $_GET['id'];
        // Fetch activity details from `service_activities` table
        $activity_sql = "SELECT * FROM service_activities WHERE activity_id = '$activityId'";
        $activity_result = $conn->query($activity_sql);
        if ($activity_result->num_rows > 0) {
            // Fetch activity details
            $activity = $activity_result->fetch_assoc();
            // Extract activity details
            $vendor_uid = $activity['vendor_uid'];
            $activity_type = $service['activity_type'];
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
    } else {
        echo "Missing activity details.";
        die();
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
                                <form method="post" action="../checkout.php">
                                    <h4 class="card-title mb-3">Booking Detail</h4>
                                    <p class="text-danger mb-3">
                                        <?= $_SESSION['paragliding']['error']; ?>
                                    </p>
                                    <input type="hidden" name="activity_id" value="<?= $activityId; ?>">
                                    <div class="form-group">
                                        <label for="date-time-picker">Tour Date</label>
                                        <span class="fal fa-calendar-alt form-icon"></span>
                                        <input
                                            name="tour_date"
                                            id="tour-date"
                                            class="form-control form--control pickup-date custom-date-picker"
                                            type="text"
                                            placeholder="Select Tour Date"
                                            required />
                                    </div>
                                    <?php
                                    if ($activity_type == "Rafting") {
                                    } elseif ($activity_type == "Paragliding") {
                                    ?>
                                        <div class="form-group">
                                            <label for="date-time-picker">Duration</label>
                                            <span class="fal fa-clock form-icon"></span>
                                            <select class="form-control form--control" name="duration" required>
                                                <option value="15 min">15 Min</option>
                                                <option value="30 min">30 Min</option>
                                                <option value="45 min">45 Min</option>
                                            </select>
                                        </div>
                                    <?php
                                    } elseif ($activity_type == "Snow-Suit-On-Rent") {
                                    ?>
                                        <div class="form-group">
                                            <label for="date-time-picker">Duration</label>
                                            <span class="fal fa-clock form-icon"></span>
                                            <select class="form-control form--control" name="duration" required>
                                                <option value="1 Hour">1 Hour</option>
                                                <option value="4 Hour">4 Hour</option>
                                                <option value="6 Hour">6 Hour</option>
                                            </select>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <div class="form-group">
                                        <label for="num-person">No. of Person</label>
                                        <div class="input-group">
                                            <button type="button" class="btn btn-secondary" id="decrement-btn">-</button>
                                            <input id="num-person" name="no_of_person" class="form-control text-center form--control" type="number" value="1" min="1" max="20" readonly />
                                            <button type="button" class="btn btn-secondary" id="increment-btn">+</button>
                                        </div>
                                    </div>
                                    <button name="submit" class="theme-btn border-0 w-100" type="submit">Book Now</button>
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
    <!-- <script>
        $(document).ready(function() {
            $('.gallery-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script> -->
</body>

</html>
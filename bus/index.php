<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Volvo Bus Ticket -Trip247</title>
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
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
       

        .search-box {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .search-form {
            display: grid;
            grid-template-columns: repeat(3, 1fr) auto;
            gap: 15px;
            align-items: end;
        }

        .form-group {
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-size: 14px;
            font-weight: 500;
        }

        select,
        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background: white;
        }

        button {
            background: #d84e55;
            color: white;
            border: none;
            padding: 13px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        button:hover {
            background: #c23d43;
        }

        .bus-list {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .bus-card {
            display: flex;
            gap: 25px;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .bus-card:last-child {
            border-bottom: none;
        }

        .bus-info {
            flex: 1;
        }

        .bus-name {
            font-size: 20px;
            color: #333;
            margin-bottom: 5px;
        }

        .bus-type {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .timing {
            display: flex;
            gap: 30px;
            margin-bottom: 15px;
        }

        .time-group {
            flex: 1;
        }

        .time {
            font-size: 24px;
            color: #333;
            font-weight: 500;
        }

        .city {
            color: #666;
            font-size: 14px;
        }

        .duration {
            color: #666;
            text-align: center;
            padding-top: 25px;
        }

        .amenities {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .amenity {
            background: #f5f5f5;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 12px;
            color: #444;
        }

        .price-section {
            width: 200px;
            text-align: right;
            border-left: 1px solid #eee;
            padding-left: 25px;
        }

        .price {
            font-size: 24px;
            color: #d84e55;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .seats {
            color: #4CAF50;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .btn-book {
            background: #4CAF50;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 4px;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
            font-size: 18px;
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
    <?php
    include("../header.php");
    ?>
    <style>
        .bread-bg {
            background-image: url(../img/banner_banner.jpg);
        }
    </style>


    <section class="breadcrumb-area bread-bg">
        <!-- <div class="overlay"></div> -->
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Volvo Bus Ticket</h2>
                <!-- <ul class="bread-list">
                    <li><a href="index">Home</a></li>
                    <li>Volvo Bus Ticket</li>
                </ul> -->
            </div>
        </div>
    </section>
    <section class="blog-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <!-- end col-lg-8 -->
            <div class="col-lg-12">
                <div class="sidebar">
                    <!-- <div
                        class="author-verified bg-success p-3 rounded text-white text-center mb-4"
                        data-bs-toggle="tooltip"
                        data-placement="top"
                        title="Listing has been verified and belongs the business owner or manager">
                        <i class="far fa-check me-2"></i>
                        Available Bus
                    </div> -->
                    <div class="card">
                        <form method="GET" action="search.php" >
                        <div class="card-body ">
                            <h4 class="card-title mb-3">Volvo Bus Ticket Booking</h4>
                            <div class="d-flex gap-2" >
                            <div class="form-group col-lg-3">
                                <span class="fas fa-location form-icon"></span>
                                <select
                                    name="OriginId"
                                    class="form-control form--control select">
                                    <option selected disabled>Select Pickup Location</option>
                                    <option value="8463">Delhi</option>
                                    <option value="8475">Chandigarh</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <span class="fas fa-location form-icon"></span>
                                <select
                                    name="DestinationId"
                                    class="form-control form--control select">
                                    <option selected disabled>Select Drop Location</option>
                                    <option value="9573">Shimla</option>
                                 <option value="9585">Manali</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <span class="fal fa-calendar-alt form-icon"></span>
                                <input
                                    class="form-control form--control date-picker"
                                    type="date"
                                    name="DateOfJourney"
                                    placeholder="DATE" />
                            </div>
                           <div class="col-lg-3" >
                            <button type="submit" class="theme-btn w-100">Search</button>
                           </div>
                            </div>
                          
                        </div>
                        </form>
                        <!-- end card-body -->
                    </div>
                     <div class="results">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // City ID mapping (replace with your actual city IDs)
                $cityMap = [
                    'source' => [
                        'Delhi' => '8463',
                        'Chandigarh' => '8475'
                    ],
                    'destination' => [
                        'Shimla' => '9573',
                        'Manali' => '9585'
                    ]
                ];
                $url = "https://staging.mmrtrip.in/api";
                // Sanitize inputs
                $date = htmlspecialchars($_POST["DateOfJourney"]);
                $origin = htmlspecialchars($_POST["OriginId"]);
                $destination = htmlspecialchars($_POST["DestinationId"]);
                $data = [
                    "UserIp" => "103.209.223.52",
                    "DateOfJourney" => $date,
                    "OriginId" => $origin,
                    "DestinationId" => $destination
                ];
                $jsonData = json_encode($data);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    "Content-Type: application/json",
                    "Username: AAKFE2643K",
                    "Password: 3593564"
                ]);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
                $response = curl_exec($ch);
                curl_close($ch);
                $result = json_decode($response, true);
                if (!empty($result['Result'])) {
                    $buses = [];
                    foreach ($result['Result'] as $bus) {
                        $buses[] = [
                            'name' => $bus['TravelName'],
                            'type' => $bus['BusType'],
                            'departure' => date("d M Y, h:i A", strtotime($bus['DepartureTime'])),
                            'arrival' => date("d M Y, h:i A", strtotime($bus['ArrivalTime'])),
                            'fare' => "₹" . number_format($bus['BusPrice']['PublishedPrice'], 2),
                            'seats' => $bus['AvailableSeats'],
                            'duration' => 'N/A', // You can calculate duration if needed
                            'boarding' => $bus['BoardingPointsDetails'][0]['CityPointName'] ?? 'N/A',
                            'dropping' => $bus['DroppingPointsDetails'][0]['CityPointName'] ?? 'N/A',
                            'amenities' => []
                        ];
                        if ($bus['MTicketEnabled']) $buses[count($buses) - 1]['amenities'][] = "M-Ticket";
                        if ($bus['LiveTrackingAvailable']) $buses[count($buses) - 1]['amenities'][] = "Live Tracking";
                        if ($bus['PartialCancellationAllowed']) $buses[count($buses) - 1]['amenities'][] = "Partial Cancellation";
                        if ($bus['IdProofRequired']) $buses[count($buses) - 1]['amenities'][] = "ID Proof Required";
                    }
                    echo
                    '<div class="bus-list">';
                    foreach ($buses as $bus) {
                        echo '
                <div class="bus-card">
                    <div class="bus-info">
                        <div class="bus-name">' . $bus['name'] . '</div>
                        <div class="bus-type">' . $bus['type'] . '</div>
                        <div class="timing">
                            <div class="time-group">
                                <div class="time">' . $bus['departure'] . '</div>
                                <div class="city">' . $bus['boarding'] . '</div>
                            </div>
                            <div class="duration">' . $bus['duration'] . '</div>
                            <div class="time-group">
                                <div class="time">' . $bus['arrival'] . '</div>
                                <div class="city">' . $bus['dropping'] . '</div>
                            </div>
                        </div>
                        <div class="amenities">';
                        foreach ($bus['amenities'] as $amenity) {
                            echo '<span class="amenity">' . $amenity . '</span>';
                        }
                        echo '</div>
                    </div>
                    <div class="price-section">
                        <div class="price">' . $bus['fare'] . '</div>
                        <div class="seats">' . $bus['seats'] . ' Seats Available</div>
                     <a class="btn-book" href="seat_selection.php?bus=' . urlencode(json_encode($busData)) . '">View Seats</a>
                    </div>
                </div>';
                    }
                    echo '</div>';
                } else {
                    echo "<p style='text-align: center; color: red;'>No buses available for the selected route.</p>";
                }
                // echo "<h3>API Response:</h3>";
                // echo "<pre>";
                // print_r($result);
                // echo "</pre>";
            } else {
                echo "<p style='text-align: center; color: #666;'>Select your journey details to find available buses</p>";
            }
            ?>
        </div>
                    <!-- end card -->
                </div>
                <!-- end sidebar -->
            </div>
            
        </div>
        <!-- end container -->
    </section>
    <!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->
    <?php
    include("../footer.php");
    ?>
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
    <!-- Template JS Files -->
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/select2.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.lazy.min.js"></script>
    <script src="../js/rating-script.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
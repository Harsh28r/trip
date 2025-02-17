<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Trip24" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trip Package- Trip24</title>
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            background-image: url(img/Manali-Taxi-Service-343543.jpg);
        }
    </style>
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="container">
            <div class="breadcrumb-content text-center text-white">
                <h2 class="sec__title text-white mb-3">Pickup & Drop</h2>
            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->
    <!-- ================================
    START CARD AREA
================================= -->
    <section class="card-area padding-top-60px padding-bottom-90px">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Search</h4>
                                <div class="form-group">
                                    <span class="fal fa-location form-icon"></span>
                                    <input class="form-control form--control" type="text"
                                        placeholder="Pickup" />
                                </div>
                                <div class="form-group">
                                    <span class="fal fa-location form-icon"></span>
                                    <input class="form-control form--control" type="text"
                                        placeholder="Drop" />
                                </div>
                                <button class="theme-btn border-0 w-100" type="submit">
                                    Search
                                </button>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card hover-y">
                                <a class="card-image">
                                    <img src="https://www.pannutravels.com/images/innova-crysta.jpg" alt="image"
                                        class="card-img-top lazy" />
                                    <span class="badge text-bg-info badge-pill">City Trip</span>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p>5 seater</p>
                                    </h4>
                                    <p class="card-text mt-3">
                                        <i class="bi bi-geo-alt-fill"></i> Manali <br>
                                        <i class="bi bi-currency-rupee"></i> Rs 10/km
                                    </p>
                                    <div
                                        class="post-author d-flex align-items-center justify-content-between mt-4">
                                        <button onclick="window.location.href='#'" type="button" class="btn btn-info btn-md">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card hover-y">
                                <a class="card-image">
                                    <img src="https://rajputanacabs.b-cdn.net/wp-content/uploads/2021/01/Toyota-Crysta-View.jpg" alt="image"
                                        class="card-img-top lazy" />
                                    <span class="badge text-bg-info badge-pill">City Trip</span>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p>5 Seater</p>
                                    </h4>
                                    <p class="card-text mt-3">
                                        <i class="bi bi-geo-alt-fill"></i> Kullu <br>
                                        <i class="bi bi-currency-rupee"></i> Rs 10/km
                                    </p>
                                    <div
                                        class="post-author d-flex align-items-center justify-content-between mt-4">
                                        <button onclick="window.location.href='#'" type="button" class="btn btn-info btn-md">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card hover-y">
                                <a class="card-image">
                                    <img
                                        src="https://rajputanacabs.b-cdn.net/wp-content/uploads/2021/01/Toyota-Innova-view.jpg"
                                        alt="image"
                                        class="card-img-top lazy" />
                                    <span class="badge text-bg-info badge-pill">City Trips</span>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p>5 seater</p>
                                    </h4>
                                    <p class="card-text mt-3">
                                        <i class="bi bi-geo-alt-fill"></i> Shimla <br>
                                        <i class="bi bi-currency-rupee"></i> Rs 10/km
                                    </p>
                                    <div
                                        class="post-author d-flex align-items-center justify-content-between mt-4">
                                        <button onclick="window.location.href='#'" type="button" class="btn btn-info btn-md">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end row -->
        </div>
        <!-- Table -->
        <style>
            .table-wrapper {
                overflow-x: auto;
                margin: 1rem auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 8px;
                text-align: center;
                border: 1px solid #ddd;
                word-wrap: break-word;
            }

            th {
                background-color: grey;
                color: white;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .highlight {
                color: #FF0000;
            }

            .sub-highlight {
                color: #6600ff;
            }

            .normal {
                color: #000000;
            }

            /* Responsive styles */
            @media (max-width: 768px) {

                th,
                td {
                    font-size: 12px;
                    padding: 6px;
                }

                th:first-child,
                td:first-child {
                    width: 50%;
                }

                th:not(:first-child),
                td:not(:first-child) {
                    width: auto;
                }
            }

            @media (max-width: 480px) {

                th,
                td {
                    font-size: 10px;
                    padding: 4px;
                }

                th:first-child,
                td:first-child {
                    width: 55%;
                }

                th:not(:first-child),
                td:not(:first-child) {
                    width: auto;
                }
            }
        </style>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Manali Sight Seeing Tours</th>
                        <th>(4+1) Alto</th>
                        <th>(4+1) Swift Dzire/Hyundai Aura</th>
                        <th>(8+1) Sumo</th>
                        <th>(6+1) & (7+1) Innova / Ertiga</th>
                        <th>(6+1) Innova Crysta</th>
                        <th>12+1 Tempo Traveller</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p class="highlight"><u>Local Sight Seeing</u></p>
                            <p class="sub-highlight">Half Day / 4 Hrs</p>
                            <p class="normal">Hadimba Devi Temple, Club House, Hot Water Spring Vashisht, Tibetan Monastery, Van Vihar, Mall Road.</p>
                        </td>
                        <td class="normal">1,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">2,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">2,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Snow Point</u></p>
                            <p class="sub-highlight">Full Day / 8 Hrs</p>
                            <p class="normal">Nehru Kund, Solang Valley</p>
                        </td>
                        <td class="normal">1,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">2,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">2,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Solang Valley with Atal Tunnel</u></p>
                            <p class="sub-highlight">Full Day / 8 Hrs</p>
                            <p class="normal">Nehru Kund, Solang Valley, Atal Tunnel, Sissu/ Khoksar</p>
                        </td>
                        <td class="normal">2,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">2,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">5,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Rohtang Pass</u></p>
                            <p class="highlight"><u>Permit Cost Extra</u></p>
                            <p class="sub-highlight">Full Day / 8 Hrs</p>
                            <p class="normal">Rohtang Pass, Gramphu, Koksar, Atal Tunnel, Solang Valley</p>
                        </td>
                        <td class="normal">2,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">5,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Baralacha</u></p>
                            <p class="sub-highlight">One Day Trip</p>
                            <p class="normal">Nehru Kund, Solang Valley, Atal Tunnel, Sissu, Tandi, Keylong, Jispa, Deepak Taal, Baralacha</p>
                        </td>
                        <td class="normal">5,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">5,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">6,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">7,500 <button onclick="window.location.href='#';" type="button" class="btn-info btn-sm">Book Now</button></td>
                        <td class="normal">8,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">9,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Manikaran</u></p>
                            <p class="sub-highlight">Full Day / 10 Hrs</p>
                            <p class="normal">Kullu, Kasol, Manikaran</p>
                        </td>
                        <td class="normal">3,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">5,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">5,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Kullu – Naggar</u></p>
                            <p class="sub-highlight">Full Day / 8 Hrs</p>
                            <p class="normal">Kullu, Kullu Shawl Factory, Rafting, Naggar Castle, Nicholas Roerich Art Gallery, River Camp</p>
                        </td>
                        <td class="normal">2,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">3,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">4,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">5,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Manali – Dharamshala</u></p>
                            <p class="sub-highlight">One Day Trip</p>
                            <p class="normal">Kullu, Baijnath, Palampur, Dharamshala, Mcleodganj</p>
                        </td>
                        <td class="normal">7,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">7,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">8,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">8,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">9,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">10,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="highlight"><u>Manali – Amritsar</u></p>
                            <p class="sub-highlight">One Day Trip</p>
                            <p class="normal">Mandi, Kangra, Jalandhar, Amritsar, Golden Temple</p>
                        </td>
                        <td class="normal">9,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">9,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">10,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">10,500 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">11,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                        <td class="normal">12,000 <button onclick="window.location.href='#';" type="button" class="btn btn-info btn-sm">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
        </div>



    </section>
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->
    <?php
    include("footer.php");
    ?>
    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
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
</body>

</html>
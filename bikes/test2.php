<!DOCTYPE html>
<html lang="en">
<?php include("head-seo.php"); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="bikes.js"></script>
<body>
    <!-- Start loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <?php include("header.php"); ?>

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
                    <!-- Search Form -->
                    <div class="fs-container-item w-100 px-3 pb-5">
                        <form id="searchForm">
                            <div class="card mt-12">
                                <div class="card-body row pb-0">
                                    <div class="col-lg-10 pe-lg-0">
                                        <div class="form-group">
                                            <span class="fal fa-map-marker-alt form-icon"></span>
                                            <input id="searchInput" class="form-control form--control" type="text" placeholder="Search by Location, Price, Capacity, Model or Brand" />
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <button class="theme-btn border-0 w-100" type="button" onclick="fetchBikes()">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Filter Form -->
                <div class="filter-section">
                    <form id="filterForm">
                        <div class="row">
                            <!-- Filter by Brand -->
                            <div class="col-lg-3">
                                <select id="filterBrand" class="form-control">
                                    <option value="">Filter by Brand</option>
                                    <!-- Brands will be populated dynamically -->
                                </select>
                            </div>

                            <!-- Filter by Engine Capacity -->
                            <div class="col-lg-3">
                                <select id="filterCapacity" class="form-control">
                                    <option value="">Filter by Engine Capacity</option>
                                    <!-- Capacities will be populated dynamically -->
                                </select>
                            </div>

                            <!-- Filter by Price -->
                            <div class="col-lg-3">
                                <select id="filterPrice" class="form-control">
                                    <option value="">Filter by Price</option>
                                    <!-- Price ranges will be populated dynamically -->
                                </select>
                            </div>

                            <!-- Filter by Pickup Location -->
                            <div class="col-lg-3">
                                <select id="filterLocation" class="form-control">
                                    <option value="">Filter by Pickup Location</option>
                                    <!-- Locations will be populated dynamically -->
                                </select>
                            </div>
                        </div>
                        <button type="button" onclick="fetchBikes()">Apply Filters</button>
                    </form>
                </div>
            </section>

            <!-- Bikes Display Section -->
            <div class="col-lg-12">
                <div class="row" id="bikesList">
                    <!-- Bikes will be populated here dynamically -->
                </div>
            </div>

            <!-- Pagination Buttons -->
            <div class="pagination-section">
                <button id="prevPage" onclick="changePage('prev')">Previous</button>
                <button id="nextPage" onclick="changePage('next')">Next</button>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <!-- Back to top button -->
    <div id="back-to-top">
        <i class="fal fa-angle-up" title="Go top"></i>
    </div>

    <!-- Include JS files -->
    <script src="js/main.js"></script>
    <script src="js/bikes.js"></script>
</body>

</html>

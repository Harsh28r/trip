<?php
$current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$current_page = basename($_SERVER['PHP_SELF']);
?>
<style>
    .main-sidebar {
        background-image: url(../../);
    }
</style>
<aside class="main-sidebar">
    <div class="nano">
        <div class="nano-content">
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <!-- Dashboard -->
                <li class="<?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
                    <a href="index">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <?php
                // Sidebar for raquaiya
                // If permission granted for raquaiya

                if (strpos($current_url, 'ruqvita') !== False) {
                ?>
                    <li class="header">SERVICES</li>

                    <!-- Hotel Booking -->
                    <li class="treeview <?php echo ($current_page == 'hotel-vendor.php' || $current_page == 'hotel-list.php' || $current_page == 'hotel-add.php' || $current_page == 'hotel-booking.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-building"></i>
                            <span>Hotels</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="<?php echo ($current_page == 'hotel-booking.php') ? 'active' : ''; ?>">
                                <a href="hotel-booking"><i class="fa fa-circle-o"></i> Bookings</a>
                            </li>
                            <li class="<?php echo ($current_page == 'hotel-list.php') ? 'active' : ''; ?>">
                                <a href="hotel-list"><i class="fa fa-circle-o"></i> Listed Hotels</a>
                            </li>
                            <!-- <li class="<?php echo ($current_page == 'hotel-add.php') ? 'active' : ''; ?>">
                            <a href="hotel-add"><i class="fa fa-circle-o"></i> Add Hotels</a>
                        </li> -->
                            <li class="<?php echo ($current_page == 'hotel-vendor.php') ? 'active' : ''; ?>">
                                <a href="hotel-vendor?main-category='Hotel'"><i class="fa fa-circle-o"></i> Hotel Vendor </a>
                            </li>
                        </ul>
                    </li>
                <?php
                } else {


                ?>
                    <!-- Vendor -->
                    <li class="treeview <?php echo ($current_page == 'vendor-add.php' || $current_page == 'vendor-view.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-handshake-o"></i>
                            <span>Vendor</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo ($current_page == 'vendor-add.php') ? 'active' : ''; ?>">
                                <a href="vendor-add"><i class="fa fa-circle-o"></i> Add Vendor</a>
                            </li>
                            <li class="<?php echo ($current_page == 'vendor-view.php') ? 'active' : ''; ?>">
                                <a href="vendor-view"><i class="fa fa-circle-o"></i> View All Vendor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">SERVICES</li>

                    <!-- Hotel Booking -->
                    <li class="treeview <?php echo ($current_page == 'hotel-vendor.php' || $current_page == 'hotel-list.php' || $current_page == 'hotel-add.php' || $current_page == 'hotel-booking.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-building"></i>
                            <span>Hotels</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="<?php echo ($current_page == 'hotel-booking.php') ? 'active' : ''; ?>">
                                <a href="hotel-booking"><i class="fa fa-circle-o"></i> Bookings</a>
                            </li>
                            <li class="<?php echo ($current_page == 'hotel-list.php') ? 'active' : ''; ?>">
                                <a href="hotel-list"><i class="fa fa-circle-o"></i> Listed Hotels</a>
                            </li>
                            <!-- <li class="<?php echo ($current_page == 'hotel-add.php') ? 'active' : ''; ?>">
        <a href="hotel-add"><i class="fa fa-circle-o"></i> Add Hotels</a>
    </li> -->
                            <li class="<?php echo ($current_page == 'hotel-vendor.php') ? 'active' : ''; ?>">
                                <a href="hotel-vendor?main-category=Hotel"><i class="fa fa-circle-o"></i> Hotel Vendor</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Bike On Rent -->
                    <!-- <li class="treeview <?php echo ($current_page == 'view-bike-vendor.php' || $current_page == 'view-bike-booking.php') ? 'active' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-motorcycle"></i>
                        <span>Bike On Rent</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($current_page == 'view-bike-vendor.php') ? 'active' : ''; ?>">
                            <a href="view-bike-vendor"><i class="fa fa-circle-o"></i> View Bike Vendor</a>
                        </li>
                        <li class="<?php echo ($current_page == 'view-bike-booking.php') ? 'active' : ''; ?>">
                            <a href="view-bike-booking"><i class="fa fa-circle-o"></i> View Bike Booking</a>
                        </li>
                    </ul>
                </li> -->
                    <li class="treeview <?php echo ($current_page == 'bike-vendor.php' || $current_page == 'bike-list.php' || $current_page == 'bike-add.php' || $current_page == 'bike-booking.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-motorcycle"></i>
                            <span>Bikes</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="<?php echo ($current_page == 'bike-booking.php') ? 'active' : ''; ?>">
                                <a href="bike-booking"><i class="fa fa-circle-o"></i> Bookings</a>
                            </li>
                            <li class="<?php echo ($current_page == 'bike-list.php') ? 'active' : ''; ?>">
                                <a href="bike-list"><i class="fa fa-circle-o"></i> Listed bikes</a>
                            </li>
                            <!-- <li class="<?php echo ($current_page == 'bike-add.php') ? 'active' : ''; ?>">
                            <a href="bike-add"><i class="fa fa-circle-o"></i> Add bikes</a>
                        </li> -->
                            <li class="<?php echo ($current_page == 'bike-vendor.php') ? 'active' : ''; ?>">
                                <a href="bike-vendor?main-category=Bike"><i class="fa fa-circle-o"></i> Add bikes </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Trip -->
                    <!-- <li class="treeview <?php echo ($current_page == 'add-package.php' || $current_page == 'view-package.php' || $current_page == 'view-trip-booking.php') ? 'active' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-map"></i>
                        <span>Trip</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($current_page == 'add-trip-package.php') ? 'active' : ''; ?>">
                            <a href="add-trip-package"><i class="fa fa-circle-o"></i> Add Trip Packages</a>
                        </li>
                        <li class="<?php echo ($current_page == 'view-trip-package.php') ? 'active' : ''; ?>">
                            <a href="view-trip-package"><i class="fa fa-circle-o"></i> View Trip Packages</a>
                        </li>
                        <li class="<?php echo ($current_page == 'view-trip-booking.php') ? 'active' : ''; ?>">
                            <a href="view-trip-booking"><i class="fa fa-circle-o"></i> View Trip Booking</a>
                        </li>
                    </ul>
                </li> -->
                    <li class="treeview <?php echo ($current_page == 'trip-vendor.php' || $current_page == 'trip-list.php' || $current_page == 'trip-add.php' || $current_page == 'trip-booking.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-map"></i>
                            <span>Trip</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="<?php echo ($current_page == 'trip-booking.php') ? 'active' : ''; ?>">
                                <a href="trip-booking"><i class="fa fa-circle-o"></i> Bookings</a>
                            </li>
                            <li class="<?php echo ($current_page == 'trip-list.php') ? 'active' : ''; ?>">
                                <a href="trip-list"><i class="fa fa-circle-o"></i> Listed trip</a>
                            </li>
                            <!-- <li class="<?php echo ($current_page == 'trip-add.php') ? 'active' : ''; ?>">
                            <a href="trip-add"><i class="fa fa-circle-o"></i> Add trips</a>
                        </li> -->
                            <li class="<?php echo ($current_page == 'trip-vendor.php') ? 'active' : ''; ?>">
                                <a href="trip-vendor?main-category=Trip"><i class="fa fa-circle-o"></i> Add trip </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Bus Ticket -->
                    <!-- <li class="treeview <?php echo ($current_page == 'view-bus-vendor.php' || $current_page == 'view-bus-booking.php') ? 'active' : ''; ?>">
                    <a href="#">
                        <i class="fa fa-bus"></i>
                        <span>Bus Ticket</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($current_page == 'view-bus-vendor.php') ? 'active' : ''; ?>">
                            <a href="view-bus-vendor"><i class="fa fa-circle-o"></i> View Bus Vendor</a>
                        </li>
                        <li class="<?php echo ($current_page == 'view-bus-booking.php') ? 'active' : ''; ?>">
                            <a href="view-bus-booking"><i class="fa fa-circle-o"></i> View Bus Booking</a>
                        </li>
                    </ul>
                </li> -->
                    <li class="treeview <?php echo ($current_page == 'bus-vendor.php' || $current_page == 'bus-list.php' || $current_page == 'bus-add.php' || $current_page == 'bus-booking.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-bus"></i>
                            <span>Bus</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="<?php echo ($current_page == 'bus-booking.php') ? 'active' : ''; ?>">
                                <a href="bus-booking"><i class="fa fa-circle-o"></i> Bookings</a>
                            </li>
                            <li class="<?php echo ($current_page == 'bus-list.php') ? 'active' : ''; ?>">
                                <a href="bus-list"><i class="fa fa-circle-o"></i> Listed bus</a>
                            </li>
                            <!-- <li class="<?php echo ($current_page == 'bus-add.php') ? 'active' : ''; ?>">
                            <a href="bus-add"><i class="fa fa-circle-o"></i> Add buss</a>
                        </li> -->
                            <li class="<?php echo ($current_page == 'bus-vendor.php') ? 'active' : ''; ?>">
                                <a href="bus-vendor"><i class="fa fa-circle-o"></i> Add bus </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Activities -->
                    <li class="treeview <?php echo ($current_page == 'activity-vendor.php' || $current_page == 'activity-list.php' || $current_page == 'activity-add.php' || $current_page == 'activity-booking.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-anchor"></i>
                            <span>Activity</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="<?php echo ($current_page == 'activity-booking.php') ? 'active' : ''; ?>">
                                <a href="activity-booking"><i class="fa fa-circle-o"></i> Bookings</a>
                            </li>
                            <li class="<?php echo ($current_page == 'activity-list.php') ? 'active' : ''; ?>">
                                <a href="activity-list"><i class="fa fa-circle-o"></i> Listed activity</a>
                            </li>
                            <!-- <li class="<?php echo ($current_page == 'activity-add.php') ? 'active' : ''; ?>">
                            <a href="activity-add"><i class="fa fa-circle-o"></i> Add activitys</a>
                        </li> -->
                            <li class="<?php echo ($current_page == 'activity-vendor.php') ? 'active' : ''; ?>">
                                <a href="activity-vendor?main-category=Activity"><i class="fa fa-circle-o"></i> Add activity </a>
                            </li>
                        </ul>
                    </li>

                    <li class="header">PRODUCT</li>

                    <!-- Products -->
                    <li class="treeview <?php echo ($current_page == 'product-vendor.php' || $current_page == 'product-list.php' || $current_page == 'product-add.php' || $current_page == 'product-order.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Product</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="<?php echo ($current_page == 'product-order.php') ? 'active' : ''; ?>">
                                <a href="product-order"><i class="fa fa-circle-o"></i> Order</a>
                            </li>
                            <li class="<?php echo ($current_page == 'product-list.php') ? 'active' : ''; ?>">
                                <a href="product-list"><i class="fa fa-circle-o"></i> Listed product</a>
                            </li>
                            <li class="<?php echo ($current_page == 'product-add.php') ? 'active' : ''; ?>">
                                <a href="product-add"><i class="fa fa-circle-o"></i> Add products</a>
                            </li>
                            <!-- <li class="<?php echo ($current_page == 'product-vendor.php') ? 'active' : ''; ?>">
                            <a href="product-vendor"><i class="fa fa-circle-o"></i> Add product </a>
                        </li> -->
                        </ul>
                    </li>

                    <!-- Front Site Management -->
                    <li class="treeview <?php echo ($current_page == 'banner.php' || $current_page == 'testimonials.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-window-maximize"></i>
                            <span>Front Site Management</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo ($current_page == 'banner.php') ? 'active' : ''; ?>">
                                <a href="banner"><i class="fa fa-circle-o"></i> Banner</a>
                            </li>
                            <li class="<?php echo ($current_page == 'testimonials.php') ? 'active' : ''; ?>">
                                <a href="testimonial"><i class="fa fa-circle-o"></i> Testimonials</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Users -->
                    <li class="treeview <?php echo ($current_page == 'add-user.php' || $current_page == 'view-user.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo ($current_page == 'add-user.php') ? 'active' : ''; ?>">
                                <a href="add-user"><i class="fa fa-circle-o"></i> Add Users</a>
                            </li>
                            <li class="<?php echo ($current_page == 'view-user.php') ? 'active' : ''; ?>">
                                <a href="view-user"><i class="fa fa-circle-o"></i> View Users</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Report -->
                    <li class="treeview <?php echo ($current_page == 'sales-report.php' || $current_page == 'booking-report.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i> <span>Report</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview <?php echo ($current_page == 'sales-report-ordered.php' || $current_page == 'sales-report-completed.php' || $current_page == 'sales-report-cancelled.php') ? 'active' : ''; ?>">
                                <a href="#"><i class="fa fa-circle-o"></i> Sales
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="<?php echo ($current_page == 'sales-report-ordered') ? 'active' : ''; ?>">
                                        <a href="#"><i class="fa fa-circle-o"></i> Ordered</a>
                                    </li>
                                    <li class="<?php echo ($current_page == 'sales-report-completed') ? 'active' : ''; ?>">
                                        <a href="#"><i class="fa fa-circle-o"></i> Completed</a>
                                    </li>
                                    <li class="<?php echo ($current_page == 'sales-report-cancelled') ? 'active' : ''; ?>">
                                        <a href="#"><i class="fa fa-circle-o"></i> Cancelled</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview <?php echo ($current_page == 'booking-report-completed' || $current_page == 'booking-report-pending' || $current_page == 'booking-report-cancelled') ? 'active' : ''; ?>">
                                <a href="#"><i class="fa fa-circle-o"></i> Booking
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="<?php echo ($current_page == 'booking-report-completed') ? 'active' : ''; ?>">
                                        <a href="#"><i class="fa fa-circle-o"></i> Completed</a>
                                    </li>
                                    <li class="<?php echo ($current_page == 'booking-report-pending') ? 'active' : ''; ?>">
                                        <a href="#"><i class="fa fa-circle-o"></i> Pending</a>
                                    </li>
                                    <li class="<?php echo ($current_page == 'booking-report-cancelled') ? 'active' : ''; ?>">
                                        <a href="#"><i class="fa fa-circle-o"></i> Cancelled</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Settings -->
                    <li class="<?php echo ($current_page == 'settings.php') ? 'active' : ''; ?>">
                        <a href="#">
                            <i class="fa fa-cog"></i> <span>Settings</span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</aside>
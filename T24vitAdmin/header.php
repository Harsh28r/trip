<!-- Header Section Starts -->
<header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Trip24 </b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Trip24 </b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Section Starts -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                        if ($_SESSION['logtype'] == 'superadmin') {
                        ?>
                            <img src="../img/<?= $_SESSION['adminprofile']; ?>" class="user-image" alt="User Image">
                            <span class="d-none d-sm-block"><?= $_SESSION['adminname']; ?></span>
                        <?php
                        } else {
                        ?>
                            <span class="d-none d-sm-block"><?= $_SESSION['vendorname']; ?></span>
                        <?php
                        }
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User Image Starts -->
                        <li class="user-header">
                            <?php
                            if ($_SESSION['logtype'] == 'superadmin') {
                            ?>
                                <img src="../img/<?= $_SESSION['adminprofile']; ?>" class="img-circle" alt="User Image">
                                <p>
                                    Admin
                                </p>
                            <?php
                            } else {
                            ?>
                                <h5 class="text-white">
                                    <?= $_SESSION['vendorname']; ?>
                                    <?= $_SESSION['vendoremail']; ?>
                                </h5>
                                <small class="text-white"><?= $_SESSION['vendoruid']; ?></small>
                            <?php
                            }
                            ?>
                        </li>
                        <!-- User Image Ends -->
                        <!-- Menu Footer Starts -->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="logout" class="btn btn-default btn-flat">Log Out</a>
                            </div>
                        </li>
                        <!-- Menu Footer Ends -->
                    </ul>
                </li>
                <!-- User Account Section Ends -->
            </ul>
        </div>
    </nav>
</header>
<!-- Header Section Ends -->
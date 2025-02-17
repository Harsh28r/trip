<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Vendor Details -Trip24</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Perfect Admin - Responsive HTML5 Admin Template">
    <meta name="author" content="perfectusinc.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/css/elements/modals.css">
    <!-- Custom CSS Starts -->
    <link rel="stylesheet" href="../../assets/css/skin/all-skins.css">
    <link rel="stylesheet" href="../../assets/css/general/style.css">
    <link rel="stylesheet" href="../../assets/css/sidebar/side-nav.css">
    <link rel="stylesheet" href="../../assets/css/fonts/fonts-style.css">
    <link rel="stylesheet" href="../../assets/css/nanoscroller/nanoscroller.css">
</head>


<body class="sidebar-mini fixed skin-blue">
    <div class="wrapper">
        <?php
        include("header.php");

        include("sidebar.php");
        ?>
        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Vendors
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">View All Vendors</h6>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Services</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hitesh </td>
                                <td>789456122</td>
                                <td>Hitesh123@gmail.com</td>
                                <td>Bus Ticket</td>
                                <td><a href="view-vendor-details" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</a>&nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>Ritesh </td>
                                <td>789456122</td>
                                <td>Ritesh123@gmail.com</td>
                                <td>Hotel</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button>&nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>Satish </td>
                                <td>789456122</td>
                                <td>satish874@gmail.com</td>
                                <td>Bike On Rent</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button>&nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <!-- Page Content Ends -->
    <!-- Back to Top Starts -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    <!-- Back to Top Ends -->
    <?php
    include("footer.php");
    ?>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/elements/modals/velocity.min.js"></script>
    <script src="assets/js/elements/modals/velocity.ui.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
    <script type="text/javascript">
        $(".modal").each(function(l) {
            $(this).on("show.bs.modal", function(l) {
                var o = $(this).attr("data-easein");
                "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
            })
        });
    </script>
</body>

</html>
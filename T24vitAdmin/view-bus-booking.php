<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Bus Booking - Trip-24</title>
    <meta name="description" content="Dashboard - Trip24">
    <meta name="author" content="trip-24.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/css/tables/datatables.min.css">
    <link rel="stylesheet" href="assets/css/tables/buttons.dataTables.min.css">
    <!-- Custom CSS Starts -->
    <link rel="stylesheet" href="assets/css/skin/all-skins.css">
    <link rel="stylesheet" href="assets/css/general/style.css">
    <link rel="stylesheet" href="assets/css/sidebar/side-nav.css">
    <link rel="stylesheet" href="assets/css/fonts/fonts-style.css">
    <link rel="stylesheet" href="assets/css/nanoscroller/nanoscroller.css">
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
                    Bus Booking
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">View Bus Booking</h6>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Phone </th>
                                <th>Bus No</th>
                                <th>Booking Date</th>
                                <th>Source</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hitesh </td>
                                <td>789456122</td>
                                <td>1234</td>
                                <td>12/05/2024</td>
                                <td>Delhi</td>
                                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i>
                                        View
                                    </button>
                                    &nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View Bus Booking Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="cardbg">
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Customer Id</span>
                                                        <span class="float-right">AK123456</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Business Id</span>
                                                        <span class="float-right">Uyr456789</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Bus Id</span>
                                                        <span class="float-right">AHt45691</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Seat Type</span>
                                                        <span class="float-right">Lower Case</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Booking Date</span>
                                                        <span class="float-right">15/06/2023</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Journey Date</span>
                                                        <span class="float-right">07/01/2024</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Source</span>
                                                        <span class="float-right">Bus</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Destination</span>
                                                        <span class="float-right">Mumbai - Gao</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Price </span>
                                                        <span class="float-right">4500./</span>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <div class="progress-title mb-2">
                                                        <span class="title">Status</span>
                                                        <span class="float-right">Show</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Print</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="assets/js/tables/datatables.min.js"></script>
    <script src="assets/js/tables/dataTables.buttons.min.js"></script>
    <script src="assets/js/tables/jszip.min.js"></script>
    <script src="assets/js/tables/pdfmake.min.js"></script>
    <script src="assets/js/tables/vfs_fonts.js"></script>
    <script src="assets/js/tables/buttons.html5.min.js"></script>
    <script src="assets/js/tables/buttons.print.min.js"></script>
    <script src="assets/js/tables/datatable.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
</body>

</html>
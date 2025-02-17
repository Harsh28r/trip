<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Bike Vendor - Trip-24</title>
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
                    Bike Vendors
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">View Bike Vendors</h6>
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
                                <th>Business Name</th>
                                <th>Phone </th>
                                <th>Bike No.</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Raj Kumar </td>
                                <td>Rent On Bike</td>
                                <td>789456122</td>
                                <td>HP 54 DP 8874</td>
                                <td>Raj@gmail.com</td>
                                <td><a href="#costumModal26" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-eye"></i>View
                                    </a>&nbsp;<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>

                                <!-- Modal -->
                                <div id="costumModall26" class="modal" tabindex="-1" role="dialog"
                                    aria-labelledby="costumModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <center>
                                                    <h5 class="modal-title" id="exampleModalLabel">View Vendor Details</h5>
                                                </center>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <h6 class="title-inner text-uppercase">View Bike Vendor Details</h6>
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="form-group">
                                                            <label>Vendor ID</label>
                                                            <input type="text" class="form-control input-0" placeholder="Kl4567">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label>Document Type</label>
                                                                <input type="text" class="form-control input-0" placeholder="Pan Card">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label>Document Number</label>
                                                                <input type="text" class="form-control input-0" placeholder="HKUR4567891">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label>Bike Name</label>
                                                                <input type="text" class="form-control input-0" placeholder="Hero">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label>Bike No</label>
                                                                <input type="text" class="form-control input-0" placeholder="DOD789">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="text" class="form-control input-0" placeholder="1500./">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label>Pick Up Date</label>
                                                                <input type="text" class="form-control input-0" placeholder="12/02/2024">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-xl-12">
                                                            <div class="form-group " id="mapForm">
                                                                <label for="gmapLink">Google Maps Link:</label><br>
                                                                <input type="url" id="gmapLink" name="gmapLink" placeholder="Paste Google Maps URL here" required><br><br>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="btn btn-success btn-block">Update</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Update</button>
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

    <!-- jQuery -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- DataTables JS -->
    <script src="assets/js/tables/datatables.min.js"></script>
    <script src="assets/js/tables/dataTables.buttons.min.js"></script>
    <script src="assets/js/tables/jszip.min.js"></script>
    <script src="assets/js/tables/pdfmake.min.js"></script>
    <script src="assets/js/tables/vfs_fonts.js"></script>
    <script src="assets/js/tables/buttons.html5.min.js"></script>
    <script src="assets/js/tables/buttons.print.min.js"></script>
    <script src="assets/js/tables/datatable.js"></script>

    <!-- Velocity JS -->
    <script src="assets/js/elements/modals/velocity.min.js"></script>
    <script src="assets/js/elements/modals/velocity.ui.min.js"></script>

    <!-- Nanoscroller JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/custom/theme.js"></script>

    <script type="text/javascript">
        $(".modal").each(function() {
            $(this).on("show.bs.modal", function() {
                var o = $(this).attr("data-easein");
                if (o) {
                    $(".modal-dialog").velocity("callout." + o);
                } else {
                    $(".modal-dialog").velocity("transition." + o);
                }
            });
        });
    </script>

</body>

</html>
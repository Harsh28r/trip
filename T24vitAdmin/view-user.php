<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View User - Trip-24</title>
    <meta name="description" content="View User - Trip24">
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
                    User
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">View User</h6>
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
                                <td>
                                    &nbsp; <a href="#costumModal26" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-eye"></i>View
                                    </a>
                                    &nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>

                            <div id="costumModal26" class="modal" data-easein="perspectiveRightIn" tabindex="-1" role="dialog"
                                aria-labelledby="costumModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <center>
                                                <h5 class="modal-title" id="exampleModalLabel">View View Details</h5>
                                            </center>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="text" class="col-form-label" placeholder="Enter Bussiness Name">Bussiness Name</label>
                                                    <input class="form-control" id="message-text"></input>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control input-0" placeholder="Enter Your Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Services</label>
                                                            <input type="text" class="form-control input-0" placeholder="">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input type="number" class="form-control input-0" placeholder="Enter Your Phone Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="number" class="form-control input-0" placeholder="Enter Your Email ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Login Password</label>
                                                            <input type="text" class="form-control input-0" placeholder="Enter Your Login Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Confirmed Password</label>
                                                            <input type="text" class="form-control input-0" placeholder="Enter Your Confirmed Password">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Note (Optional):</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
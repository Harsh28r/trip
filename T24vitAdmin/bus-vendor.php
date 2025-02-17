<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View All Vendor - Trip-24</title>
    <meta name="description" content="Bus Vendor - Trip24">
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
                    Bus Vendors
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">All Bus Vendors </h6>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Business Name</th>
                                <th>Mo. Number</th>
                                <!-- <th>Email</th> -->
                                <th>City & District</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bus</td>
                                <td>Beenod Toor & Travels </td>
                                <td>+91 8787008787</td>
                                <!-- <td>beenod123@gmail.com</td> -->
                                <td>Secotr 5 , Noida</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeModal"><i class="fa fa-eye"></i> View</button>
                                    &nbsp;<button type="button" class="btn btn-success"><i class="fa fa-check"></i> Active</button>
                                    &nbsp;<a href="bus-add?v=Beenod-Bus"><button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Add Bus</button></a>
                                    <!-- &nbsp;<button type="button" class="btn btn-danger"><i class=" fa fa-building"></i> View Bus</button> -->

                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
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
                                            <!-- Personal Details -->
                                            <h6 class="title-inner">Personal Details</h6>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="modalName">Full name</label>
                                                        <input class="form-control input-0" id="modalName" value="Beenod Kumar" placeholder="e.g. - Ramesh Kumar Varma" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="modalFatherName">Father name</label>
                                                        <input class="form-control input-0" id="modalFatherName" value="Sohan Das" placeholder="e.g. - Mohan Varma" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="modalGender">Gender</label>
                                                        <select class="form-control custom-select input-0" id="modalGender">
                                                            <option value="">Choose</option>
                                                            <option value="Male" selected>Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalId">Aadhar / ID</label>
                                                        <input class="form-control input-0" id="modalId" value="9874560016500" placeholder="e.g. - 6454218576" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalMobNo">Mobile No.</label>
                                                        <input class="form-control input-0" id="modalMobNo" value="8787008787" placeholder="e.g. - 8150010101" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalEmail">Email Id</label>
                                                        <input class="form-control input-0" id="modalEmail" value="beenod123@gmail.com" placeholder="e.g. - ramesh123@gmail.com" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalPassword">Password</label>
                                                        <input class="form-control input-0" id="modalPassword" value="***" placeholder="e.g. -..." type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalFrontId">Choose Front ID</label>
                                                        <input type="file" class="form-control input-0" id="modalFrontId" value="" style="margin-bottom: 2rem;" onchange="showPreview(event, 'modalProductPreview')" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <img id="modalProductPreview" src="#" alt="Product Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalBackId">Choose Back Id</label>
                                                        <input type="file" class="form-control input-0" id="modalBackId" value="" style="margin-bottom: 2rem;" onchange="showPreview(event, 'modalProductPreview2')" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <img id="modalProductPreview2" src="#" alt="Product Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Business Detail -->
                                            <h6 class="title-inner">Business Details</h6>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalBusinessName">Business Name</label>
                                                        <input class="form-control input-0" id="modalBusinessName" value="Beenod Toor & Travels" placeholder="e.g. - Ramesh Enterprises" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalGst">GST/PAN No.</label>
                                                        <input class="form-control input-0" id="modalGst" value="BXYZE548YUO1" placeholder="e.g. - BXLP545800121NT" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalRegistrationDate">Registration Date</label>
                                                        <input class="form-control input-0" id="modalRegistrationDate" value="" type="date">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalServices">Services</label>
                                                        <select multiple="" class="form-control" id="modalServices">
                                                            <option selected>Choose Service</option>
                                                            <option>Bus</option>
                                                            <option>Bus On Rent</option>
                                                            <option>Trip</option>
                                                            <option>Bus</option>
                                                            <option>Activity</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-12">
                                                    <div class="form-group">
                                                        <label for="modalOfficeAddress">Office Address</label>
                                                        <textarea id="modalOfficeAddress" class="form-control input-0" placeholder="e.g. -" rows="2">Noida Sector 5</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalCity">City</label>
                                                        <input class="form-control input-0" id="modalCity" value="Sector 5" placeholder="e.g. - Golghar" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalDistrict">District</label>
                                                        <input class="form-control input-0" id="modalDistrict" value="Noida" placeholder="e.g. - Gorakhpur" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalState">State</label>
                                                        <input class="form-control input-0" id="modalState" value="Uttar Pradesh" placeholder="e.g. - UP" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalPinCode">Pin Code</label>
                                                        <input class="form-control input-0" id="modalPinCode" value="27302201" placeholder="e.g. -" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalGstCertificate">Choose GST Certificate</label>
                                                        <input type="file" class="form-control input-0" id="modalGstCertificate" value="" style="margin-bottom: 2rem;" onchange="showPreview(event, 'modalGstCertificatePreview')" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <img id="modalGstCertificatePreview" src="#" alt="GST Certificate Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="modalOtherDocument">Other Document</label>
                                                        <input type="file" class="form-control input-0" id="modalOtherDocument" value="" style="margin-bottom: 2rem;" onchange="showPreview(event, 'modalOtherDocumentPreview')" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xl-3">
                                                    <div class="form-group">
                                                        <img id="modalOtherDocumentPreview" src="#" alt="Other Document Preview" style="display: none; max-height: 5rem; max-width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- JavaScript for Image Preview -->
                            <script>
                                function showPreview(event, previewId) {
                                    const input = event.target;
                                    const reader = new FileReader();

                                    reader.onload = function() {
                                        const preview = document.getElementById(previewId);
                                        preview.src = reader.result;
                                        preview.style.display = 'block';
                                    };

                                    reader.readAsDataURL(input.files[0]);
                                }
                            </script>

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

    <script src="assets/js/tables/datatables.min.js"></script>
    <script src="assets/js/tables/dataTables.buttons.min.js"></script>
    <script src="assets/js/tables/jszip.min.js"></script>
    <script src="assets/js/tables/pdfmake.min.js"></script>
    <script src="assets/js/tables/vfs_fonts.js"></script>
    <script src="assets/js/tables/buttons.html5.min.js"></script>
    <script src="assets/js/tables/buttons.print.min.js"></script>
    <script src="assets/js/tables/datatable.js"></script>


</body>

</html>
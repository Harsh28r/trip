<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Product - Trip-24</title>
    <meta name="description" content="View Product - Trip24">
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
                    Product
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner text-uppercase">View Product</h6>
                        <a href="product-add?v=Beenod" class="btn btn-info btn-sm">Add Product</a>
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
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sonu  </td>
                                <td>
                                    <img src="https://snowboundoutfitters.com/cdn/shop/products/DSC_0110_0a6960f6-a5d4-486c-a538-959e51c651ee_900x.png?v=1659594875" height="50px" width="50px" alt="">
                                </td>
                                <td>Snow Suit</td>
                                <td>KH789</td>
                                <td>1</td>
                                <td>50</td>
                                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i>
                                        View
                                    </button>
                                    &nbsp;<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View Product Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="cardbg">
                                                <h6 class="title-inner text-uppercase">Add Product</h6>
                                                <div class="row">
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label>Product Name</label>
                                                            <input type="text" class="form-control input-0" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label>Product Code</label>
                                                            <input type="text" class="form-control input-0" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xl-4">
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input type="number" class="form-control input-0" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Strike Price</label>
                                                            <input type="number" class="form-control input-0" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Stocks</label>
                                                            <input type="number" class="form-control input-0" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Images</label>
                                                            <input type="file" class="form-control input-0" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea type="text" class="form-control input-0" placeholder=""></textarea>
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
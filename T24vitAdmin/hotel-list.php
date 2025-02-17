<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Listed Hotels - Trip-24</title>
    <meta name="description" content="Hotel List - Trip24">
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
                    Hotel Lists
                </h1>
            </section>
            <!-- View Vendors Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header" id="headingTwo">
                    <div class="panel-heading">
                        <h6 class="title-inner">Hotels List
                            <?php
                            if (isset($_GET['vendor'])) {
                                echo "of Vinod Enterprises - TR24VE12541";
                            }
                            ?>
                        </h6>
                        <a href="hotel-vendor?main-category=Hotel" class="btn btn-info btn-sm">Add Hotel</a>
                        <ul class="list-inline panel-actions">
                            <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Hotel Details</th>
                                <th>Max Person</th>
                                <th>₹ Price per Person</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $hotel = mysqli_query($conn, "select * from service_hotels order by id desc");
                            $i = 1;
                            while ($hotels = mysqli_fetch_array($hotel)) {
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><img src="<?php echo $hotels["banner"]; ?>" style="width:100px">
                                        <br><?php echo $hotels["hotel_name"]; ?>
                                        <br>(<?php echo $hotels["room_type"]; ?>)
                                    </td>
                                    <td><?php echo $hotels["person"]; ?></td>
                                    <td><?php echo $hotels["price"]; ?><br>(<?php echo $hotels["price_unit"]; ?>)</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal<?php echo $hotels["id"]; ?>"><i class="fa fa-eye"></i> View</button>
                                        <a href="hotel-gallery.php?hotel_id=<?php echo $hotels["id"]; ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Gallery</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="largeModal<?php echo $hotels["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal<?php echo $hotels["id"]; ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document" style="max-width: 75% !important;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <center>
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Hotel Details</h5>
                                                        </center>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data" action="hotel-add2.php">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="maxPerson">Hotel Name</label>
                                                                        <input type="text" class="form-control" id="maxPerson" name="hotel_name" value="<?php echo $hotels["hotel_name"]; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="id" value="<?php echo $hotels["id"]; ?>">
                                                                        <label for="roomType">Room Type</label>
                                                                        <select class="form-control" id="roomType" name="room_type">
                                                                            <option value="">Choose...</option>
                                                                            <option value="AC - Premium" <?php if ($hotels["room_type"] == "AC - Premium") {
                                                                                                                echo 'selected';
                                                                                                            } ?>>AC - Premium</option>
                                                                            <option value="Non AC - Mid Range" <?php if ($hotels["room_type"] == "Non AC - Mid Range") {
                                                                                                                    echo 'selected';
                                                                                                                } ?>>Non AC - Mid Range</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="maxPerson">Max Person</label>
                                                                        <input type="text" class="form-control" id="maxPerson" name="max_person" value="<?php echo $hotels["person"]; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="price">₹ Price per Person</label>
                                                                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $hotels["price"]; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="price">₹ Price Unit</label>
                                                                        <input type="text" class="form-control" id="price" name="price_unit" value="<?php echo $hotels["price_unit"]; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="price">Google Map</label>
                                                                        <input type="text" class="form-control" id="price" name="map" value="<?php echo $hotels["map"]; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-xl-12">
                                                                    <div class="form-group">
                                                                        <label for="description">Description / Hotel Amenities</label>
                                                                        <textarea class="form-control" id="editor<?php echo $hotels["id"]; ?>" name="amenities" rows="3" placeholder="Enter Hotel Amenities"><?php echo $hotels["amenities"]; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Banner Image Upload -->
                                                            <div class="form-group">
                                                                <label for="bannerImage">Upload Banner Image</label>
                                                                <img src="<?php echo $hotels["banner"]; ?>" style="width:100px"><br>
                                                                <input type="hidden" name="img_name" value="<?php echo $hotels["banner"]; ?>">
                                                                <input type="file" class="form-control-file" id="bannerImage" name="banner_image" onchange="showBannerPreview(event)">
                                                                <img id="bannerPreview" src="#" alt="Banner Preview" style="display: none; max-height: 200px; max-width: 100%; margin-top: 10px;">
                                                            </div>
                                                            <button type="submit" name="edit_submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    </form>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-sm btn-primary">Update</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content Ends -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
    <script>
        function preview_images() {
            var total_file = document.getElementById("images").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append(`
                <div class='col-md-3'>
                    <img style='width:100%' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
                </div>`);
            }
        }

        function resetForm() {
            $("#image_preview").html("");
            return true;
        }
    </script>
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
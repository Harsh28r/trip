<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title> Gallery - Trip-24</title>
    <meta name="description" content="Hotel Add - Trip24">
    <meta name="author" content="trip-24.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    include("head.php");

    ?>
</head>

<body class="sidebar-mini fixed skin-blue">
    <div class="wrapper">
        <?php
        include("header.php");
        include("sidebar.php");
        ?>
        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <?php
            require_once('control/gallery.php');
            ?>
            <section class="content-header">
                <h1>
                    <?= ucfirst($service_type); ?> Gallery
                </h1>
            </section>
            <!-- Gallery Section Starts -->
            <div class="card panel panel-default">
                <div class="card-header">
                    <h6 class="title-inner"><small> <?= ucfirst($service_type); ?> Name : </small><?= str_replace('-', ' ', $service_name); ?> Gallery</h6>
                </div>
                <div class="card-body">
                    <!-- Upload Form -->

                    <form method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="form-group col-md-8">
                                <label for="galleryImage">Upload Image</label>
                                <input type="file" class="form-control-file" onchange="showBannerPreview(event)" id="bannerImage" name="gallery_image" required>

                                <!-- Image preview -->
                                <img id="bannerPreview" src="#" alt="Banner Preview" style="display: none; max-height: 200px; max-width: 100%; margin-top: 10px;">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" name="upload_gallery" class="btn btn-success">Upload Image</button>
                            </div>
                        </div>
                    </form>

                    <!-- Gallery Table -->
                    <table class="table table-striped table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Upload Date & Time</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $gallery_run = mysqli_query($conn, "SELECT * FROM `service_galleries` WHERE `service_type` = '$service_type' AND `service_id` = '$service_id' ");
                            while ($gallery_image_rows = mysqli_fetch_assoc($gallery_run)) {
                            ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $created_at = date('d-m-Y g:i:A', strtotime($gallery_image_rows['created_at']));
                                        ?></td>
                                    <td><img src="../uploaded_images/gallery/<?= $gallery_image_rows['image']; ?>" style="width:100px"></td>
                                    <td>
                                        <a href="?category=<?= $service_type;?>&name=<?= $service_name; ?>&id=<?= $service_id; ?>&did=<?= $gallery_image_rows['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this image ?')"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Page Content Ends -->
        <script>
            function showBannerPreview(event) {
                var input = event.target;
                var reader = new FileReader();

                reader.onload = function() {
                    var preview = document.getElementById('bannerPreview');
                    preview.src = reader.result;
                    preview.style.display = 'block';
                };

                if (input.files && input.files[0]) {
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

        <?php
        include("footer.php");
        ?>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery/slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/js/jquery/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/jquery/jquery.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/charts/Chart.bundle.min.js"></script>
    <script src="assets/js/charts/bar/grouped-bar-chart.js"></script>
    <script src="assets/js/charts/pie/doughnut-chart-multiline.js"></script>
    <script src="assets/js/dashboard/dashboard1.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/nanoscroller/nanoscroller.js"></script>
    <script src="assets/js/custom/theme.js"></script>
</body>

</html>
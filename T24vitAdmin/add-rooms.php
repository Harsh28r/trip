<?php
require_once("control/conn.php");
include('control/universal.php');
$vendor_id = $conn->real_escape_string($_GET['uid']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Rooms - Trip-24</title>
    <meta name="description" content="Hotel Add - Trip24">
    <meta name="author" content="trip-24.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    include("head.php");
    ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="sidebar-mini fixed skin-blue">
    <div class="wrapper">
        <?php
        include("header.php");
        include("sidebar.php");
        $vendor_id = $conn->real_escape_string($_GET['uid']);
        ?>
        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Add New Room
                </h1>
            </section>
            <form method="post" enctype="multipart/form-data" action="control/add-rooms-form.php">
                <div class="cardbg">
                    <!-- Personal Details -->
                    <h6 class="title-inner">Enter Room Details</h6>
                    <!-- Vendor & Service  Details -->
                    <?php
                    require_once("control/service_vendor.php");
                    ?>
                    <div class="row">
                        <div class="row">
                            <input type="hidden" class="form-control" value="<?php echo $_GET["service_id"]; ?>" name="service_id">
                            <input type="hidden" class="form-control" value="<?php echo $_GET["uid"]; ?>" name="vendor_id">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="roomname">Room Name</label>
                                    <input type="number" class="form-control" required id="maxPerson" name="room_name" placeholder="eg - Classic">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="roomType">Room Type</label>
                                    <select class="form-control" required id="roomType" name="room_type">
                                        <option selected disabled>Choose Room Type</option>
                                        <option value="AC - Premium">AC - Premium</option>
                                        <option value="Non AC - Mid Range">Non AC - Mid Range</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="maxPerson">Max Adults Allowed</label>
                                    <input type="number" class="form-control" required id="maxPerson" name="max_person" value="3">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="maxPerson">Max Children Allowed</label>
                                    <input type="number" class="form-control" required id="maxPerson" name="max_person" value="3">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="price">₹ Price per Guest</label>
                                    <input type="number" required class="form-control" placeholder="eg - 750" id="price" name="price">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="price_unit">₹ Price Unit</label>
                                    <select class="form-control" id="price_unit" name="price_unit">
                                        <option value="Per Night" selected>Per Night</option>
                                        <option value="Per Day">Per Day</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="price">Google Map</label>
                                    <input type="text" class="form-control" id="price" name="map" placeholder="" value="Google Map">
                                </div>
                            </div> -->
                            <div class="col-md-12 col-xl-12">
                                <div class="form-group">
                                    <label for="description">Description / Hotel Amenities</label>
                                    <textarea class="form-control" id="editor" name="amenities" rows="3" placeholder="Enter Hotel Amenities"></textarea>
                                </div>
                            </div>
                            <!-- Banner Image Upload -->
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="bannerImage" class="form-label">Upload Room Image</label>
                                    <div id="drag-drop-container" class="drag-drop-container"
                                        onclick="triggerFileInput()"
                                        ondrop="dropHandler(event)"
                                        ondragover="dragOverHandler(event)"
                                        ondragleave="dragLeaveHandler(event)">
                                        <p id="drag-drop-message">Drag & Drop your image here or Click to Select</p>
                                        <input type="file" class="form-control-file" id="bannerImage" name="banner_image"
                                            onchange="showBannerPreview(event)" style="display: none;" accept="image/*">
                                        <img id="bannerPreview" src="#" alt="Banner Preview"
                                            style="display: none; max-height: 200px; max-width: 100%; margin-top: 10px;">
                                    </div>
                                </div>
                            </div>

                            <script>
                                // Show the preview of the image when a file is selected
                                function showBannerPreview(event) {
                                    const file = event.target.files[0];
                                    const preview = document.getElementById('bannerPreview');
                                    const message = document.getElementById('drag-drop-message');

                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            preview.src = e.target.result;
                                            preview.style.display = 'block';
                                            message.style.display = 'none';
                                        }
                                        reader.readAsDataURL(file);
                                    }
                                }

                                // Handle drag over event
                                function dragOverHandler(event) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                    document.getElementById('drag-drop-container').classList.add('drag-over');
                                }

                                // Handle drag leave event (to remove the highlight)
                                function dragLeaveHandler(event) {
                                    document.getElementById('drag-drop-container').classList.remove('drag-over');
                                }

                                // Handle drop event
                                function dropHandler(event) {
                                    event.preventDefault();
                                    event.stopPropagation();

                                    const file = event.dataTransfer.files[0];
                                    if (!file) return;

                                    const inputFile = document.getElementById('bannerImage');

                                    // Manually create a new FileList and assign it
                                    const dataTransfer = new DataTransfer();
                                    dataTransfer.items.add(file);
                                    inputFile.files = dataTransfer.files;

                                    // Manually trigger the onchange event
                                    showBannerPreview({
                                        target: inputFile
                                    });

                                    document.getElementById('drag-drop-container').classList.remove('drag-over');
                                }

                                // Trigger file input when clicking the container
                                function triggerFileInput() {
                                    document.getElementById('bannerImage').click();
                                }
                            </script>

                            <style>
                                /* Styling for the drag and drop container */
                                .drag-drop-container {
                                    position: relative;
                                    border: 2px dashed #007bff;
                                    padding: 20px;
                                    text-align: center;
                                    cursor: pointer;
                                    border-radius: 5px;
                                    background-color: #f9f9f9;
                                    transition: background-color 0.3s ease;
                                }

                                .drag-drop-container.drag-over {
                                    background-color: #e1f7ff;
                                    border-color: #0056b3;
                                }

                                #drag-drop-message {
                                    font-size: 16px;
                                    color: #007bff;
                                    margin: 0;
                                    padding: 0;
                                }

                                #bannerPreview {
                                    display: block;
                                    margin-top: 10px;
                                    max-height: 200px;
                                    max-width: 100%;
                                    border-radius: 5px;
                                }

                                .form-label {
                                    font-weight: bold;
                                    margin-bottom: 8px;
                                }

                                input[type="file"] {
                                    display: none;
                                }
                            </style>


                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
        <!-- ============================================================================== -->
        <section class="content-header">
            <h1>
                Listed Rooms
            </h1>
        </section>
        <!-- View Vendors Section Starts -->
        <div class="card panel panel-default">
            <div id="collapseTwo" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordion">
                <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Room Name</th>
                            <th>Max Person</th>
                            <th>₹ Price per Person</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include("control/conn.php");
                        // $vendor_id = $conn->real_escape_string($_GET['vendor']);
                        $hotel = mysqli_query($conn, "SELECT * FROM service_hotels WHERE vendor_uid = '$vendor_id' ORDER BY room_id DESC");
                        $i = 1;
                        while ($hotels = mysqli_fetch_array($hotel)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><img src="../images/uploads/<?php echo $hotels["banner"]; ?>" style="width:100px">
                                    <br><?php echo $hotels["hotel_name"]; ?>
                                    <br>(<?php echo $hotels["room_type"]; ?>)
                                </td>
                                <td><?php echo $hotels["person"]; ?></td>
                                <td><?php echo $hotels["price"]; ?><br>(<?php echo $hotels["price_unit"]; ?>)</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal<?php echo $hotels["room_id"]; ?>"><i class="fa fa-eye"></i> View</button>
                                    <a href="add-rooms-form.php?roomdel_id=<?php echo $hotels["room_id"]; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                    <a href="hotel-gallery.php?hotel_id=<?php echo $hotels["room_id"]; ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Gallery</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="largeModal<?php echo $hotels["room_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal<?php echo $hotels["room_id"]; ?>Label" aria-hidden="true">
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
                                                    <form method="post" enctype="multipart/form-data" action="control/add-rooms-form.php">
                                                        <div class="row">
                                                            <input type="hidden" name="vendor_id" value="<?= $vendor_id; ?>">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="maxPerson">Hotel Name</label>
                                                                    <input type="text" class="form-control" id="maxPerson" name="hotel_name" value="<?php echo $hotels["hotel_name"]; ?> " readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="room_id" value="<?php echo $hotels["room_id"]; ?>">
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
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-xl-12">
                                                                <div class="form-group">
                                                                    <label for="description">Description / Hotel Amenities</label>
                                                                    <textarea class="form-control" id="editor<?php echo $hotels["room_id"]; ?>" name="amenities" rows="3" placeholder="Enter Hotel Amenities"><?php echo $hotels["amenities"]; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Banner Image Upload -->
                                                        <div class="form-group">
                                                            <label for="bannerImage">Upload Banner Image</label>
                                                            <img src="../images/uploads/<?php echo $hotels["banner"]; ?>" style="width:100px"><br>
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
        <!-- Page Content Ends -->
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
        <?php $hotel2 = mysqli_query($conn, "select * from service_hotels order by room_id desc");
        $i = 1;
        while ($hotels2 = mysqli_fetch_array($hotel2)) {
        ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    ClassicEditor
                        .create(document.querySelector('#editor<?php echo $hotels2["room_id"] ?>'))
                        .catch(error => {
                            console.error(error);
                        });
                });
            </script>
        <?php } ?>
    </div>
    <?php
    include("footer.php");
    ?>
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
    <!-- js for preview image -->
    <script>
        function showBannerPreview(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('bannerPreview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
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
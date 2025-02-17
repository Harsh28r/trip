<?php
require_once("conn.php");
if (isset($_GET['main-category'])) {
    $service_type = mysqli_real_escape_string($conn, $_GET['main-category']);
    $service_type_vendor = mysqli_query($conn, "SELECT * FROM `vendor_service` WHERE `service_type` = '$service_type'");
    while ($service_type_vendor_rows = mysqli_fetch_assoc($service_type_vendor)) {
?><tr>
            <td><?php echo $vendor_uid = $service_type_vendor_rows['vendor_uid']; ?></td>
            <td><?php echo $name = $service_type_vendor_rows['service_name']; ?></td>
            <td>+91 <?php echo $service_type_vendor_rows['service_no']; ?></td>
            <!-- <td><?php echo $service_type_vendor_rows['service_email']; ?></td> -->
            <td><?php echo $service_type_vendor_rows['service_city'] . ", " . $service_type_vendor_rows['service_district']; ?></td>
            <td>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal<?php echo $service_type_vendor_rows['id']; ?>"><i class="fa fa-eye"></i> View</button>
                &nbsp;<button type="button" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Active</button> &nbsp;
                <?php
                echo '<a href="' . strtolower($service_type) . '-add?name=' . strtolower(str_replace(' ', '-', $name)) . '&uid=' . $vendor_uid . '&category=' . $service_type . '&id=' . $service_type_vendor_rows['id'] . '"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add ' . $service_type . '</button></a>';
                // if ($service_type == 'Hotel') { 
                //     // echo '<a href="hotel-add/'.$service_type.'/' . str_replace(' ', '-', $name) . '/'.$vendor_uid.'"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add Hotel</button></a>';
                //     echo '<a href="hotel-add?name=' . str_replace(' ', '-', $name) . '&uid='.$vendor_uid.'&category='.$service_type.'"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add Hotel</button></a>';
                // } else if ($service_type == '') {
                //     echo '<a href="hotel-add?name=' . $name . '"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Add Hotel</button></a>';
                // }
                ?>

            </td>
        </tr>

        <!-- Modal -->
        <div class="modal fade" id="largeModal<?php echo $service_type_vendor_rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal<?php echo $service_type_vendor_rows['id']; ?>Label" aria-hidden="true">
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
                        <?php
                        $vendor_sql = "SELECT * FROM `vendor` WHERE `uid` = '$vendor_uid'";
                        $vendor_result = mysqli_query($conn, $vendor_sql);
                        $vendor_rows = mysqli_fetch_assoc($vendor_result);
                        ?>
                        <!-- Personal Details -->
                        <h6 class="title-inner">Personal Details</h6>
                        <div class="row">
                            <div class="col-md-4 col-xl-4">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input class="form-control input-0" id="name" readonly name="vendor_name" value="<?php echo $vendor_rows['vendor_name']; ?>" placeholder="e.g. - Ramesh Kumar Varma" type="text">
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="form-group">
                                    <label for="father_name">Father's Name</label>
                                    <input class="form-control input-0" id="father_name" readonly name="father_name" value="<?php echo $vendor_rows['father_name']; ?>" placeholder="e.g. - Mohan Varma" type="text">
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control custom-select input-0" readonly name="gender" id="gender">
                                        <option value="" disabled>Choose</option>
                                        <option value="Male" <?php echo $vendor_rows['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                                        <option value="Female" <?php echo $vendor_rows['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                                        <option value="Other" <?php echo $vendor_rows['gender'] == 'Other' ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="form-group">
                                    <label for="aadhar_no">Aadhaar / ID</label>
                                    <input class="form-control input-0" id="aadhar_no" readonly name="aadhar_no" value="<?php echo $vendor_rows['aadhar_no']; ?>" placeholder="e.g. - 6454218576" type="text">
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="form-group">
                                    <label for="mobNo">Mobile No.</label>
                                    <input class="form-control input-0" id="mobNo" readonly name="mobile_no" value="<?php echo $vendor_rows['mobile_no']; ?>" placeholder="e.g. - 8150010101" type="number">
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="form-group">
                                    <label for="email">Email Id</label>
                                    <input class="form-control input-0" id="email" readonly name="email_id" value="<?php echo $vendor_rows['email_id']; ?>" placeholder="e.g. - ramesh123@gmail.com" type="email">
                                </div>
                            </div>


                        </div>
                        <!-- Business Details -->
                        <h6 class="title-inner">Business Details</h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-xl-6">
                                <div class="form-group">
                                    <label for="business_name">Business Name</label>
                                    <input class="form-control input-0" id="businessName" readonly name="business_name" value="<?php echo $vendor_rows['business_name']; ?>" placeholder="e.g. - Ramesh Enterprises" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-3">
                                <div class="form-group">
                                    <label for="gst">GST/PAN No.</label>
                                    <input class="form-control input-0" id="gst" readonly name="gst_no" value="<?php echo $vendor_rows['gst_no']; ?>" placeholder="e.g. - BXLP545800121NT" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-3">
                                <div class="form-group">
                                    <label for="registration_date">Registration Date</label>
                                    <input class="form-control input-0" id="registration_date" readonly name="registration_date" value="<?php echo $vendor_rows['registration_date']; ?>" max="<?php echo date('Y-m-d'); ?>" type="date">
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <div class="form-group">
                                    <label for="address">Office Address</label>
                                    <textarea id="officeAddress" readonly name="address" class="form-control input-0" placeholder="e.g. -" rows="2"><?php echo $vendor_rows['address']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-3">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input class="form-control input-0" id="city" readonly name="city" value="<?php echo $vendor_rows['city']; ?>" placeholder="e.g. - Golghar" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-3">
                                <div class="form-group">
                                    <label for="district">District</label>
                                    <input class="form-control input-0" id="district" readonly name="district" value="<?php echo $vendor_rows['district']; ?>" placeholder="e.g. - Gorakhpur" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-3">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input class="form-control input-0" id="state" readonly name="state" value="<?php echo $vendor_rows['state']; ?>" placeholder="e.g. - UP" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-xl-3">
                                <div class="form-group">
                                    <label for="pinCode">Pin Code</label>
                                    <input class="form-control input-0" id="pinCode" readonly name="pinCode" value="<?php echo $vendor_rows['pincode']; ?>" placeholder="e.g. -" type="number">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                    <label for="Front Aadha">Front Aadhar</label>
                                    <img id="aadharFrontPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['front_aadhar']; ?>" alt="Front Aadhaar Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                    <label for="back ">Back Aadhar</label>
                                    <img id="aadharBackPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['back_aadhar']; ?>" alt="Back Aadhaar Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                    <label for="back ">GST/PAN</label>
                                    <img id="gstCertificatePreview" src="<?php echo '../uploaded_images/' . $vendor_rows['gst_certificate']; ?>" alt="GST Certificate Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                    <label for="back ">Other</label>

                                    <img id="otherDocumentPreview" src="<?php echo '../uploaded_images/' . $vendor_rows['other_certificate']; ?>" alt="Other Document Preview" style="display: block; max-height: 5rem; max-width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-sm btn-primary">Update</button> -->
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}
// Service Vendor Basic Info if any service added--
// echo "welcome";
// $basic_vendor_info = FALSE;
if (isset($_GET['uid']) && isset($_GET['category']) && isset($_GET['id'])) {
    $vendor_id = mysqli_real_escape_string($conn, $_GET['id']);
    $vendor_get_uid = mysqli_real_escape_string($conn, $_GET['uid']);
    $vendor_get_category = mysqli_real_escape_string($conn, $_GET['category']);
    //     $basic_vendor_info = TRUE;
    // } else if (!empty($vendor_get_category) && !empty($vendor_get_uid)) {
    //     $basic_vendor_info = TRUE;
    // }
    // if ($basic_vendor_info) {
    //     $vendor_get_uid;
    //     $vendor_get_category;
    $vendor_service_add_sql = "SELECT * FROM `vendor_service` 
                                    JOIN `vendor` ON `vendor`.`uid` = `vendor_service`.`vendor_uid` 
                                    WHERE `vendor_service`.`vendor_uid` = '$vendor_get_uid' AND `vendor_service`.`service_type` = '$vendor_get_category' ";
    $vendor_service_add_run = mysqli_query($conn, $vendor_service_add_sql);
    $vendor_service_add_rows = mysqli_fetch_assoc($vendor_service_add_run);
    ?>
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xl-6">
            <div class="form-group">
                <label for="hotelName">Vendor Name</label>
                <input type="text" class="form-control" id="" value="<?php echo $vendor_service_add_rows['vendor_name']; ?>" placeholder="" readonly>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xl-6">
            <div class="form-group">
                <label for="hotelName">Vendor Mobile No.</label>
                <input type="text" class="form-control" id="hotelName" value="<?php echo $vendor_service_add_rows['mobile_no']; ?>" placeholder="" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xl-6">
            <div class="form-group">
                <label for="hotelPhone">Business Name</label>
                <input type="text" class="form-control" id="" value="<?php echo $vendor_service_add_rows['service_name']; ?>" placeholder="" readonly>
            </div>
        </div>
        <div class="col-md-3 col-xl-3 col-sm-12">
            <div class="form-group">
                <label for="hotelPhone">Helpline Number</label>
                <input type="tel" class="form-control" id="hotelPhone" value="<?php echo $vendor_service_add_rows['service_no']; ?>" placeholder="Enter phone number" readonly>
            </div>
        </div>
        <div class="col-md-3 col-xl-3 col-sm-12">
            <div class="form-group">
                <label for="hotelEmail">Helpline Email</label>
                <input type="email" value="<?php echo $vendor_service_add_rows['service_email']; ?>" class="form-control" id="hotelEmail" placeholder="Enter email" readonly>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="form-group">
                <label for="hotelAddress">Office Address</label>
                <textarea name="" rows="2" id="" class="form-control" placeholder="Hotel Address" readonly><?php echo $vendor_service_add_rows['service_address']; ?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-xl-3 col-sm-12">
            <div class="form-group">
                <label for="hotelAddress">City</label>
                <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_city']; ?>" id="hotelAddress" placeholder=" City" readonly>
            </div>
        </div>
        <div class="col-md-3 col-xl-3 col-sm-12">
            <div class="form-group">
                <label for="hotelCity">District</label>
                <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_district']; ?>" id="hotelCity" placeholder=" District" readonly>
            </div>
        </div>

        <div class="col-md-3 col-xl-3 col-sm-12">
            <div class="form-group">
                <label for="hotelState">State</label>
                <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_state']; ?>" id="hotelState" placeholder=" state" readonly>
            </div>
        </div>
        <div class="col-md-3 col-xl-3 col-sm-12">
            <div class="form-group">
                <label for="hotelZip">Pin/Zip Code</label>
                <input type="text" class="form-control" value="<?php echo $vendor_service_add_rows['service_pincode']; ?>" id="hotelZip" placeholder=" zip code" readonly>
            </div>
        </div>
    </div>
<?php
}
?>
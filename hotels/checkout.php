<?php
include("header.php");
session_start();

// Assume user_id is set in session
$user_id = $_SESSION['user_id'];

// Fetch cart details for the current user
$sql = "SELECT * FROM cart WHERE user_id = $user_id";
$result = mysqli_query($conn2, $sql);

// Calculate total amount
$total_price = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $total_price += $row['total_amount'];
}

// Handle form submission (payment process simulation)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkout'])) {
    // Move cart items to orders table
    $cart_items = mysqli_query($conn2, "SELECT * FROM cart WHERE user_id = $user_id");
    while ($cart_row = mysqli_fetch_assoc($cart_items)) {
        $hotel_id = $cart_row['hotel_id'];
        $guest = $cart_row['guest'];
        $checkin = $cart_row['checkin'];
        $checkout = $cart_row['checkout'];
        $total_amount = $cart_row['total_amount'];
        $price=$cart_row["price"];

        $f_name = $_POST["first_name"];
        $l_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $insert_order = "INSERT INTO orders (user_id, hotel_id, guest, checkin, checkout, total_amount, first_name, last_name, email, phone, status, price)
                         VALUES ($user_id, $hotel_id, $guest, '$checkin', '$checkout', '$total_amount', '$f_name', '$l_name', '$email', '$phone', 'Pending', '$price')";
        mysqli_query($conn2, $insert_order);
    }

    // Fetch user data

    // Email content
    $to = $user_email;
    $subject = "Order Confirmation";
    $message = "
    <html>
    <head>
        <title>Order Confirmation</title>
    </head>
    <body>
        <h2>Thank you for your order, " . htmlspecialchars($f_name) . "!</h2>
        <p>Your order has been successfully placed.</p>
        <p>Order Details:</p>
        <ul>
            <li>Name: " . htmlspecialchars($f_name . ' ' . $l_name) . "</li>
            <li>Email: " . htmlspecialchars($email) . "</li>
            <li>Phone: " . htmlspecialchars($phone) . "</li>
            <li>Total Amount: ₹" . number_format($total_price, 2) . "</li>
        </ul>
                        <div class='invoice-table table-responsive mt-5'>
                              // Start the HTML table
<table class='table table-bordered text-black'>
    <tr>
            
            <th  class='font-weight-semi-bold'>Hotel DETAILS</th>
            <th  class='font-weight-semi-bold'>Guest</th>
            <th  class='font-weight-semi-bold'>Check-in & Check-Out</th>
            
            <th  class='font-weight-semi-bold'>Total Amount</th>
          </tr>';

    
          ";
           $cart_items = mysqli_query($conn2, "SELECT * FROM cart WHERE user_id = $user_id");
    $i=1;

    while ($cart_row = mysqli_fetch_assoc($cart_items)) {
        $hotel_id = $cart_row['hotel_id'];
        $guest = $cart_row['guest'];
        $checkin = $cart_row['checkin'];
        $checkout = $cart_row['checkout'];
        $total_amount = $cart_row['total_amount'];
        $price=$cart_row["price"];

        $message .= '<tr>';
        
        $message .= '<td>' . htmlspecialchars($hotel_name) . '<br>' . htmlspecialchars($price) . '</td>';

        $message .= '<td>' . htmlspecialchars($guest) . '</td>';
        $message .= '<td>' . htmlspecialchars($checkin);
        $message .= '<br>' . htmlspecialchars($checkout) . '</td>';
        $message .= '<td>₹' . number_format($total_amount, 2) . '</td>';
    
        $message .= '</tr>';
    }

    // End the table
    $message .= '</table>

                        </div>

        <p>We appreciate your business!</p>
    </body>
    </html>
    ';
    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Send the email
    $retravl=mail($to, $subject, $message, $headers);
    if ($retravl) {
        // Email sent successfully
    echo'<script>alert("Email Sending")</script>';
    } else {
        // Email sending failed
        echo "Email sending failed.";
    }
    // Clear the cart for the user
    mysqli_query($conn2, "DELETE FROM cart WHERE user_id = $user_id");

    // Send confirmation email
    //sendConfirmationEmail($user_id, $conn2, $total_price);

    // Redirect to a success page
   header("Location: order_success.php");

//    exit();
}
/*
function sendConfirmationEmail($user_id, $conn2, $total_price) {
    
}*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensure your custom CSS -->
</head>

<body>

    <!-- ================================ START BREADCRUMB AREA =============================== -->
    <section class="breadcrumb-area bread-bg">
        <div class="overlay"></div>
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Booking</h2>
                <ul class="bread-list">
                    <li><a href="index.php">Home</a></li>
                    <li>Booking</li>
                </ul>
            </div>
            <!-- end breadcrumb-content -->
        </div>
        <!-- end container -->
        <div class="bread-svg">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none">
                <path d="M-4.22,89.30 C280.19,26.14 324.21,125.81 511.00,41.94 L500.00,150.00 L0.00,150.00 Z"></path>
            </svg>
        </div>
        <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================ END BREADCRUMB AREA =============================== -->

    <!-- ================================ START BOOKING AREA =============================== -->
    <section class="booking-area padding-top-60px padding-bottom-90px">
        <div class="container">

                             <form action="" method="POST">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Personal Details Card -->
  
                    <div class="card">
                        <div class="card-body">

                           
                              <h4 class="card-title">Personal Details</h4>
                            <hr class="border-top-gray my-3" />
                            <div class="row">
                                <div class="form-group col-lg-6 pr-lg-0">
                                    <label class="label-text">First Name</label>
                                    <input class="form-control form--control ps-3" value="<?php echo $fetch["first_name"];?>" type="text" name="first_name" placeholder="First name" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="label-text">Last Name</label>
                                    <input class="form-control form--control ps-3" type="text" value="<?php echo $fetch["last_name"];?>" name="last_name" placeholder="Last name" />
                                </div>
                                <div class="form-group col-lg-6 pr-lg-0">
                                    <label class="label-text">Your Email</label>
                                    <input class="form-control form--control ps-3" value="<?php echo $fetch["email"];?>" type="email" name="email" placeholder="you@example.com" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="label-text">Phone</label>
                                    <input class="form-control form--control ps-3" type="text" name="phone" value="<?php echo $fetch["mobile"];?>" placeholder="Phone number" />
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <!-- Payment Method Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Payment Method</h4>
                            <hr class="border-top-gray mt-3 mb-4" />
                            <ul class="payment-method">
                                <li class="active">
                                    <label class="payment-method-label">
                                        <input name="payment_method" required type="radio" checked />
                                        Pay on Checkout
                                    </label>
                                </li>
                            </ul>
                                <button type="submit" name="checkout" class="theme-btn">Confirm and Pay</button>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-8 -->

                <!-- Booking Summary -->
                <div class="col-lg-4">
                    <!-- <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Booking Summary</h4>
                            <hr class="border-top-gray my-0" />
                            <ul class="list-items mt-3">
                                <?php
                                mysqli_data_seek($result, 0); // Reset result pointer
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<li class='d-flex align-items-center justify-content-between'>
                                            <span class='text-black'>{$row['hotel_id']} - Guests: {$row['guest']} - Check-in: {$row['checkin']} - Check-out: {$row['checkout']}</span>
                                            <span class='text-success'>₹{$row['total_amount']}</span>
                                        </li>";
                                }
                                ?>
                            </ul>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-black">Total Cost</span>
                                <span class="text-success">₹<?php echo number_format($total_price, 2); ?></span>
                            </div>
                        </div>
                    </div> -->
                    <!-- end card -->
                        
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Booking Summary</h4>
                            <hr class="border-top-gray my-0">
                       
                            <ul class="list-items mt-3">
                             <?php
                                mysqli_data_seek($result, 0); // Reset result pointer
                                while ($row = mysqli_fetch_assoc($result)) {

                            $hotel=mysqli_query($conn2,"select * from service_hotels where id='".$row["hotel_id"]."'");
                            $hotels=mysqli_fetch_array($hotel);
                            $hotel_name=$hotels["hotel_name"];
                                    ?>
                                    <li style="text-align:center"><?php echo $hotel_name;?> (₹<?php echo $row["price"];?>)</li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Check-In</span> <?php echo $row["checkin"];?>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Check-Out</span> <?php echo $row["checkout"];?>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Guests</span> <?php echo $row["guest"];?>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Sub Cost</span>
                                    <span class="text-success">₹<?php echo number_format($row["total_amount"], 2); ?></span>

                                </li>
                                
                                <li>
                                    <hr class="border-top-gray">
                                </li>

                <?php } ?>
                <hr>



                                <li class="d-flex align-items-center justify-content-between">
                                    <span class="text-black">Total Cost</span>
                                    <span class="text-success">₹<?php echo number_format($total_price, 2); ?></span>

                                </li>

                            </ul>

                        </div>
                        <!-- end card-body -->
                    </div>

                </div>
                <!-- end col-lg-4 -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end booking-area -->
    <!-- ================================ END BOOKING AREA =============================== -->


<?php
mysqli_close($conn);
?>
<?php include 'footer.php';?>
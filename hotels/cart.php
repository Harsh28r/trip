<?php
include("header.php");
// Assume user_id is 1 for the current user (update based on your session or authentication logic)
$user_id = $_SESSION['user_id'];

// Handle removing a booking from the cart
if (isset($_GET['remove'])) {
    $remove_id = intval($_GET['remove']);
    $delete_sql = "DELETE FROM cart WHERE id = $remove_id";
    mysqli_query($conn2, $delete_sql);
    header("Location: cart.php"); // Redirect to refresh the cart after removal
    exit;
}

// Fetch all bookings for the current user from the cart
$sql = "SELECT * FROM cart WHERE user_id = $user_id";
$result = mysqli_query($conn2, $sql);

?>
<style>
        /* Basic styles for the cart table */
        .cart-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            color:black;
            padding: 10px;
        }

        th {
            background-color: #074bf4 !important;
            color: white;
        }

        td {
            text-align: center;
        }

        .remove-link {
            color: red;
            text-decoration: none;
        }

        .remove-link:hover {
            text-decoration: underline;
        }

        .total {
            margin-top: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            float: right;
            font-size: 1.2em;
            color:black;
        }

        .checkout-btn {
            display: block;
            float: right;
            padding: 10px 20px;
            background-color: #c7d7ff !important;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }
    </style>
    <!-- ================================
    START BREADCRUMB AREA
================================= -->

    <style>
        .bread-bg {
            background-image: url(https://img.freepik.com/free-photo/landscape-with-colorful-rainbow-appearing-sky_23-2151521474.jpg?t=st=1724865143~exp=1724868743~hmac=d4a6ca523e55df725eb4368d41ffffb5626900c275745fc87ad793b2b9d70e67&w=1060);
        }
    </style>
    <section class="breadcrumb-area bread-bg">
        <div id="particles-js"></div>

        <!-- <div class="overlay"></div> -->
        <!-- end overlay -->
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="sec__title text-white mb-3">Cart</h2>
                <!-- <ul style="color: white;" class="bread-list text-dark">
                    <li><a href="index" style="color: white;" ;>Home</a></li>
                    <li style="color: white;" ;>Hotel Details</li>
                </ul> -->
            </div>
            <!-- end breadcrumb-content -->
        </div>
    </section>
    <!-- end breadcrumb-area -->

    <div class="cart-container">
             <?php    if (mysqli_num_rows($result) > 0) {?>

        <h2>Your Cart</h2>

        <table>
            <thead>
                <tr>
                    <th>Hotel</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Guests</th>
                    <th>Total Amount (₹)</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Fetch hotel name (you can replace this with actual hotel name logic)
                        $hotel_id = $row['hotel_id'];
                        //$ = "Hotel $hotel_id";  // Dummy hotel name, replace with actual logic
                            
                            $hotel=mysqli_query($conn2,"select * from service_hotels where id='$hotel_id'");
                            $hotels=mysqli_fetch_array($hotel);
                            $hotel_name=$hotels["hotel_name"];

                        // Calculate total price
                        $total_price += $row['total_amount'];

                        echo "<tr>
                            <td>{$hotel_name}<br>Price: {$row["price"]}</td>
                            <td>{$row['checkin']}</td>
                            <td>{$row['checkout']}</td>
                            <td>{$row['guest']}</td>
                            <td>₹" . number_format($row['total_amount'], 2) . "</td>
                            <td><a href='cart.php?remove={$row['id']}' class='remove-link'>Remove</a></td>
                        </tr>";
                    }
               
                ?>
            </tbody>
        </table>

        <?php if ($total_price > 0) { ?>
            <div class="total">
                <p>Total Price: ₹<?php echo number_format($total_price, 2); ?></p>
            </div>
            <a style="margin-top: 20px;" href="checkout.php" class="theme-btn">Proceed to Checkout</a>
        <?php } 
         } else {
                    echo "<h1 style='text-align:center'>Your cart is empty.</h1>";
                }
                ?>
    </div>
</body>
</html>

<?php
// Close the connection
//mysqli_close($conn);
include 'footer.php';
?>

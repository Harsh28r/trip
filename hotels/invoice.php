<?php
include("../single_connection.php");
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Fetch order data""
 $sql = "SELECT * FROM `orders` WHERE id='".$_GET['id']."'";
$result = $conn2->query($sql);

$order = null;
if ($result->num_rows > 0) {
    $order = $result->fetch_assoc(); // Fetch the first order
}


                            $hotel=mysqli_query($conn2,"select * from service_hotels where id='".$order["hotel_id"]."'");
                            $hotels=mysqli_fetch_array($hotel);
                            $hotel_name=$hotels["hotel_name"];
// Close the connection
$conn2->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice</title>    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/select2.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="https://work.perceptionvita.in/trip24ui/css/style.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <section class="invoice-area padding-top-60px">
        <div class="container">

            <a href="dashboard" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
            <br><div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <!-- <h2 class="font-size-24 font-weight-semi-bold text-center mb-5">
                            Thank you for your order, <?php echo htmlspecialchars($order['first_name']); ?>!
                        </h2> -->
                        <div class="row">
                            <div class="col-lg-6">
                               <!--  <img src="images/logo2.png" alt="logo" /> -->
                                <h2>Trip24</h2>
                            </div>
                            <div class="col-lg-6">
                                <ul class="invoice-details text-end">
                                    <li><strong class="text-black">Order:</strong> #<?php echo "000".htmlspecialchars($order['id']); ?></li>
                                    <li><strong class="text-black">Date:</strong> <?php echo date('d/m/Y', strtotime($order['order_date'])); ?></li>
                                   <!--  <li>Due 7 days from date of issue</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="font-size-30 font-weight-semi-bold my-4">Invoice</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="invoice-info">
                                    <strong class="text-black font-weight-semi-bold d-block pb-1">Author:</strong>
                                    <ul class="invoice-details">
                                        <li><?php echo htmlspecialchars($order['first_name'] . ' ' . $order['last_name']); ?></li>
                                        <li><?php echo htmlspecialchars($order['email']); ?></li>
                                        <li><?php echo htmlspecialchars($order['phone']); ?></li>
                                    </ul>
                                </div>
                            </div>
                           <!--  <div class="col-lg-6">
                                <div class="invoice-info">
                                    <strong class="text-black font-weight-semi-bold d-block pb-1">To:</strong>
                                    <ul class="invoice-details">
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <div class="invoice-table table-responsive mt-5">
    <?php                           // Start the HTML table
    echo '<table class="table table-bordered text-black">';
    echo '<tr>
            <th  class="font-weight-semi-bold">ID</th>
            
            <th  class="font-weight-semi-bold">Hotel DETAILS</th>
            <th  class="font-weight-semi-bold">Guest</th>
            <th  class="font-weight-semi-bold">Check-in/Check-Out</th>
            <th  class="font-weight-semi-bold">Total Amount</th>
        
            <th  class="font-weight-semi-bold">Order Date</th>
          </tr>';

    // Fetch and display each row
          $i=1;
  //  echo "jhgj ".mysqli_error($conn2);
    //while ($row = mysqli_fetch_array($result)) {


        echo '<tr>';
        echo '<td>' . htmlspecialchars($i) . '</td>';
        echo '<td>' . htmlspecialchars($hotel_name) . '<br> <b>Price: </b>₹' . htmlspecialchars($order["price"]) . '</td>';

        echo '<td>' . htmlspecialchars($order['guest']) . '</td>';
        echo '<td><b>IN: </b>' . htmlspecialchars($order['checkin']);
        echo '<br><b>OUT: </b>' . htmlspecialchars($order['checkout']) . '</td>';
        echo '<td>₹' . number_format($order['total_amount'], 2) . '</td>';
        
        echo '<td>' . date('d/m/Y', strtotime($order['order_date'])) . '</td>';
        echo '</tr>';
    //}

    // End the table
    echo '</table>';?>

                        </div>
                        <div class="text-end">
                            <h4 class="font-size-16 font-weight-semi-bold">Total: ₹<?php echo number_format($order['total_amount'], 2); ?></h4>
                            <p class="font-size-15">Pay On Checkout</p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="javascript:window.print()" class="theme-btn">
                        <i class="far fa-print me-2"></i> Print this invoice
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://work.perceptionvita.in/trip24ui/js/jquery-3.7.1.min.js"></script>
    <script src="https://work.perceptionvita.in/trip24ui/js/bootstrap.bundle.min.js"></script>
    <script src="https://work.perceptionvita.in/trip24ui/js/main.js"></script>
</body>
</html>

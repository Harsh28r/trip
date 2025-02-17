<?php include 'header.php';?>

   <?php 

$userId = $_SESSION['user_id']; // Get user ID from session

// Fetch user data
$sql = "SELECT `id`, `first_name`, `last_name`, `username`, `email`, `mobile` FROM `users` WHERE `id` = $userId";
$result = mysqli_query($conn2, $sql);
$user = mysqli_fetch_assoc($result);

// Handle form submission for updating user profile
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST["update_profile"])) {
    $firstName = mysqli_real_escape_string($conn2, $_POST['first_name']);
    $lastName = mysqli_real_escape_string($conn2, $_POST['last_name']);
    $username = mysqli_real_escape_string($conn2, $_POST['username']);
    $email = mysqli_real_escape_string($conn2, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn2, $_POST['mobile']);

    // Update user data in the database
    $updateSql = "UPDATE `users` SET 
        `first_name` = '$firstName', 
        `last_name` = '$lastName', 
        `username` = '$username', 
        `email` = '$email', 
        `mobile` = '$mobile' 
        WHERE `id` = $userId";

    if (mysqli_query($conn2, $updateSql)) {
        echo "Profile updated successfully.";
                     echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Profile Updated Successfully",
                }).then(function() {
                    window.location.href = "dashboard.php";  // Redirect to dashboard or any other page
                });
            </script>';

    } else {
         $error= "Error updating profile: " . mysqli_error($conn);
                     echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "'.$error.'",
                }).then(function() {
                    window.location.href = "dashboard.php";  // Redirect to dashboard or any other page
                });
            </script>';

    }
}?>
<style type="text/css">
.header {
            font-size: 24px;
            margin-bottom: 20px;
            color: #3FA2F6;
            text-align: center;
        }
        p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .card {
            background-color: #c7d7ff ;
            color: white;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card h2 {
            margin: 0;
            font-size: 36px;
        }
        .card p {
            margin-top: 10px;
            font-size: 18px;
        }      </style>
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg py-5">
      <div class="overlay"></div>
      <!-- end overlay -->
      <div class="container">
        <div class="breadcrumb-content text-center">
          <h2 class="sec__title text-white mb-3">Dashboard</h2>
          <ul class="bread-list">
            <li><a href="index.php">home</a></li>
            <li>Dashboard</li>
          </ul>
        </div>
        <!-- end breadcrumb-content -->
      </div>
      <!-- end container -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

  <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area padding-bottom-70px">
      <div class="bg-white shadow-sm py-4">
        <div class="container">
          <div
            class="dashboard-nav d-flex flex-wrap align-items-center justify-content-between"
          >
            <ul
              class="nav nav-tabs my-tabs my-tabs-2 justify-content-center my-1"
              id="myTab"
              role="tablist"
            >
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link active"
                  id="listings-tab"
                  data-bs-toggle="tab"
                  href="#dashboard"
                  role="tab"
                  aria-controls="dashboard"
                  aria-selected="true"
                >
                  <i class="fal fa-list me-1 font-size-14"></i> Dashboard
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="settings-tab"
                  data-bs-toggle="tab"
                  href="#order_history"
                  role="tab"
                  aria-controls="order_history"
                  aria-selected="false"
                >
                  <i class="fal fa-cog me-1 font-size-14"></i> Order History
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="edit_profile-tab"
                  data-bs-toggle="tab"
                  href="#edit_profile"
                  role="tab"
                  aria-controls="edit_profile"
                  aria-selected="false"
                >
                  <i class="fal fa-cog me-1 font-size-14"></i> Update Profile
                </a>
              </li>
            
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="bookmarks-tab"
                  data-bs-toggle="tab"
                  href="#change_password"
                  role="tab"
                  aria-controls="change_password"
                  aria-selected="false"
                >
                  <i class="fas fa-bookmark me-1 font-size-14"></i> Change Password
                </a>
              </li>

              <li class="nav-item" role="presentation">
                <a href="logout.php"
                  class="nav-link"
                >
                  <i class="fas fa-log-out me-1 font-size-14"></i> Logout
                </a>
              </li>
            </ul>
          <!--   <div class="my-1">
              <a
                href="add-listing.html"
                class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium me-1"
                ><i class="fal fa-plus me-1"></i> Add listing</a
              >
              <a
                href="index.html"
                class="theme-btn theme-btn-sm bg-white shadow-sm border border-gray text-black font-weight-medium"
                ><i class="fal fa-sign-out me-1"></i> Log out</a
              >
            </div> -->
          </div>
        </div>
        <!-- end container -->
      </div>
      <div class="container">
        <div class="tab-content mt-4" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="dashboard"
            role="tabpanel"
            aria-labelledby="dashboard-tab"
          >
           <div class="header">
    Welcome to Your Dashboard!
</div>
<?php
// Query to get total orders and total amount
$sql = "SELECT COUNT(*) AS total_orders, SUM(total_amount) AS total_amount FROM orders where user_id='".$_SESSION['user_id']."'";
$result = $conn2->query($sql);

if ($result->num_rows > 0) {
    // Fetch the results
    $row = $result->fetch_assoc();
    $totalOrders = $row['total_orders'];
    $totalAmount = $row['total_amount'];
} else {
    $totalOrders = 0;
    $totalAmount = 0;
}
?>
<p>Here’s a quick summary of your order stats:</p>
<div class="stats">
    <div class="card">
        <h2><?php echo $totalOrders; ?></h2>
        <p>Total Orders</p>
    </div>
    <div class="card">
        <h2>₹ <?php echo number_format($totalAmount, 2); ?></h2>
        <p>Total Amount of Orders</p>
    </div>
</div>
            <!-- end row -->
          </div>
          <!-- end tab-pane -->
          <div
            class="tab-pane fade"
            id="order_history"
            role="tabpanel"
            aria-labelledby="order_history-tab"
          >
            <div class="row">
              <div class="col-lg-12">
                <h4 class="font-size-20 font-weight-semi-bold mb-3">
                  Order History
                </h4>
              </div>
              <!-- end col-lg-12 -->
              <div class="edit-profile-photo media mb-4 col-lg-12">
  <?php         
// Assuming the user ID is provided (you can get this from session in real scenarios)
$userId = $_SESSION['user_id']; // Replace with actual user ID, e.g., from session: $_SESSION['user_id']

// SQL query to fetch hotel booking history for the specific user
$sql = "SELECT * 
        FROM orders 
        WHERE user_id = $userId order by id desc";

// Execute the query
$result = mysqli_query($conn2, $sql);

// Check if there are results
if (mysqli_num_rows($result) > 0) {?>
    
     <table class="table">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Hotel Details</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Guests</th>
                    <th>Total Amount (₹)</th>

                    <th>Booking Date & Status</th>
                    <th>Invoice</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                $i=1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Fetch hotel name (you can replace this with actual hotel name logic)
                        $hotel_id = $row['hotel_id'];
                        //$ = "Hotel $hotel_id";  // Dummy hotel name, replace with actual logic
                            
                            $hotel=mysqli_query($conn2,"select * from service_hotels where id='$hotel_id'");
                            $hotels=mysqli_fetch_array($hotel);
                            $hotel_name=$hotels["hotel_name"];

                        // Calculate total price
                        $total_price += $row['total_amount'];?>



                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $hotel_name;?><br>Price: ₹<?php echo $row["price"];?></td>
                            <td><?php echo $row['checkin'];?></td>
                            <td><?php echo $row['checkout'];?></td>
                            <td><?php echo $row['guest'];?></td>
                            <td><?php echo "₹" . number_format($row['total_amount'], 2);?></td>
                            <td>
<?php echo "<b>".$row["status"]."</b><br>"; $dateString = $row['order_date'];

// Create a DateTime object from the given date string
$date = new DateTime($dateString);

// Format the date in a more readable format
$formattedDate = $date->format('F j, Y');

echo $formattedDate ."

</td>
                            <td><a href='invoice.php?id={$row['id']}' class='btn btn-primary btn-sm'><i class='fa fa-eye'></i></a></td>
                        </tr>";
                    $i++;}
                ?>
            </tbody>
        </table>
<?php 
} else {
    echo "No booking history available.";
}
?>
          </div>
        </div>
      </div>
          <!-- end tab-pane -->
          <div
            class="tab-pane fade"
            id="change_password"
            role="tabpanel"
            aria-labelledby="change_password-tab"
          >
    <div class="col-lg-12">
        <h4 class="font-size-20 font-weight-semi-bold mb-3">
            Change Password
        </h4>
    </div>
    <form  method="POST" id="changePasswordForm">
        <div class="col-lg-6 col-md-6">
            <label class="label-text">Current Password</label>
            <div class="form-group">
                <span class="fal fa-lock form-icon"></span>
                <input
                    class="form-control form--control password-field"
                    type="password"
                    name="current_password"
                    placeholder="Current password"
                    required
                />
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <label class="label-text">New Password</label>
            <div class="form-group">
                <span class="fal fa-lock form-icon"></span>
                <input
                    class="form-control form--control password-field"
                    type="password"
                    name="new_password"
                    placeholder="New password"
                    required
                />
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <label class="label-text">New Password (again)</label>
            <div class="form-group">
                <span class="fal fa-lock form-icon"></span>
                <input
                    class="form-control form--control password-field"
                    type="password"
                    name="confirm_new_password"
                    placeholder="New password again"
                    required
                />
            </div>
        </div>
        <div class="col-lg-12">
            <button class="theme-btn mt-3 border-0" name="password_submit" type="submit">
                Change Password
            </button>
        </div>
    </form>
</div>
     <!-- end row -->
     <div
            class="tab-pane fade"
            id="edit_profile"
            role="tabpanel"
            aria-labelledby="change_password-tab"
          >
    <div class="col-lg-12">
        <h4 class="font-size-20 font-weight-semi-bold mb-3">
    Update Profile    </h4>
    </div>
    <form method="POST" id="changePasswordForm">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <label class="label-text">First Name</label>
                    <div class="form-group">
                        <input
                            class="form-control form--control"
                            type="text"
                            name="first_name"
                            value="<?php echo htmlspecialchars($user['first_name']); ?>"
                            required
                        />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label class="label-text">Last Name</label>
                    <div class="form-group">
                        <input
                            class="form-control form--control"
                            type="text"
                            name="last_name"
                            value="<?php echo htmlspecialchars($user['last_name']); ?>"
                            required
                        />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label class="label-text">Username</label>
                    <div class="form-group">
                        <input
                            class="form-control form--control"
                            type="text"
                            name="username"
                            value="<?php echo htmlspecialchars($user['username']); ?>"
                            required
                        />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label class="label-text">Email</label>
                    <div class="form-group">
                        <input
                            class="form-control form--control"
                            type="email"
                            name="email"
                            value="<?php echo htmlspecialchars($user['email']); ?>"
                            required
                        />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label class="label-text">Mobile</label>
                    <div class="form-group">
                        <input
                            class="form-control form--control"
                            type="text"
                            name="mobile"
                            value="<?php echo htmlspecialchars($user['mobile']); ?>"
                        />
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <button class="theme-btn mt-3 border-0" name="update_profile" type="submit">
                        Update Profile
                    </button>
                </div>
            </div>
        </form>
</div>
     <!-- end row -->

          </div>
          <!-- end tab-pane -->
        </div>
        <!-- end tab-content -->
      </div>
    </section>
    <!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

<?php include 'footer.php';?>
<?php
//session_start();
//include 'db_connection.php'; // Include your DB connection script

// Assuming the user is logged in and the user ID is stored in the session
$user_id = $_SESSION['user_id'];

// Check if the form is submitted
if (isset($_POST["password_submit"])) {
    // Step 1: Get the form inputs
    $current_password = mysqli_real_escape_string($conn2, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($conn2, $_POST['new_password']);
    $confirm_new_password = mysqli_real_escape_string($conn2, $_POST['confirm_new_password']);

    // Step 2: Check if new password matches confirm password
    if ($new_password !== $confirm_new_password) {
        echo "New password and confirmation password do not match.";
        exit();
    }

    // Step 3: Fetch the current password from the database
    $sql = "SELECT password FROM users WHERE id = $user_id";
    $result = mysqli_query($conn2, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        
        // Step 4: Verify the current password
        if (!password_verify($current_password, $hashed_password)) {
          //  echo "Current password is incorrect.";

             echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "Current Password Is Incorrect",
                }).then(function() {
                  //  window.location.href = "dashboard.php";  // Redirect to dashboard or any other page
                });
            </script>';
            exit();
        }
        
        // Step 5: Hash the new password
        $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        
        // Step 6: Update the new password in the database
        $update_sql = "UPDATE users SET password = '$new_hashed_password' WHERE id = $user_id";
        if (mysqli_query($conn2, $update_sql)) {
            //echo "Password successfully updated.";

            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Password Successfully Updated",
                }).then(function() {
                  //  window.location.href = "dashboard.php";  // Redirect to dashboard or any other page
                });
            </script>';
        } else {
           // echo "Error updating password: " . mysqli_error($conn);

            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "Error updating password: ' . mysqli_error($conn).'",
                }).then(function() {
                    window.location.href = "dashboard.php";  // Redirect to dashboard or any other page
                });
            </script>';
        }
    } else {
       // echo "User not found.";
    //    Error updating password: " . mysqli_error($conn)
    
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "User Not Found",
                }).then(function() {
                    window.location.href = "dashboard.php";  // Redirect to dashboard or any other page
                });
            </script>';
    }

    // Close the database connection
  //  mysqli_close($conn);
}
?>

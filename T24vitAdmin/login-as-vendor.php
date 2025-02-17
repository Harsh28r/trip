<?php
session_start();
include("control/conn.php");

// If already logged in, redirect to the dashboard
if (!empty($_SESSION['vendoruid'])) {
    header("Location: dashboard.php");
    exit;
}
$error = "";
// Check if form was submitted and validate credentials
if (isset($_POST["submit"])) {
    // Get form data
    $input_username = mysqli_real_escape_string($conn, $_POST['email_uid']);
    $input_password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM vendor WHERE email_id = '$input_username' OR uid = '$input_username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($input_password, $row['password'])) {
                $_SESSION['vendorloggedin'] = true;
                $_SESSION['vendorid'] = $row['id'];
                $_SESSION['vendoruid'] = $row['uid'];
                $_SESSION['vendoremail'] = $row['email_id'];
                $_SESSION['vendorname'] = $row['vendor_name'];
                $_SESSION['logtype'] = "vendor";
                $_SESSION['website'] = "trip24.co.in";

                // Redirect to dashboard after successful login
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Invalid password";
            }
        } else {
            $error = "No account found with that Email";
        }
    } else {
        $error = "Query failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Trip24</title>
    <meta name="keywords" content="Trip24" />
    <meta name="description" content="Trip24">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custompages/login1.css">
    <link rel="stylesheet" href="assets/css/fonts/fonts-style.css">
</head>

<body style="background-color:#007bff;">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="mx-auto login">
                <a href="#">
                    <h3 class="text-white text-center">Trip24</h3>
                </a>
                <div class="card card-signin mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-center">Vendor Login</h5>
                        <center>
                            <p style="color: red;">
                                <?= $error; ?>
                            </p>
                        </center>

                        <form class="form-signin" method="post">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="email_uid" class="form-control" placeholder="Email address">
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="row remember">
                                <div class="col-md-5 text-center text-md-right mb-3">
                                    <a href="password-forget" class="">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block text-uppercase text-center">Log in</button>
                            <hr class="my-4">
                            <!-- <center>
                                <a class="text-center" href="#">Vendor Login</a>
                            </center> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>
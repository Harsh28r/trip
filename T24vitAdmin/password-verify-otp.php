<?php include("control/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <title>Verify OTP | Trip24</title>
    <meta name="keywords" content="Trip24" />
    <meta name="description" content=" Trip24">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/css/custompages/login1.css">
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="assets/css/fonts/fonts-style.css">
</head>

<body class="bg-login">
    <div class="wrapper">
        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <div class="mx-auto login">

                <a href="#">
                    <h3 class="text-white text-center">Trip24</h3>
                </a>
                <div class="card card-signin mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-center">Verify Otp</h5>

                        <form method="post" action="password-reset">
                            <div class="form-label-group">

                                <input type="text" id="otp" class="form-control" name="otp" placeholder="Enter the OTP sent to your email:" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block text-uppercase text-center">Verify OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
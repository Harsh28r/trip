<?php include("control/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <title>Forgot Password | Trip24</title>
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
                        <h5 class="card-title text-center">Forgot Password</h5>

                        <form class="form-signin" method="post" action="">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                            </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block text-uppercase text-center">Send OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
session_start();
include("control/conn.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check if email exists
    $query = "SELECT * FROM admintrip24 WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Generate OTP
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $email;

        // HTML email content
        $to = $email;
        $subject = "Trip24 OTP Code - Forget Password!";
        $message = "
        <html>
        <head>
            <title>Your OTP Code</title>
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
                .container { max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #ffffff; }
                .header { background-color: #007BFF; color: white; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
                .header h2 { margin: 0; }
                .content { padding: 20px; }
                .otp { font-size: 28px; font-weight: bold; color: #007BFF; text-align: center; margin: 20px 0; }
                .footer { text-align: center; font-size: 12px; color: #888; margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Trip24</h2>
                </div>
                <div class='content'>
                    <h3>Hello!</h3>
                    <p>We received a request to reset the password for your Trip24 account. Please use the OTP code below to reset your password.</p>
                    <div class='otp'>$otp</div>
                    <p><strong>Note:</strong> This OTP is valid for the next <strong>10 minutes</strong>. If you did not request a password reset, please ignore this email or contact our support team.</p>
                </div>
                <div class='footer'>
                    <p>Thank you for using Trip24!</p>
                    <p>Visit us at: <a href='https://trip24.co.in' style='color: #007BFF; text-decoration: none;'>Trip24.co.in</a></p>
                </div>
            </div>
        </body>
        </html>
        ";

        // Set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Trip24 <no-reply@trip24.co.in>" . "\r\n";


        if (mail($to, $subject, $message, $headers)) {

            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
                          Swal.fire({
                              icon: "success",
                              title: "Success",
                              text: "Success! Otp Sent Successfully in given Email Id"
                          }).then(function() {
                      // Redirect the user to the dashboard or another page
                  window.location.href = "password-verify-otp";
                    });
                      </script>';
        } else {
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
                          Swal.fire({
                              icon: "error",
                              title: "Error",
                              text: "Failed To Send Mail! Please Try Again"
                          }).then(function() {
                      // Redirect the user to the dashboard or another page
                  window.location.href = "password-forget";
                    });
                      </script>';
        }
    } else {
        echo "";

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
                          Swal.fire({
                              icon: "error",
                              title: "Error",
                              text: "No account found with that email."
                          }).then(function() {
                      // Redirect the user to the dashboard or another page
                  window.location.href = "password-forget";
                    });
                      </script>';
    }
}
?>
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
                        <h5 class="card-title text-center">Enter New Password</h5>

                        <?php
                        session_start();
                        include("control/conn.php");

                        if (isset($_POST['submit'])) {
                            $otp = $_POST['otp'];

                            if ($otp == $_SESSION['otp']) {
                                // OTP is correct, show password reset form
                        ?>
                                <form method="post" action="">
                                    <?php //echo  $_SESSION['email'];
                                    ?>
                                    <div class="form-label-group">
                                        <input type="password" class="form-control" placeholder="Enter your new password" id="new_password" name="new_password" required>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase text-center" name="submit2">Update Password</button>
                                </form>
                        <?php
                            } else {
                                echo "Invalid OTP.";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php

if (isset($_POST['submit2'])) {
    $new_password = password_hash(mysqli_real_escape_string($conn, $_POST['new_password']), PASSWORD_DEFAULT);
    $email = $_SESSION['email'];

    // Update password in the database
    $query = "UPDATE admintrip24 SET password = '$new_password' WHERE email = '$email'";
    if (mysqli_query($conn, $query)) {

        $to = $email;
        $subject = "Trip24: Password Changed Successfully";
        $message = "
        <html>
        <head>
            <title>Password Changed</title>
            <style>
                .container { width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; font-family: Arial, sans-serif; }
                .header { background-color: #28A745; color: #fff; text-align: center; padding: 10px; }
                .content { padding: 20px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'><h2>Trip24</h2></div>
                <div class='content'>
                    <h3>Password Changed Successfully</h3>
                    <p>Your Trip24 account password has been updated. If not done by you, please contact support immediately.</p>
                    <p>Visit us: <a href='https://trip24.co.in'>Trip24.co.in</a></p>
                </div>
            </div>
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\nFrom: Trip24 <no-reply@trip24.co.in>\r\n";
        mail($to, $subject, $message, $headers);


        unset($_SESSION['otp']);
        unset($_SESSION['email']);

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
                          Swal.fire({
                              icon: "success",
                              title: "Success!",
                              text: "Password Updated Successfully"
                          }).then(function() {
                      // Redirect the user to the dashboard or another page
                  window.location.href = "index";
                    });
                      </script>';
        //        echo "Password reset successful.";
        // Clear session data
    } else {
        echo "Error updating password: " . mysqli_error($conn);

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
                          Swal.fire({
                              icon: "success",
                              title: "Success!",
                              text: "Error updating password: ' .  mysqli_error($conn) . '"
                          }).then(function() {
                      // Redirect the user to the dashboard or another page
                  window.location.href = "index";
                    });
                      </script>';
    }
}
?>
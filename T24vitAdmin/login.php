<?php include("control/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <title>Login | Trip24</title>
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

<body style="background-color:#007bff;">
    <div class="wrapper">
        <!-- Page Content Starts-->
        <div class="content-wrapper">
            <div class="mx-auto login">

                <a href="#">
                    <h3 class="text-white text-center">Trip24</h3>
                </a>
                <div class="card card-signin mt-4">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In- Welcome</h5>

                        <form class="form-signin" method="post">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="email_uid" class="form-control" placeholder="Email address / UID" required autofocus>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="row remember">
                                <!-- <div class="col-md-7 text-center text-md-left">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                                    </div>
                                </div> -->
                                <div class="col-md-5 text-center text-md-right mb-3">
                                    <a href="password-forget" class="">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block text-uppercase text-center">Sign in</button>
                            <hr class="my-4">

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content Ends-->
    </div>

    <!-- Bootstrap JS -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
</body>


</html>
<?php
session_start(); // Make sure session is started

include("control/conn.php");

// Check if the form was submitted
if (isset($_POST["submit"])) {

    // Get form data
    $input_username = mysqli_real_escape_string($conn2, $_POST['email_uid']);
    $input_password = mysqli_real_escape_string($conn2, $_POST['password']);

    // Prepare SQL query
    $sql = "SELECT * FROM admintrip24 WHERE email = '$input_username' OR uid = '$input_username'";
    $result = mysqli_query($conn2, $sql);

    // Check if query was successful
    if ($result) {

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);

            // Verify password
            if (password_verify($input_password, $row['password'])) {
                // Set session variables
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['uid'] = $row['uid'];
                $_SESSION['username'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['profile'] = $row['profile'];

                $success = "Login successful. Redirecting to dashboard...";

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
                          Swal.fire({
                              icon: "success",
                              title: "Success",
                              text: "' . $success . '"
                          }).then(function() {
                      // Redirect the user to the dashboard or another page
                  window.location.href = "dashboard";
                    });
                      </script>';
            } else {
                $error = "Invalid password.";

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                      <script>
                          Swal.fire({
                              icon: "error",
                              title: "Error",
                              text: "' . $error . '"
                          }).then(function() {
                      // Redirect the user to the index page
                  window.location.href = "index";
                    });
                      </script>';
            }
        } else {
            $error = "No account found with that username.";

            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <script>
                      Swal.fire({
                          icon: "error",
                          title: "Error",
                          text: "' . $error . '"
                      });
                  </script>';
        }
    } else {
        $error = "Query failed: " . mysqli_error($conn);

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script>
                  Swal.fire({
                      icon: "error",
                      title: "Error",
                      text: "' . $error . '"
                  });
              </script>';
    }

    // Close the statement
    mysqli_free_result($result);
}

// Close the connection
//mysqli_close($conn);
?>
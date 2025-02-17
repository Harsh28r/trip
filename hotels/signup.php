<?php include("header.php");?>
   <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
      <div class="overlay"></div>
      <!-- end overlay -->
      <div class="container">
        <div class="breadcrumb-content text-center">
          <h2 class="sec__title text-white mb-3">Sign Up</h2>
          <ul class="bread-list">
            <li><a href="index.php">home</a></li>
            <li>Sign Up</li>
          </ul>
        </div>
        <!-- end breadcrumb-content -->
      </div>
      <!-- end container -->
      <div class="bread-svg">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
          <path
            d="M-4.22,89.30 C280.19,26.14 324.21,125.81 511.00,41.94 L500.00,150.00 L0.00,150.00 Z"
          ></path>
        </svg>
      </div>
      <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START CONTACT AREA
================================= -->
    <section class="contact-area padding-top-60px padding-bottom-90px">
      <div class="container">
        <div class="col-lg-12 mx-auto">
 <form action="" method="POST" class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="font-size-28 font-weight-semi-bold mb-1">Create an account!</h4>
                    </div>
                    <div class="row">
                    <!-- First Name -->
                    <div class="form-group col-lg-6 col-sm-12">
                        <label class="label-text">First Name</label>
                        <input class="form-control form--control ps-3" type="text" name="first_name" placeholder="e.g. Alex" required />
                    </div>
                    
                    <!-- Last Name -->
                    <div class="form-group col-lg-6 col-sm-12">
                        <label class="label-text">Last Name</label>
                        <input class="form-control form--control ps-3" type="text" name="last_name" placeholder="e.g. Smith" required />
                    </div>
                    
                    <!-- Username -->
                    <div class="form-group col-lg-6 col-sm-12">
                        <label class="label-text">Username</label>
                        <input class="form-control form--control ps-3" type="text" name="username" placeholder="e.g. alex_smith" required />
                    </div>
                    
                    <!-- Email Address -->
                    <div class="form-group col-lg-6 col-sm-12">
                        <label class="label-text">Email Address</label>
                        <input class="form-control form--control ps-3" type="email" name="email" placeholder="e.g. you@example.com" required />
                    </div>
                    
                    <!-- Mobile Number -->
                    <div class="form-group col-lg-6 col-sm-12">
                        <label class="label-text">Mobile Number</label>
                        <input class="form-control form--control ps-3" type="text" name="mobile" placeholder="e.g. +1234567890" required />
                    </div>
                    
                    <!-- Password --
                    <div class="form-group col-lg-6 col-sm-12">
                        <label class="label-text">Password</label>
                        <input class="form-control form--control ps-3" id="password" type="password" name="password" placeholder="Password" required />
                        <button type="button" class="btn btn-primary btn-xs" onclick="togglePasswordVisibility('password')">Show</button>

                    </div>-->
                    <div class="form-group col-lg-6 col-sm-12">
            <label class="label-text">Password</label>
            <div class="position-relative">
              <input
                class="form-control form--control ps-3 password-field"
                type="password"
                name="password"
                placeholder="Password"
                required
              />
              <a
                href="javascript:void(0)"
                class="position-absolute top-0 right-0 h-100 toggle-password"
                title="toggle show/hide password"
              >
                <i class="far fa-eye eye-on"></i>
                <i class="far fa-eye-slash eye-off"></i>
              </a>
            </div>
          </div>

          <div class="form-group col-lg-6 col-sm-12">
            <label class="label-text">Confirm Password</label>
            <div class="position-relative">
              <input
                class="form-control form--control ps-3 password-field"
                type="password"
                name="confirm_password"
                placeholder="Password"
                required
              />
              <a
                href="javascript:void(0)"
                class="position-absolute top-0 right-0 h-100 toggle-password"
                title="toggle show/hide password"
              >
                <i class="far fa-eye eye-on"></i>
                <i class="far fa-eye-slash eye-off"></i>
              </a>
            </div>
          </div>
                    <!-- Confirm Password --
                    <div class="form-group col-lg-6 col-sm-12">
                        <label class="label-text">Confirm Password</label>
                        <input class="form-control form--control ps-3" id="confirm_password" type="password" name="confirm_password" placeholder="Confirm Password" required />
                            <button type="button" class="btn btn-primary btn-xs" onclick="togglePasswordVisibility('confirm_password')">Show</button>

                    </div>
                    
                    <!-- Privacy and Terms Checkboxes -->
                   <!--  <div class="form-group">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="privacyCheckbox" required />
                            <label class="custom-control-label" for="privacyCheckbox">I Agree to the Privacy Policy</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="termsCheckbox" required />
                            <label class="custom-control-label" for="termsCheckbox">I Agree to the Terms of Services</label>
                        </div>
                    </div> -->
                    <!-- end form-group -->
          
                    
                    <button class="theme-btn border-0" name="submit" type="submit">Register Account</button>
                    <p class="mt-3">Already have an account? <a href="login.php" class="btn-link">Login</a></p>
                </div>
           </div>

            </form>      
              </div>
        <!-- end col-lg-7 -->
      </div>
      <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->

<?php include("footer.php");?>
<?php


$errors = [];

if (isset($_POST['submit'])) {
    // Get input values and sanitize
    $first_name = mysqli_real_escape_string($conn2, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn2, $_POST['last_name']);
    $username = mysqli_real_escape_string($conn2, $_POST['username']);
    $email = mysqli_real_escape_string($conn2, $_POST['email']);
    $password = mysqli_real_escape_string($conn2, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn2, $_POST['confirm_password']);
    $mobile = mysqli_real_escape_string($conn2, $_POST['mobile']);
    
    // Validation
    if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($mobile)) {
        $errors[] = "All fields are required.";

    }
    
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Ensure password meets security requirements
   /* if (strlen($password) < 6 || !preg_match("/[a-z]/i", $password) || !preg_match("/[0-9]/", $password) || !preg_match("/[^a-zA-Z\d]/", $password)) {
        $errors[] = "Password must be at least 6 characters long, contain letters, numbers, and special characters.";
    }*/

    // Check if username is unique
    $username_query = "SELECT id FROM users WHERE username = '$username'";
    $username_result = mysqli_query($conn2, $username_query);

    if (mysqli_num_rows($username_result) > 0) {
        $errors[] = "Username is already taken.";
    }

    // If no errors, insert into the database
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $insert_query = "INSERT INTO users (first_name, last_name, username, email, password, mobile) 
                         VALUES ('$first_name', '$last_name', '$username', '$email', '$hashed_password', '$mobile')";

        if (mysqli_query($conn2, $insert_query)) {
           // echo "Account created successfully!";

            // Function to send confirmation email
//function sendConfirmationEmail($email, $first_name) {
    $subject = "Thank You for Signing Up!";
    $message = "
    <html>
    <head>
        <title>Signup Confirmation</title>
    </head>
    <body>
        <p>Dear $first_name,</p>
        <p>Thank you for signing up! Your account has been successfully created.</p>
        <p>We are excited to have you on board!</p>
        <p>Best Regards,<br>Your Company</p>
    </body>
    </html>
    ";
    
    // To send HTML mail, the Content-type header must be set
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    
    // Send email
    mail($email, $subject, $message, $headers);



            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Signup Successfully",
                }).then(function() {
                    window.location.href = "login.php";  // Redirect after success
                });
            </script>';
        } else {
         //   echo "Error: " . mysqli_error($conn2);
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "Error: ' . mysqli_error($conn2).'",
                }).then(function() {
                    window.location.href = "signup.php";  // Redirect after success
                });
            </script>';
        }
    } else {
        foreach ($errors as $error) {
           // echo "<p>$error</p>";
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "'.$error.'",
                }).then(function() {
                    window.location.href = "signup.php";  // Redirect after success
                });
            </script>';
        }
    }
}

//mysqli_close($conn2);
?>
<script>
function togglePasswordVisibility(inputId) {
    const passwordInput = document.getElementById(inputId);
    const button = event.target; // Get the button that was clicked

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        button.textContent = "Hide"; // Change button text to "Hide"
    } else {
        passwordInput.type = "password";
        button.textContent = "Show"; // Change button text to "Show"
    }
}
</script>

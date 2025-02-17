<?php include("header.php");?>
    <!-- ================================
         END HEADER AREA
================================= -->

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg">
      <div class="overlay"></div>
      <!-- end overlay -->
      <div class="container">
        <div class="breadcrumb-content text-center">
          <h2 class="sec__title text-white mb-3">Login</h2>
          <ul class="bread-list">
            <li><a href="index.php">home</a></li>
            <li>login</li>
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
        <div class="col-lg-7 mx-auto">
  <form action="login.php" method="POST" class="card">
        <div class="card-body">
          <div class="text-center">
            <h4 class="font-size-28 font-weight-semi-bold mb-1">
              Login to your account
            </h4>
          </div>
          <div class="d-flex align-items-center">
            <hr class="border-top-gray flex-grow-1" /><!-- 
            <span class="mx-1 text-uppercase">or</span> -->
            <hr class="border-top-gray flex-grow-1" />
          </div>
          <div class="form-group">
            <label class="label-text">Username</label>
            <input
              class="form-control form--control ps-3"
              type="text"
              name="username_or_email"
              placeholder="Username"
              required
            />
          </div>
          <!-- end form-group -->
          <div class="form-group">
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
          <!-- end form-group -->
          <div
            class="form-group d-flex align-items-center justify-content-between"
          >
            <div class="custom-control custom-checkbox">
              <!-- <input
                type="checkbox"
                class="custom-control-input"
                id="RememberMe"
              /> --><!-- 
              <label class="custom-control-label" for="RememberMe"
                >Remember Me</label
              > -->
            </div><!-- 
            <a href="recover.html" class="btn-link">Forgot password?</a> -->
          </div>
          <!-- end form-group -->
          <button class="theme-btn border-0" type="submit" name="login_btn">
            Login Now
          </button>
          <p class="mt-3">
            Not a member?
            <a href="signup.php" class="btn-link">Register</a>
          </p>
        </div>
      </form>        </div>
        <!-- end col-lg-7 -->
      </div>
      <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->

    <!-- ================================
       START FOOTER AREA
================================= -->
   <?php include("footer.php");



if (isset($_POST['login_btn'])) {

    $username_or_email = mysqli_real_escape_string($conn2, $_POST['username_or_email']);
    $password = mysqli_real_escape_string($conn2, $_POST['password']);

    // Check if the user exists with username or email
    $query = "SELECT * FROM users WHERE username='$username_or_email'";
    $result = mysqli_query($conn2, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Successful login
           // session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
    Swal.fire({
        icon: "success",
        title: "Logged In!",
        text: "Welcome, ' . $user['username'] . '!",
    }).then(function() {
        var hotelId = "' . (isset($_SESSION["hotel_id"]) ? $_SESSION["hotel_id"] : '') . '"; // Check for hotel_id
        if (hotelId === "") {
            window.location.href = "dashboard.php";  // Redirect to dashboard if hotel_id is empty
        } else {
            window.location.href = "hotel-detail.php?id=" + hotelId;  // Redirect to hotel details page
        }
    });
</script>';
        } else {
            // Incorrect password
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Login Failed!",
                    text: "Incorrect password. Please try again.",
                });
            </script>';
        }
    } else {
        // User not found
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Login Failed!",
                text: "No account found with this username or email.",
            });
        </script>';
    }
}

mysqli_close($conn2);
?>
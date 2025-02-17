<?php
include('T24vitAdmin/control/conn.php');
session_start();

// Check if user is already logged in
if (!empty($_SESSION['useremail'])) {
    header("Location: index.php");
    exit;
}

// Store the previous page URL
if (empty($_SESSION['previous_page'])) {
    $_SESSION['previous_page'] = $_SERVER['HTTP_REFERER'] ?? 'index.php';
}

// Initialize error message
$error = "";

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Get form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $input_password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to find the user
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Verify password
            if (password_verify($input_password, $row['password'])) {
                // Set session variables
                $_SESSION['userloggedin'] = true;
                $_SESSION['useremail'] = $row['email'];
                $_SESSION['username'] = $row['name'];
                $_SESSION['userphone'] = $row['phone'];
                $_SESSION['userid'] = $row['user_id'];
                $_SESSION['user'] = [
                    'email' => $row['email'],
                    'name' => $row['name'],
                    'phone' => $row['phone'],
                    'id' => $row['user_id']
                ];

                $_SESSION['website'] = "trip24.co.in";

                // Redirect to the previous page or index.php if empty
                $redirect_to = $_SESSION['previous_page'] ?? 'index.php';
                unset($_SESSION['previous_page']); // Clear previous page session
                header("Location: $redirect_to");
                exit;
            } else {
                $error = "Invalid password";
            }
        } else {
            $error = "No account found with that email";
        }
    } else {
        $error = "Query failed: " . mysqli_error($conn);
    }
}
?>


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login - Trip24</title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="images/favicon.png" /> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/animated-headline.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" />
</head>
<?php include("header.php"); ?>
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
                <li><a href="index">home</a></li>
                <li>login</li>
            </ul>
        </div>
        <!-- end breadcrumb-content -->
    </div>
    <!-- end container -->
    <div class="bread-svg">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path
                d="M-4.22,89.30 C280.19,26.14 324.21,125.81 511.00,41.94 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </div>
    <!-- end bread-svg -->
</section>

<section class="contact-area padding-top-60px padding-bottom-90px">
    <div class="container">
        <div class="col-lg-7 mx-auto">
            <form method="POST" class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="font-size-28 font-weight-semi-bold mb-1">
                            Login to your account
                        </h4>
                    </div>
                    <center>
                        <p style="color: red;">
                            <?= $error; ?>
                        </p>
                    </center>
                    <div class="d-flex align-items-center">
                        <hr class="border-top-gray flex-grow-1" /><!-- 
            <span class="mx-1 text-uppercase">or</span> -->
                        <hr class="border-top-gray flex-grow-1" />
                    </div>
                    <div class="form-group">
                        <label class="label-text">Email</label>
                        <input
                            class="form-control form--control ps-3"
                            type="text"
                            name="email"
                            placeholder="Username"
                            required />
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
                                required />
                            <a
                                href="javascript:void(0)"
                                class="position-absolute top-0 right-0 h-100 toggle-password"
                                title="toggle show/hide password">
                                <i class="far fa-eye eye-on"></i>
                                <i class="far fa-eye-slash eye-off"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end form-group -->
                    <button class="theme-btn border-0" type="submit" name="submit">
                        Login Now
                    </button>
                    <p class="mt-3">
                        Not a member?
                        <a href="register" class="btn-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
        <!-- end col-lg-7 -->
    </div>
    <!-- end container -->
</section>

<?php include("footer.php");

<?php
// Start the session
session_start();

// Unset specific session variables
unset($_SESSION['userloggedin']);
unset($_SESSION['useremail']);
unset($_SESSION['username']);
unset($_SESSION['userphone']);

// Destroy the session entirely
// session_destroy();

// Redirect to the login page or homepage
header("Location: index");

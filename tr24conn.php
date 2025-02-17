<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$host = 'localhost';
$db = 'dhcppqyt_trip24';
$user = 'dhcppqyt_trip24';
$pass = 'trip24@7496';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// Default time zone
date_default_timezone_set('Asia/Kolkata');
$current_date_time = date("Y-m-d h:i:s");
$updated_at = $current_date_time;
$updated_by = 'TR24SUPADMIN';

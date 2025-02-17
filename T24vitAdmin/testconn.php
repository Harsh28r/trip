<?php 
    $servername = "localhost";
    $username = "u538377175_property"; // replace with your database username
    $password = "Property@456123"; // replace with your database password
    $dbname = "u538377175_property"; // replace with your database name
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
?>
<?php
session_start(); // Start the session if it's not already started

// Check if there are any session variables set
if (!empty($_SESSION)) {
    // Loop through each session variable and display key-value pairs
    foreach ($_SESSION as $key => $value) {
        echo "$key : $value<br>";
    }
} else {
    echo "No session variables set.";
}

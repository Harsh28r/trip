<?php
session_start(); // Start the session if it's not already started

// Check if there are any session variables set
if (!empty($_SESSION)) {
    // Loop through each session variable and display key-value pairs
    foreach ($_SESSION as $key => $value) {
        // If the session variable is an array, loop through it
        if (is_array($value)) {
            echo "$key : <br>";
            foreach ($value as $subKey => $subValue) {
                echo "&nbsp;&nbsp;$subKey : $subValue<br>"; // Indent array elements
            }
        } else {
            // For non-array session variables, just display the key and value
            echo "$key : $value<br>";
        }
    }
} else {
    echo "No session variables set.";
}

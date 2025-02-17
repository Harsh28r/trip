<?php
require_once("conn.php");
// Fetch the current sequence from the table `24Trip_imp` where id = 1
$sql_fetch = "SELECT value FROM 24Trip_imp WHERE id = 1";
$result = $conn->query($sql_fetch);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sequence = $row['value'];
    
    // Increment the sequence by 1
    $sequence++;   
    // Ensure the sequence is at least 3 digits, pad with leading zeros if necessary
    $formatted_sequence = str_pad($sequence, 3, '0', STR_PAD_LEFT);

    // Get current date components
    $current_day_no = date("d");
    $current_month_short_name = strtoupper(date("M"));
    $current_year_last_2digit = date("y");

    // Create the generated_uid
    $generated_uid = "TR24".$current_day_no.$current_month_short_name.$current_year_last_2digit.$formatted_sequence;

    // Output the generated generated_uid
    // echo "Generated generated_uid: " . $generated_uid;

    // Update the sequence back to the table
    $sql_update = "UPDATE 24Trip_imp SET value = '$sequence' WHERE id = 1";
    if ($conn->query($sql_update) === TRUE) {
        // echo "\nSequence updated successfully!";   
    } else {
        echo "Error updating sequence: " . $conn->error;
    }  
} else {
    echo "No record found! for sequence";
}


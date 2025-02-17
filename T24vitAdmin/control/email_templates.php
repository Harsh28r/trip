<?php

// Add Vendor email 
if ($add_vendor_run) {

    $to = $email_id;
    $subject = "Vendor Account Created - Your Login Details";
    // HTML Email Template
    $message = '
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Vendor Account Created</title>
                            <style>
                                body {
                                    background-color: #c7d7ff;
                                    font-family: Arial, sans-serif;
                                    color: #333333;
                                }
                                .container {
                                    width: 100%;
                                    max-width: 600px;
                                    margin: 0 auto;
                                    background-color: #ffffff;
                                    border-radius: 8px;
                                    padding: 20px;
                                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                }
                                h1 {
                                    color: #333333;
                                    font-size: 24px;
                                    text-align: center;
                                }
                                p {
                                    font-size: 16px;
                                    line-height: 1.5;
                                }
                                .credentials {
                                    background-color: #f0f4ff;
                                    border: 1px solid #dddddd;
                                    padding: 15px;
                                    border-radius: 5px;
                                    margin-top: 15px;
                                }
                                .credentials p {
                                    font-size: 14px;
                                    margin: 0;
                                    color: #333333;
                                }
                                .footer {
                                    margin-top: 20px;
                                    font-size: 12px;
                                    text-align: center;
                                    color: #777777;
                                }
                                a {
                                    color: #1a73e8;
                                    text-decoration: none;
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <h1>Welcome to Trip24, ' . $vendor_name . '!</h1>
                                <p>Your vendor account has been successfully created. You can log in using the following credentials:</p>

                                <div class="credentials">
                                    <p><strong>UID:</strong> ' . $generated_uid . '</p>
                                    <p><strong>Username:</strong> ' . $vendor_name . '</p>
                                    <p><strong>Email ID:</strong> ' . $email_id . '</p>
                                    <p><strong>Password:</strong> ' . $actual_password . '</p>
                                </div>

                                <p>You can log in to your account <a href="https://trip24.co.in">here</a> and update your profile if needed.</p>

                                <div class="footer">
                                    <p>Best regards,</p>
                                    <p><strong>Trip24 Team</strong></p>
                                    <p><a href="https://trip24.co.in">Visit our website</a></p>
                                </div>
                            </div>
                        </body>
                        </html>
                        ';


    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Display "Trip24" as the sender name
    $headers .= "From: Trip24 <admin@trip24.co.in>" . "\r\n";
    $headers .= "Reply-To: admin@trip24.co.in" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    // Send email
    $email_sent = mail($to, $subject, $message, $headers);
    if ($email_sent) {
        // echo "Confirmation email sent successfully.";
    } else {
        echo "Failed to send confirmation email.";
    }
}
?>

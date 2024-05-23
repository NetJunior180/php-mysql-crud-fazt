<?php

$db_host = DB_HOST;
$db_user = DB_USERNAME;
$db_password = DB_PASSWORD;
$db_name = DB_DATABASE;
$ssl_cert = "ssl/DigiCertGlobalRootCA.crt.pem"; // Replace with the path to your SSL certificate

// Improved error handling and connection attempt

try {
    $conn = mysqli_init();

    if (!$conn) {
        throw new Exception("mysqli_init() failed: " . mysqli_connect_error());
    }

    // Attempt connection with SSL
    if (!mysqli_real_connect($conn, $db_host, $db_user, $db_password, $db_name, 3306, $ssl_cert)) {
        // Provide specific error message for SSL connection issues
        $error_message = mysqli_connect_error();
        if (strpos($error_message, 'SSL')) {
            throw new Exception("SSL connection failed: $error_message. Check your SSL certificate path and configuration.");
        } else {
            throw new Exception("Connection failed: $error_message");
        }
    }

    echo "Connected to MySQL database with SSL!"; // Success message (optional)

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
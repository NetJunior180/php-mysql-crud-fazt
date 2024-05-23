<?php

$db_host = DB_HOST;
$db_user = DB_USERNAME;
$db_password = DB_PASSWORD;
$db_name = DB_DATABASE;
$ssl_cert = "ssl/DigiCertGlobalRootCA.crt.pem"; // Replace with your SSL certificate path

// Connect to the database with SSL
$conn = mysqli_init();
mysqli_real_connect($conn, $db_host, $db_user, $db_password, $db_name, 3306, $ssl_cert);

if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}


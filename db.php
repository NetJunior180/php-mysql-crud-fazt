<?php
    $dbhost = DB_HOST;
    $dbname = DB_DATABASE;
    $dbuname = DB_USERNAME;
    $dbpass = DB_PASSWORD;
    $sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";

    $conn = mysqli_init();
    mysqli_real_connect($conn, $dbhost, $dbuname, $dbpass, $dbname, 3306, $ssl_cert);

    if (mysqli_connect_errno()) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>

// Connect to the database with SSL

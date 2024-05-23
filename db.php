<?php
    $dbhost = DB_HOST;
    $dbname = DB_DATABASE;
    $dbuname = DB_USERNAME;
    $dbpass = DB_PASSWORD;
    //$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";

    $conn = mysqli_connect($dbhost, $dbuname, $dbpass, $dbname);
?>
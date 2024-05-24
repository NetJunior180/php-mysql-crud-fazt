<?php

include("db.php");

if(isset($_GET['id'])) {
  // EXTRA
  require "db.php";
  //Establish the connection
  $conn = mysqli_init();
  mysqli_ssl_set($conn,NULL,NULL,$sslcert,NULL,NULL);
  if(!mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL)){
      die('Failed to connect to MySQL: '.mysqli_connect_error());
  }

  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');

  // BR
  mysqli_close($conn);
}

?>

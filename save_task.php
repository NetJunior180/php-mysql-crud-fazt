<?php

//include('db.php');

if (isset($_POST['save_task'])) {

  // EXTRA
  require "db.php";
  //Establish the connection
  $conn = mysqli_init();
  mysqli_ssl_set($conn,NULL,NULL,$sslcert,NULL,NULL);
  if(!mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL)){
      die('Failed to connect to MySQL: '.mysqli_connect_error());
  }


  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
  
  
  // BR
  mysqli_close($conn);
}

?>

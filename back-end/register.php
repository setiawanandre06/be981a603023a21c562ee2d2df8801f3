<?php
  define('ROOTPATH', "../");
  require_once(ROOTPATH."\config.php");

  if(isset($_POST['register'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepare query
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    $data = $conn->query($sql);

    // Execute query
    if ($data)
    {
      header('location: ../front-end/login.html');
    }
  }

?>
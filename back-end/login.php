<?php
  define('ROOTPATH', "../");
  require_once(ROOTPATH."\config.php");

  if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepare query
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $data = $conn->query($sql);
    $row = mysqli_fetch_array($data);

    if ($data)
    {
      session_start();
      $_SESSION['username'] = $username;

      $hour = time()+3600 *24 * 30;
      setcookie('username', $username, $hour);
      setcookie('active', 1, $hour);

      header('location: ../index.php');
    }
  }

?>
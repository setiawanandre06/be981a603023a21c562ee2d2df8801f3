<?php
  define('ROOTPATH', __DIR__);
  require_once (ROOTPATH."\back-end\session.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome!</title>

    <nav class="navbar navbar-expand-sm bg-light"> 
      <ul class="navbar-nav ml-auto"> 
        <?php
          if (isset($_SESSION['username'])){
        ?>
        <li class="nav-item"> 
            <a class="nav-link" href="back-end/logout.php"> 
              Logout 
            </a> 
        </li>
        <?php 
        }
        else {
        ?>
        <li class="nav-item"> 
            <a class="nav-link" href="front-end/register.html"> 
              Register 
            </a> 
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="front-end/login.html"> 
              Login 
            </a> 
        </li>
        <?php
        }
        ?>
      </ul> 
    </nav>

    <style>
      .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <?php
          if (isset($_SESSION['username'])){
        ?>
          <h1>Welcome 
            <?php 
              echo $_SESSION['username']; 
            ?>
          </h1>
        <?php }
        else {
          echo "<h1>Registrasi User Test MKM</h1>";
        } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
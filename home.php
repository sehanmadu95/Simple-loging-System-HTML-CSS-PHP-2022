<?php 
session_start();
  if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Hello.... <?php echo $_SESSION['username']."\n"; ?> <br> </h1> 
    <br>
    <a href="logout.php">Logout</a>


      

  </body>
</html>


  <?php 
  }
  else{
    header("Location:index.php");
        exit();
  }

 ?>
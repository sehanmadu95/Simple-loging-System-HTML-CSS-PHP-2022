<?php
  $db_name= "mini_project";
  $db_user_name= "root";
  $db_password= "admin";
  $db_host= "localhost";

  $con = mysqli_connect($db_host, $db_user_name, $db_password, $db_name);

  if(!$con){
    echo "Connection fail";
  }


 ?>

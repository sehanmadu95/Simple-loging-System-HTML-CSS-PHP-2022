<?php
session_start();
  #echo "HEllo PHP file";
include "conn.php";

  if (isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);

      return $data;

    }
    $uname=validate($_POST['uname']);
    $pass=validate($_POST['password']);

    if (empty($uname)){
      header("Location:index.php?error=user name is required");
      exit();
    }
    else if(empty($pass)){
      header("Location:index.php?error=password is required");
      exit();
    }
    else{
      $sql="SELECT * FROM login_table WHERE username='$uname' AND password='$pass'";
      $result=mysqli_query($con,$sql);

      if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
          if ($row['username']==$uname && $row['password']==$pass){
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            header("Location:home.php ");

          }
          else{
            header("Location:index.php?error=Incorect username and password again");
            exit();
          }
      }
      else{
        header("Location:index.php?error=Incorect username and password again");
        exit();
      }
    }

  }else {
    header("Location: index.php");
    exit();
  }


?>

<?php
  include 'config.php';
  session_start();
  $user=$_POST['admin_user'];
  $pas=$_POST['admin_pwd'];

  $query="SELECT admin_name,admin_pass FROM admin where admin_name='".$user."'  AND admin_pass='".$pas."' ";
  $result=mysqli_query($conn,$query);

  if(mysqli_num_rows($result) != 0){

    $_SESSION['ad_user']="admin";
    echo "Welcome as a Supoer User";
    header("Location: AdminPanel/admin_inedx.php");
  }else {
    echo "Sorry login faill .Cause of invalid user name or password";
    header("Location:admin_after_login.php");
  }


 ?>

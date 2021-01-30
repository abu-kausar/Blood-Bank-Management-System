<?php

include 'config.php';
  $id=$_POST['up-id'];
  $name=$_POST['up-comp'];

  $result=mysqli_query($conn,"UPDATE request_for_blood SET complete='".$name."' WHERE id='".$id."' ");

  if($result){
    header("Location: request.php");
  }else {
    echo "Update Fail";
  }

 ?>
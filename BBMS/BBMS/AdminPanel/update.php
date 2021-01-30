<?php

include 'config.php';
  $id=$_POST['stock-id'];
  $name=$_POST['stock-update'];

  $result=mysqli_query($conn,"UPDATE stock SET avail='".$name."' WHERE id='".$id."' ");

  if($result){
    header("Location: stock.php");
  }else {
    echo "Failed to update";
  }

 ?>

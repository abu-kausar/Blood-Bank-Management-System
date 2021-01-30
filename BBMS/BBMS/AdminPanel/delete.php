<?php
  //include 'config.php';
  $db="blood_bank_management";
  $conn=mysqli_connect("localhost", "root","",$db);
  $id=$_POST['delete-id'];
  $query="DELETE FROM donor WHERE id='".$id."' ";
  $result=mysqli_query($conn,$query);

  if($result){
      header("Location:donor.php");
  }
  else {
    echo "Failed to delete";
  }

 ?>

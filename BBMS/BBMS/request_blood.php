<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank_management";


// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);



$q=$_POST['name'];
$w=$_POST['blood_group'];
$e=$_POST['amount'];
$r=$_POST['contact'];
$t=$_POST['address'];
$y=$_POST['date'];


$sql = "INSERT INTO request_for_blood (name ,blood_group ,amount, contact, address, date)  VALUES ('$q','$w','$e','$r','$t','$y')";

 if ($conn->query($sql)==TRUE){
	echo "You successfully submit";}
 else{
	 echo "Error: " . $sql . "<br>" . $conn->error;}

$conn->close();
?>

<?php
  include 'config.php';
  session_start();
  /*if(isset($_SESSION['ad_user'])){
    echo "";
    //print_r($_SESSION); needed
    //header("Location: index.php");
  }*/
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Login</title>
	<style>
	
	*{
		margin:0; padding:0
	}
	
    body{
		background-image:url(images/image1.jpg);
		background-size:cover;
		padding-top: 20vh;
	}

   .form-container{
	   width: 350px;
	   height: auto;
	   padding: 50px 30px;
	   background-color: #fff;
	   border-radius: 10px;
	   box-shadow: 0 0 10px 0 black;
	   margin: auto;
	   position: relative;
	   }
    form {
		margin:0 auto;
		width:300px
		}
h2{
	text-align:center;
	font-family:verdana;
	margin-bottom: 15px;
}
input {
    width: 300px;
	text-align: center;
	padding: 8px 0px;
	border: none;
	background-color: #d3d3d3;
	border-radius: 5px;
    margin-bottom: 10px;
}
label{
    color: red;
}
button {
    padding:10px;
    border:none;
    margin-left: 120px;
    background-color: #51fbfb;
    border-radius: 5px;
    margin-bottom: 10px;
}
label {
  cursor:pointer
}
</style>
</head>

<body>

    
	<div class="form-container">
	<h2>Sign In</h2>
        <form class="" action="admin.php" method="post">
            <input type="text" name="admin_user" placeholder="Username" required>
            <input type="password" name="admin_pwd" placeholder="Password" required>
            <button type='login'><strong>Submit</strong></button><br>
        </form>

	</div>

</body>

</html>

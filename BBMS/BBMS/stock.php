<?php
	include 'config.php';
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<style>
body{
	background-image:url(images/image1.jpg);
            background-size:cover;
}

caption {
    text-align: center;
    margin-bottom: 5px;
    font-size: 200%;
    padding: 5px;
    letter-spacing: 10px;
    font-weight: bold;
	color: white;
}

	table{
          position:absolute;
           top:20%;
           left:25%; 
           border-collapse: collapse;
           width: 50%;

	}

	th, td {
		
  border: 1px solid black;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
tr:nth-child(odd) {
  background-color: #2ECC40;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
		<div class="maincontent">
		 <br><br/>
		 <table>
			 <br><br><br>
			 <caption>Stock</caption>
			 <th>ID</th>
			 <th>Blood Group</th>
			 <th>Availability</th>

			 <?php

				 $sql = "SELECT * FROM stock";
				 $result = $conn->query($sql);

				 if ($result==true) {
					 // output data of each row
					 while($row = $result->fetch_assoc()) {

						 echo "<tr>";

							 echo "<td>".$row['id']."</td>";

							 echo "<td>".$row['group_name']."</td>";

							 echo "<td>".$row['avail']."</td>";


						 echo "</tr>";

						 }
				 } else {
					 echo ("<h1>List empty!</h1>");
				 }
				 $conn->close();
			 ?>

		 </table>
		 <br />
		 <br />
		 <br />
		 <br />
		</div>

	</body>
</html>

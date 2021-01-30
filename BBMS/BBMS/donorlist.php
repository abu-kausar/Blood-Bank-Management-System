<?php require ("config.php"); ?>

<html>

    <head>
        <title>Blood Bank Management System</title>
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
           top:30%;
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

    </head>

    <body style="background-color:#01FF70;">
    <div class="main">
		

		<div class="maincontent">
			<br><br/>
			<table>
				<br><br><br>
				<caption><strong>Donor List</strong></caption>
				<th style="background-color: #01FF70">Name</th>
				<th style="background-color: #01FF70">Blood_Group</th>
				<th style="background-color: #01FF70">Gender</th>
				<th style="background-color: #01FF70">Phone</th>
				<th style="background-color: #01FF70">District</th>

				<?php

					$sql = "SELECT name, blood_group, gender, contact_no, living_district FROM donor";
					$result = $conn->query($sql);

					if ($result==true) {
						// output data of each row
						while($row = $result->fetch_assoc()) {

							echo "<tr>";

								echo "<td>".$row['name']."</td>";

								echo "<td>".$row['blood_group']."</td>";

								echo "<td>".$row['gender']."</td>";

								echo "<td>".$row['contact_no']."</td>";
								
								echo "<td>".$row['living_district']."</td>";

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

	</div>
    </body>

</html>


 <?php
   include 'config.php';
  ?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
	  <style>
	  body{
	background-image:url(images/image1.jpg);
            background-size:cover;
}
      p{
		  color:white;
	  }
	  caption {
		  color: white;
    text-align: center;
    margin-bottom: 5px;
    font-size: 200%;
    padding: 5px;
    letter-spacing: 10px;
    font-weight: bold;
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
    </head>
    <body>
      <form class="" action="requestUpdate.php" method="post">
	  <!--<p>Requester ID:</p>
	  <p>Task Completion:</p>-->
        <input type="number" name="up-id" value="" placeholder="insert id">
        <input type="text" name="up-comp" value="Yes/No">
        <input type="submit" name="" value="Update">
      </form>


      <div class="maincontent">
  			<br><br/>
  			<table>
  				<br><br><br>
  				<caption><strong>Request List</strong></caption>
         <th>Id</th>
  				<th>Name</th>
  				<th>Blood Group</th>
          <th>Amount</th>
  				<th>Contact</th>
  				<th>Address</th>
          <th>Date</th>
          <th>Task Completetion</th>

  				<?php

  					$sql = "SELECT * FROM request_for_blood";
  					$result = $conn->query($sql);

  					if ($result==true) {
  						// output data of each row
  						while($row = $result->fetch_assoc()) {

  							echo "<tr>";

                 echo "<td>".$row['id']."</td>";

  								echo "<td>".$row['name']."</td>";

  								echo "<td>".$row['blood_group']."</td>";

  								echo "<td>".$row['amount']."</td>";

  								echo "<td>".$row['contact']."</td>";

                  echo "<td>".$row['address']."</td>";

                  echo "<td>".$row['date']."</td>";

                  echo "<td>".$row['complete']."</td>";

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

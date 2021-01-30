<?php
  include 'config.php';
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Stock(admin)</title>
	 <style>
	 body{
		 background-image:url(images/image1.jpg);
		 background-size:cover;}
	 caption{
		 color: white;
		 text-align: center;
		 margin-bottom: 5px;
		 font-size: 200%;
		 padding: 5px;
		 letter-spacing: 10px;
		 font-weight: bold;}
	 	table{
			position:absolute;
			top:20%;
            left:25%; 
            border-collapse: collapse;
            width: 50%;}
     th, td {
		 border: 1px solid black;
		 padding: 8px;}
     tr:nth-child(even){
		 background-color: #dddddd;}
     tr:nth-child(odd){
		 background-color: #2ECC40;}
	 </style>
   </head>
   <body>
     <form class="" action="update.php" method="post">
       <input type="text" name="stock-update" value="Yes/No">
       <input type="number" name="stock-id" value="" placeholder="insert id">
       <input type="submit" name="" value="Update">
     </form>

     <div class="maincontent">
      <br><br/>
      <table>
        <br><br><br>
        <caption><strong>Stock</strong></caption>
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

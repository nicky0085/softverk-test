
<!DOCTYPE html>
<html>
<head>
	<title>5.SQL</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</head>
<body>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "customer";

	
	$conn = new mysqli($servername, $username, $password, $dbname);

	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	$sql =" SELECT  customer.customer_id,customer.name, SUM(sale_order_item.total_amout) AS summary  FROM sale_order_item 
			RIGHT JOIN sale_order  ON sale_order.order_id=sale_order_item.order_id 
			RIGHT JOIN customer  ON customer.customer_id=sale_order.customer_id
			GROUP BY customer.name
			ORDER BY summary DESC
			";
	$result = $conn->query($sql);


?> 


		<div class="container">
		  <h1>#5 Join table and summary value</h1>   

		  <table class="table table-bordered">      
		  <table class="table" align="center">
		    <thead>
		      <tr>
		        <th>customer_id</th>
		        <th>name</th>
		        <th>sum_total_amuont</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php
					if ($result->num_rows > 0) { 
						while($row = $result->fetch_assoc()) {
				?>
		      <tr>
		        <td><?php echo $row["customer_id"];?></td>
		        <td><?php echo $row["name"];?></td>
		        <td><?php echo $row["summary"];?></td>
		       
		        <td></td>
		      </tr>
		      <?php }} ?>
		    </tbody>
		  </table>

		  <?php  $conn->close(); ?>
		  </div>
		</div>

</body>
</html>

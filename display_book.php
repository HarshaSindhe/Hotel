<?php
include '2.php';



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style >
		table {

	margin-top: 100px;
	text-align: center;
}

th {

	font-size: 30px;

}
td{
	width: 250px;
}

h1{

	color: green;
	padding: -5px;
}
	</style>
</head>
<body>
<table border="5" cellspacing="0" cellpadding="5" align="center">
	<tr>



<?php 
			
$sql = "SELECT * FROM reservation";
$result = mysqli_query($conn,$sql);


					echo "<tr>"."<th colspan='5'>"."<h1>".' CUSTOMERS BOOKING DETAILS'."</h1>"."</th>"."</tr>";

						echo "<th>".'ROOM NUMBER'."</th>";
						echo "<th>".'CUSTOMER NAME'."</th>";
						echo "<th>".'CHECK IN'."</th>";
						echo "<th>".'CHECK OUT'."</th>";
						echo "<th>".'PHONE'."</th>";
						//echo "<th>".'BRANCH'."</th>";
						while ($row=mysqli_fetch_array($result)) 

						{
						  	
                               $res=$row['cust_id'];
                              
                            $sql2 = "SELECT * FROM customer where cust_id='$res'";
                             $result2 = mysqli_query($conn,$sql2);
                              $row1=mysqli_fetch_array($result2);
							


							echo "<tr>"."</tr>";
								

									echo "<td>".$row['room_no']."</td>";
									echo "<td>".$row1['first_name']." ".$row1['last_name']."</td>";
									echo "<td>".$row['check_in']."</td>";
									echo "<td>".$row['check_out']."</td>";
									echo "<td>".$row1['phone']."</td>";
									//echo "<td>".$r['branch']."</td>";
								

							echo "<tr>"."</tr>";
							

								

							

						
						}
			# code...
					

		 ?>

		 	
</table>

</body>
</html>
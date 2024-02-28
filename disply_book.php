<?php
include('2.php');
include('session1.php');


$sql = "SELECT * FROM reservation";
$result = mysqli_query($conn,$sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}




?>
<html>
<head>
	<title>RESERVED ROOM DETAILS </title>
	<link rel="stylesheet" type="text/css" href="new_home.css">
		
	<style type="text/css">
    
		body {
			font-size: 15px;
			color: #34aa44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			
			margin: 0;
		}
		
	

		table td {
			transition: all .5s;
			font-size: 30px;
		}

		table th {
			transition: all .5s;
			font-size: 40px;
		}
		
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
			margin-top: 100px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		
		

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:nth-child(even) td {
			background-color: #f1fffb;
		}
	
		
	</style>
</head>
<body >
	<div class="headerpart">
			<center>		
		    <a href="h2.php" >HOME</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="room_add.php">ADD ROOM</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="del_room.php">DELETE_ROOM</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
			<a href="add_emp.php">ADD ROOM_MANAGING EMP</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    <a href="del_emp.php">DELETE ROOM_MANAGING EMP</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    <a href="disply_book.php">BOOKINGS</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="logout.php">LOG OUT</a>
		</center>
			
		</div>
	
<center>
	<table class="data-table">
		<caption style="font-size: 40px;color: red">RESERVED ROOMS DETAILS </caption>
		<thead>
			<tr>
				<th>ROOM NO</th>
				<th>NAME</th>
				<th>CHECK IN</th>
				<th>CHECK OUT</th>
				<th>PHONE</th>
				
				
			</tr>
		</thead>
		<tbody>
		<?php

		while ($row5= mysqli_fetch_array($result))
		{
			
			    $res=$row5['cust_id'];
                               

                            $sql2 = "SELECT * FROM customer where cust_id='$res'";
                             $result2 = mysqli_query($conn,$sql2);
                              $row1=mysqli_fetch_array($result2);
							

			       echo '<tr>
					
					
					<td>'.$row5['room_no'].'</td>
					<td>'.$row1['first_name'].' '.$row1['last_name'].'</td>
					<td>'.$row5['check_in'].'</td>
					<td>'.$row5['check_out'].'</td>
					<td>'.$row1['phone'].'</td>
					
                      

                
 
				</tr>';
	
		}?>
		</tbody>
		
	</table>
	</center>


</body>
</html>
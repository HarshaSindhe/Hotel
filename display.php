<?php
include('2.php');
include('session.php');


$a=$_POST['check_in'];




$b=$_POST['check_out'];



$sql="SELECT r.*
FROM rooms r
WHERE NOT EXISTS
(
    SELECT 1 FROM reservation b
    WHERE b.room_no = r.room_no
    AND 
    (
         ('$a' >= b.check_in AND '$a'  <= b.check_out)
      OR ('$a' <= b.check_in AND '$b' >= b.check_in)
    )
)";


$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}




?>
<html>
<head>
	<title>Displaying Rooms</title>
		<link rel="stylesheet" type="text/css" href="new_home.css">
	<style type="text/css">
       .page{
	width: 100%;
	height:100%;
	border-style: groove;
   background-image: url(display.jpg);
}

		body {
			font-size: 15px;
			color: #34aa44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			
			margin: 0;
		}
		table {
			margin-left: 500px;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
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
			text-align: center
			;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:nth-child(even) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		
	</style>
</head>
<body >
	<div class="page">
		<div class="headerpart">

			<center>		
		    <a href="h1.php" >HOME</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="aboutus.php">ABOUT US</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="search.html">RESERVATION</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="cust_registration.php">NEW CUSTOMER</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    <a href="contactus.php">CONTACT US</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="logout.php">LOG OUT</a>
		</center>
			
		</div>

	<table class="data-table">
		<caption style="font-size: 40px;color: red">AVAILABLE ROOMS</caption>
		<thead>
			<tr>
				<th>ROOM NO</th>
				<th>TYPE</th>
				<th>NUMBER OF ADUTlS</th>
				<th>AMOUNT</th>
				
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
//		$no 	= 1;
//		$total 	= 0;
		while ($row5= mysqli_fetch_array($query))
		{
			$amount  = $row5['amount'] == 0 ? '' : number_format($row5['amount']);
			

			echo '<tr>
					
					<td>'.$row5['room_no'].'</td>
					<td>'.$row5['room_type'].'</td>
					<td>'.$row5['no_of_adults'].'</td>
					<td>'.$amount.'</td>
			    	
		
                      
                     <td><a href=reservation.php?room='.$row5['room_no'].'&check_in='.$_POST['check_in'].'&check_out='.$_POST['check_out'].'>BOOK</a></td>

              
                  
 
				</tr>';
	
		}?>
		</tbody>
		
	</table>
</div>
</body>
</html>
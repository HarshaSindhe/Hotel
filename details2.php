<?php
include('session.php');
include('2.php');
//session_start();
error_reporting(0);

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$var=$_POST['reservation_id'];
        $var1=$_POST['cust_id'];

    
//echo $var;
//echo $var1;
$sql = "SELECT * FROM customer where cust_id='$var1'";
$result1=mysqli_query($conn,$sql);

$num_1 = mysqli_num_rows($result1);
if ($num_1>0) {
	# code...
$row=mysqli_fetch_array($result1);

$sql_1 = "SELECT * FROM reservation where reservation_id='$var'";
$result_1=mysqli_query($conn,$sql_1);


$num_2 = mysqli_num_rows($result_1);
if ($num_2>0) {
	# code...

$row1=mysqli_fetch_array($result_1);
$sql_2 = "SELECT * FROM payment where reservation_id='$var'";
$result_2=mysqli_query($conn,$sql_2);
$row2=mysqli_fetch_array($result_2);
}
else{
	echo"enter correct reservation id and customer id";
	header("location:view_detail.html");
	
}
		
//$query = mysqli_query($conn, $sql_1);


//if (!$query) {
//}
//else{
//	$row = mysqli_fetch_array($query);
}
else{
	echo"enter correct customer id and reservation id";
	header("location:view_detail.html");
}
}
?>









<html>
<head>
	<title>details</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin-left: 100px;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 40px;
			color:red;
		}
		input[type=submit]
{
	width: 130PX;
	box-sizing: border-box;
	padding: 10px 0;
	margin-top: 10px;
	outline: none;
	background: #60adde;
	opacity: 0.7;
	border-radius: 10px;
	font-size: 20px;
	color: #fff;
}

		table td {
			transition: all .5s;
			font-size: 30px;
		}
		table th{
			font-size: 30px;
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
		.data-table caption {
			margin: 7px;
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
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
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
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		a{
             font-size: 30px;
             text-decoration: none;
		}
		

		@media print{
			.pb{
				display:none;
			}
		}
	</style>
</head>
<body>
	<form action="#" method="GET">

	<table class="data-table">
		<caption style="font-size: 40px;color: red">BOOKING DETAILS</caption>
		
		<tbody>
		<tr>
			<th>RESERVATION ID:</th>
			<td><?php echo $row1['cust_id']; ?></td>
		</tr>

		<tr>
			<th>FIRST NAME:</th>
			<td><?php echo $row['first_name']; ?></td>
		</tr>
		<tr>
			<th>LAST NAME:</th>
			<td><?php echo $row['last_name']; ?></td>
		</tr>

		<tr>
			<th>ROOM NO:</th>
			<td><?php echo $row1['room_no']; ?></td>
		</tr>



        <tr>
			<th>CHECK_IN:</th>
			<td><?php echo $row1['check_in']; ?></td>
		</tr>


        <tr>
			<th>CHECK_OUT:</th>
			<td><?php echo $row1['check_out']; ?></td>
		</tr>

		<tr>
			<th>ROOM TYPE:</th>
			<td><?php echo $row1['status']; ?></td>
		</tr>

		<tr>
			<th>NO_ADULTS:</th>
			<td><?php echo $row1['no_adults']; ?></td>
		</tr>

		<tr>
			<th>RESERVATION DATE:</th>
			<td><?php echo $row1['reserv_date']; ?></td>
		</tr>


        <tr>
			<th>Amount:</th>
			<td><?php echo $row2['amount']; ?></td>
		</tr>

        <tr>
        	<td><input type="submit" value="PRINT" name="submit" class="pb" onclick="window.print()"></td>
            <td><a href="h1.php">BACK</a></td>
        </tr>
        </tr>

        


		</tbody>
		
	</table>
</form>


		
</body>
</html>
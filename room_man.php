<?php
include('session.php');
include('2.php');
//session_start();
error_reporting(0);

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$var=$_POST['room_no'];
        
//echo $var;
//echo $var1;
$sql = "SELECT * FROM maintained_by where room_no='$var'";
$result1=mysqli_query($conn,$sql);
 $num1 = mysqli_num_rows($result1);

if ($num1>0) {
	# code...

      $row=mysqli_fetch_array($result1);
  }
  else{
  	
  	header("location:r_man.html");
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

		
	</style>
</head>
<body>
	<form >

	<table class="data-table">
		<caption style="font-size: 40px;color: red">EMPLOYEE DETAILS</caption>
		<tbody>
		<tr>
			<th>ROOM NUMBER:</th>
			<td><?php echo $row['room_no']; ?></td>
		</tr>

		<tr>
			<th>EMPLOYEE ID:</th>
			<td><?php echo $row['emp_id']; ?></td>
		</tr>
		<tr>
			<th>EMPLOYEE NAME:</th>
			<td><?php echo $row['emp_name']; ?></td>
		</tr>
		<tr>
			<th>PHONE:</th>
			<td><?php echo $row['phone']; ?></td>
		</tr>
		<tr>
		 <th><a href="h1.php">BACK</a></th>
		</tr>


		</tbody>
		
	</table>
</form>	
</body>
</html>
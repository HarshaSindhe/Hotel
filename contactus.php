<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>
	<link rel="stylesheet" type="text/css" href="new_home.css">
	

	<style>

		h1{
			color: red;
			font-size: 30px;
			font-family: fantasy;
			text-align: center;
		}
		.box{
			width: 800px;
			height: 450px;
			border-style: groove;
			position: absolute;
			margin-top: 100px;
			margin-left: 400px;
			background-color: white;
			border-radius: 30px;
			border-style:double;

		}

		b{
			color: green;
			font-size: 20px;
		}
		body{
			background-image: url(c3.jpg);
			background-repeat: no-repeat;
			background-size:cover;
		}
		i{
			color: blue;
		}
		.marquee{
			color: red;
			font-size: 20px;
		scroll-behavior: alternate;

		}

</style>
</head>
<body>
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
	</div>

	   <center>
	    <div class="box">
			<h1>---------------------CONTACT US----------------------</h1>
			<marquee class="marquee">Dream Hotel.com</marquee>
		<table>
			<tr>
			<td>
				<p><b>Name:</b>Shiva M N</p>
				<p><b>Phone:</b>8550637542</p>
				<p><b>Email:</b><i>mnshiva@gmail.com</i></p>
				
			</td>
			<td style="padding-left: 150px">

				<p><b>Name:</b>Seema</p>
				<p><b>Phone:</b>9902135432</p>
				<p><b>Email:</b><i>seema@gmail.com</i></p>
				
			</td>
		</tr>
		<tr >
			<td style="padding-top: 50px">
				<p><b>Name:</b>Sharat</p>
				<p><b>Phone:</b>8802135432</p>
				<p><b>Email:</b><i>sharat@gmail.com</i></p>
				
				
			</td>
			<td style="padding-left: 150px;padding-top: 50px"">

				<p><b>Name:</b>Sindhu</p>
				<p><b>Phone:</b>7205035432</p>
				<p><b>Email:</b><i>sindhu@gmail.com</i</p>
				
			</td>
		
		</tr>
		</table>
    </div>
</center>
</body>
</html>
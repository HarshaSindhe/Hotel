<?php
include('session.php');
//error_reporting(0);
   include('2.php');
  



    if($_SERVER["REQUEST_METHOD"] == "POST")
{   
	$sql_1 = "SELECT * FROM customer WHERE cust_id='".$_POST["cust_id"]."'";
	$result_1=mysqli_query($conn,$sql_1);
	 $num_1 = mysqli_num_rows($result_1);
	 if($num_1==0)
   {  
	//$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
          $insert="INSERT INTO customer(cust_id,first_name,last_name,phone,city,state,pincode)values('".$_POST["cust_id"]."','".$_POST["Fname"]."','".$_POST["Lname"]."','".$_POST["phone"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["pincode"]."')";
           mysqli_query($conn,$insert);
           echo"added successfully";
           header("location:h1.php");
           mysqli_close($conn);
         }
    

    else{
    	echo"customer alreaday exists with the entered customer id";
    }
       

      
}


?>

<html>
<head>
	<title> cust_resistration</title>
	
	<link rel="stylesheet" type="text/css" href="new_home.css">
	<style >
		*{
	margin: 0;
	padding: 0;

}

body{
	background-image: url(cust.jpg);
	background-attachment: fixed;

	background-repeat: no-repeat;
	background-size: 100% 100%;
	}

	h1{
		color: blue;
		text-align: center;
		font-style: italic;
	}


	label{
		margin-left: 0px;
		color: groove;
		font-size: 40px;
		font-style: bold;

	}

	.reg{
		width: 600px;
		height:800px;
		margin: auto;
		background-color: rgba(4,0,0.4,0,4);
		margin-top: 50px;
	}

    #reg{
    	width:400px;
    	margin: auto;
    }
	#name{
		width: 350px;
		height:50px;
		outline: 0;
		padding: 5px;
		border: 5px groove;
		text-decoration: bold;
	}

	



	</style>
</head>

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

	<h1><b> REGISTER HERE</b></h1>
	<div class="reg">
		
		<form id="reg" method="post" action="">
			<label>Customer Id:</label></br>
			<input type="number" name="cust_id" minlength="5" placeholder="Set Id" id="name" required=""><br><br>
			
			<label>First Name:</label></br>
            <input type="text" name="Fname" placeholder="First Name" id="name" required=""><br><br>
			<label>Last Name:</label></br>
		    <input type="text" name="Lname" placeholder="Last Name" id="name" required=""><br><br>
			
			<label>Phone:</label></br>
			<input type="number" name="phone" minlength="10" placeholder="phone number" id="name" required=""><br><br>
			<label>City:</label></br>
			<input type="text" name="city" placeholder="city" id="name" required=""><br><br>
			<label>State:</label></br>
			<input type="text" name="state" placeholder="state" id="name" required=""><br><br>
			<label>Pincode:</label></br>
			<input type="number" name="pincode" minlength="6" placeholder="pincode" id="name" required=""><br><br>
			
			<button  type="submit" id="sub" style="width: 100px;height:40">Register</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<form action="HOME.HTML">
		    
		    
		    <form action="new_home.html" id="sub">
		    	<button  type="submit" id="sub" style="width: 100px;height:40;">Cancel</button>
		

		
		</form>
	</div>
</body>
</html>


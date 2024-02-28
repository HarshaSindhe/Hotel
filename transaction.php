<?php
include('session.php');
//session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST")
{   
	$sql_1 = "SELECT * FROM reservation WHERE reservation_id='".$_POST["reservation_id"]."'";
	$result_1=mysqli_query($conn,$sql_1);
	 $num_1 = mysqli_num_rows($result_1);
	 $amount=$_GET['amt'];

	 

if($num_1>0)
   {  
	//$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
          $insert="INSERT INTO payment(reservation_id,transaction_id,mode_of_payment,amount,date_of_payment,booked_agent)values('".$_POST["reservation_id"]."','".$_POST["trans_id"]."','".$_POST["mode_of_payment"]."','".$_POST["amount"]."','".$_POST["pay_date"]."','".$_POST["agent"]."')";
           mysqli_query($conn,$insert);
           echo"added successfully";
           $row = mysqli_fetch_array($result_1);
          $a=$row['reservation_id'];
          $b=$row['cust_id'];
           //$_SESSION['roomno']=$a;

         header( "Location:details.php?user=$a && user1=$b");
         //  mysqli_close($conn);
    
    }
    

    else{
    	echo"Enter the correct reservation id";
    }
       

      
}
?>

<html>
<head>
	<title>Transaction Form</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
		<link rel="stylesheet" type="text/css" href="new_home.css">
		<style >
			select{
				width: 250px;
				height:60px;
			}
			option{
				font-size: 25px;
			}
			body{
	margin: 0;
	padding: 0;
	background-image:url(H2.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	background-attachment: fixed;
}

.transbox{
	position: absolute;
	margin-top: 80px;
	top: 65%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 500px;
	height: 950px;
	padding: 5px;
	box-sizing: border-box;
	background: rgba(0,0,0,0.5);
	
}

h1{
	color: white;
	text-align: center;
	font-style: italic;
	
}

label{
	color:white;
	text-align: center;
	font-size: 30px;
}

input{
	width: 400px;
	height: 70px;
	border-radius: 10px 0 10px 0;
	border: 2px solid #fff;
	margin-bottom: 10px;
	background-color: transparent;
	color: #fff;
}

input[type=submit]
{
	width: 60%;
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

	<h1> TRANSACTION</h1>
	<div class="transbox">
		<form action="" method="POST">
			<label> Reservation_No:</label><br>
			<input type="number" name="reservation_id"
			placeholder="reservation_No"  required=""><br><br>
			<label> Trans_ID </label><br>
			<input type="number" name="trans_id" minlength="5"
			placeholder="ID" ><br><br>
			<label> Mode Of Payment </label><br>
			
<select name="mode_of_payment">
	<option selected disabled >-----//-----</option>
  <option value="Debit" n>Debit Card</option>
  <option value="Credit">Credit card</option>
  <option value="Net">Net banking</option>
  <option value="BHIM">BHIM UPI</option>
</select>	<br>	<br><br>	
            <label> Amount </label><br>
			<input type="number" name="amount" value="<?php echo $amount;?>"
			placeholder="Amount" ><br><br>
			<label> Date Of Payment </label><br>
			<input type="date" name="pay_date"
			placeholder="Payment" ><br><br>
			<label> Book_Agent </label><br>
			<input type="text" name="agent"
			placeholder="Book" ><br><br>
			<input type="submit" name=""value="Confirm">&nbsp&nbsp&nbsp
			<a href="reservation Form.html">Back</a>
			</form>
	</div>

	
</body>
</html>
			
	
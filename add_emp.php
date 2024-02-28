<?php
error_reporting(0);
   include('2.php');
   session_start();
   if(!isset($_SESSION['login_user1'])){
      header("location:admin.php");
      
   }

   if($_SERVER["REQUEST_METHOD"] == "POST")
{   
	$sql_1 = "SELECT room_type FROM rooms WHERE room_no='".$_POST["room_no"]."'";
	$result_1=mysqli_query($conn,$sql_1);
	 $num_1 = mysqli_num_rows($result_1);
	 if($num_1>0)
   {  
	//$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
	$sql = "SELECT emp_id FROM maintained_by WHERE room_no='".$_POST["room_no"]."'";
	$result=mysqli_query($conn,$sql);
	 $num = mysqli_num_rows($result);
      if($num>0)
      {
    
      echo"employee already exist";
     

 
      }
     else{

	    
         
          $insert="INSERT INTO maintained_by(room_no,emp_id,emp_name,phone)values('".$_POST["room_no"]."','".$_POST["emp_id"]."','".$_POST["emp_name"]."','".$_POST["phone"]."')";
           mysqli_query($conn,$insert);
         echo'<script> alert(added successfully)</script>';
           //header("location:add_emp.php");
           mysqli_close($conn);
         }
    }

    else{
    	echo"<script> alert('employee already exist')</script>";
    }
       

      
}

?>

<html>
<head>
	<title>add employee</title>
	
		<link rel="stylesheet" type="text/css" href="new_home.css">
		<style >
		body{

	margin: 0;
	padding: 0;
	background-image:url(b3.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
h1
{
	color: rgb(255,165,0);
	text-align: center;
	font-style: italic;

}

.reservation
{    
	margin-top: 140px;
	position: absolute;
	top: 30%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 500px;
	height: 600px;
	padding: 5px;
	box-sizing: border-box;
	background: rgba(0,0,0,0.5);
	border-radius: 30px;
}


label
{
	color:white;
	text-align: center;
	font-size: italic;
	font-size: 30px;
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

header{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) url(../H1.jpg);
	height: 100vh;
	background-size: cover;
	background-position: centre;
}

#check{
	font-family: serif;
	font-size: 18px;
	color: white;
}

#status{
	width:300px;
	height: 40px;
}



</style>

</head>
<body>
	<div class="page">
		<div class="headerpart">
			<center>		
		    <a href="h2.php" >HOME</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="room_add.php">ADD ROOM</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="del_room.php">DELETE_ROOM</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
			<a href="add_emp.php">ADD ROOM_MANAGING EMP</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    <a href="del_emp.php">DELETE ROOM_MANAGING EMP</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    <a href="disply_book.php">BOOKINGS</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="admin.php">LOG OUT</a>
		</center>
			
		</div>
	</div>

	<div class="Reservation">

	<h1> ADD ROOM MANAGING EMPLOYEE</h1>
		<form action="" method="POST">
			<label> Room_No:</label><br>
			<input type="text" name="room_no"
			placeholder="Room_No" id="status" required=""><br><br>
			<label> Employee ID:</label><br>
			<input type="text" name="emp_id"
			placeholder="Room number" id="status" required=""><br><br>
			<label> Employee Name:</label><br>
			<input type="text" name="emp_name"
			placeholder="Customer_id" id="status" required=""><br><br>
			<label> Phone:</label><br>
			<input type="number" name="phone"
			placeholder="Customer_id" id="status" minlength="10" required=""><br><br>
		
			<input type="submit" value="ADD" name="submit"required="">

		</form>
	</div>

	
</body>
</html>

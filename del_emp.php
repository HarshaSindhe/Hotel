<?php
include('session1.php');

  if($_SERVER["REQUEST_METHOD"] == "POST")
{   
	$sql_1 = "SELECT * FROM maintained_by WHERE room_no='".$_POST["room_no"]."'";
	$result_1=mysqli_query($conn,$sql_1);
	 $num_1 = mysqli_num_rows($result_1);
	 if($num_1>0)
   {  
	//$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
          $delete="DELETE FROM maintained_by where room_no='".$_POST["room_no"]."'";
           mysqli_query($conn,$delete);
           echo"deleted successfully";
           //header("location:add_emp.php");
           mysqli_close($conn);
         }
    

    else{
    	echo"room not exists";
    }
       

      
}
?>


<html>
<head>
	<title>room manage</title>
	<link rel="stylesheet" type="text/css" href="new_home.css">
	<style >
		#name{
		width: 350px;
		outline: 0;
		padding: 10px;
		border: 5px groove;
		text-decoration: bold;
		margin-top: 100px;
	}
	#submit{
		width: 80px;
		height: 40px;
		color: red;
		margin-top: 50px;
		
	}
	#submit:hover{
		color:blue;
		background-color: yellow;
	}
	body{
		background-image: url(b4.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		
	}
	
	</style>
</head>
<body >
	<center>
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
		<form action="" method="POST">
		<label style="font-size: 30px" >Room Number:</label>
	   <input type="text" name="room_no" placeholder="enter room number" id="name" required="" ><br><br>
	<input type="submit" value="DELETE" id="submit">&nbsp&nbsp&nbsp&nbsp&nbsp		
	
	</form>
	</center>

</body>
</html>
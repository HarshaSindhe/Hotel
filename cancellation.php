<?php
include('session.php');
//error_reporting(0);
   include('2.php');
  



if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $var=$_POST['reservation_id'];
  $var1=$_POST['cust_id'];

    
//echo $var;
//echo $var1;
$sql = "SELECT * FROM customer where cust_id='$var1'";
$result1=mysqli_query($conn,$sql);

$num_1 = mysqli_num_rows($result1);
if ($num_1>0)
 {
	# code...
           $sql_1 = "SELECT * FROM reservation where reservation_id='$var'";
           $result_1=mysqli_query($conn,$sql_1);

              
           $num_2 = mysqli_num_rows($result_1);
     if ($num_2>0) {
	# code...

            $sql_2 = "DELETE FROM reservation where reservation_id='$var'";
            $result_2=mysqli_query($conn,$sql_2);
             $sql_3 = "DELETE FROM customer where cust_id='$var1'";
            $result_3=mysqli_query($conn,$sql_3);
            echo "CANCELLED SUCCESSFULLY";
       }
     else{
	      echo"enter correct reservation id and customer id";
	
	
        }
		

   }
else{
	echo"enter correct customer id and reservation id";
	
}
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>cancellation</title>
	<style >
		#name{
		width: 350px;
		outline: 0;
		padding: 5px;
		border: 5px groove;
		text-decoration: bold;
	}
	input{
		height:45px;
		width:140px;
	}
	#submit{
		width: 80px;
		height: 40px;
		color: red;
		
	}
	#submit:hover{
		background-color: blue;

	}

	</style>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/CC82D196-2B8D-A842-A2DE-D80AAE6FE106/main.js" charset="UTF-8"></script></head>
<body bgcolor="#dddfc1">
	<center><form action="" method="POST">
		<label style="font-size: 30px" >Reservation ID:</label>
	   <input type="text" name="reservation_id" placeholder="enter reservation id" id="name" required="" ><br><br>
	   <label style="font-size: 30px" >Cust ID:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		
	   <input type="text" name="cust_id" placeholder="enter customer id" id="name"  required=""><br><br><br>
		<input type="submit" value="CANCEL" id="submit">&nbsp&nbsp&nbsp&nbsp&nbsp		
		<a href="h1.php">Back</a>
	</form>
	</center>
	

</body>
</html>
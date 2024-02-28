<?php
include('session.php');

# hiiii

    if($_SERVER["REQUEST_METHOD"] == "POST")
  {   
	$sql_1 = "SELECT * FROM customer WHERE cust_id='".$_POST["cust_id"]."'";
	$result_1=mysqli_query($conn,$sql_1);
	 $num_1 = mysqli_num_rows($result_1);
	 
  if($num_1>0)
   {  
	//$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
	//$room_no=$_POST["room_no"];

	
	
	//$sql = "SELECT * FROM rooms where room_no=$room_no";
	//$result=mysqli_query($conn,$sql);
	 //$num = mysqli_num_rows($result);
	 //if($num>0)
	  //{
            $sql_2 = "SELECT * FROM reservation WHERE reservation_id='".$_POST["reservation_id"]."'";
         	$result_2=mysqli_query($conn,$sql_2);
	       $num_2 = mysqli_num_rows($result_2);
	       


         if ($num_2==0) {
         	# code...
         

             $insert="INSERT INTO reservation(reservation_id,cust_id,check_in,check_out,status,no_adults,reserv_date,room_no)values('".$_POST["reservation_id"]."','".$_POST["cust_id"]."','".$_POST["check_in"]."','".$_POST["check_out"]."','".$_POST["status"]."','".$_POST["no_adults"]."','".$_POST["reserv_date"]."','".$_POST["room_no"]."')";
                
                   $s=$_POST["room_no"];
      
               mysqli_query($conn,$insert);
           

            
          
           echo"added successfully";
           header("location:transaction.php");
         mysqli_close($conn);
         }


         else{
         	echo"<script>alert('enterd reservation id is already used.....enter another id')</script>";
         }
     }
     //else{
       //  	echo"<script>alert('enter the available room')</script>";
        // }
    // }
    

    else{
    	echo"<script>alert('invalid customer id?? register first')</script>";
    }
       

      
}
?>

<html>
<head>
	<title>Reservation Form</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" type="text/css" href="new_home.css">
		<style >
			body{

	margin: 0;
	padding: 0;
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(in_hotel.jpg);
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
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 600px;
	height: 950px;
	padding: 5px;
	box-sizing: border-box;
	background: rgba(0,0,0,0.5);
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

		b{
			color: tomato;
			font-size: 30px;
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



<?php
include('2.php');
$var=$_GET['room'];
$check_in=$_GET['check_in'];
	$check_out=$_GET['check_out'];

$sql = "SELECT * FROM rooms where room_no='$var'";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
       }


//while ($row = mysqli_fetch_array($query))
       else
		{
			$row6 = mysqli_fetch_array($query);
			$amount=$row6['amount'];
			
		}

?>
		



	<div class="Reservation">

	<h1 style="font-size: 40px"> Reservation Form</h1>
		<form action="" method="POST">
			<label> Reservation_No:</label><br>
			<input type="number " minlength="5" name="reservation_id" 
			placeholder="reservation_No" id="status" required="" ><br><br>
			<label> Customer_id:</label><br>
			<input type="number" name="cust_id" minlength="5"
			placeholder="cust_id" id="status" required=""><br><br>
			
			
			<label> Check_In:</label><br>
			<input type="date" name="check_in"
			placeholder="check_I n"  readonly="readonly" id="status" required="" value="<?php echo $check_in;?>"><br><br>


			<label> Check_Out:</label><br>
			<input type="date" name="check_out" readonly="readonly"
			placeholder="check_Out" id="status" required="" value="<?php echo $check_out;?>"><br><br>


			<label> Status:</label><br>
			<input type="text" name="status" readonly="readonly"
			placeholder="status" id="Status" required="" value="<?php echo $row6['room_type'];?>"><br><br>


			<label> Room NO:</label><br>
			<input type="number" name="room_no" readonly="readonly"
			placeholder="room_no" id="status" required="" value="<?php echo $row6['room_no'];?>"><br><br>

			
			<label> No_Of_Adults:</label><br>
			<input type ="number" name="no_adults" readonly="readonly"
			placeholder="Guests" id="status" required="" value="<?php echo $row6['no_of_adults'];?>"><br><br>


			<label>Reservation Date:</label><br>
			<input type ="date" name="reserv_date"
			placeholder="reservation date" id="status" required=""><br><br>


			
			<input type="checkbox" id="check"><span
			id="check">I agree all the terms and conditions</span><br><br>
			<input type="submit" value="Make payment" required="" >

		</form>
	</div>
</div>

	
</body>
</html>

<?php 
include("2.php");
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST")
{   

	//$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
	$sql = "SELECT id FROM LOGIN WHERE password='".$_POST["password"]."'";
	$result=mysqli_query($conn,$sql);
	 $num = mysqli_num_rows($result);
   if($num>0)
   {
    
      echo"user already exist";
     

 
   }
   else{

	    if($_POST["password"]==$_POST["con_password"])
         {
          $insert="INSERT INTO login(username,password)values('".$_POST["username"]."','".$_POST["password"]."')";
           mysqli_query($conn,$insert);
           echo"inserted successfully";
           header("location:h1.php");
           mysqli_close($conn);
         }
        else
         {
	      echo"recheck the entered password and confirmed paassword";
         }

      }
}

?>



<html>
<head>
	<title>new user</title>
	<link rel="stylesheet" type="text/css" href="new_user.css">
</head>
<div class="blur"> </div>
	<div class="title"><h1>New User</h1></div>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			
			<form action="" method="POST">
				<label >User Name</label><br>
				<input type="text" name="username" placeholder="enter username" id="name" required="" ><br><br>
			    <label >Phone</label><br>
				<input type="teli" name="phone" placeholder="enter Phone number" id="name" required=""><br><br>
				<label>Password</label><br>
				<input type="password" name="password" placeholder="enter password" id="name" required=""><br><br>
				<label>Confirm Password</label><br>
				<input type="password" name="con_password" placeholder="confirm password" id="name" required=""><br><br>
				<input type="submit" value="Create" id="submit">&nbsp&nbsp&nbsp&nbsp&nbsp
					
                <a href="login1.php">CANCEL</a>
					
			</form>
	

	</div>
</div>
</body>
</html>
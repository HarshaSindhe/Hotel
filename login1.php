<?php
   include("2.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM LOGIN WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);


      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['username'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count>0) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: h1.php");
      }
      else {
         echo"enter valid username and password";
      }
   }
?>



<html>
<head>
<title>transparent login form</title>
     <style >
        body{
   margin: 0;
   padding: 0;
   background-image: url(l1.jpg);
   background-size: cover;
   background-position: center;
   font-family: sans-serif;
}

.loginbox{
   position: absolute;
   top: 50%;
   left: 20%;
   transform: translate(-50%, -50%);
   width: 450px;
   height: 600px;
   padding: 90px ,40px
   box-sizing: border-box;
   background: rgba(0,0,0,0.5);
   border-radius: 10PX;

}

h2
{
   margin: 30px;
   padding:0 0 20px;
   color: #FFFF00;
   text-align:center;
}

.loginbox p
{
   padding:10px;
   margin:0;
   font-weight:bold;
   color: #fff;
   font-size: 25px;
}

.loginBox input
{
   width:100%;
   margin-bottom: 20px;
}

.loginBox input[type="text"], .loginBox input[type="password"]
{
   border: none;
   border-bottom: 1px solid #fff;
   background: transparent;
   outline:none;
   height: 40px;
   color:#fff;
   font-size: 16px;
}

.loginBox input[type="submit"]
{
   border:none;
   outline: none;
   height: 40px;
   color:#fff;
   font-size:16px;
   background: rgb(255,38,126);
   cursor:pointer;
   border-radius: 20px;
}

.loginBox input[type="submit"]:hover
{
   background: #efed40;
   color: #262626;
}

.loginBox a
{
   color: #fff;
   font-size: 25px;
   font-weight: bold;
   text-decoration: none;
}

.loginBox a:hover
{
   color: red;
   font-size: 25px;
   font-weight: bold;
}

:: placeholder
{
   color:rgba(255,255,255,0.5);
}

header{
   background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) url(../H1.jpg);
   height: 100vh;
   background-size: cover;
   background-position: centre;
}


     </style>
   
   

 </head>    
<body >
	<div class="loginbox">

	  	<h2>LOGIN</h2>
	  
	  <form action="" method="POST">
	    <p>User Name</p>
	    <input type="text" name="username" placeholder="Enter User " required="">
	    <p>Password</p>
       
	    <input type="password" name = "password" placeholder="Enter Password" required="">
	    <input type="submit"  name="submit" value="sign In">
	    <center>
	    	
	    <a href="new_user.php"> New User?</a>	<br>
       <pre>
       <a href="admin.php">ADMIN LOGIN? CLICK HERE
       </a>
    </pre>
</center>


</body>

</html>
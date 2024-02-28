<?php
include('session1.php');
?>

<html>
<head>
<title>
Home page </title>
<style>
.page{
	width: 100%;
	height:auto;
	border-style: groove;
    background-color: #dcdfc1;
}

.headerpart
{
	width:100%;
	height: 42px;
	background-color: red;
	padding-top: 15px;
	
}

.headerpart a{
	text-align: middle;
	bottom:10px;
	text-align: justify;
	text-decoration: blink;
	margin-bottom: px;
}
.headerpart a:hover{
	background-color: white;

}
.headerpart a:active{
	background-color: blue;
}
 .leftpart
{
	
	width:100%;
	height: auto%;
	border-style: groove;


     

     background-repeat: no-repeat;
	background-color: white;
    
	


}
</style>
<link rel="stylesheet" type="text/css" href="new_home.css">
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
			<a href="logout.php">LOG OUT</a>
		</center>
			
		</div>
<div class="leftpart">
<img src="s1.png" width="100%" height="100%">
<img src="s2.png" width="100%" height="100%">
<img src="s3.png" width="100%" height="100%">
<img src="s4.png" width="100%" height="100%">

  </div>

           	
		</div>
</body>
</html>
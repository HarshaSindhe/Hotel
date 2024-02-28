<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<title>ABOUTUS</title>
<link rel="stylesheet" type="text/css" href="new_home.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey"><div class="headerpart">
      <center>    
        <a href="h1.php" >HOME</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="aboutus.php">ABOUT US</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="search.html">RESERVATION</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="cust_registration.php">NEW CUSTOMER</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="contactus.php">CONTACT US</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="logout.php">LOG OUT</a>
    </center>
      
    </div>
 

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">

</div>
  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3>About</h3>
      <h6>Our hotel is one of a kind. It is truely amazing. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="hotel2.jfif" class="w3-image w3-greyscale" style="width:1000px;height:500px;">
    </div>
  </div>
  
  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i>vidyanagara, Davangere</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +00 151515</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: hotelbooking@gmail.com</div>
  </div>

  <div class="w3-panel w3-red w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer playstation, babycall, children care, dog equipment, etc.</h6>
  </div>

 


  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> vidyanagara, Davangere<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email:hotelbooking@gmail.com<br>
    <form action="#" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>


</div>



</body>
</html>

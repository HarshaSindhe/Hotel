<?php
   include('2.php');
   session_start();
   if(!isset($_SESSION['login_user1'])){
      header("location:login1.php");
      
   }
?>
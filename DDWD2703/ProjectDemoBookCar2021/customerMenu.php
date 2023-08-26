<!DOCTYPE html>
<style>
	body{
		 background-color:#e6fff2;
	}
</style>
<html>

<?php
//customerMenu.php

session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	header ("Location: login/LoginForm.php");
}
 include "customer/customer.php";
 $userName = $_SESSION['username'];
 $curTime = $_SESSION['curTime'];
 $customerInfoRow = getCustomerInformation($userName);
 echo '<h1><center>Welcome to Mat Car Rental</center></h1>';
 echo "<h4><center>User:".$userName."</center></h4>";
 echo "<h5><center>Welcome back  </h5></center><h4><center>".$customerInfoRow['Cust_name'].'</center></h4>';
 $strTime = date("H:i A",$curTime) ;
 echo "<hr><h4><center>Log in time:".$strTime."</center></h4>";
 
 
 //display the menu
 echo "<hr><h4><center>What would you like to do?</center></h4>";
 echo '<center><a href="booking\bookCarForm.php">Book a car</a>';
 echo '<br>';
 echo '<a href="booking\bookingListForm.php">View My Booking History</a>';
 echo '<br><a href="login\logout.php">Log out</a></center>';
  ?>
 
 </html>
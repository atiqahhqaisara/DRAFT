<!DOCTYPE html>

<html>

<?php
//staffMenu.php

session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	header ("Location: login/LoginForm.php");
}
 $userName = $_SESSION['username'];
 $curTime = $_SESSION['curTime'];
 echo '<h1><center>Welcome to Mat Car Rental</center></h1>';
 echo "<h4><center>Nama Pengguna:".$userName."</center></h4>";
 $strTime = date("H:i A",$curTime) ;
 echo "<h4><center>Masa Masuk:".$strTime."</center></h4>";
 
 echo '<div style="text-align:center";> ';
 //display the menu
 echo '<h3>This is menu for staff:</h3>';
 echo '<a href="customer\customerList.php">Customer List</a>';
 echo '<br>';
 echo '<a href="car\carList.php">Car List</a>';
 echo '</div>';
  ?>
 
 </html>
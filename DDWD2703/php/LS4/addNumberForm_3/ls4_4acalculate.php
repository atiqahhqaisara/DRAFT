<?php
//read no1 and no2 from textbox
$no1 = $_GET['width'];
$no2 = $_GET['length'];
//add total 
$result=$no1*$no2;
//display total 
echo 'Total size of the rectangle is: ', $result;
?>
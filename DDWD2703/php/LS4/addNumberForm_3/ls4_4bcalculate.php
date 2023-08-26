<?php
//read no1 and no2 from textbox
$no1 = $_GET['price'];
$no2 = $_GET['tax'];

//add total 
$result=$no1*($no2/100);
$balance = $no1 - $result;

//display total 
echo 'Total tax is: RM', $result;
echo '<br>';
echo 'Total balance is : RM',$balance;
?>
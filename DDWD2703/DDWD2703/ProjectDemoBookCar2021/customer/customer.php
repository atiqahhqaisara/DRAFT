<?php

function getCustomerInformation($Cust_no)
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from customers where Cust_no = '".$Cust_no."'";
$qry = mysqli_query($con,$sql);//run query
if(mysqli_num_rows($qry) == 1)
	{
	$row=mysqli_fetch_assoc($qry);
	return $row;
	}
else
	return false;
}

?>
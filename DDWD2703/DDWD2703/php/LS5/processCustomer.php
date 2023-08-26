<?php 
//processCustomer.php
include "customer.php";
if(isSet($_POST['register']))
{
	addNewCustomer();
	header('Location:customerList.php');
	
	}
	else
	{
		if(isSet($_POST['delete']))
		{
			deleteCustomer();
			header('Location:customerList.php');
		}
}

?>
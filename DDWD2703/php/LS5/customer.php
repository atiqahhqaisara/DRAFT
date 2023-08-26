<?php
//customer.php

function addNewCustomer()
{
	print_r($_POST);
	$con = mysqli_connect("localhost","web402023","web402023","cardb40");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
	}
	else
	{
		echo 'Connected';

		$name = $_POST['name'];
		$email = $_POST['email'];
		$contactNumber = $_POST['contactNumber'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "insert into customer(name,email,contactNumber,username,password)
		values('$name','$email','$contactNumber','$username','$password')";

		echo $sql;

		mysqli_query($con,$sql);
	}
}

function getListOfCustomer()
{
	$con = mysqli_connect("localhost","web402023","web402023","cardb40");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error($con);
	}
	
	else 
	{
		$sql="select * from customer order by username";
		$customerQry = mysqli_query($con,$sql);
		return $customerQry;
	}
}

function deleteCustomer()
{
	echo 'To delete car: '.$_POST['regNumberToDelete'];
	$con = mysqli_connect("localhost","web402023","web402023", "cardb40");
	if(!$con){
		echo 'Error:'.mysqli_connect_error($con);
	}
	else
	{

	
	$sql="delete from customer where username='".$_POST['usernameToDelete']."'";
	mysqli_query($con,$sql);
	}
}



?>
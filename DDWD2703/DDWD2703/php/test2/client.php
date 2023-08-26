<?php
//client 


function addClient()
{
	print_r($_POST);
	//1. create connection_aborted
	$con = msqli_connect("localhost","web402023","web402023","cardb");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
		exit;
	}
	echo 'connected';
	$email =$_POST['email'];
	$password =$_POST['password'];
	$phone =$_POST['phone'];
	$dob =$_POST['dob'];
	$sql = "insert into client(email,password,phone,dob) values('$email,'$password','$phone','$dob)";
	echo $sql;
	mysqli_query($con,$sql);

}
?>

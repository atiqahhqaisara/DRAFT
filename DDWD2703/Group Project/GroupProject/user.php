<?php
//user.php
//validatePassword

include "checkLogin.php";

function validatePassword($username,$password)
{
	$con=mysqli_connect("localhost","web402023","web402023","g06sec40jasdb");
	if(!$con)
	{
		echo mysqli_connect_error();
	}

	$sql = "SELECT * FROM adminlogin where username = '".$username."' and password = '".$password."'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	if($result['username'] == $username) && ($result['password'] == $password))
	{
		return true;
		header("location: branchList.php");
	}
		else 
		{
		echo "<script language='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
        die();
		return false;
		}
}
/*
function getUserType($username)
{
	$con=mysqli_connect("localhost","web402023","web402023","g06sec40jasdb");
	if(!$con)
	{
		echo mysqli_connect_error();
	}

	$sql = "SELECT * FROM adminlogin where username = '".$username."'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	if($count == 1)
	{
		$row = mysqli_fetch_assoc($result);
		$username= $row['username'];
		return $username;
	}
}*/

?>

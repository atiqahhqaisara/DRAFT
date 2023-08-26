<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
session_start();
include "db_conn.php";

if(isSet($_POST['uname']) && isSet($_POST['pwd']))
{
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return data;
	}
}

$uname = validate($_POST['uname']);
$pwd = validate($_POST['pwd']);

if(empty($uname))
	{
	header ("Location: mainPage.php?error=Username is Required");
	exit();
	}
	else if(empty($pwd))
		{
		header ("Location: mainPage.php?erro=Password is Required");
		exit();
		}

$sql = "SELECT * FROM adminlogin WHERE username = '$uname' AND password='$pwd'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1)
	{
		$row = mysqli_fetch_assoc($result);
		if($row['username'] == $uname && $row['password'] == $pwd)
	{
		echo "Logged in";
		$_SESSION['username']=$row['username'];
		$_SESSION['password']=$row['password'];
		$_SESSION['id']=$row['id'];
		header("Location: branchList.php");
		exit();
	}
	else 
	{
	header ("Location: mainPage.php?error=Incorrect Username or Password");
	exit();
	}

}

else 
{
header("Location: mainPage.php");
exit();
}


?>
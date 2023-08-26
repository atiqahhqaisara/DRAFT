<?php
//Maklumat.php

function addAppoinmentRecord(){

print_r($_POST);
$con = mysqli_connect("localhost", "web402023", "web402023","g06sec40jasdb");

if(!$con)
	{
		echo "Error:" .mysqli_connect_error($con);
	}
	else
	{
		echo 'connected';
		
			$branchId = $_POST['branchId'];
			$branchName = $_POST['branchName'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address1'];
			$postcode = $_POST['postcode'];
			$district = $_POST['district'];
			$state = $_POST['state'];
			$email = $_POST['email'];
			$phoneNumber = $_POST['phoneNumber'];
			
		$sql = "insert into branch(branchId,branchName,address1,address2,postcode,district,state,email,phoneNumber)
		values('$branchId','$branchName','$address1','$address2','$postcode','$district','$state','$email','$phoneNumber')";
		
		//echo $sql;
		mysqli_query($con,$sql);
		
	}

}

function getListOfMaklumat(){

	$con = mysqli_connect ("localhost", "web402023" , "web402023","g06sec40jasdb");
	
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error($con);
		
	}
	else 
	{
		$sql = "select * from branch order by branchId";
		//echo $sql;
		$maklumatQry = mysqli_query($con,$sql);
		return $maklumatQry;
	}

	
}

?>
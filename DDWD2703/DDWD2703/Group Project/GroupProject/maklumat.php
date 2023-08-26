<?php
//Maklumat.php
function updateBranch()
{
	echo 'In function updateBranch in maklumat.php';
	$con = mysqli_connect("localhost", "g06sec40", "root", "g06sec40jasdb");
	if(!$con)
	{
		echo 'Error: '.mysqli_connect_error();
	}
		else 
		{
		$branchId = $_POST['branchId'];
		$branchName = $_POST['branchName'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$postcode = $_POST['postcode'];
		$district = $_POST['district'];
		$state = $_POST['state'];
		$email = $_POST['email'];
		$phoneNumber = $_POST['phoneNumber'];


		$sql="update branch set branchName='".$branchName."',address1='".$address1."',address2='".$address2."', postcode='".$postcode."', district='".$district."', state='".$state."', email='".$email."', phoneNumber='".$phoneNumber."' WHERE branchId='".$branchId."'";
			mysqli_query($con,$sql);
			echo '<br>'.$sql;

		}
}

function getBranchInformation($branchId)
{
	$con = mysqli_connect("localhost","g06sec40","root","g06sec40jasdb");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
	}
	
	else 
	{
		$sql="select * from branch where branchId ='".$branchId."'";
		//echo $sql;
		mysqli_query($con,$sql);
		$branchQry = mysqli_query($con,$sql);
		return $branchQry;
	}
}
function addAppoinmentRecord(){

print_r($_POST);
$con = mysqli_connect("localhost", "g06sec40", "root","g06sec40jasdb");

if(!$con)
	{
		echo "Error:" .mysqli_connect_error($con);
	}
	else
	{
		echo 'connected';
		
			$appointmentRef = $_POST['appointmentRef'];
			$customerID = $_POST['customerID'];
			$dateReserved = $_POST['dateReserved'];
			$timeStart = $_POST['timeStart'];
			$timeEnd = $_POST['timeEnd'];
			$branchId = $_POST['branchId'];
			$bookingStatus = $_POST['bookingStatus'];
			
		$sql = "insert into appointment(appointmentRef,customerID,dateReserved,timeStart,timeEnd,branchId,bookingStatus)
		values('$appointmentRef','$customerID','$dateReserved','$timeStart','$timeEnd','$branchId','$bookingStatus')";
		
		//echo $sql;
		mysqli_query($con,$sql);
		
	}

}

function getListOfMaklumat(){

	$con = mysqli_connect ("localhost", "g06sec40","root","g06sec40jasdb");
	
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error($con);
		
	}
	else 
	{
		$sql = "select * from branch order by branchId";
		//echo $sql;
		$branchQry = mysqli_query($con,$sql);
		return $branchQry;
	}
	
}

function deleteBranch()
{
	echo 'To delete branch: '.$_POST['branchIdToDelete'];
	//1. Create Connection
	$con = mysqli_connect("localhost","g06sec40","root", "g06sec40jasdb" );

	//Check
	if(!$con)
	{
		echo 'Error: '.mysqli_connect_error();
	}
		else
		{
			//2. Construct SQL
			$sql = "delete from branch where branchId = '".$_POST['branchIdToDelete']."'";
			//execute query
			mysqli_query($con,$sql);
			//clode Connection
		}
}

?>
<?php
//car.php

function updateCar()
{
	echo 'in function updateCar in car.php';
	$con = mysqli_connect("localhost","web402023","web402023","cardb402023");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
	}
	
	else 
	{
		$regNumber = $_POST['regNumber'];
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$regDate = $_POST['regDate'];
		$price = $_POST['price'];
		$engineType = $_POST['engineType'];

		$sql="update car set brand='".$brand."',model='".$model."',price='".$price."' where regNumber'".$regNumber."'";
		echo '<br>'.$sql;
		$carQry = mysqli_query($con,$sql);
		return $carQry;
	}
}

function searchCarByBrand($brand){

	$con = mysqli_connect("localhost","web402023","web402023","cardb402023");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
	}
	
	else 
	{
		$sql="select * from car where brand like ='%".$brand."%'";
		//echo $sql;
		mysqli_query($con,$sql);
		$carQry = mysqli_query($con,$sql);
		return $carQry;
	}
}

function getCarInformation($regNumber)
{
	$con = mysqli_connect("localhost","web402023","web402023","cardb402023");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
	}
	
	else 
	{
		$sql="select * from car where regNumber ='".$regNumber."'";
		//echo $sql;
		mysqli_query($con,$sql);
		$carQry = mysqli_query($con,$sql);
		return $carQry;
	}
}
function addCarRecord()
{

	print_r($_POST);
	//1. Create connection 
	$con = mysqli_connect("localhost","web402023","web402023","cardb402023");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
	}
	else
	{
		echo 'connected';
		$regNumber = $_POST['regNumber'];
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$regDate = $_POST['regDate'];
		$price = $_POST['price'];
		$engineType = $_POST['engineType'];

		$sql = "insert into car(regNumber,brand,model,regDate,price,engineType)
		values('$regNumber','$brand','$model','$regDate','$price','$engineType')";

		echo $sql;

		mysqli_query($con,$sql);
	}
}

function getListOfCar()
{
	$con = mysqli_connect("localhost","web402023","web402023","cardb402023");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error();
	}
	
	else 
	{
		$sql="select * from car order by regNumber";
		echo $sql;
		$carQry = mysqli_query($con,$sql);
		return $carQry;
	}

}

function deleteCar()
{
	echo 'To delete car: '.$_POST['regNumberToDelete'];
	//1. create connection
	$con = mysqli_connect("localhost","web402023","web402023", "cardb402023");
	//   check 
	if(!$con){
		echo 'Error:'.mysqli_connect_error();
	}
	else
	{

	
	// construct sql
	$sql="delete from car where regNumber='".$_POST['regNumberToDelete']."'";
	// execute que
	mysqli_query($con,$sql);
	// close con
	}
}
	
	
?>
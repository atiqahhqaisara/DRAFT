<?php
//car.php
function addCarRecord()
{

	print_r($_POST);
	//1. Create connection 
	$con = mysqli_connect("localhost","web402023","web402023","cardb402023");
	if(!$con)
	{
		echo 'Error:'.mysqli_connect_error($con);
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
		echo 'Error:'.mysqli_connect_error($con);
	}
	
	else 
	{
		$sql="select * from car order by regNumber";
		echo $sql;
		$carQry = mysqli_query($con,$sql);
		return $carQry;
	}
	
	
}
?>
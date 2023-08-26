<?php
include "car.php";
//processCar.php
if(isSet($_POST['addCarButton']))
	{
	addCarRecord();
	header('Location:carList.php');
	
	}
	else
	{
		if(isSet($_POST['deleteCarButton']))
		{
			deleteCar();
			header('Location:carList.php');
		}
	}

?>
<?php
include "car.php";
if(isSet($_POST['addCarButton']))
	{
	header('Location: carInfo.php');
	}
else if(isSet($_POST['saveNewCarButton']))
	{
	addNewCar();
	header('Location: carList.php');
	}
else if(isSet($_POST['deleteCarButton']))
	{
	deleteCar();
	echo "<script>";
	echo " alert('Car Record has been deleted.');
		</script>";
	header( "refresh:1; url=carList.php" );
	}
else if(isSet($_POST['updateCarButton']))
	{
	updateCarInformation();
	header( "refresh:1; url=carList.php" );
	}


?>

<?php
include "car.php";
print_r($_POST);
$regNumber=$_POST['regNumberToUpdate'];
$carQry = getCarInformation($regNumber);
echo 'no of rec:'.mysqli_num_rows($carQry);
$row = mysqli_fetch_assoc($carQry); 

$regNumber=$row['regNumber'];
$brand=$row['brand'];
$model=$row['model'];
$regDate=$row['regDate'];
$price=$row['price'];
$engineType=$row['engineType'];

echo '<form action="processCar.php" method="POST">';
	echo'Reg. Number:';
	echo"<input type='text' name='regNumber' value='$regNumber' readonly>";

	echo'<br>Brand:';
	echo"<input type='text' name='brand' value='$brand' readonly>";

	echo'<br>Model:';
	echo"<input type='text' name='model' value='$model'>";

	echo'<br>Reg. Date:';
	echo"<input type='date' name='regDate' value='$regDate'>";

	echo'<br>Price:';
	echo"<input type='text' name='price' value='$price'>";

	echo'<br>Engine Type:';
	echo"<input type='text' name='engineType' value='$engineType'>";


	echo"<br><input type='submit' name='saveUpdateCar' value='Save'>";

echo '<form>';







?>
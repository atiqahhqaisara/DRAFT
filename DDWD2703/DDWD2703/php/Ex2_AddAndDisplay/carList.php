<!DOCTYPE html>
<html>

<body>
	<h3>List of Car</h3>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<?php
	//carList.php
	include "car.php";
	$carQry = getListOfCar();
	echo 'No of record:'.mysqli_num_rows($carQry);
	echo '<table border ="1">';
		echo '<tr>';
			echo '<th>No</th>';
			echo '<th>RegNumber</th>';
			echo '<th>Brand</th>';
			echo '<th>Model</th>';


		echo'</tr>';
		
	//display each car info
	while($row=mysqli_fetch_assoc($carQry))
	{
		echo '<tr>';
			echo '<td>'.$count.'</td>';
			echo '<td>'.$row['regNumber'].'</td>';
			echo '<td>'.$row['brand'].'</td>';
			echo '<td>'.$row['model'].'</td>';


		echo '</tr>';
		$count++;
	}

	
	echo '</table>';

	
	
	
	?>

</body>
</html>
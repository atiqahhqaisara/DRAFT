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
			echo '<th>RegDate</th>';
			echo '<th>Price</th>';
			echo '<th>Engine Type</th>';

			echo '<th>Delete</th>';


		echo'</tr>';
		
	//display each car info
	while($row=mysqli_fetch_assoc($carQry))
	{
		echo '<tr>';
			echo '<td>'.$count.'</td>';
			echo '<td>'.$row['regNumber'].'</td>';
			echo '<td>'.$row['brand'].'</td>';
			echo '<td>'.$row['model'].'</td>';
			echo '<td>'.$row['regDate'].'</td>';
			echo '<td>'.$row['price'].'</td>';
			echo '<td>'.$row['engineType'].'</td>';

			//delete
			$regNumber=$row['regNumber'];
			echo '<td>';
				echo '<form action="processCar.php" method="POST">';
					echo "<input type='hidden' name='regNumberToDelete' value='$regNumber'>";
					echo '<input type = "submit" value="delete" name="deleteCarButton">';
				echo '</form>';
			echo'</td>';
		echo '</tr>';
		$count++;
	}

	
	echo '</table>';

	
	
	
	?>

</body>
</html>
<!DOCTYPE html>
<html>

<body>
	<h3 style="text-align: center;">List of Customer</h3>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<div class="w3-container">

	<?php
	//customerList.php
	include "customer.php";
	$customerQry = getListOfCustomer();
	echo 'No of record:'.mysqli_num_rows($customerQry);
	echo '<table border ="1" class="w3-table w3-striped w3-bordered">';
		echo '<tr>';
			echo '<th>No</th>';
			echo '<th>Name</th>';
			echo '<th>Email</th>';
			echo '<th>Contact Number</th>';
			echo '<th>Username</th>';
			echo '<th>Password</th>';

			echo '<th>Delete</th>';

		echo'</tr>';
		
	//display each customer info
	$count = 1;

	while($row=mysqli_fetch_assoc($customerQry))
	{
		echo '<tr>';
			echo '<td>'.$count.'</td>';
			echo '<td>'.$row['name'].'</td>';
			echo '<td>'.$row['email'].'</td>';
			echo '<td>'.$row['contactNumber'].'</td>';
			echo '<td>'.$row['username'].'</td>';
			echo '<td>'.$row['password'].'</td>';

			//delete
			$username=$row['username'];
			echo '<td>';
				echo '<form action="processCustomer.php" method="POST">';
					echo "<input type='hidden' name='usernameToDelete' value='$username'>";
					echo '<input type = "submit" value="Delete Info" name="delete">';
				echo '</form>';
			echo'</td>';
		echo '</tr>';
		$count++;
	}

	
	echo '</table>';
	
	?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
 div
 {
  padding-top: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
  padding-left: 50px;
 }

 h3
 {
	 text-align: center;
 }
 	
body 
{
	color: white;
	background-image:url('bck.jpg')  ;
	background-repeat: no-repeat; 
	background-attachment: fixed;
	background-size: cover;
}



</style>

</head>

<body>
	<div>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<form action = "processMaklumat.php" method = "POST">

	<!-- BranchList -->
	<h3>List of Branch</h3>

	<?php
	include "maklumat.php";
	$branchQry = getListOfMaklumat();
		echo 'No. of record: '.mysqli_num_rows($branchQry);
	echo '<table border = "1">';
		echo '<tr>';
			echo '<th>No</th>';
			echo '<th>Branch ID</th>';
			echo '<th>Branch Name</th>';
			echo '<th>Address 1</th>';
			echo '<th>Address 2</th>';
			echo '<th>Postcode</th>';
			echo '<th>District</th>';
			echo '<th>State</th>';
			echo '<th>Email</th>';
			echo '<th>Phone Number</th>';

			echo '<th>Delete</th>';
			echo '<th>Update</th>';

		echo'</tr>';

	//display each branch info
	$count = 1;

	while($row=mysqli_fetch_assoc($branchQry))
	{
		echo '<tr>';
			echo '<td>'.$count.'</td>';
			echo '<td>'.$row['branchId'].'</td>';
			echo '<td>'.$row['branchName'].'</td>';
			echo '<td>'.$row['address1'].'</td>';
			echo '<td>'.$row['address2'].'</td>';
			echo '<td>'.$row['postcode'].'</td>';
			echo '<td>'.$row['district'].'</td>';
			echo '<td>'.$row['state'].'</td>';
			echo '<td>'.$row['email'].'</td>';
			echo '<td>'.$row['phoneNumber'].'</td>';

			//delete 
			$branchId=$row['branchId'];
			echo '<td>';
				echo '<form action="processMaklumat.php" method="POST">';
					echo "<input type='hidden' name='branchIdToDelete' value='$branchId'>";
					echo '<input type = "submit" value="Delete Branch" name="deleteBranchBtn">';
				echo '</form>';
			echo'</td>';

			
			//update
			echo '<td>';
				echo '<form action="updateBranchForm.php" method="POST">';
					echo "<input type='hidden' name='branchIdToUpdate' value='$branchId'>";
					echo '<input type = "submit" value="Update Branch" name="updateBranchBtn">';
				echo '</form>';
			echo'</td>';
		echo '</tr>';
			$count++;

	}
	echo '</table>';
	echo '<form action="adminLogin/index.php" method="POST">';
		echo '<input type = "submit" value="Home " name="homeBtn">';


	?>


	</form>
	
	</div>

</body>
</html>
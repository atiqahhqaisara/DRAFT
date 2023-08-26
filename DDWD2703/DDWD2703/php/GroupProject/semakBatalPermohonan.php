<!DOCTYPE html>
<html>
<body>
<head>
<style>

div
 {
  padding-top: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
  padding-left: 50px;
 }

h2
{
	text-align: center;
}

</style>

</head>
<div>

	<h2>Semak / Batal Permohonan </h2>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<?php
	include "maklumat.php";
	$maklumatQry = getListOfMaklumat();
	
	echo 'No of record:'.mysqli_num_rows($maklumatQry);
	echo '<table class = "w3-table w3-striped">';
		echo '<tr>';
			echo '<th>No.</th>';
			echo '<th>Branch ID</th>';
			echo '<th>Branch Name</th>';
			echo '<th>Address 1</th>';
			echo '<th>Address 2</th>';
			echo '<th>Postcode</th>';
			echo '<th>District</th>';
			echo '<th>State</th>';
			echo '<th>Email</th>';
			echo '<th>Phone Number</th>';
		echo '</tr>';
		
	//display each Branch Maklumat info
	$count=1; 
	while($row = mysqli_fetch_assoc($maklumatQry))
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

		echo '</tr>';
		$count++;
	}
	
	echo '</table>';
	?>
	</div>
</body>
</html>
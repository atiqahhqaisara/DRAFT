<?php
include "maklumat.php";
print_r($_POST);
$branchId=$_POST['branchIdToUpdate'];
$branchQry = getBranchInformation($branchId);
echo 'no of rec:'.mysqli_num_rows($branchQry);
$row = mysqli_fetch_assoc($branchQry); 

$branchId=$row['branchId'];
$branchName=$row['branchName'];
$address1=$row['address1'];
$address2=$row['address2'];
$postcode=$row['postcode'];
$district=$row['district'];
$state=$row['state'];
$email=$row['email'];
$phoneNumber=$row['phoneNumber'];


echo '<form action="processMaklumat.php" method="POST">';
	echo'Branch ID:';
	echo"<input type='text' name='branchId' value='$branchId' readonly>";
	 
	echo'<br>Branch Name:';
	echo"<input type='text' name='branchName' value='$branchName' readonly>";

	echo'<br>Address 1:';
	echo"<input type='text' name='address1' value='$address1'>";

	echo'<br>Address 2:';
	echo"<input type='text' name='address2' value='$address2'>";

	echo'<br>Postcode:';
	echo"<input type='text' name='postcode' value='$postcode'>";

	echo'<br>District:';
	echo"<input type='text' name='district' value='$district'>";

	echo'<br>State:';
	echo"<input type='text' name='state' value='$state'>";

	echo'<br>Email:';
	echo"<input type='text' name='email' value='$email'>";

	echo'<br>Phone Number:';
	echo"<input type='text' name='phoneNumber' value='$phoneNumber'>";



	echo"<br><input type='submit' name='saveUpdateBranch' value='Save'>";

echo '</form>';
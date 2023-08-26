<?php

include "car.php";
echo '<h1> List of car available.</h1>';

//===================== search form=====
displaySearchOption();
if(isSet($_POST['searchByRegNumber']))
	$qry = findCarByRegNumber(); //call function in car.php
else if(isSet($_POST['searchByBrand']))
	$qry = findCarByBrand(); //call function in car.php
else if(isSet($_POST['searchByModel']))
	$qry = findCarByModel(); //call function in car.php
else
	$qry = getListOfCar();//display all car

//add car menu
echo '<form action = "processCar.php" method ="POST">';
	echo '<br><input type = "submit" name="addCarButton" value ="Add New Car">';
echo '</form>';

//display car info	
echo '<br>No of car:'.mysqli_num_rows($qry);
echo '<table border=1>';
echo '<tr>
		<td>No</td>
		<td>RegNo</td>
		<td>Brand</td>
		<td>Model</td>
		<td>Price</td>
		<td>Delete</td>
		<td>Update</td>
	</tr>';
$i=1;
while($row=mysqli_fetch_assoc($qry))//Display car information
  {

  echo '<tr>';
  echo '<td>'.$i.'</td>';
  echo '<td>'.$row['regNumber'].'</td>';
  echo '<td>'.$row['brand'].'</td>';
  echo '<td>'.$row['model'].'</td>';
  echo '<td>'.$row['price'].'</td>';
  $regNumber = $row['regNumber'];
  //delete menu
  echo '<td>';
			echo '<form action="processCar.php" method="post" >';
			echo "<input type='hidden' value='$regNumber' name='regNumberToDelete'>";
			echo '<input type="submit" name="deleteCarButton" value="Delete">';
			echo '</form>';
  echo '</td>';
  //update menu
   //delete menu
  echo '<td>';
			echo '<form action="updateCarForm.php" method="post" >';
			echo "<input type='hidden' value='$regNumber' name='regNumberToUpdate'>";
			echo '<input type="submit" name="updateCarButton" value="Update">';
			echo '</form>';
  echo '</td>';
  echo '</tr>';  
  $i++;
  }
	  
echo '</table>';
?>
<?php
//to display the search menu
function displaySearchOption()
{
 echo '
<form action="" method="post">
<br>
<fieldset style ="width:70%;"><legend>Search Option</legend>
<table border=1>
<tr><td> Car Registration/Brand : </td><td><input type=text name=searchValue><br></td></tr>
<td></td><td><input type=submit name = searchByRegNumber value="By Registration">
<input type=submit name = searchByBrand value="By Brand">
<input type=submit name = searchByModel value="By Model">
<input type=submit name = displayAll value="Display All"></td>
</table>
</fieldset>
</form>';
}
?>
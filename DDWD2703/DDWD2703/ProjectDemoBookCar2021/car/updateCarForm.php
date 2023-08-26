<style>
	body{
		 background-color:#e6fff2;
	}
	#set {
	 margin:auto;
	 width:50%;
	 text-align:center;

	 }
</style>

<?php
//updateCarForm.php
include "car.php";
$regNumber=$_POST['regNumberToUpdate'];
$qry = getCarInformation($regNumber);//call function to get detail car data
$row = mysqli_fetch_assoc($qry);
//assign data to variable
$brand = $row['brand'];
$model =$row['model'];
$price =$row['price'];
$regDate = $row['regDate'];

echo '<div id ="set" style="line-height: 1.8;">';
echo '<form action="processCar.php" method="post">';
echo '<fieldset><legend>Car Information Update:</legend>';
echo 'Registration Number:';
echo "<input type='text' name='newRegNumber' value='$regNumber' required>";
echo "<input type='hidden' name='regNumber' value='$regNumber' >";
echo '<br>Brand:';
showSelectedBrand($brand);
echo '<br>Model :';
echo "<input type='text' name='model' value='$model'>";

echo '<br>Date of registration :';
echo "<input type='date' name='regDate' value='$regDate'>";
echo '<br>Price :';
echo "<input type='number' name='price' value='$price' step='0.01'>";
echo '<br><br><input type="submit" name="updateCarButton" value="Save">';
echo '<input type ="reset" name="resetButton" value="reset">';

echo '</fieldset>';
echo '</form>';
echo '</div>';
?>
<?php
function showSelectedBrand($brand )
{
echo '	<select name = "brand">';
if($brand == 'Proton')
	echo "<option value='Proton' selected>Proton</option>";
else
	echo "<option value='Proton'>Proton</option>";
if($brand == 'Perodua')
	echo "<option value='Perodua' selected>Perodua</option>";
else
	echo "<option value='Perodua'>Perodua</option>";
if($brand =='Toyota')
	echo "<option value='Toyota' selected>Toyota</option>";
else
	echo "<option value='Toyota'>Toyota</option>";
if($brand =='Nissan')
	echo "<option value='Nissan' selected>Nissan</option>";
else
	echo "<option value='Nissan'>Nissan</option>";
if($brand == 'Others')
	echo "<option value='Others' selected>Others</option>";
else
	echo "<option value='Others'>Others</option>";

echo '</select>';
}
?>
<!DOCTYPE html>
<style>
	body{
		 background-color:#e6fff2;
	}
</style>
<head>
<link rel="stylesheet" href="../lib/w3.css">
<title>Car Rental</title>
</head>
<script>
function validateForm() {
    var start = document.forms["bookingForm"]["startDate"].value;
	var end = document.forms["bookingForm"]["endDate"].value;
	
    if (start >= end) {
        alert("Start date is after/same as the end date. Select correct date");
        return false;
    }
}
</script>

<?php
session_start();
include "../customer/customer.php";
include "../car/car.php";
//print_r($_POST);
include "../menu/menu.php";
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	header ("Location: ../mainMenu.php");
}
//echo '<div class="w3-cell-row style="width:100%; margin:0 auto;">';
echo '<div class="w3-container" style="width:80%; margin:0 auto;">';

$custId = $_SESSION['username'];
echo '<div class="w3-container w3-cell" style="width:50%;" >';
displayCustomerInformation($custId);
echo '</div>';
if(isSet($_POST['searchByDate']))
	{
	$startDate = $_POST['startDate'];
	$endDate = $_POST['endDate'];
	$qryAvailable = getAvailableCarOnTheseDate($startDate ,$endDate);
	if(mysqli_num_rows($qryAvailable) > 0)
		showAvailableCarOnThisDate($qryAvailable);
	else
		echo 'No car available between ' . $startDate .' and '. $endDate; 
	}
else
    {
	echo '<div class="w3-container w3-cell" style="width:50%;">';
	displayBookingDateOption();
	echo '<div >';
	}
echo '</div>';
echo '</div>'; 
?>

<?php
//to display the search menu
function displayCustomerInformation($custId)
{
 //$custId = $_SESSION['username'];
// echo '<div>';
 $customerInfo = getCustomerInformation($custId);
 //display customer info
 echo '<div class="w3-card">';
 //echo '<div style="width:50%; margin:0;align:left;">';
 echo '<fieldset><legend>Customer info:</legend>';
 echo '<br>Name :' .$customerInfo['Cust_name'];
 echo '<br>Contact :' .$customerInfo['Contact'];
 echo '<br>Email :' .$customerInfo['email'];
 
 echo '</fieldset>';
 echo '</div>';
}
function displayBookingDateOption()
{
 //echo '<div style ="width:100%; float: right;">';
  echo '<div class="w3-card">';
 echo '
<form action="" method="post" onsubmit="return validateForm()" name="bookingForm">
<fieldset ><legend>Select date to book</legend>
<table border=1>
<tr><td> Start Date : </td><td><input type=date name=startDate><br></td></tr>
<td> End Date : </td><td><input type=date name=endDate></td></tr>';
echo '</table>';
echo '<input class="w3-btn w3-light-blue" type=submit name = searchByDate value="Show Available Car">
</fieldset>
</form>';
echo '</div>';
}
function showAvailableCarOnThisDate($qryAvailable)
{
$custId = $_SESSION['username'];//customerId
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
//display car info	

echo '<div style="width:1000px; margin:0 auto;">';
echo '<br>List of car available from '.$startDate. ' to '. $endDate;
echo '<table border=1 style="width:100%;" class="w3-table w3-bordered w3-striped w3-large w3-hoverable w3-card-4">';
echo '<tr class="w3-light-blue">
		<td>No</td>
		<td>RegNo</td>
		<td>Brand</td>
		<td>Model</td>
		<td>Daily Rate RM</td>
		<td>Charges RM</td>
		<td>Book The Car</td>
	</tr>';
$i=1;
while($row=mysqli_fetch_assoc($qryAvailable))//Display car information
  {
   
  $regNumber = $row['regNumber'];
  $price = $row['price'];
 $brandImage=$row['brand'];
  //echo '<tr class=" w3-hover-text-blue">';
   echo '<div class="w3-card">';
  echo '<td>'.$i.'</td>';
  echo '<td>'.$row['regNumber'].'</td>';
  //echo '<td>'.$row['brand'].'</td>';
  //echo '<td><img src="../image/Proton.png" alt="Smiley face" width="42" height="42"></td>';
  echo "<td><img src='../image/".$brandImage.".gif' alt='$brandImage' width='42' height='42'></td>";
  echo '<td>'.$row['model'].'</td>';
  echo '<td>'.$row['price'].'</td>';
  //taxes
   $Rental_period=getDayDiff($startDate,$endDate);
   $total = $Rental_period *  $row['price'];
   $tax=0.06 * $total;
   $Amount_due = $tax + $total;
   echo '<td>Total RM:'.number_format($total,2).'<br>Tax RM:'.number_format($tax,2).'<br>Amount Due RM:'.number_format($Amount_due,2);
   echo '</td>';
   echo '<td>';
   echo '<form action="processBooking.php" method="post" >';
			echo "<input type='hidden' value='$regNumber' name='regNumberToBook'>";
			echo "<input type='hidden' value='$custId' name='custIdToBook'>";
			echo "<input type='hidden' value='$startDate' name='startDate'>";
			echo "<input type='hidden' value='$endDate' name='endDate'>";
			echo "<input type='hidden' value='$price' name='price'>";
			echo "<input type='image' name='bookCarButton' src='../image/newBook.gif' title='Click to choose this car' alt='Choose this car'>";
			echo '</form>';  
   echo '</td>';
   echo '</tr>';  
   
echo '</div>';

  $i++;
  }
	  
echo '</table>'; 
//echo '</div>';
//echo '</div>';

}

function displaySearchOption()
{
echo '<div style="width:100%; margin:0 auto;">';
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
echo '</div>';
}

function getDayDiff($Date_rent_start,$Date_rent_end)
{
	$date1=date_create($Date_rent_start);
	$date2=date_create($Date_rent_end);
	$diff=date_diff($date1,$date2);
	$x = $diff->format("%R%a");//R - -ve and +ve symbol
	if($x >= 1)
		$x = $diff->format("%a");
	return $x;
}
?>
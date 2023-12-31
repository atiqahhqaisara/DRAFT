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
<link rel="stylesheet" href="../lib/w3.css">
<?php
session_start();
//if customer has logout, redirect to mainMenu.php
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	header ("Location: ../mainMenu.php");
}

include "../customer/customer.php";
include "../car/car.php";
include "booking.php";
include "../menu/menu.php";
echo '<div class="w3-container" style="width:80%; margin:0 auto;">';

$custId = $_SESSION['username'];

displayCustomerInformation($custId);

echo '<div class="w3-container">';
$qryActiveAndFutureList = getListOfFutureBookingByCustomer($custId);//in booking.php
$qryPastBooking = getListOfPastBookingByCustomer($custId);
showBookingList($qryActiveAndFutureList,"Active/Future Booking");
showBookingList($qryPastBooking,"Completed Booking");
echo '</div>';
echo '</div>';
displayFooter();
?>

<?php
//to display the search menu
function displayCustomerInformation($custId)
{

 echo '<div>';
 $customerInfo = getCustomerInformation($custId);
 //display customer info
 
 echo '<div style="width:100%; margin:0 auto;">';
 echo '<fieldset><legend>Customer info:</legend>';
 echo '<br>Name :' .$customerInfo['Cust_name'];
 echo '<br>Contact :' .$customerInfo['Contact'];
 echo '<br>Email :' .$customerInfo['email'];
 
 echo '</fieldset>';
 echo '</div>';
}

function showBookingList($qryBookingList,$listType)
{

//display car info	
$noOfBookingRecord=mysqli_num_rows($qryBookingList);


echo '<div style="width:100%; margin:0 auto;">';
if($noOfBookingRecord == 0) //no booking record
	{
    echo '<br><br>There is no record for '. $listType.' found';
	return;
	}
echo '<br>List of '. $listType.'. '.$noOfBookingRecord.' record/s found';
echo '<table border=1 class="w3-table w3-bordered w3-striped w3-small w3-hoverable w3-card-4 width:100%;" >';
echo '<tr class="w3-light-blue">
		<td>No</td>
		<td>RegNo</td>
		<td>Start Date</td>
		<td>End Date</td>
		<td>Charges RM</td>
	</tr>';
$i=1;
while($row=mysqli_fetch_assoc($qryBookingList))//Display car information
  {
   
  $startDate=date_create($row['Date_rent_start']);
  $endDate=date_create($row['Date_rent_end']);
 // echo date_format($date,"Y/m/d H:i:s"); 
  echo '<tr>';
//  echo '<tr class="w3-green w3-hover-shadow w3-padding-64 w3-center" style="width:70%">';
  echo '<td>'.$i.'</td >';
  echo '<td>'.$row['regNumber'].'</td>';
  echo '<td>'.date_format($startDate,"d/m/Y").'</td>';
  echo '<td>'.date_format($endDate,"d/m/Y").'</td>';
  echo '<td>'.number_format($row['Amount_due'],2).'</td>';
  echo '</tr>';  
  echo '</div>';
  $i++;
  }
	  
echo '</table>'; 
echo '</div>';
}

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
function displayFooter()
{
	echo '<div class="w3-container w3-pale-blue" style="margin:auto;">
	<br>
</div>';
}
?>
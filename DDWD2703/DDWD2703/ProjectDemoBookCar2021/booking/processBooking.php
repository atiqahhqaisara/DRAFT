<?php
session_start();
include "booking.php";
if(isSet($_POST['bookCarButton_x']))//customer selected a car
	{
	$success=addNewBookingRecord();
	if($success)
		{
			 echo '<script>
				alert("Your booking has been updated.")
				window.location = "../booking/bookingListForm.php";
			</script>';
/* 			echo '<script>
				alert("Your booking has been updated. Kindly complete the payment")
				window.open("http://www.maybank2u.com.my/");
				window.location = "../customerMenu.php";
				
			</script>'; */

  }
else
		{
		echo '<script>
				alert("There is an error in processing your booking. Kindly contact our customer service.");
				window.location = "../customerMenu.php";
			</script>';	
		}
	}
?>
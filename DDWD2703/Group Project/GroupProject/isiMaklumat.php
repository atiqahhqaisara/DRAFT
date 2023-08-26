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
	<h3>Mula Tempahan</h3>
	<form action="processMaklumat.php" method="POST">
	Appoinment Reference: <input type="text" name="appoinmentRef">
	<br>Customer ID: <input type="text" name="customerID">
	<br>Date Reserved: <input type="date" name="dateReserved">
	<br>regDate: <input type="date" name="regDate">
	<br>price: <input type="text" name="price">
	<br>engineType: <input type="text" name="engineType">
	<br><input type="submit" value="Save" name="addCarButton">
	</form>
	
	</div>

</body>
</html>
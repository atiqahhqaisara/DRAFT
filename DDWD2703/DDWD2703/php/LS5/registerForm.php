<!DOCTYPE html>
<html>
<head>
<style>
.button
{
	text-align: center;
	padding: 15px 32px;
	cursor: pointer;
	font-size: 20px;
}


</style>
<title>Customer Registration Form</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

	<div-class = "w3-container">
		<h3 style="text-align: center;">Customer Registration</h3>

	<form action="processCustomer.php" method="POST" class="w3-container">

	Name: <input type="text" class="w3-input w3-hover-grey" name="name" placeholder="Enter name">
	<br>Email: <input type="email" class="w3-input w3-hover-grey" name="email" placeholder="Enter email">
	<br>Contact number: <input type="text" class="w3-input w3-hover-grey" name="contactNumber" placeholder="Enter contact number">
	<br>Username: <input type="text" class="w3-input w3-hover-grey" name="username" placeholder="Enter username">
	<br>Password: <input type="password" class="w3-input w3-hover-grey" name="password" placeholder="Enter password">

	<br><input type="submit" class="button" value="Register" name="register">
	</div>
	

	</form>

</body>
</html>
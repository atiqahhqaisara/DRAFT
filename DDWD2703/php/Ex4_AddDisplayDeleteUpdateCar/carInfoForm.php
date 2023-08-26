<!DOCTYPE html>
<html>
<body>

	<h3>Add New Car Record</h3>
	<form action="processCar.php" method="POST">
	RegNumber: <input type="text" name="regNumber">
	<br>Brand: <input type="text" name="brand">
	<br>model: <input type="text" name="model">
	<br>regDate: <input type="date" name="regDate">
	<br>price: <input type="text" name="price">
	<br>engineType: <input type="text" name="engineType">
	<br><input type="submit" value="Save" name="addCarButton">
	
	</form>

</body>

</html>
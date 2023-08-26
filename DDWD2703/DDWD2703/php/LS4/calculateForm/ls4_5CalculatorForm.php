<!DOCTYPE html>
<!-EXAMPLE 3: Using GET with TWO php file-->

<html>
<head>
	<title>Calculator Form</title>
</head>
	<h1>Calculator Form</h1>
<body>
	<form action="ls4_5calculate.php" method="POST">
	<fieldset>
	No 1: <br><input type="text" name="no1"><br>
	<br>No 2: <br><input type ="text" name="no2">
	<br>

	<br><input type="submit" name="add" value="Add">
	<br>
	<br><input type="submit" name="sub" value="Subtract">
	<br>
	<br><input type="submit" name="mul" value="Multiply">
	<br>
	<br><input type="submit" name="div" value="Divide">
	<br>
	<br><input type="reset" name="clear" value="Clear">


	
	</fieldset>
	</form>

</body>
</html>
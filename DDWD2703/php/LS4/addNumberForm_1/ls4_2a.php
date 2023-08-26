<!DOCTYPE html>
<!-EXAMPLE 1: Using POST witht one php file -->
<html>
<head>
	<title>Rectangle Calculator</title>
</head>

	<h1>Rectangle Calculator</h1>
<body>
	<form action="" method="post">
	<fieldset>
	Width: <br><input type ="text" name="width">
	<br>Length: <br><input type ="text" name="length">
	<br><input type="submit" name="calc" value="Calculate">
	</fieldset>
	</form>

<?php
//read no1 and no2 from textbox
$width = $_POST['width'];
$length = $_POST['length'];
$result= $width * $length; ////add total
echo 'Total : ',$result; //display total
?>



</body>
</html>
	
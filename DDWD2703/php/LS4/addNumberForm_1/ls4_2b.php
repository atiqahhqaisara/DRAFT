<!DOCTYPE html>
<!-EXAMPLE 1: Using POST with one php file -->
<html>
<head>
	<title>Tax Calculator</title>
</head>

	<h1>Tax Calculator</h1>
<body>
	<form action="" method="post">
	<fieldset>
	Product Price (RM): <br><input type ="text" name="price">
	<br>Tax (%): <br><input type ="text" name="tax">
	<br><input type="submit" name="calc" value="Calculate">
	</fieldset>
	</form>

<?php
//read no1 and no2 from textbox
$price = $_POST['price'];
$tax = $_POST['tax'];
$result= $price * ($tax/100); ////add total
echo 'Total tax is : RM',$result; //display total

echo '<br>';
$balance = $price - $result;
echo 'Total balance is : RM', $balance;
?>



</body>
</html>
	
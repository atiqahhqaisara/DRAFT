<!DOCTYPE html>
<html>
	<head>
		<title>Add</title>
	</head>
	
	
	<body>
		<h1>Add Program</h1>
		<form action="" method ="GET">
		No 1:<input type="number" name="no1">
		<br>No 2:<input type="number" name="no2">
		<br><input type="submit" value="+" name="addButton">
		</form>

		<?php
		//print_r($_POST);		//display data in POST array
		$n1 = $_GET['no1'];	//read from post arr-no1
		$n2 = $_GET['no2'];
		$total = $n1 + $n2;		//$ = var

		echo $total;				//echo = output
		
		?>
	</body>


</html>
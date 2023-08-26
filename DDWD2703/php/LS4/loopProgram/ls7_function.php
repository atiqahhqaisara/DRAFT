<!DOCTYPE html>

<html>
<head>
	<title>Loop Program</title>
</head>
	<h1>Loop Program</h1>
<body>
	<form action="" method="POST">

	<fieldset>
	No 1: <br><input type="number" name="no1"><br>
	<br>No 2: <br><input type ="number" name="no2">
	<br>
	<br><input type="submit" name="add" value="Display">
	<br><br>
	
	<?php 
		$no1 = $_POST['no1'];
		$no2 = $_POST['no2'];

		if($no1<$no2){
			displayAscending($no1,$no2);
		}
			else{
				displayDescending($no1,$no2);
			}

		function displayAscending($x,$y){
			for($i=$x;$i<=$y;$i++)
			echo ' ',$i,' ';
		}

		function displayDescending($a,$b){
			for($i=$a;$i>=$b;$i--)
			echo ' ',$i,' ';

		}
	?>

	</fieldset>
	</form>

</body>
</html>
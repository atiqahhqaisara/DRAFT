<?php
print_r($_POST);

//input
$n1 = $_POST['no1'];
$n2 = $_POST['no2'];

//process
if(isSet($_POST['addButton']))
	$total = $n1+$n2;
else if(isSet($_POST['subtractButton']))
	$total=$n1-$n2;
else 
	$total=$n1/$n2;

//output
echo "<h3>Result is:".$total."</h3>";

?>


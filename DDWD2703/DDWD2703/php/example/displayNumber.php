<?php 
//function example 
$berapaKali = 3;
show($berapaKali);
?>
<?php
function show($x)
{
	for($i=0;$i<$x;$i++)
		echo $i.'<br>';
}
?>
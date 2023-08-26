<?php
//print_r($_POST)
$no1 = $_POST['no1'];
$no2=$_POST['no2'];

if(isSet($_POST['add']))
{
	$res=$no1+$no2;
}
	else if(isSet($_POST['sub']))
	{
	$res = $no1 - $no2;
	}
		else if(isSet($_POST['mul']))
		{
			$res= $no1 * $no2;
		}
			else if(isSet($_POST['div']))
			{
				$res = $no1 / $no2;
			}
				

echo 'Result is: ',$res;
?>
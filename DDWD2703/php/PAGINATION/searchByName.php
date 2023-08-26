<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<?php
//search customer by name
//display the result
$nameToSearch = $_GET['nameToSearch'];
$con = mysqli_connect('localhost','web402023','web402023','cardb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM customers WHERE Cust_name like '".$nameToSearch."%'";
echo $sql;
$result = mysqli_query($con,$sql);
$noOfRecordFound=mysqli_num_rows($result);

if($noOfRecordFound != 0)//there is similar name
	{
	displayResult($result);
	}
else
	{
	echo 'Not found.';
	}
mysqli_close($con);
?>
<?php

function displayResult($result)
{
echo '<div class="w3-container">';
 echo "<table class=\"w3-table w3-striped\">
<tr>
<th>Cust No</th>
<th>Name</th>
<th>Address</th>
<th>Contact</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Cust_no'] . "</td>";
    echo "<td>" . $row['Cust_name'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['Contact'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo '</div>';
}
?>
</body>
</html>
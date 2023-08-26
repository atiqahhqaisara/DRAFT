<?php
print_r($_GET);
$recordPerPage=2;

if(isSet($_GET['page']))
{
	$currentPage=$_GET['page'];
	$start_from=($page-1)*$recordPerPage;
	$qryCustomer=getCustomerList($start_from,$recordPerPage);
}
else
{
	$currentPage=1;
	$start_from=($page-1)*$recordPerPage;
	$qryCustomer=getCustomerList($start_from,$recordPerPage);
}

$totalRecord=getNoOfRec();
echo 'Total customer:'.$totalRecord;

$noOfPage=$totalRecord/2;
echo 'No of page:'>$noOfPage;
echo '<br>';
for($pg=1;$pg<$noOfPage;$pg++)
{
echo '<a href="customerList.php?page='.$pg.'">;
		'.$pg.'</a>';
}
?>
<?php
function getCustomerList($start_from,$recordPerPage)
{
	$con=mysqli_connect("localhost","web402023","web402023","cardb");
	$sql="SELECT FROM customers ORDER BY Cust_name ASC LIMIT $start_from, $recordPerPage";
	
	$qry=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($qry);
	$noOfRecord=$row['noOfRecord'];
	return $noOfRecord;
}


function getNoOfRec()
{
	$con=mysqli_connect("localhost","web402023","web402023","cardb");
	$sql="SELECT count(distinct(Cust_no)) as noOfRecord from customers";
	
	$qry=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($qry);
	$noOfRecord=$row['noOfRecord'];
	return $noOfRecord;

	
}

?>
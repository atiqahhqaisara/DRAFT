<?php
include "maklumat.php";

//processMaklumat.php
if(isSet($_POST['addAppoinmentButton']))

{
	addAppoinmentRecord();
	header('Location:semakBatalPermohonan.php');
}
	else
	{
		if(isSet($_POST['deleteBranchBtn']))
		{
			deleteBranch();
			header('Location: branchList.php');
		}
		else if(isSet($_POST['saveUpdateBranch']))
		{
			echo '<br>Update: '.print_r($_POST);
			header('Location: branchList.php');

			updateBranch();
		}
	}

?>
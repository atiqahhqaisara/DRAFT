<?php
include "maklumat.php";

//processMaklumat.php
if(isSet($_POST['addAppoinmentButton']))

{
	addAppoinmentRecord();
	header('Location:semakBatalPermohonan.php');
}

?>
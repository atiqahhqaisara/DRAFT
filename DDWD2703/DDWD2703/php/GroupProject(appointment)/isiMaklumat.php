<!DOCTYPE html>
<html>
<head>
<style>
 div
 {
  padding-top: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
  padding-left: 50px;
 }

 h3
 {
	 text-align: center;
 }
 	
body 
{
	color: white;
	background-image:url('bck.jpg')  ;
	background-repeat: no-repeat; 
	background-attachment: fixed;
	background-size: cover;
}



</style>

	<script>
function branch(){
	
	var s = document.getElementById('branchName');
	var branchName = s.options[s.selectedIndex].value;
	
	if (branchName == "wilayahPersekutuan")
		{
		document.getElementById("result").innerHTML="<br>Branch ID:JPNKL01 <br>Address 1:Aras G, Kompleks Kementerian Dalam Negeri, <br>Address 2:Jalan Sri Hartamas 1, Off Jalan Dutamas 1<br>Postcode: 50551 <br>District: Sri Hartamas<br>State: Kuala Lumpur<br>Email:adminwilayahpppwilayah@jpn.gov.my <br>Phone Number: 0380009010" ;
		}
		else if (branchName == "utcPudu")
		{
		document.getElementById("result").innerHTML="<br>Branch ID: JPNP01<br>Address 1: Pudu Sentral, UTC KL, <br>Address 2: Kuala Lumpur Aras 2, Wisma UTC, Jln Pudu <br>Postcode: 55100 <br>District: Pudu <br>State: Kuala Lumpur <br>Email: adminpudu@jpn.gov.my <br>Phone Number: 0380008000" ;
		}
		else if (branchName == "utcSarawak")
		{
		document.getElementById("result").innerHTML="<br>Branch ID: JPNSRW01 <br>Address 1: Bangunan Tun Datuk Patinggi Tuanku Haji Bujang<br>Address 2:<br>Postcode: 93551 <br>District: Kuching <br>State: Sarawak<br>Email: adminsarawak@jpn.gov.my <br>Phone Number:  0380008010" ;
		}
		else if (branchName == "utcSnL")
		{
		document.getElementById("result").innerHTML="<br>Branch ID: JPNSL01 <br>Address 1: Aras 1-5, Blok B, Kompleks Pentadbiran Kerajaan Persekutuan, <br>Address 2: Jalan UMS, Likas <br>Postcode: 88400 <br>District: Kota Kinabalu <br>State: Sabah<br>Email: adminkinabalu@jpn.gov.my <br>Phone Number: 0380008019" ;
		}
		else
			{
			document.getElementById("result").innerHTML="Error";
			}
	
	
}

	
	
	</script>
</head>

<body>
	
	<div>
		<label for = "branchName"> Branch Name: </label>
		<select id = "branchName">
		<option value = "wilayahPersekutuan"> Wilayah Persekutuan (KL) </option>
		<option value = "utcPudu"> UTC Pudu </option>
		<option value = "utcSarawak"> UTC Sarawak </option>
		<option value = "utcSnL"> UTC Sabah dan Labuan </option>
		
		<br><input type ="submit" value="Submit" onclick="branch()">
		<p id="result"></p>
		</select>

		<h3>Tarikh & Masa</h3>
		<fieldset>
		<legend>Perhatian!</legend>
			<p>1. Sila klik Semak untuk menyemak Slot Janji Temu</p>
			<p>2. Pengguna hendaklah memilih Tarikh dan Slot masa mengikut waktu operasi/bekerja rasmi berdasarkan lokasi pilihan kerana terdapat perbezaan cuti kelepasan am bagi negeri-negeri.</p>
				
			Tarikh: <br><input type = "date" name ="dataReserved">
			<br><input type ="Submit" value = "Semak" >


	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<form action = "processMaklumat.php" method = "POST">	

	</form>
	</div>
	
</body>
</html>
<?php

include "config.php";

$select = "select * from data_kost JOIN user USING(username)";
$select_query = mysql_query($select);

?>


<html>

<head>

<meta http-equiv="Content-Script-Type" content="text/javascript" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />

<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/style-ie.css" media="screen, projection, tv" /><![endif]-->
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<title>E-KOSTAN</title>
</head>

<body>

<!-- Header -->
	<div id="header">
			<ul id="navigation">
				
		</ul>
		<h1><a href="#">Tel-U</a> Kostan</h1>
		<!-- Your website name  -->
		
<!-- Your website name end -->
		
			<!-- Your slogan -->
			<!-- Your slogan end -->
		
		<!-- Search form -->	
	
			<!-- Search form end -->		
<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }
require_once("config.php");

$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
		<?php
 echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 <b>Hi, $username</b> ";

?>
		<!-- Menu -->
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul id="menu">
			<li><a href="pemilik_kost.php">Tambah Data Kost</a></li>
			<li><a href="lihatdatakost.php"class="active">Lihat Data Kost</a></li>
			<li><a href="Logout.php">Logout</a></li>
		</ul>
		<!-- Menu end -->
	</div>
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<div id="content">

		<!-- Middle and right column wrapper-->
		<div id="content">

			<!-- Middle column -->
			<caption><h1>Daftar Pemilik Kost</h1></caption>
			
   
   <table class="zebra-table" >
   	<thead>
<tr><th>nama kost</th><th>nama pemilik</th><th>no_telp</th><th>alamat</th><th>kecamatan</th><th>kelurahan</th><th>fasilitas</th><th>Jumlah Kamar</th>
</tr>
</thead>
<tbody>

<?php

while($select_result = mysql_fetch_array($select_query)){

$nama_kost = $select_result['nama_kost'];
$nama_pemilik = $select_result['nama_pemilik'];
$no_telp = $select_result['no_telp'];
$alamat = $select_result['alamat'];
$kecamatan=$select_result['kecamatan'];
$kelurahan=$select_result['kelurahan'];
$fasilitas=$select_result['fasilitas'];
$jumlah=$select_result['jumlah'];

echo "<tr><td>$nama_kost</td><td>$nama_pemilik</td><td>$no_telp</td><td>$alamat</td><td>$kecamatan</td><td>$kelurahan</td><td>$fasilitas</td><td>$jumlah
</td></tr>";
}

?>
</tbody>
</table>
	</div>
			<!-- Middle column end -->

			<!-- Right column -->
		
			<!-- Right column end -->
		</div>
		<!-- Middle and right column wrapper end-->

		<!-- Left column -->
		
		<!-- Right column end -->
		<div class="cleaner">&nbsp;</div>

<hr class="noscreen" />
	
	<!-- Footer -->
	<div id="footer">
		<div id="footer-in">
			<p class="footer-left">&copy; <a href="#">E-KOSTAN</a>, 2016.</p>
		  <p class="footer-right">Design by <a href="#">B.R.A Team</a></p>
	  </div>
</div>

</body>
</html>
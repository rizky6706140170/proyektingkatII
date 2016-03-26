
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
				<li id="house"><a href="#">Homepage</a>|</li>
				<li id="envelope"><a href="#">Contact us</a></li>
		</ul>
		<!-- Your website name  -->
		<h1><a href="#">Tel-U</a> Kostan</h1>
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
 echo "<META HTTP-EQUIV=Refresh CONTENT='; URL=pemilik_kost.php'>";

?>
<!-- Your website name end -->
		
			<!-- Your slogan -->
			<!-- Your slogan end -->
		
		<!-- Search form -->	
			<form class="searching" action="">
			<fieldset>
				<label></label>
					<div id="picture-input">
						<input type="text" class="search" onfocus="if(this.value==this.defaultValue)this.value=''" 
						onblur="if(this.value=='')this.value=this.defaultValue" value="Search&hellip;" />
					</div>
						<input class="hledat" type="image" src="img/search-button.gif" name="" value="Search" alt="Search" />
			</fieldset>
			</form>
			<!-- Search form end -->		
		
		<!-- Menu -->
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul id="menu">
			<li><a href="pemilik_kost.php" class="active">Tambah Data Kost</a></li>
			<li><a href="lihatdatakost.php">Lihat Data Kost</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<!-- Menu end -->
	</div>
	<!-- Header end -->
	
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<div id="content">

		<!-- Middle and right column wrapper-->
		<div id="column-1">

			<!-- Middle column -->
			<div id="column-11">
	<form action="prosesdatakost.php" method="post" name="myForm" action="prosesinsertdatakost.php" method="post" align="center">
     <table align="center">
         <tr><center><td>username</td><td> : <input type="text"  name="username" value="<?php echo $username ; ?>"></td></center></tr>
         <tr><center><td>Nama Kost</td><td> : <input name="nama_kost" type="text"></td></center></tr>
         <tr><center><td>Nama pemilik</td><td> : <input name="nama_pemilik" type="text"></td></center></tr>
         <tr><center><td>No telp</td><td> : <input name="no_telp" type="text"></td></center></tr>
         <tr><center><td>Alamat</td><td> : <input name="alamat" type="text"></td></center></tr>
         <tr><center><td>Kecamatan</td><td> : <input name="kecamatan" type="text"></td></center></tr>
         <tr><center><td>Kelurahan</td><td> : <input name="kelurahan" type="text"></td></center></tr>
         <tr><center><td>Fasilitas</td><td> : <input name="fasilitas" type="text"></td></center></tr>
         <tr><center><td>Jumlah kamar</td><td> : <input name="jumlah" type="text"></td></center></tr>
         <tr><center><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></center></tr>
     </table>
   </form>
							<div class="cleaner">&nbsp;</div>

					
			</div>
			<!-- Middle column end -->

			<!-- Right column -->
			<div id="column-12">
				
						<div class="cleaner">&nbsp;</div>

			</div>
			<!-- Right column end -->
		</div>
		<!-- Middle and right column wrapper end-->

		<!-- Left column -->
		
		<!-- Right column end -->
		<div class="cleaner">&nbsp;</div>
	</div>

<hr class="noscreen" />
	
	<!-- Footer -->
	<div id="footer">
		<div id="footer-in">
			<p class="footer-left">&copy; <a href="#">E-KOSTAN</a>, 2016.</p>
		  <p class="footer-right">Design by <a href="#">B.R.A Team</a></p>
	  </div>
</div>
	<!-- Footer end -->

</body>
</html>

<html>

<head>
<script>
function validateForm()
{
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
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
		
		<!-- Menu -->
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
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul id="menu">
			<li><a href="admin.php">Home</a></li>
			<li><a href="#" class="active">Tambah Pemilik</a></li>
			<li><a href="view_pemkost.php">Lihat Pemilik</a></li>
			<li><a href="#">Lihat order</a></li>
			<li><a Whref="logout.php">Logout</a></li>
		</ul>
		<!-- Menu end -->
	</div>
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<div id="content">

		<!-- Middle and right column wrapper-->
		<div id="column-1">

			<!-- Middle column -->
			<h1>Pendaftaran Pemilik Kost</h1>
			<div class="login">
   <form action="prosesdaftarkost.php" method="post" name="myForm" action="insert_pemkost.php" onSubmit="return validateForm();">
     <table>
       <tbody>
         <tr><td colspan="2" align="center"></td></tr>
		 <tr><td>Nama    </td><td> : <input name="nama" type="text"></td></tr>
		 <tr><td>Email   </td><td> : <input name="email" type="text"></td></tr>
         <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
         <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
         <tr><td>Alamat</td><td> : <input name="alamat" type="alamat"></td></tr>
         <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  
       </tbody>
     </table>
   </form>
	</div>
			<!-- Middle column end -->

			<!-- Right column -->
		
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

</body>
</html>
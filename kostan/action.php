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
		
		<!-- Menu -->
		<a href="#skip-menu" class="hidden">Skip menu</a>

	</div>
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<div id="content">

		<!-- Middle and right column wrapper-->
		<div id="column-1">

			<!-- Middle column -->
			<caption><h1>Edit Pemilik Kost</h1></caption>
			
   
   <?php
include "config.php";
$action = strtolower($_POST['action']);
$username = $_REQUEST['username'];

if ($action == "delete")
{
echo "Anda memilih aksi delete pada record $username... <br/>";
$delete = "delete from user where username = '$username'";
$delete_query = mysql_query($delete);
if ($delete_query) echo "Record $username berhasil dihapus!<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=view_pemkost.php'>";
else echo "Gagal menghapus record<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=view_pemkost.php'>";
}

else 
{
$select = "select * from user where username= '$username'";
$select_query = mysql_query($select);

while($select_result = mysql_fetch_array($select_query))
    {
    	$username = $select_result['username'];
    	$nama = $select_result['nama'];
		$email = $select_result['email'];
		$password=$select_result['password'];



?>

<form action="update.php" method="POST">
<table border='1' width='35%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#FFFFF">
<input type="hidden" name="id" size="30" value="<?php echo $id ; ?>" maxlength="50"/>
<tr><td>Username</td><td><input type="text" name="username" value="<?php echo $username ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Email</td><td><input type="text" name="email" value="<?php echo $email ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Password Baru</td><td><input type="password" name="password" value="<?php echo $password ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td></td><td><input type="submit" name="kirim" value="Update!"/></td></tr>
</table>
</form>

<?php
    }
}
?>

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

<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
// query untuk mendapatkan record dari username
$query = "SELECT * FROM user WHERE username = '$username' && password='$password'" or die(mysql_error());
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

// cek kesesuaian password
if(!$username && !$pass ) {
     echo "<script>alert('ada data yang belum diisi')</script>";
     echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=login.php'>";
   }
else if ($password == $data['password']){
	echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    header('location: pages.php');
}
else {
	echo "<script>alert ('Login gagal')</script>";
	echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=login.php'>";
}
?>
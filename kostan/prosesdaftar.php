<?php
require_once("config.php");
$username = $_POST['username'];
$pass = $_POST['password'];
//$level=$_POST['level'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
if(mysql_num_rows($cekuser) > 0) {
   echo "<script>alert('username sudah ada,silahkan ganti nama username anda')</script>";
   echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=daftar.php'>";
} else {
   if(!$username || !$pass ||!$nama || !$email ) {
     echo "<script>alert('ada data yang belum diisi')</script>";
     echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=daftar.php'>";
   } else {
     $simpan = mysql_query("INSERT INTO user(username, password, level) VALUES('$username','$pass','user')");
     if($simpan) {
       echo "<script>alert('pendaftaran sukses')</script>";
       echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=index.php'>";
     } else {
       echo "Proses Gagal!";
     }
   }
}
?>

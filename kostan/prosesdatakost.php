<?php
require_once("config.php");
$username = $_POST['username'];
$nama_kost = $_POST['nama_kost'];
$nama_pemilik = $_POST['nama_pemilik'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$fasilitas=$_POST['fasilitas'];
$jumlah=$_POST['jumlah'];

   if(!$username ||!$nama_kost||!$nama_pemilik || !$no_telp|| !$alamat|| !$kecamatan || !$kelurahan|| !$fasilitas|| !$jumlah ) {
     echo "<script>alert('ada data yang belum diisi')</script>";
     echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=pemilik_kost.php'>";
   } else {
     $simpan = mysql_query("INSERT INTO data_kost(username, nama_kost, nama_pemilik, no_telp, alamat, kecamatan, kelurahan, fasilitas, jumlah) VALUES('$username','$nama_kost','$nama_pemilik','$no_telp','$alamat','$kecamatan','$kelurahan','$fasilitas','$jumlah')");
     if($simpan) {
       echo "<script>alert('sukses')</script>";
       echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=pemilik_kost.php'>";
     } else {
       echo "Proses Gagal!";
     }
   }
?>

<?php
require_once("config.php");
$username=$_POST['username'];
$nama_kost = $_POST['nama_kost'];
$nama_pemilik = $_POST['nama_pemilik'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$fasilitas=$_POST['fasilitas'];
$jumlah=$_POST['jumlah'];

$query_insert = "insert into data_kost(username, nama_kost, nama_pemilik, no_telp, alamat,kecamatan,kelurahan,fasilitas,jumlah)
                                                   values('$username', '$nama_kost', '$nama_pemilik', '$no_telp',
                                                   '$alamat','$kecamatan','$kelurahan','$fasilitas','$jumlah');";



$insert = mysql_query($query_insert);

if($insert)
    {
    include("pemilik_kost.php");
    echo "<script>alert('data berhasil di masukan')</script>";
    echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=pemilik_kost.php'>";
    }

?>
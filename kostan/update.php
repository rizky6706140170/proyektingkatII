<?php
include "config.php";
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['password'];
$level=$_POST['level']='pemilik_kost';


$query_update = "update user set username = '$username', nama = '$nama',
                  email = '$email' , password = '$pass' where username='$username'";



$update = mysql_query($query_update);

if($update)
    {
    echo "<script>alert ('update data berhasil')</script>";
   	echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=view_pemkost.php'>";
    }

else
    {
    echo "Gagal update ... ";
    echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=view_pemkost.php'>";
    }
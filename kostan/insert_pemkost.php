<?php
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];
//$level=$_POST['level'];
$nama = $_POST['nama'];
$email = $_POST['email'];




$query_insert = "insert into user(nama, email, username, password, level)
                                                   values('$nama', '$email', '$username', '$password',
                                                   'pemilik_kost');";

$insert = mysql_query($query_insert);

if($insert)
    {
    include("tambah_pemkost.php");
    }

else
    {
    echo "Gagal update ... ";
    echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=view_pemkost.php'>";
    }

?>
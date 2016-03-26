<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "administrator")
   {   
   	  echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=admin.php'>";
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "pemilik_kost")
   {
      echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=pemilik_kost.php'>";
   }
   else if ($_SESSION['level'] == "user")
   {
      echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=hal_user.php'>";
   }
}
if (!isset($_SESSION['level']))
{
	header('location:../index.php');
}

 ?>
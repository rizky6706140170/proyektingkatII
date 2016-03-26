<?php
session_start();
unset($_SESSION['username']);
?>
<center>
  <?php
echo "<script>alert ('terimakasih')</script>";
echo "<META HTTP-EQUIV=Refresh CONTENT='0.5; URL=login.php'>";
?>
</center>

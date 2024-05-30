<?php
include("../connection/connection.php");
session_start();
$uid=$_SESSION["uid"];

if(isset($_POST['btnok']))
{
header("Location:../user/homepage.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include("link.php"); ?>
</head>

<body>
<?php include("header.php");?>
<form id="form1" name="form1" method="post" action="">
<div style=" margin-top:200px; margin-left:400px; margin-bottom:200px;">
  <table width="598" height="169" border="0">
    <tr>
      <td><p><b>Your Documents Have Been Send To The Showroom.</p>
      <p>Plese Check Your Notifications For Further <b>Payment Session.</b></b></p>
      <p>Thank You........</p></td>
    </tr>
    <tr>
      <td><center><input type="submit" name="btnok" id="btnok" value="OK" /></center></td>
    </tr>
  </table></div>
</form>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
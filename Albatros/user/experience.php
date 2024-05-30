<?php
include("../connection/connection.php");
session_start();
// ob_start();
$uid=$_SESSION['uid'];

if(isset($_POST['btnsubmit']))
{
	$ex=$_POST['txtaex'];
$sel="INSERT INTO tbl_experience(user_id,experience)values('".$_SESSION["uid"]."','$ex')";
	//echo $sel;
	mysql_query($sel); 
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
<div style=" margin-top:100px; margin-left:200px;">
  <table width="617" height="311" border="0">
    <tr>
      <td width="261">Write Down Your Experiences </td>
      <td width="340"><label for="txtaex">
        <textarea name="txtaex" id="txtaex" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table></div>
</form>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
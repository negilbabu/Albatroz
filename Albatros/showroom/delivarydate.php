<?php
include("../connection/connection.php");

if(isset($_POST['btnsubmit']))
{
	$date=$_POST['txtddate'];

	$cart_id=$_GET['cart_id'];
	$sql=mysql_query("UPDATE tbl_cart SET delivery_date='$date' WHERE cart_id='$cart_id'");
	header("Location:../showroom/homepage.php");

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?php include("link.php");?>
  </head>
  <body>
	 <?php include("header.php");?>
<form id="form1" name="form1" method="post" action="">
 <center> <table width="430" height="156" border="1">
    <tr>
      <td>Enter Delivary Date</td>
      <td><label for="txtddate"></label>
      <input type="date" name="txtddate" id="txtddate" required="required" /></td>
    </tr>
    <tr><center>
      <td colspan="2"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </center></tr>
  </table>
  </center>
</form>
<?php include("footer.php");?>
  

  <!-- loader -->
<?php include("script.php");?>
</body>
</html>
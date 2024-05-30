<?php
session_start();
echo "userid:".$_SESSION["uid"];
if(isset($_POST['btnsbooking']))
{
	header("location:../user/service.php");
}
if(isset($_POST['btngallery']))
{
	header("location:../user/gallery.php");
}
if(isset($_POST['btnnotifi']))
{
	header("location:../user/notification.php");
}
if(isset($_POST['btnrating']))
{
	header("location:../user/rating.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <input type="submit" name="btnsbooking" id="btnsbooking" value="Service Booking" />
  </p>
  <p>
    <input type="submit" name="btngallery" id="btngallery" value="Gallery" />
  </p>
  <p>
    <input type="submit" name="btnnotifi" id="btnnotifi" value="Notification" />
  </p>
  <p>
    <input type="submit" name="btnrating" id="btnrating" value="Rating" />
  </p>

</form>
</body>
</html>
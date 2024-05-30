<?php
include("../connection/connection.php");
session_start();
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
<div style="margin-top:85px; margin-left:170px;">
<table>
<?php

$uid=$_SESSION['uid'];
$row=mysql_query("select * from tbl_cart where user_id='$uid'");
while($data=mysql_fetch_array($row))
{
$status=$data['showroom_status'];
$cartid=$data['cart_id'];
if($status==1)
{
?>
<tr><?php	echo "Order Accepted,";?>
    <a href="documentsubmit.php?id=<?php echo $cartid;?>">Click to Proceed</a></br></tr>
    <?php
    
}else if($status==2)
{
	?>
	<tr><?php echo "Order Rejected,";?>
    <a href="gallery.php">Click to Proceed</a></br></tr>
    <?php
}else
{
	echo "Order Pending";
}
?>
<?php
}
?>
<?php
$q=mysql_query("select * from tbl_cart where user_id='".$uid."'");
$r=mysql_fetch_array($q);
$date=$r["delivery_date"];
$q1=mysql_query("select datediff(curdate(),'$date') as ab");
$r1=mysql_fetch_array($q1);
$days=$r1["ab"];
$q2=mysql_query("select * from tbl_service_remider");
while($r2=mysql_fetch_array($q2))
{
	$day=$r2["reminder_date"];
	if($days>=85 && $days<=90)
	{
	?>
	<tr><td>Your Car first service have to be done in   <?php  echo ($day-$days);?> days</td></tr>
	
    <?php }
	else if($days>=175 && $days<=180)
	{
	?>
	<tr><td>Your Car second service have to be done in   <?php  echo ($day-$days);?> days</td></tr>
	
    <?php }

	else if($days>=175 && $days<=180)
	{
	?>
	<tr><td>Your Car Third service have to be done in   <?php  echo ($day-$days);?> days</td></tr>
	<?php 
	}

?>
    
<?php }
$q3=mysql_query("select * from tbl_cart ca inner join tbl_documents do on ca.cart_id=do.cart_id where ca.user_id='$uid' and do.document_status='1'");

while($d1=mysql_fetch_array($q3))
{
?>
<tr><td>Your Request has been Accepted please conform user payment</td><td><a href="viewpaymentdetials.php?cartid=<?php echo $d1["cart_id"];?>" ><img src="../icon/payment.png" width="40px" height="40px" /></a></td></tr>


<?php 
}
?>
</table></div>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
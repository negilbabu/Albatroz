<?php
include("../connection/connection.php");
session_start();
$sid=$_SESSION['sid'];
if($_GET["accept"]!="")
{
	$accept=$_GET['accept'];
	$a='Accepted';
	$sql=mysql_query("UPDATE tbl_service_booking SET service_status='$a' WHERE service_id='$accept'");
	header("location:..//showroom//service_status.php");
}
if($_GET["reject"]!="")
{
	$reject=$_GET['reject'];
	$a='Rejected';
	$sql=mysql_query("UPDATE tbl_service_booking SET service_status='$a' WHERE service_id='$reject'");
	header("location:..//showroom//service_status.php");
}
if($_GET["processstarted"]!="")
{
	$processstarted=$_GET['processstarted'];
	$a='Processing';
	$sql=mysql_query("UPDATE tbl_service_booking SET service_status='$a' WHERE service_id='$processstarted'");
	header("location:..//showroom//service_status.php");
}
if($_GET["finished"]!="")
{
	$finished=$_GET['finished'];
	$a='Finished';
	$sql=mysql_query("UPDATE tbl_service_booking SET service_status='$a' WHERE service_id='$finished'");
	header("location:..//showroom//service_status.php");
}
if($_GET["delivered"]!="")
{
	$delivered=$_GET['delivered'];
	$a='Delivered';
	$sql=mysql_query("UPDATE tbl_service_booking SET service_status='$a' WHERE service_id='$delivered'");
	header("location:..//showroom//service_status.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <?php include("link.php");?>
  </head>
  <body>
	 <?php include("header.php");?>
<form id="form1" name="form1" method="post" action="">
 <h1>Booked Users</h1>
  <table width="556" height="257" border="0">
    <tr>
     <?php
		$query=mysql_query("select * from tbl_service_booking a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id WHERE a.service_status='Booked' and a.showroom_id='$sid'");
		while($data=mysql_fetch_array($query))
		{
			$service_id=$data['service_id'];
			$model=$data['model_name'];
			$submodel=$data['submodel_name'];
			$fname=$data['fname'];
			$lname=$data['lname'];
			$vno=$data['vehicle_no'];
			$km=$data['km_status'];
			$date=$data['service_date'];
			?>
      <td width="274">Model Name</td>
      <td width="272"><?php echo $model;?></td>
    </tr>
    <tr>
      <td>SubModel Name</td>
      <td><?php echo $submodel;?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    </tr>
    <tr>
      <td>Vehicle Number</td>
      <td><?php echo $vno;?></td>
    </tr>
    <tr>
      <td>Kilometer Status</td>
      <td><?php echo $km;?></td>
    </tr>
    <tr>
      <td>Service Booking Date</td>
      <td><?php echo $date;?></td>
    </tr>
    <tr>
      <center>
        <td colspan="2"><a href="service_status.php?accept=<?php echo $service_id;?>">Accept</a>&nbsp;&nbsp;<a href="service_status.php?reject=<?php echo $service_id;?>">Reject</a></td>
      </center>
    </tr>
    <?php
		}
		?>
  </table>
   <h1>Accepted Users</h1>
  <table width="556" height="257" border="0">
    <tr>
     <?php
		$query=mysql_query("select * from tbl_service_booking a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id WHERE a.service_status='Accepted' and a.showroom_id='$sid'");
		while($data=mysql_fetch_array($query))
		{
			$service_id=$data['service_id'];
			$model=$data['model_name'];
			$submodel=$data['submodel_name'];
			$fname=$data['fname'];
			$lname=$data['lname'];
			$vno=$data['vehicle_no'];
			$km=$data['km_status'];
			$date=$data['service_date'];
			?>
      <td width="274">Model Name</td>
      <td width="272"><?php echo $model;?></td>
    </tr>
    <tr>
      <td>SubModel Name</td>
      <td><?php echo $submodel;?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    </tr>
    <tr>
      <td>Vehicle Number</td>
      <td><?php echo $vno;?></td>
    </tr>
    <tr>
      <td>Kilometer Status</td>
      <td><?php echo $km;?></td>
    </tr>
    <tr>
      <td>Service Booking Date</td>
      <td><?php echo $date;?></td>
    </tr>
    <tr>
      <center>
        <td colspan="2"><a href="service_status.php?processstarted=<?php echo $service_id;?>">Process Started</a></td>
      </center>
    </tr>
    <?php
		}
		?>
  </table>
   <h1>Processing Users</h1>
  <table width="556" height="257" border="0">
    <tr>
     <?php
		$query=mysql_query("select * from tbl_service_booking a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id WHERE a.service_status='Processing' and a.showroom_id='$sid'");
		while($data=mysql_fetch_array($query))
		{
			$service_id=$data['service_id'];
			$model=$data['model_name'];
			$submodel=$data['submodel_name'];
			$fname=$data['fname'];
			$lname=$data['lname'];
			$vno=$data['vehicle_no'];
			$km=$data['km_status'];
			$date=$data['service_date'];
			?>
      <td width="274">Model Name</td>
      <td width="272"><?php echo $model;?></td>
    </tr>
    <tr>
      <td>SubModel Name</td>
      <td><?php echo $submodel;?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    </tr>
    <tr>
      <td>Vehicle Number</td>
      <td><?php echo $vno;?></td>
    </tr>
    <tr>
      <td>Kilometer Status</td>
      <td><?php echo $km;?></td>
    </tr>
    <tr>
      <td>Service Booking Date</td>
      <td><?php echo $date;?></td>
    </tr>
    <tr>
      <center>
        <td colspan="2"><a href="service_status.php?finished=<?php echo $service_id;?>">Finished</a></td>
      </center>
    </tr>
    <?php
		}
		?>
  </table>
   <h1>Finished Users</h1>
  <table width="556" height="257" border="0">
    <tr>
     <?php
		$query=mysql_query("select * from tbl_service_booking a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id WHERE a.service_status='Finished' and a.showroom_id='$sid'");
		while($data=mysql_fetch_array($query))
		{
			$service_id=$data['service_id'];
			$model=$data['model_name'];
			$submodel=$data['submodel_name'];
			$fname=$data['fname'];
			$lname=$data['lname'];
			$vno=$data['vehicle_no'];
			$km=$data['km_status'];
			$date=$data['service_date'];
			?>
      <td width="274">Model Name</td>
      <td width="272"><?php echo $model;?></td>
    </tr>
    <tr>
      <td>SubModel Name</td>
      <td><?php echo $submodel;?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    </tr>
    <tr>
      <td>Vehicle Number</td>
      <td><?php echo $vno;?></td>
    </tr>
    <tr>
      <td>Kilometer Status</td>
      <td><?php echo $km;?></td>
    </tr>
    <tr>
      <td>Service Booking Date</td>
      <td><?php echo $date;?></td>
    </tr>
    <tr>
      <center>
        <td colspan="2"><a href="service_status.php?delivered=<?php echo $service_id;?>">Delivered</a></td>
      </center>
    </tr>
    <?php
		}
		?>
  </table>
   <h1>Delivered Users</h1>
  <table width="556" height="257" border="0">
    <tr>
     <?php
		$query=mysql_query("select * from tbl_service_booking a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id WHERE a.service_status='Delivered' and a.showroom_id='$sid'");
		while($data=mysql_fetch_array($query))
		{
			$service_id=$data['service_id'];
			$model=$data['model_name'];
			$submodel=$data['submodel_name'];
			$fname=$data['fname'];
			$lname=$data['lname'];
			$vno=$data['vehicle_no'];
			$km=$data['km_status'];
			$date=$data['service_date'];
			?>
      <td width="274">Model Name</td>
      <td width="272"><?php echo $model;?></td>
    </tr>
    <tr>
      <td>SubModel Name</td>
      <td><?php echo $submodel;?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    </tr>
    <tr>
      <td>Vehicle Number</td>
      <td><?php echo $vno;?></td>
    </tr>
    <tr>
      <td>Kilometer Status</td>
      <td><?php echo $km;?></td>
    </tr>
    <tr>
      <td>Service Booking Date</td>
      <td><?php echo $date;?></td>
    </tr>
   
    <?php
		}
		?>
  </table>
</form>
<?php include("footer.php");?>
  

  <!-- loader -->
<?php include("script.php");?>
</body>
</html>
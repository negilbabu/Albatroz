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
<?php include("link.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="tb.css">
<style>


* {font-family: 'Open Sans', sans-serif;}

.rwd-table {
  margin: auto;
  min-width: 300px;
  max-width: 100%;
  border-collapse: collapse;
}

.rwd-table tr:first-child {
  border-top: none;
  background: #428bca;
  color: #fff;
}

.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd):not(:first-child) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}
@media screen and (max-width: 601px) {
  .rwd-table tr:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}


/* THE END OF THE IMPORTANT STUFF */

/* Basic Styling */

h1 {
  text-align: center;
  font-size: 2.4em;
  color: #0033FF;
}
.container {
  display: block;
  text-align: center;
}
h3 {
  display: inline-block;
  position: relative;
  text-align: center;
  font-size: 1.5em;
  color: #cecece;
}
h3:before {
  content: "\25C0";
  position: absolute;
  left: -50px;
  -webkit-animation: leftRight 2s linear infinite;
  animation: leftRight 2s linear infinite;
}
h3:after {
  content: "\25b6";
  position: absolute;
  right: -50px;
  -webkit-animation: leftRight 2s linear infinite reverse;
  animation: leftRight 2s linear infinite reverse;
}
@-webkit-keyframes leftRight {
  0%    { -webkit-transform: translateX(0)}
  25%   { -webkit-transform: translateX(-10px)}
  75%   { -webkit-transform: translateX(10px)}
  100%  { -webkit-transform: translateX(0)}
}
@keyframes leftRight {
  0%    { transform: translateX(0)}
  25%   { transform: translateX(-10px)}
  75%   { transform: translateX(10px)}
  100%  { transform: translateX(0)}
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #0066CC;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #039;
}

</style>
<title>Untitled Document</title>
</head>
<?php include("navbar.php"); ?>
<?php include("header.php"); ?>
<body>
<body>
<form id="form1" name="form1" method="post" action="">
<div style=" margin-top:200px;">
<h1>Service Details</h1>
 <h1>Booked Users</h1>
  <table width="556" height="257" border="0" class="rwd-table">
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
  <table width="556" height="257" border="0" class="rwd-table">
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
  </div>
  <div style="margin-left:1%; margin-top:50px;" >

  <div class="container">
   <h3>End</h3>
  </div>
</form>
</body>
<?php include("script.php"); ?>
</html>
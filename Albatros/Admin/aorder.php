<?php
include("../connection/connection.php");
if($_GET["id"]!="")
{
	$accept=$_GET['id'];
	$a=1;
	$sql=mysql_query("UPDATE tbl_cart SET showroom_status='$a' WHERE user_id='$accept'");
}
if($_GET["reject"]!="")
{
	$reject=$_GET['reject'];
	$a=2;
	$sql=mysql_query("UPDATE tbl_cart SET showroom_status='$a' WHERE user_id='$reject'");
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
<form id="form1" name="form1" method="post" action="">
<div style=" margin-top:200px;">
<h1>Order Detials</h1>
<table width="827" height="163" border="0" class="rwd-table">
  <tr>
    <td>User Name</td>
    <td>Contact Number</td>
    <td>Model Name</td>
    <td>No of Vehicles</td>
    <td>Grand Total</td>
    <td>Booking Date</td>
     </tr>
  <?php

		$query=mysql_query("select * from tbl_cart a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id ");
		while($data=mysql_fetch_array($query))
		{
			 $uid=$data['user_id'];
			 $fname=$data["fname"];
			 $lname=$data["lname"];
			 $contact=$data["contact"];
			 $smname=$data['submodel_name'];
			 $price=$data['price'];
			 $mname=$data['model_name'];
			 $nov=$data['no_of_vehicle'];
			 $total=$data['grand_total'];
			 $date=$data['order_date'];
			 ?>

  <tr>
    <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    <td><?php echo $contact;?></td>
    <td><?php echo $mname;?>&nbsp;<?php echo $smname;?></td>
    <td><?php echo $nov;?></td>
    <td><?php echo $total;?></td>
    <td><?php echo $date;?></td>
    
  </tr>
  <?php
		}
		?>
        <?php $query1=mysql_query("select * from tbl_cart a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id WHERE a.showroom_status='1' and a.showroom_id='$sid' and a.cart_id in(select cart_id from tbl_documents )");

		while($data1=mysql_fetch_array($query1))
		{
					 $uid=$data1['user_id'];
			 $fname=$data1["fname"];
			 $lname=$data1["lname"];
			 $contact=$data1["contact"];
			 $smname=$data1['submodel_name'];
			 $price=$data1['price'];
			 $mname=$data1['model_name'];
			 $nov=$data1['no_of_vehicle'];
			 $total=$data1['grand_total'];
			 $date=$data1['order_date'];
			 ?>

  <tr>
    <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    <td><?php echo $contact;?></td>
    <td><?php echo $mname;?>&nbsp;<?php echo $smname;?></td>
    <td><?php echo $nov;?></td>
    <td><?php echo $total;?></td>
    <td><?php echo $date;?></td>
    <td><a href="documentsview.php?view=<?php echo $uid;?>"><img src="../icon/eye.png" width="40px" height="40px" /></a>&nbsp;&nbsp;<a href="order.php?delete=<?php echo $uid;?>"><img src="../icon/trash.png" width="40px" height="40px" /></a></td>
  </tr>
            
            
            <?php
		}
			?>
</table>
  </div>
  <div style="margin-left:1%; margin-top:50px;" >

  <div class="container">
   <h3>End</h3>
  </div>
</form>

</body>
<?php include("script.php"); ?>
</html>
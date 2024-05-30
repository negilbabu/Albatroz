<?php
include("../connection/connection.php");
if($_GET["id"]!="")
{
	$accept=$_GET['id'];
	$a=1;
	$sql=mysql_query("UPDATE tbl_showroom_reg SET status='$a' WHERE showroom_id='$accept'");
}
if($_GET["reject"]!="")
{
	$reject=$_GET['reject'];
	$a=2;
	$sql=mysql_query("UPDATE tbl_showroom_reg SET status='$a' WHERE showroom_id='$reject'");
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
<h1>Showroom Accept Reject Details</h1>
  <table width="979" height="198" border="0" class="rwd-table">
    <tr>
         
        
       <td width="90">Showroom ID</td>
      <td width="110">Showroom Name</td>
      <td width="123">Showroom Address</td>
      <td width="90">District</td>
      <td width="97">Place</td>
      <td width="127">Showroom License</td>
      <td width="111">License Number</td>
      <td width="83">Contact</td>
      <td width="100">Email</td>
      <td width="100">Action</td>
    </tr>
       <?php
		$query=mysql_query("select * from tbl_showroom_reg a inner join tbl_place b on a.place_id=b.place_id inner join tbl_district c on c.district_id=b.district_id WHERE a.status='0'");
		while($data=mysql_fetch_array($query))
		{
			$sid=$data['showroom_id'];
			$sname=$data['showroom_name'];
			$address=$data['address'];
			$district=$data['district_name'];
			$place=$data['place_name'];
			$contact=$data['contact'];
			$email=$data['email'];
			$uname=$data['user_name'];
			$showroom_proof=$data['showroom_proof'];
			$proof_no=$data['proof_no'];
			?>
    <tr>
      <td><?php echo $sid;?></td>
      <td><?php echo $sname;?></td>
      <td><?php echo $address;?></td>
      <td><?php echo $district;?></td>
      <td><?php echo $place;?></td>
      <td><img src ="../Admin/showroomphotos/<?php echo $showroom_proof;?>" width="100" height="100"/></td>
      <td><?php echo $proof_no;?></td>
      <td><?php echo $contact;?></td>
      <td><?php echo $email;?></td>
      <td><a href="acceptreject.php?id=<?php echo $sid;?>">Accept</a>&nbsp;&nbsp;<a href="acceptreject.php?reject=<?php echo $sid;?>">Reject</a></td>
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

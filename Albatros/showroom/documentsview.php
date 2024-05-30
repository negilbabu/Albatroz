<?php
include("../connection/connection.php");
if($_GET["id"]!="")
{
	$accept=$_GET['id'];
	$cart = $_GET['cart_id'];
	$a=1;
	$sql=mysql_query("UPDATE tbl_documents SET document_status='$a' WHERE cart_id='$accept'");
	//header("Location: delivarydate.php?accept=$accept&cart_id=$cart");
}
if($_GET["reject"]!="")
{
	$reject=$_GET['reject'];
	$a=2;
	$sql=mysql_query("UPDATE tbl_documents SET document_status='$a' WHERE cart_id='$reject'");
}
if($_GET["view"]!="")
{
$uid=$_GET['view'];
}

			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

 <?php include("link.php");?>
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

  </head>
  <body>
	 <?php include("header.php");?>
<form>
<div style=" margin-top:100px;">
  <table width="1111" height="141" border="0" class="rwd-table">
    <tr>
      <td>User Name</td>
      <td>Photo</td>
      <td>Proof Of Nationality <br />
( Voter ID / SSLC / Passport )</td>
      <td>ID Proof <br />
      ( Driving License / PAN Card / Aadhar)</td>
      <td>Address Proof <br />
( Electricity Bill / Ration Card / Rent Agreement )</td>
      <td>Income Certificate</td>
      <td>Bank Passbook</td>
      <td>Action</td>
    </tr>
    <?php
	$query=mysql_query("select * from tbl_user_reg b  inner join tbl_cart a on b.user_id=a.user_id inner join tbl_documents c on a.cart_id=c.cart_id");
while($data=mysql_fetch_array($query))
		{
			 $userid=$data['user_id'];
			 $fname=$data["fname"];
			 $lname=$data["lname"];
			 $photo=$data['photo'];	
			 $pon=$data['proof_of_nationality'];
			 $idproof=$data['id_proof'];
			 $addressproof=$data['address_proof'];
			 $ic=$data['income_certificate'];
			 $bp=$data['bank_passbook'];
			 $cart_id = $data['cart_id'];
			 $status=$data['document_status'];
			 ?>
   
    <tr>
      <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
      <td><a href="#" onclick="window.open('../showroom/documents/<?php echo $photo; ?>','width=600,height=400')"><img src="../icon/fileviewer.png" width="40px" height="40px" /></a></td>
      <td><a href="#" onclick="window.open('../showroom/documents/<?php echo $pon; ?>','width=600,height=400')"><img src="../icon/fileviewer.png" width="40px" height="40px" /></a></td> 
      <td><a href="#" onclick="window.open('../showroom/documents/<?php echo $idproof; ?>','width=600,height=400')"><img src="../icon/fileviewer.png" width="40px" height="40px" /></a></td>
      <td><a href="#" onclick="window.open('../showroom/documents/<?php echo $addressproof; ?>','width=600,height=400')"><img src="../icon/fileviewer.png" width="40px" height="40px" /></a></td>
      <td><a href="#" onclick="window.open('../showroom/documents/<?php echo $ic; ?>','width=600,height=400')"><img src="../icon/fileviewer.png" width="40px" height="40px" /></a></td>
      <td><a href="#" onclick="window.open('../showroom/documents/<?php echo $bp; ?>','width=600,height=400')"><img src="../icon/fileviewer.png" width="40px" height="40px" /></a></td>
     <?php
	 if($status==0)
	 {
		 ?>
      <td><a href="documentsview.php?id=<?php echo $cart_id;?>&cart_id=<?php echo $cart_id ?>">Accept</a>&nbsp;&nbsp;<a href="documentsview.php?reject=<?php echo $cart_id;?>">Reject</a></td>
      <?php
      }else if($status==1)
	  {
		  ?>
       <td>Accepted</td>
       <?php
	  }else
	  {
		  ?>
       <td>Rejected</td>
       <?php
	  }
	  ?>
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
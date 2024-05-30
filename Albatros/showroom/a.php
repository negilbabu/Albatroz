<?php
include("../connection/connection.php");
session_start();
$sid=$_SESSION["sid"];

//$row=mysql_query("select * from tbl_cart a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id inner join tbl_specs spec on spec.submodel_id=c.submodel_id inner join tbl_showroom_reg sh on a.showroom_id=sh.showroom_id inner join tbl_models mo on c.model_id=mo.model_id inner join tbl_place p on p.place_id=sh.place_id inner join tbl_district di on p.district_id=di.district_id inner join tbl_carphotos car on spec.submodel_id=car.submodel_id WHERE a.payment_status='1' and a.user_id='$uid' ");


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
	 <?php include("header.php");?>>
<form id="form1" name="form1" method="post" action="">
<div style=" margin-top:100px;">
  <table width="403" height="308" border="0" class="rwd-table">
     <tr>
      <td>Photo</td>&nbsp;
      <td>Name</td>&nbsp;
       <td>Contact</td>&nbsp;
       <td>Email</td>&nbsp;
       <td>Address</td>&nbsp;
       <td>District</td>&nbsp;
       <td>Showroom</td>&nbsp;
       <td>Model</td>&nbsp;
       <td>Submodel</td>&nbsp;
       <td>Car Image</td>&nbsp;
       <td>Price</td>&nbsp;
       <td>Colour</td>&nbsp;
       <td>Fuel Type</td>&nbsp;
       <td>No Of Vehicle</td>&nbsp;
        <td>Grand Total</td>&nbsp;
        <td>Order Date</td>&nbsp;
        <td>Delivary Date</td>&nbsp;
        </tr>
        <?php
		$query=mysql_query("select * from tbl_cart a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id inner join tbl_specs spec on spec.submodel_id=c.submodel_id inner join tbl_showroom_reg sh on a.showroom_id=sh.showroom_id inner join tbl_models mo on c.model_id=mo.model_id inner join tbl_place p on p.place_id=sh.place_id inner join tbl_district di on p.district_id=di.district_id inner join tbl_carphotos car on spec.submodel_id=car.submodel_id WHERE a.payment_status='1' and a.showroom_id='$sid' ");
		while($data=mysql_fetch_array($query))
		{
			$cid=$data["cart_id"];	
			$uphoto=$data["photo"];		 
			 $fname=$data["fname"];
			 $lname=$data["lname"];
			 $contact=$data["contact"];
			 $email=$data["email"];
			 $address=$data["address"];
			 $district=$data["district_name"];
			  $showroom=$data["showroom_name"];
			   $model=$data["model_name"];
			    $submodel=$data["submodel_name"];
				$photo=$data["photo_name"];
			$price=$data["price"];
			$color=$data["color"];
			 $fuel=$data["fuel_type"];
			 $nov=$data["no_of_vehicle"];
			 $total=$data["grand_total"];
			$date=$data['order_date'];
			 $ddate=$data['delivary_date'];
			 ?>
			
       <tr>
      <td><img src ="../showroom/documents/<?php echo $uphoto;?>"  width="100" height="70"/></td>
      
      <td><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
   
      <td><?php echo $contact;?></td>
   
      <td><?php echo $email;?></td>
   
      <td><?php echo $address;?></td>
   
      <td><?php echo $district;?></td>
    
      <td><?php echo $showroom;?></td>
   
      <td><?php echo $model;?></td>
   
      <td><?php echo $submodel;?></td>
    
      <td><img src ="../Admin/car info/car photos/<?php echo $photo;?>"  width="100" height="70"/></td>
   
      <td><?php echo $price;?></td>
    
      <td><?php echo $color;?></td>
   
      <td><?php echo $fuel;?></td>
    
      <td><?php echo $nov;?></td>

      <td><?php echo $total;?></td>
     <td><?php echo $date;?></td>
   <td><?php echo $ddate;?></td>
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
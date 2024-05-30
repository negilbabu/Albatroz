<?php
include("../connection/connection.php");
session_start();

if($_GET["id"]!="")
{
$id=$_GET['id'];
$sel="select * from tbl_specs a inner join tbl_carphotos b on a.submodel_id=b.submodel_id where a.submodel_id='$id'";

	//echo $sel;
	$row=mysql_query($sel);
	while($data=mysql_fetch_array($row))
	{
		$smid=$data['submodel_id'];
		$photos=$data['photo_name'];
		$body_type=$data['body_type'];
		$price=$data['price'];
		$color=$data['color'];
		$insurance=$data['insurance'];
		$avg_service_cost=$data['avg_service_cost'];
		$engine_type=$data['engine_type'];
		$displacement=$data['displacement'];
		$max_power=$data['max_power'];
		$max_torque=$data['max_torque'];
		$fuel_supply_system=$data['fuel_supply_system'];
		$transmission_type=$data['transmission_type'];
		$gear_box=$data['gear_box'];
		$drive_type=$data['drive_type'];
		$length=$data['length'];
		$width=$data['width'];
		$height=$data['height'];
		$boot_space=$data['boot_space'];
		$seat_capacity=$data['seat_capacity'];
		$ground_clearence=$data['ground_clearence'];
		$wheel_base=$data['wheel_base'];
		$no_of_doors=$data['no_of_doors'];
		$fuel_type=$data['fuel_type'];
		$mileage=$data['mileage'];
		$fuel_tank_capacity=$data['fuel_tank_capacity'];
		$top_speed=$data['top_speed'];
		$front_suspension=$data['front_suspension'];
		$rear_suspension=$data['rear_suspension'];
		$shock_absorber_type=$data['shock_absorber_type'];
		$steering_type=$data['steering_type'];
		$front_brake_type=$data['front_brake_type'];
		$rear_brake_type=$data['rear_brake_type'];
		$acceleration=$data['acceleration'];
	}
}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<h1>Car Buy Details</h1>
 <p>Photos
  </p>
  <table width="319" height="171" border="0"  class="rwd-table">
    <tr>
      <td><img src ="../Admin/car info/car photos/<?php echo $photos;?>" width="350" height="171"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p></p>
  <table width="539" height="153" border="0"  class="rwd-table">
   <tr>
    <th colspan="2">Key Specifications</th></tr>
    <tr>
      <td width="276">Body Type</td>
      <td width="253"><?php echo $body_type;?></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><?php echo $price;?></td>
    </tr>
    <tr>
      <td>Color</td>
      <td><?php echo $color;?></td>
    </tr>
    <tr>
      <td>Insurance</td>
      <td><?php echo $insurance;?></td>
    </tr>
    <tr>
      <td>Avg Sevice Cost</td>
      <td><?php echo $avg_service_cost;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="541" height="215" border="0"  class="rwd-table">
    <tr>
    <th colspan="2"> Engine and Transmission</th></tr><tr>
      <td >Engine Type </td>
      <td ><?php echo $engine_type;?></td>
    </tr>
    <tr>
      <td>Displacement(cc)</td>
      <td><?php echo $displacement;?></td>
    </tr>
    <tr>
      <td>Max Power(bhp@rpm)</td>
      <td><?php echo $max_power;?></td>
    </tr>
    <tr>
      <td>Max Torque(nm@rpm)</td>
      <td><?php echo $max_torque;?></td>
    </tr>
    <tr>
      <td>Fuel Supply System</td>
      <td><?php echo $fuel_supply_system;?></td>
    </tr>
    <tr>
      <td>Transmission Type</td>
      <td><?php echo $transmission_type;?></td>
    </tr>
    <tr>
      <td>Gear Box</td>
      <td><?php echo $gear_box;?></td>
    </tr>
    <tr>
      <td>Drive Type</td>
      <td><?php echo $drive_type;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
 
  <table width="540" height="219" border="0"  class="rwd-table">
    <tr>
    <th colspan="2">Dimension and Capacity</th></tr>
    <tr>
      <td width="279">Length(mm)</td>
      <td width="251"><?php echo $length;?></td>
    </tr>
    <tr>
      <td>Width(mm)</td>
      <td><?php echo $width;?></td>
    </tr>
    <tr>
      <td>Height(mm)</td>
      <td><?php echo $height;?></td>
    </tr>
    <tr>
      <td><p>Boot Space(Litre)</p></td>
      <td><?php echo $boot_space;?></td>
    </tr>
    <tr>
      <td>Seat Capacity</td>
      <td><?php echo $seat_capacity;?></td>
    </tr>
    <tr>
      <td>Ground Clearence(mm)</td>
      <td><?php echo $ground_clearence;?></td>
    </tr>
    <tr>
      <td><p>Wheel Base(mm)</p></td>
      <td><?php echo $wheel_base;?></td>
    </tr>
    <tr>
      <td>Number of Doors</td>
      <td><?php echo $no_of_doors;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="534" height="124" border="0"  class="rwd-table">
    <tr>
    <th colspan="2">Fuel and Perfomanace</th></tr>
    <tr>
      <td width="280">Fuel Type</td>
      <td width="244"><?php echo $fuel_type;?></td>
    </tr>
    <tr>
      <td>Mileage</td>
      <td><?php echo $mileage;?></td>
    </tr>
    <tr>
      <td>Fuel Tank Capacity(Liter)</td>
      <td><?php echo $fuel_tank_capacity;?></td>
    </tr>
    <tr>
      <td>Top Speed(kmph)</td>
      <td><?php echo $top_speed;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
 
  <table width="535" height="201" border="0"  class="rwd-table">
    <tr>
    <th colspan="2">Suspension,Stearing and Break</th></tr>
    <tr>
      <td>Front Suspension</td>
      <td><?php echo $front_suspension;?></td>
    </tr>
    <tr>
      <td>Rear Suspension</td>
      <td><?php echo $rear_suspension;?></td>
    </tr>
    <tr>
      <td>Shock Absorber Type</td>
      <td><?php echo $shock_absorber_type;?></td>
    </tr>
    <tr>
      <td>Steering Type</td>
      <td><?php echo $steering_type;?></td>
    </tr>
    <tr>
      <td>Front Brake Type</td>
      <td><?php echo $front_brake_type;?></td>
    </tr>
    <tr>
      <td>Rear Brake Type</td>
      <td><?php echo $rear_brake_type;?></td>
    </tr>
    <tr>
      <td>Acceleration</td>
      <td><?php echo $acceleration;?></td>
    </tr>
  </table>
 
</form>
<h3>End</h3>
  </div>
  <p>&nbsp;</p>
</form>
</body>
<?php include("script.php"); ?>
</html>
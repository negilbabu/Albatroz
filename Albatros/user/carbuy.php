<?php
include("../connection/connection.php");
session_start();

if($_GET["id"]!="")
{
$id=$_GET['id'];
$sel="select * from tbl_specs a inner join tbl_carphotos b on a.submodel_id=b.submodel_id where a.submodel_id='$id'";
}
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
 <p>
  </p>
  <center>
  <table width="319" height="171" border="0">
    <tr>
      <td><img src ="../Admin/car info/car photos/<?php echo $photos;?>" width="319" height="171"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p><h4><b>Key Specifications</b></h4></p>
  <table width="539" height="153" border="0">
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
  <p><h4><b>Engine and Transmission</b> </h4></p>
  <table width="541" height="215" border="0">
    <tr>
      <td width="276">Engine Type </td>
      <td width="255"><?php echo $engine_type;?></td>
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
  <p><h4><b>Dimension and Capacity</b></h4></p>
  <table width="540" height="219" border="0">
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
  <p><h4><b>Fuel and Perfomanace</b></h4></p>
  <table width="534" height="124" border="0">
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
  <p><h4><b>Suspension,Stearing and Break</b></h4></p>
  <table width="535" height="201" border="0">
    <tr>
      <td width="270">Front Suspension</td>
      <td width="255"><?php echo $front_suspension;?></td>
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
  </center>
  <p>
    <center><a href="bookingconfirm.php?id=<?php echo $smid;?>">Confirm Booking</a></center>
   
  </p>
</form>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
<?php
include("../connection/connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form>
<?php
	$submodelid=$_REQUEST['id'];
	
	$sel="select * from tbl_specs a inner join tbl_carphotos b on a.submodel_id=b.submodel_id where a.submodel_id='".$submodelid."'";
	//echo $sel;
	$row=mysql_query($sel);
	while($data=mysql_fetch_array($row))
	{
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
	
?>
<?php
	}
	?>
 <p>&nbsp;
  </p>
  <br>
  <table >
    <tr>
      <td><img src ="../Admin/car info/car photos/<?php echo $photos;?>" width="319" height="171"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
 
  <table >
    <tr>
     
      <td width="253"><?php echo $body_type;?></td>
    </tr>
    <tr>
      
      <td><?php echo $price;?></td>
    </tr>
    <tr>
      
      <td><?php echo $color;?></td>
    </tr>
    <tr>
      
      <td><?php echo $insurance;?></td>
    </tr>
    <tr>
      
      <td><?php echo $avg_service_cost;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
 
  <table >
    <tr>
      
      <td ><?php echo $engine_type;?></td>
    </tr>
    <tr>
      
      <td><?php echo $displacement;?></td>
    </tr>
    <tr>
            <td><?php echo $max_power;?></td>
    </tr>
    <tr>
     
      <td><?php echo $max_torque;?></td>
    </tr>
    <tr>
      
      <td><?php echo $fuel_supply_system;?></td>
    </tr>
    <tr>

      <td><?php echo $transmission_type;?></td>
    </tr>
    <tr>
     
      <td><?php echo $gear_box;?></td>
    </tr>
    <tr>
     
      <td><?php echo $drive_type;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
 
  <table >
    <tr>
      
      <td ><?php echo $length;?></td>
    </tr>
    <tr>
      
      <td><?php echo $width;?></td>
    </tr>
    <tr>
      
      <td><?php echo $height;?></td>
    </tr>
    <tr>
      
      <td><?php echo $boot_space;?></td>
    </tr>
    <tr>
      
      <td><?php echo $seat_capacity;?></td>
    </tr>
    <tr>
      
      <td><?php echo $ground_clearence;?></td>
    </tr>
    <tr>
     
      <td><?php echo $wheel_base;?></td>
    </tr>
    <tr>
      
      <td><?php echo $no_of_doors;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
    <table >
    <tr>
      
      <td ><?php echo $fuel_type;?></td>
    </tr>
    <tr>
      
      <td><?php echo $mileage;?></td>
    </tr>
    <tr>
     
      <td><?php echo $fuel_tank_capacity;?></td>
    </tr>
    <tr>
      
      <td><?php echo $top_speed;?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <br/>
  <br /><br /><br />
  <table >
    <tr>
     
      <td ><?php echo $front_suspension;?></td>
    </tr>
    <tr>
     
      <td><?php echo $rear_suspension;?></td>
    </tr>
    <tr>
      <td><?php echo $shock_absorber_type;?></td>
    </tr>
    <tr>
      <td><?php echo $steering_type;?></td>
    </tr>
    <tr>
      <td><?php echo $front_brake_type;?></td>
    </tr>
    <tr>
      <td><?php echo $rear_brake_type;?></td>
    </tr>
    <tr>
      <td><?php echo $acceleration;?></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="btnbook" id="btnbook" value="Book Now" />
    <input type="submit" name="btncompare" id="btncompare" value="Compare" />
  </p>
</form>
</body>
</html>
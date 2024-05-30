<?php
include("../../connection/connection.php");
$val="--select--";
if(isset($_POST['btnsave']))
{
$stlsubmodel=$_POST['stlsubmodel'];
$txtbodytype=$_POST['txtbodytype'];
$txtprice=$_POST['txtprice'];
$txtcolor=$_POST['txtcolor'];
$txtinsurance=$_POST['txtinsurance'];
$txtservicecost=$_POST['txtservicecost'];
$txtenginetype=$_POST['txtenginetype'];
$txtdisplacement=$_POST['txtdisplacement'];
$txtmaxpower=$_POST['txtmaxpower'];
$txtmaxtorque=$_POST['txtmaxtorque'];
$txtfuelsupplysystem=$_POST['txtfuelsupplysystem'];
$txttransmissiontype=$_POST['txttransmissiontype'];
$txtgearbox=$_POST['txtgearbox'];
$txtdrivetype=$_POST['txtdrivetype'];
$txtlength=$_POST['txtlength'];
$txtwidth=$_POST['txtwidth'];
$txtheight=$_POST['txtheight'];
$txtbootspace=$_POST['txtbootspace'];
$txtseatcapacity=$_POST['txtseatcapacity'];
$txtgroundclearence=$_POST['txtgroundclearence'];
$txtwheelbase=$_POST['txtwheelbase'];
$txtnoofdoor=$_POST['txtnoofdoors'];
$txtfueltype=$_POST['txtfueltype'];
$txtmileage=$_POST['txtmileage'];
$txttankcapacity=$_POST['txttankcapacity'];
$txttopspeed=$_POST['txttopspeed'];
$txtfsuspension=$_POST['txtfsuspension'];
$txtrsuspension=$_POST['txtrsuspension'];
$txtshockabsorbertype=$_POST['txtshockabsorbertype'];
$txtsteeringtype=$_POST['txtsteeringtype'];
$txtfbraketype=$_POST['txtfbraketype'];
$txtrbraketype=$_POST['txtrbraketype'];
$txtaccelaration=$_POST['txtacceleration'];

$sql=mysql_query("insert into tbl_specs(submodel_id,body_type,price,color,insurance,avg_service_cost,engine_type,displacement,max_power,max_torque,fuel_supply_system,transmission_type,gear_box,drive_type,length,width,height,boot_space,seat_capacity,ground_clearence,wheel_base,no_of_doors,fuel_type,mileage,fuel_tank_capacity,top_speed,front_suspension,rear_suspension,shock_absorber_type,steering_type,front_brake_type,rear_brake_type,acceleration)values('$stlsubmodel','$txtbodytype','$txtprice','$txtcolor','$txtinsurance','$txtservicecost','$txtenginetype','$txtdisplacement','$txtmaxpower','$txtmaxtorque','$txtfuelsupplysystem','$txttransmissiontype','$txtgearbox','$txtdrivetype','$txtlenght','$txtwidth','$txtheight','$txtbootspace','$txtseatcapacity','$txtgroundclearence','$txtwheelbase','$txtnoofdoor','$txtfueltype','$txtmileage','txttankcapacity','$txttopspeed','$txtfsuspension','$txtrsuspension','$txtshockabsorbertype','$txtsteeringtype','$txtfbraketype','$txtrbraketype','$txtaccelaration')");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("link.php"); ?>
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
<script src="jQuery.js" type="text/javascript"></script>
        <script>
             function getSubmodel(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_Submodel.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#stlsubmodel").html(result);
                    }});
             }
       
             
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("navbar.php"); ?>
<?php include("header.php"); ?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="532" height="131" border="0" class="rwd-table">
    <tr>
      <td>Model Name</td>
      <td><select name="stlmodel" id="stlmodel" onchange="getSubmodel(this.value)" required>
      <option value=""><?php echo $val;?></option>
        <?php
		$query=mysql_query("select * from tbl_models");
		while($data=mysql_fetch_array($query))
		{
			$model_id=$data['model_id'];
			$model_name=$data['model_name'];
			?>
        <option value="<?php echo $model_id;?>"><?php echo $model_name;?>
        </option>
		<?php 
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Sub Model Name</td>
      <td><select name="stlsubmodel" id="stlsubmodel">
       <option>---select---</option>
      </select></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  </p>
  <table width="539" height="153" border="0" class="rwd-table">
  <tr><th><b><h4>Key  Features</h4></b></th></tr>
    <tr>
      <td width="276">Body Type</td>
      <td width="253"><input type="text" name="txtbodytype" id="txtbodytype" /></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input type="text" name="txtprice" id="txtprice" /></td>
    </tr>
    <tr>
      <td>Color</td>
      <td><input type="text" name="txtcolor" id="txtcolor" /></td>
    </tr>
    <tr>
      <td>Insurance</td>
      <td><input type="text" name="txtinsurance" id="txtinsurance" /></td>
    </tr>
    <tr>
      <td>Avg Sevice Cost</td>
      <td><input type="text" name="txtservicecost" id="txtservicecost" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="541" height="215" border="0" class="rwd-table">
  <tr><th><b><h4>Engine and Transmission </h4></b></th></tr>
    <tr>
      <td width="276">Engine Type </td>
      <td width="255"><input type="text" name="txtenginetype" id="txtenginetype" /></td>
    </tr>
    <tr>
      <td>Displacement(cc)</td>
      <td><input type="text" name="txtdisplacement" id="txtdisplacement" /></td>
    </tr>
    <tr>
      <td>Max Power(bhp@rpm)</td>
      <td><input type="text" name="txtmaxpower" id="txtmaxpower" /></td>
    </tr>
    <tr>
      <td>Max Torque(nm@rpm)</td>
      <td><input type="text" name="txtmaxtorque" id="txtmaxtorque" /></td>
    </tr>
    <tr>
      <td>Fuel Supply System</td>
      <td><input type="text" name="txtfuelsupplysystem" id="txtfuelsupplysystem" /></td>
    </tr>
    <tr>
      <td>Transmission Type</td>
      <td><input type="text" name="txttransmissiontype" id="txttransmissiontype" /></td>
    </tr>
    <tr>
      <td>Gear Box</td>
      <td><input type="text" name="txtgearbox" id="txtgearbox" /></td>
    </tr>
    <tr>
      <td>Drive Type</td>
      <td><input type="text" name="txtdrivetype" id="txtdrivetype" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="540" height="219" border="0" class="rwd-table">
   <tr><th><b><h4>Dimension and Capacity</h4></b></th></tr>
    <tr>
      <td width="279">Length(mm)</td>
      <td width="251"><input type="text" name="txtlength" id="txtlength" /></td>
    </tr>
    <tr>
      <td>Width(mm)</td>
      <td><input type="text" name="txtwidth" id="txtwidth" /></td>
    </tr>
    <tr>
      <td>Height(mm)</td>
      <td><input type="text" name="txtheight" id="txtheight" /></td>
    </tr>
    <tr>
      <td><p>Boot Space(Litre)</p></td>
      <td><input type="text" name="txtbootspace" id="txtbootspace" /></td>
    </tr>
    <tr>
      <td>Seat Capacity</td>
      <td><input type="text" name="txtseatcapacity" id="txtseatcapacity" /></td>
    </tr>
    <tr>
      <td>Ground Clearence(mm)</td>
      <td><input type="text" name="txtgroundclearence" id="txtgroundclearence" /></td>
    </tr>
    <tr>
      <td><p>Wheel Base(mm)</p></td>
      <td><input type="text" name="txtwheelbase" id="txtwheelbase" /></td>
    </tr>
    <tr>
      <td>Number of Doors</td>
      <td><input type="text" name="txtnoofdoors" id="txtnoofdoors" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
 
  <table width="534" height="124" border="0" class="rwd-table">
   <tr><th><b><h4>Fuel and Perfomanace</h4></b></th></tr>
    <tr>
      <td>Fuel Type</td>
      <td><input type="text" name="txtfueltype" id="txtfueltype" /></td>
    </tr>
    <tr>
      <td>Mileage</td>
      <td><input type="text" name="txtmileage" id="txtmileage" /></td>
    </tr>
    <tr>
      <td>Fuel Tank Capacity(Liter)</td>
      <td><input type="text" name="txttankcapacity" id="txttankcapacity" /></td>
    </tr>
    <tr>
      <td>Top Speed(kmph)</td>
      <td><input type="text" name="txttopspeed" id="txttopspeed" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  <table width="535" height="201" border="0" class="rwd-table">
  <tr><th><b><h4>Suspension,Stearing and Break</h4></b></th></tr>
    <tr>
      <td width="270">Front Suspension</td>
      <td width="255"><input type="text" name="txtfsuspension" id="txtfsuspension" /></td>
    </tr>
    <tr>
      <td>Rear Suspension</td>
      <td><input type="text" name="txtrsuspension" id="txtrsuspension" /></td>
    </tr>
    <tr>
      <td>Shock Absorber Type</td>
      <td><input type="text" name="txtshockabsorbertype" id="txtshockabsorbertype" /></td>
    </tr>
    <tr>
      <td>Steering Type</td>
      <td><input type="text" name="txtsteeringtype" id="txtsteeringtype" /></td>
    </tr>
    <tr>
      <td>Front Brake Type</td>
      <td><input type="text" name="txtfbraketype" id="txtfbraketype" /></td>
    </tr>
    <tr>
      <td>Rear Brake Type</td>
      <td><input type="text" name="txtrbraketype" id="txtrbraketype" /></td>
    </tr>
    <tr>
      <td>Acceleration</td>
      <td><input type="text" name="txtaccelaration" id="txtaccelaration" /></td> 
    </tr>
  </table>
  <p><center>
  <input type="submit" name="btnsave" id="btnsave" value="Save" />
  <input type="submit" name="btncancel" id="btncancel" value="Cancel" />
</center></p>
</form>
</body>
<?php include("script.php"); ?>
</html>
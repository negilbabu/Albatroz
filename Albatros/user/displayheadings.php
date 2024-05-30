<?php
include("../connection/connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 10%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 1px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form>
 <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
  <p><h2>Photos</h2>
  </p>
  <br /> 
  <table>
    <tr>
    
    </tr>
  </table>
<br /><br /><br /><br /><br /><br /><br />
  <p><h2>Key Specifications</h2></p>
  <table>
    <tr>
      <td >Body Type</td>
    </tr>
    <tr>
      <td>Price</td>
    </tr>
    <tr>
      <td>Color</td>
    </tr>
    <tr>
      <td>Insurance</td>
    </tr>
    <tr>
      <td>Avg Sevice Cost</td>
    </tr>
  </table>

  <p><h2>Engine and Transmission</h2> </p>
  <table >
    <tr>
      <td width="276">Engine Type </td>
    </tr>
    <tr>
      <td>Displacement(cc)</td>
    </tr>
    <tr>
      <td>Max Power(bhp@rpm)</td>
    </tr>
    <tr>
      <td>Max Torque(nm@rpm)</td>
    </tr>
    <tr>
      <td>Fuel Supply System</td>
    </tr>
    <tr>
      <td>Transmission Type</td>
    </tr>
    <tr>
      <td>Gear Box</td>
    </tr>
    <tr>
      <td>Drive Type</td>
    </tr>
  </table>

  <p><h2>Dimension and Capacity</h2></p>
  <table >
    <tr>
      <td >Length(mm)</td>
    </tr>
    <tr>
      <td>Width(mm)</td>
    </tr>
    <tr>
      <td>Height(mm)</td>
    </tr>
    <tr>
      <td>Boot Space(Litre)</td>
    </tr>
    <tr>
      <td>Seat Capacity</td>
    </tr>
    <tr>
      <td>Ground Clearence(mm)</td>
    </tr>
    <tr>
      <td>Wheel Base(mm)</td>
    </tr>
    <tr>
      <td>Number of Doors</td>
    </tr>
  </table>
 
  <p><h2>Fuel and Perfomanace</h2></p>
  <table >
    <tr>
      <td >Fuel Type</td>
    </tr>
    <tr>
      <td>Mileage</td>
    </tr>
    <tr>
      <td>Fuel Tank Capacity(Liter)</td>
    </tr>
    <tr>
      <td>Top Speed(kmph)</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p><h2>Suspension,Stearing and Break</h2></p>
  <table >
    <tr>
      <td >Front Suspension</td>
    </tr>
    <tr>
      <td>Rear Suspension</td>
    </tr>
    <tr>
      <td>Shock Absorber Type</td>
    </tr>
    <tr>
      <td>Steering Type</td>
    </tr>
    <tr>
      <td>Front Brake Type</td>
    </tr>
    <tr>
      <td>Rear Brake Type</td>
    </tr>
    <tr>
      <td>Acceleration</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
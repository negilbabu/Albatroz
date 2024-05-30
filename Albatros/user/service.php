<?php
include("../connection/connection.php");
session_start();
$val="--Select--";
if(isset($_POST['btnbooknow']))
{
	$user_id=$_SESSION['uid'];
	$submodel_id=$_POST['stlsubmodel'];
	$showroom_id=$_POST['sltshowroom'];
	$vno=$_POST['txtvehiclenumber'];
	$km=$_POST['txtkm'];
	$date=$_POST['txtdate'];
	$sql=mysql_query("insert into tbl_service_booking(user_id,submodel_id,showroom_id,vehicle_no,km_status,service_date)values('$user_id','$submodel_id','$showroom_id','$vno','$km','$date')");
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jQuery.js" type="text/javascript"></script>
        <script>
             function getServicemodel(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_Servicemodel.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#stlsubmodel").html(result);
                    }});
             }
       
             
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include("link.php"); ?>
</head>

<body>
<?php include("header.php");?>
<div style="margin-top:85px; margin-left:170px; margin-bottom:200px">
<form id="form1" name="form1" method="post" action="">
<center>
  <table width="556" height="257" border="0">
    <tr>
      <td>Model Name</td>
      <td><select name="stlmodel" id="stlmodel" onchange="getServicemodel(this.value)" required>
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
      <td>SubModel Name</td>
      <td><label>
       <select name="stlsubmodel" id="stlsubmodel">
       <option>---select---</option>
      </select>
      </label></td>
    </tr>
    <tr>
      <td>Showroom</td>
      <td><select name="sltshowroom" id="sltshowroom">
       <option value=""><?php echo $val;?></option>
        <?php
		$query=mysql_query("select * from tbl_showroom_reg where service_availability='Yes'");
		while($data=mysql_fetch_array($query))
		{
			$showroom_id=$data['showroom_id'];
			$showroom_name=$data['showroom_name'];
			?>
        <option value="<?php echo $showroom_id;?>"><?php echo $showroom_name;?>
        </option>
		<?php 
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Vehicle Number</td>
      <td><label>
        <input type="text" name="txtvehiclenumber" id="txtvehiclenumber" />
      </label></td>
    </tr>
    <tr>
      <td>Kilometer Status</td>
      <td><label>
        <input type="text" name="txtkm" id="txtkm" />
      </label></td>
    </tr>
    <tr>
      <td>Service Booking Date</td>
      <td><label>
        <input type="DATE" name="txtdate" id="txtdate" />
      </label></td>
    </tr>
    
    <tr><center>
      <td><input type="submit" name="btnbooknow" id="btnbooknow" value="Book Now" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
  </center>  </tr>
  </table>
  </center>
</form>
</div>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
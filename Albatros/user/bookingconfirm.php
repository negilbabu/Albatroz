<?php
include("../connection/connection.php");
session_start();
$uid=$_SESSION["uid"];
$selQuery = "select * from tbl_user_reg where user_id='$uid'";
echo $selQuery;
$row=mysql_query($selQuery);
 while($data=mysql_fetch_array($row))
 {
	 $fname=$data["fname"];
	 $lname=$data["lname"];
	 $contact=$data["contact"];
 }
 if($_GET["id"]!="")
{
$id=$_GET['id'];
$sel="select * from tbl_specs a inner join tbl_submodel b on a.submodel_id=b.submodel_id where a.submodel_id='$id'";
}
	//echo $sel;
	$row=mysql_query($sel);
	while($data=mysql_fetch_array($row))
	{
		$modelid=$data['model_id'];
		$smname=$data['submodel_name'];
		$price=$data['price'];
	}
$row=mysql_query("select * from tbl_models where model_id='$modelid'");
 while($data=mysql_fetch_array($row))
 {
	 $mname=$data['model_name'];
 }
 if(isset($_POST['btnnext']))
{
$uid=$_SESSION['uid'];	
$showroomid=$_POST['sltshowroom'];
$submodelid=$_GET['id'];
$nov=$_POST['txtnoofvehicle'];
$grandtotal=$_POST['txtgrandtotal'];
$sql=mysql_query("INSERT INTO tbl_cart(user_id,showroom_id,submodel_id,no_of_vehicle,grand_total,order_date)VALUES('$uid','$showroomid','$submodelid','$nov','$grandtotal',curdate())");
header("Location:../user/msg.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jQuery.js" type="text/javascript"></script>
        <script>
             function getPlace(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_Placeuser.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#sltplace").html(result);
                    }});
             }
			  function getShowroom(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_showroom.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#sltshowroom").html(result);
                    }});
             }
			 function getTotal(qun)
			 {
				 var price=parseInt($('#price').val());
				 var q=parseInt(qun);
				 var total=price*q;
				 $('#txtgrandtotal').val(total);
			 }
       
             
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include("link.php"); ?>
</head>

<body>
<?php include("header.php");?>
<form id="form1" name="form1" method="post" action="">
  <table width="485" height="255" border="0">
    <tr>
      <td>District</td>
     <td><select name="sltdistrict" id="sltdistrict" onchange="getPlace(this.value)" required>
       <option value=""><?php echo $val;?></option>
        <?php
		$query=mysql_query("select * from tbl_district");
		while($data=mysql_fetch_array($query))
		{
			$district_id=$data['district_id'];
			$district_name=$data['district_name'];
			?>
        <option value="<?php echo $district_id;?>"><?php echo $district_name;?>
        </option>
		<?php 
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label>
        <select name="sltplace" id="sltplace" onchange="getShowroom(this.value)" required>
        <option>---select---</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Showroom</td>
      <td><label>
        <select name="sltshowroom" id="sltshowroom">
        </select>
      </label></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><?php echo $fname;?>&nbsp<?php echo $lname;?></td>
    </tr>
    <tr>
      <td>Contact Number</td>
      <td><?php echo $contact;?></td>
    </tr>
    <tr>
      <td>Model Name</td>
      <td><?php echo $mname;?>&nbsp<?php echo $smname;?></td>
    </tr>
    <tr>
      <td>No of Vehicles</td>
      <td><label>
      <input type="hidden" id="price" value="<?php echo $price;?>"/>
        <input type="text" name="txtnoofvehicle" id="txtnoofvehicle" onInput="getTotal(this.value)"/>
      </label></td>
    </tr>
    <tr>
      <td>Grand Total</td>
      <td><label>
        <input type="text" name="txtgrandtotal" id="txtgrandtotal" />
      </label></td>
    </tr>
    <tr>
     
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnnext" id="btnnext" value="Next" /></td>
    </tr>
  </table>
</form>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
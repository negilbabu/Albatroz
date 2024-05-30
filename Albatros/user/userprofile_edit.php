<?php
include("../connection/connection.php");
session_start();
$val="--select--";
$sel = "select * from tbl_user_reg  a inner join tbl_place b on a.place_id=b.place_id inner join tbl_district c on c.district_id=b.district_id where user_id='".$_SESSION["uid"]."'";
echo $sel;
$row=mysql_query($sel);
$d=mysql_fetch_array($row);

if(isset($_POST['btnupdate']))
{
	$fname=$_POST['txtfname'];
	$lname=$_POST['txtlname'];
	$address=$_POST['txtaddress'];
	$place=$_POST['sltplace'];
	 $name=$_FILES["fleproof"]["name"];
	$path=$_FILES["fleproof"]["tmp_name"];
	move_uploaded_file($path,"../Admin/userphotos/".$name);
	$pno=$_POST['txtpnumber'];
	$contact=$_POST['txtcontact'];
	$email=$_POST['txtemail'];
	$id=$_SESSION["uid"];
	$upd = "update tbl_user_reg set fname='$fname',lname='$lname',address='$address',place_id='$place',id_proof='$name',proof_no='$pno',contact='$contact',email='$email' where user_id='$id'";
	echo $upd;
	$sql=mysql_query($upd);
	
	echo $sql;
	if($sql==true)
	{
		header("location:homepage.php");
	}
	
}
if(isset($_POST['btncancel']))
{
	header("location:homepage.php");
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
       
             
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include("link.php"); ?>
</head>

<body>
<?php include("header.php");?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<center>
  <table width="420" border="0">
    <tr>
      <td width="140">First Name</td>
      <td width="270"><input type="text" name="txtfname" id="txtfname"  value="<?php echo $d["fname"];?>"/></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="txtlname" id="txtlname" value="<?php echo $d["lname"];?>"/></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="txtaddress" type="text" id="txtaddress" size="45" maxlength="500" value="<?php echo $d["address"];?>"/></td>
    </tr>
    <tr>
      <td>District</td>
      <td><select name="sltdistrict" id="sltdistrict" onclick="getPlace(this.value)" >
       <option value=""><?php echo $d["district_name"];?></option>
        <?php
		$query=mysql_query("select * from tbl_district");
		while($data=mysql_fetch_array($query))
		{
			$district_id=$data['district_id'];
			$district_name=$data['district_name'];
			?>
        <option value="<?php echo $district_id;?>" <?php if($d['district_id']==$data['district_id']){echo "selected"; } ?>><?php echo $district_name;?>
        </option>
		<?php 
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><select name="sltplace" id="sltplace">
       <option><?php echo $d["place_name"];?></option>
      </select></td>
    </tr>
    <tr>
      <td>ID Proof</td>
      <td><input type="file" name="fleproof" id="fleproof" />
      <div>
      <img src ="../Admin/userphotos/<?php echo $d["id_proof"];?>" width="100" height="100"/></td>
      </div></td>
    </tr>
    <tr>
      <td>Proof Number</td>
      <td><input type="text" name="txtpnumber" id="txtpnumber" value="<?php echo $d["proof_no"];?>"/></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><input type="text" name="txtcontact" id="txtcontact" value="<?php echo $d["contact"];?>"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="txtemail" id="txtemail" value="<?php echo $d["email"];?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnupdate" id="btnupdate" value="Update" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
    </table></center>
</form>
</body>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</html>
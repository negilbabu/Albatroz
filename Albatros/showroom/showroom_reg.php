<?php
include("../connection/connection.php");
$val="--select--";
if(isset($_POST['btnsignup']))
{
	$sname=$_POST['txtsname'];
	$saddress=$_POST['txtsaddress'];
	$place=$_POST['sltplace'];
    $name=$_FILES["flelicense"]["name"];
	$path=$_FILES["flelicense"]["tmp_name"];
	move_uploaded_file($path,"../Admin/showroomphotos/".$name);
	$licenseno=$_POST['txtlicense'];
	$contact=$_POST['txtcontact'];
	$email=$_POST['txtemail'];
	$service=$_POST['btnservice'];
	$uname=$_POST['txtuname'];
	$password=$_POST['txtpassword'];
	$cpassword=$_POST['txtcpassword'];
	$sql=mysql_query("INSERT INTO tbl_showroom_reg(showroom_name,address,place_id,contact,email,service_availability,user_name,password,showroom_proof,proof_no) VALUES('$sname','$saddress','$place','$contact','$email','$service','$uname','$password','$name','$licenseno')");
	
	
	header("Location:../showroom/homepage.php");
	
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
						url: "ajax_Place.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#sltplace").html(result);
                    }});
             }
       
             
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>

</head>

<body><center>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="479" height="259" border="0">
    <tr>
      <td width="171">Showroom Name</td>
      <td width="298"><input type="text" name="txtsname" id="txtsname" required="required" pattern="[a-zA-Z. ]{3,}" title="msg" autocomplete="off" placeholder="Enter Name" /></td>
    </tr>
    <tr>
      <td>Showroom Address</td>
      <td><textarea name="txtsaddress" id="txtsaddress" cols="45" rows="1" required="required"></textarea></td>
    </tr>
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
      <td><select name="sltplace" id="sltplace">
      <option>---select---</option>
      </select></td>
    </tr>
    <tr>
      <td>Showroom License</td>
      <td><input type="file" name="flelicense" id="flelicense" required="required" autocomplete="off"/></td>
    </tr>
    <tr>
      <td>License Number</td>
      <td><input type="text" name="txtlicense" id="txtlicense" required="required" autocomplete="off"/></td>
    </tr>
    <tr>
      <td>Service Availabiliy</td>
      <td><label>
        <input type="radio" name="btnservice" value="Yes" required="required" />
      Yes
      <input type="radio" name="btnservice" value="No" />
      No</label></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><input type="text" name="txtcontact" id="txtcontact" required="required" pattern="[0-9]{10,11}" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email" name="txtemail" id="txtemail"  required="required" autocomplete="off"/></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="txtuname" id="txtuname" required="required" autocomplete="off"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="txtpassword" id="txtpassword" required="required" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="txtcpassword" id="txtcpassword"  required="required"/></td>
    </tr>
    <tr><center>
      <td><input type="submit" name="btnsignup" id="btnsignup" value="Sign Up" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
  </center>
</form>
</body>
</html>
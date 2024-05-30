<?php
include("../connection/connection.php");
$val="--select--";
if(isset($_POST['btnsignup']))
{
	$fname=$_POST['txtfname'];
	$lname=$_POST['txtlname'];
	$address=$_POST['txtaddress'];
	$place=$_POST['sltplace'];
	 $name=$_FILES["fleproof"]["name"];
	$path=$_FILES["fleproof"]["tmp_name"];
	move_uploaded_file($path,"../Admin/userphotos/".$name) or die("not inserted");
	$pno=$_POST['txtpnumber'];
	$contact=$_POST['txtcontact'];
	$email=$_POST['txtemail'];
	$dob=$_POST['txtdob'];
	$uname=$_POST['txtusername'];
	$password=$_POST['txtpassword'];
	$sql=mysql_query("INSERT INTO tbl_user_reg(fname,lname,address,place_id,id_proof,proof_no,contact,email,dob,uname,password)VALUES('$fname','$lname','$address','$place','$name','$pno','$contact','$email','$dob','$uname','$password')");
	
header("Location:../user/homepage.php");
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

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center> <table width="420" border="0">
    <tr>
      <td width="140">First Name</td>
      <td width="270"><input type="text" name="txtfname" id="txtfname" required="required" pattern="[a-zA-Z._]{3,}" title="First Name Here" autocomplete="off" placeholder="Enter First Name" /></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="txtlname" id="txtlname" required="required" pattern="[a-zA-Z._]{3,}" title="Last Name Here" autocomplete="off" placeholder="Enter Last Name" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="txtaddress" type="text" id="txtaddress" value="" size="45" maxlength="500" required="required" title="Address here" autocomplete="off" /></td>
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
      <td>ID Proof</td>
      <td><input type="file" name="fleproof" id="fleproof" autocomplete="off" required="required"/></td>
    </tr>
    <tr>
      <td>Proof Number</td>
      <td><input type="text" name="txtpnumber" id="txtpnumber" autocomplete="off" required="required" /></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><input type="text" name="txtcontact" id="txtcontact" autocomplete="off" required="required"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="txtemail" id="txtemail" autocomplete="off" required="required" /></td>
    </tr>
    <tr>
      <td>Date Of Birth</td>
      <td><input type="date" name="txtdob" id="txtdob" autocomplete="off" required="required" /></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="txtusername" id="txtusername" autocomplete="off" required="required" title="User Name here" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="txtpassword" id="txtpassword" required="required" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="txtcpassword" id="txtcpassword" required="required" /></td>
    </tr>
    <tr><center>
      <td><input type="submit" name="btnsignup" id="btnsave" value="Sign Up" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table></center>
</form>
</body>
</html>
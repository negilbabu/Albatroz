<?php
include("../connection/connection.php");
session_start();
// ob_start();
$uid=$_SESSION['uid'];
//if($_GET["id"]!="")
//{
$cid=$_GET['id'];
//}
$selQuery = "select * from tbl_user_reg where user_id='$uid'";
echo $selQuery;
$row=mysql_query($selQuery);
$data=mysql_fetch_array($row);
$fname=$data['fname'];
$lname=$data['lname'];
$contact=$data['contact'];
$email=$data['email'];
if(isset($_POST['btnnext']))
{
	echo "hello";

	$name=$_FILES["flephoto"]["name"];
	$path=$_FILES["flephoto"]["tmp_name"];
	move_uploaded_file($path,"../showroom/documents/".$name);
	$proofn=$_FILES["flepon"]["name"];
	$a=$_FILES["flepon"]["tmp_name"];
	move_uploaded_file($a,"../showroom/documents/".$proofn);
	$idproof=$_FILES["fleidproof"]["name"];
	$b=$_FILES["fleidproof"]["tmp_name"];
	move_uploaded_file($b,"../showroom/documents/".$idproof);
	$addressproof=$_FILES["fleaddressproof"]["name"];
	$c=$_FILES["fleaddressproof"]["tmp_name"];
	move_uploaded_file($c,"../showroom/documents/".$addressproof);
	$ic=$_FILES["fleic"]["name"];
	$d=$_FILES["fleic"]["tmp_name"];
	move_uploaded_file($d,"../showroom/documents/".$ic);
	$bp=$_FILES["flebp"]["name"];
	$e=$_FILES["flebp"]["tmp_name"];
	move_uploaded_file($e,"../showroom/documents/".$bp);
	
	$sel="INSERT INTO tbl_documents(cart_id,photo,proof_of_nationality,id_proof,address_proof,income_certificate,bank_passbook,user_id)values('$cid','$name','$proofn','$idproof','$addressproof','$ic','$bp','".$_SESSION["uid"]."')";
	echo $sel;
	mysql_query($sel);
	header("Location:../user/msg2.php");
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <center><table width="502" height="209" border="0">
    <tr>
      <td width="345">Name</td>
      <td width="147"><?php echo $fname;?>&nbsp;<?php echo $fname;?></td>
    </tr>
    <tr>
      <td>Contact Number</td>
      <td><?php echo $contact;?></td>
    </tr>
    <tr>
      <td>Email id</td>
      <td><?php echo $email;?></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label>
        <input type="file" name="flephoto" id="flephoto" />
      </label></td>
    </tr>
    <tr>
      <td><p>Proof Of Nationality <br> ( Voter ID / SSLC / Passport )</p></td>
      <td><label>
        <input type="file" name="flepon" id="flepon" />
      </label></td>
    </tr>
    <tr>
      <td><p>ID Proof   <br>( Driving License / PAN Card / Aadhar)</p></td>
      <td><label>
        <input type="file" name="fleidproof" id="fleidproof" />
      </label></td>
    </tr>
    <tr>
      <td><p>Address Proof    <br> ( Electricity Bill / Ration Card / Rent Agreement )</p></td>
      <td><label>
        <input type="file" name="fleaddressproof" id="fleaddressproof" />
      </label></td>
    </tr>
    <tr>
      <td>Income Certificate</td>
      <td><label>
        <input type="file" name="fleic" id="fleic" />
      </label></td>
    </tr>
    <tr>
      <td>Bank Passbook</td>
      <td><label>
        <input type="file" name="flebp" id="flebp" />
      </label></td>
    </tr>
    <tr>
      <td><p>
        <input type="submit" name="btnnext" id="btnnext" value="Next" />
      </p></td>
      <td>&nbsp;</td>
    </tr>
  </table></center>
</form>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
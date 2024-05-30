<?php
include("../connection/connection.php");
session_start();

$uid=$_SESSION["uid"];
$row=mysql_query("select * from tbl_user_reg where user_id='$uid'");
 while($data=mysql_fetch_array($row))
 {
	 $fname=$data["fname"];
	 $lname=$data["lname"];
	 $contact=$data["contact"];
 }

$row=mysql_query("select * from tbl_submodel where submodel_id='$submodel'");
 while($data=mysql_fetch_array($row))
 {
	 $submodel=$data["submodel"];
 }



if(isset($_POST['btnsave']))
{
	$sid=$_GET['submodel_id'];
	$rank=$_post['rbtnrank'];
	$review=$_POST['txtareview'];
	$date=date('y-m-d');
	mysql_query("insert into tbl_rating(user_id,submodel_id,rank,review,date) values('$uid','$sid','$rank','$review','$date')");
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="543" height="255" border="0">
    <tr>
      <td width="165" height="48">Name</td>
      <td width="368"><?php echo $fname;?>&nbsp<?php echo $lname;?></td>
    </tr>
    <tr>
      <td height="46">Rating</td>
      <td><label>
        <input type="radio" name="rbtnrank" id="rbtnrank" value="1" />
        <input type="radio" name="rbtnrank" id="rbtnrank" value="2" />
        <input type="radio" name="rbtnrank" id="rbtnrank" value="3" />
        <input type="radio" name="rbtnrank" id="rbtnrank" value="4" />
        <input type="radio" name="rbtnrank" id="rbtnrank" value="5" />
      </label></td>
    </tr>
    <tr>
      <td>Review</td>
      <td><label>
        <textarea name="txtarating2" id="txtarating2" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="66"><input type="submit" name="btnsave" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
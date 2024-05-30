<?php
include("../connection/connection.php");
session_start();

if(isset($_POST['btnlogin']))
{
	$name=$_POST['txtuname'];
	$pass=$_POST['txtpassword'];
	$sql=mysql_query("select * from tbl_showroom_reg where (email='$name' or user_name='$name') and password='$pass'");
	
	if($row=mysql_fetch_array($sql))
	{	
		$_SESSION["name"]=$row["user_name"];
		$_SESSION["sid"]=$row["showroom_id"];
		header("location:../showroom/showroom_home.php");
	}
	else
	{
		echo "Incorrect Username or Password";
	}
}
if(isset($_POST['btnsignup']))
{
	header("location:../showroom/showroom_reg.php");
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
  <table width="339" height="221" border="0">
    <tr>
      <td width="333" height="40"><input type="text" name="txtuname" id="txtuname" placeholder="User name or Email"/></td>
    </tr>
    <tr>
      <td><input type="password" name="txtpassword" id="txtpassword" placeholder="Password"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="btnlogin" id="btnlogin" value="Log In" /></td>
    </tr>
    <tr>
      <td>Forget Password?</td>
    </tr>
    <tr>
      <td><p>
        <input type="submit" name="btnsignup" id="btnsignup" value="Sign Up" /><br>
        <a href="user_login.php">Log In As User</a>
      </p></td>
    </tr>
  </table>
</form>
</body>
</html>
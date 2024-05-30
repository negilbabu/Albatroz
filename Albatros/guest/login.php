<?php
include("../connection/connection.php");
session_start();
if(isset($_POST['btnlogin']))
{
	$name=$_POST['txtuname'];
	$pass=$_POST['txtpassword'];
	$sql=mysql_query("select * from tbl_user_reg where (email='$name' or uname='$name') and password='$pass'");
	
	if($row=mysql_fetch_array($sql))
	{	
		$_SESSION["name"]=$row["uname"];
		$_SESSION["uid"]=$row["user_id"];
		header("location:../user/homepage.php");
	}
	$sql1=mysql_query("select * from tbl_showroom_reg where (email='$name' or user_name='$name') and password='$pass'");
	
	if($row=mysql_fetch_array($sql1))
	{	
		$_SESSION["name"]=$row["user_name"];
		$_SESSION["sid"]=$row["showroom_id"];
		header("location:../showroom/homepage.php");
	}
	$sql2=mysql_query("select * from tbl_admin where admin_username='$name' and admin_password='$pass'");
	
	if($row=mysql_fetch_array($sql2))
	{	
		$_SESSION["name"]=$row["user_name"];
		$_SESSION["sid"]=$row["showroom_id"];
		header("location:../Admin/homepage.php");
	}
	
	else
	{
		echo "Incorrect Username or Password";
	}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Albatroz Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<form method="post">
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Albatroz<span>..</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="txtuname">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="txtpassword">
			<br/>
			<button type="submit" name="btnlogin" value="btnlogin">Sign In</button>
			<br/>
            
            
            Sign Up As
			<a href="../user/User_reg.php"><p class="small">User</p></a>     <a href="../showroom/showroom_reg.php"><p class="small">Showroom</p></a>
		</div>
	</div>
    </form>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>
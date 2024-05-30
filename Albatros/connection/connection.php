<?php
$conn=mysql_connect("localhost","root","") or die("Connection Failed");
$db=mysql_select_db("dbcar",$conn) or die("Database Not Connected");
?>
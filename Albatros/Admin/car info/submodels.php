<?php
include("../../connection/connection.php");
$val="--select--";

if(isset($_POST['btnsave']))
{
	$submodel=$_POST['txtsubmodel'];
	$model=$_POST['sltmodel'];
	if($_GET["edit"]!="")
		{
	$place=$_POST['txtsubmodel'];
	
	$up=$_GET["edit"];
	$sql=mysql_query("UPDATE tbl_submodel SET submodel_name='$submodel' WHERE submodel_id='$up'");
	header("location:submodels.php");
		}
	else{
	$sql=mysql_query("INSERT INTO tbl_submodel(model_id,submodel_name) VALUES('$model','$submodel')");
	if($sql==true)
	{
		echo "VALUES INSERTED";
	}
	}
	
}
$smname=$_GET["name"];
if($_GET["delete"]!="")
{
	$del=$_GET["delete"];
	$sql=mysql_query("DELETE FROM tbl_submodel WHERE submodel_id='$del'");
	header("location:submodels.php");
}
if($_GET["modelname"]!="")
{
$val=$_GET["modelname"];
}
if(isset($_POST['btncancel']))
{
	header("location:submodels.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("link.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>


* {font-family: 'Open Sans', sans-serif;}

.rwd-table {
  margin: auto;
  min-width: 300px;
  max-width: 100%;
  border-collapse: collapse;
}

.rwd-table tr:first-child {
  border-top: none;
  background: #428bca;
  color: #fff;
}

.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd):not(:first-child) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}
@media screen and (max-width: 601px) {
  .rwd-table tr:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}


/* THE END OF THE IMPORTANT STUFF */

/* Basic Styling */

h1 {
  text-align: center;
  font-size: 2.4em;
  color: #0033FF;
}
.container {
  display: block;
  text-align: center;
}
h3 {
  display: inline-block;
  position: relative;
  text-align: center;
  font-size: 1.5em;
  color: #cecece;
}
h3:before {
  content: "\25C0";
  position: absolute;
  left: -50px;
  -webkit-animation: leftRight 2s linear infinite;
  animation: leftRight 2s linear infinite;
}
h3:after {
  content: "\25b6";
  position: absolute;
  right: -50px;
  -webkit-animation: leftRight 2s linear infinite reverse;
  animation: leftRight 2s linear infinite reverse;
}
@-webkit-keyframes leftRight {
  0%    { -webkit-transform: translateX(0)}
  25%   { -webkit-transform: translateX(-10px)}
  75%   { -webkit-transform: translateX(10px)}
  100%  { -webkit-transform: translateX(0)}
}
@keyframes leftRight {
  0%    { transform: translateX(0)}
  25%   { transform: translateX(-10px)}
  75%   { transform: translateX(10px)}
  100%  { transform: translateX(0)}
}
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
  background-color: #0066CC;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #039;
}

</style>
</head>
<?php include("navbar.php"); ?>
<?php include("header.php"); ?>
<body>

<form id="form1" name="form1" method="post" action="">
  <table width="396" height="142" border="0" class="rwd-table">
    <tr>
      <td width="146">Model Name</td>
      <td width="240"><label for="sltmodel"></label>
        <select name="sltmodel" id="sltmodel">
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
      <td><label for="txtsubmodel"></label>
      <input type="text" name="txtsubmodel" id="txtsubmodel" value="<?php echo $smname;?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btnsave" id="btnsave" value="Save" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
  <table width="342" height="85" border="0" class="rwd-table">
    <tr>
      <td>Model</td>
      <td>SubModel</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
      <?php
	  $sel= "select * from tbl_submodel pl inner join tbl_models di on pl.model_id=di.model_id";
	  $row=mysql_query($sel,$conn);
	  while($data=mysql_fetch_array($row))
	  {
		  $mid=$data["model_id"];
		  $smid=$data["submodel_id"];
		  $smname=$data["submodel_name"];
		  $mname=$data["model_name"];
		  ?>
         <tr>
         <td><?php echo $mname;?></td>
         <td><?php echo $smname; ?></td> 
         <td><a href="../car info/submodels.php?edit=<?php echo $smid; ?>&amp;name=<?php echo $smname; ?>&amp;modelname=<?php echo $mname;?>">Edit</a></td> 
         <td><a href="../car info/submodels.php?delete=<?php echo $smid; ?>&amp;name=<?php echo $smname; ?>">Delete</a></td> 
         </tr> 
          <?php
	  }
	  ?>
  </table>
</form>
</body>
<?php include("script.php"); ?>
</html>
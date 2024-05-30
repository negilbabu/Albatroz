<?php
include("../../connection/connection.php");
$val="--select--";
if(isset($_POST['btnsave']))
{
	$smid=$_POST['sltsubmodel'];
	$name=$_FILES["flephoto"]["name"];
	$path=$_FILES["flephoto"]["tmp_name"];
	move_uploaded_file($path,"../../Admin/car info/car photos/".$name) or die("Not inserted");
	$sql=mysql_query("INSERT INTO tbl_carphotos(submodel_id,photo_name)VALUES('$smid','$name')");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jQuery.js" type="text/javascript"></script>
        <script>
             function getModel(a)
             {
				// alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_model.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#sltsubmodel").html(result);
                    }});
             }
       
             
        </script>

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

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="383" height="172" border="0" class="rwd-table">
    <tr>
      <td width="169">Select Model</td>
      <td width="204"><label for="sltmodel"></label>
        <select name="sltmodel" id="sltmodel" onchange="getModel(this.value)" required>
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
      <td>Select SubModel</td>
      <td><label for="sltsubmodel"></label>
        <select name="sltsubmodel" id="sltsubmodel">
         <option>--select--</option>
      </select></td>
    </tr>
    <tr>
      <td>Choose Photo</td>
      <td><label for="flephoto"></label>
      <input type="file" name="flephoto" id="flephoto" /></td>
    </tr>
    <tr><center>
      <td colspan="2"><input type="submit" name="btnsave" id="btnsave" value="Save" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td></center>
    </tr>
  </table>
</form>
</body>
<?php include("script.php"); ?>
</html>
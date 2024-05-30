<?php
include("../../connection/connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<option>---Select---</option>

<?php
	$modelid=$_REQUEST['id'];
	
	$sel="select * from tbl_submodel where model_id='".$modelid."'";
	echo $sel;
	$row=mysql_query($sel);
	while($data=mysql_fetch_array($row))
	{
	
?>
<option value="<?php echo $data['submodel_id']; ?>"><?php echo $data['submodel_name']; ?></option>
<?php
	}
?>
</body>
</html>
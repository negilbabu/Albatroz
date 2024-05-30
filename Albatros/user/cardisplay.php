<?php
include("../connection/connection.php");
$val="--select--";
if(isset($_POST['btnbook']))
{
		header("Location:../user/bookingconfirm.php");
}
if(isset($_POST['btncompare']))
{
		header("Location:../user/compare.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../guest/jQuery.js" type="text/javascript"></script>
        <script>
             function getSubmodel(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_Submodel.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#stlsubmodel").html(result);
                    }});
             }
			 
			 function getSpecs(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_Specs.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#display").html(result);
					//alert(result);
                    }});
             }
			 
			  
             
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include("link.php"); ?>
</head>

<body>
<?php include("header.php");?>
<form id="form1" name="form1" method="post" action="">
  <table width="532" height="131" border="0">
    <tr>
      <td>Model Name</td>
      <td><select name="stlmodel" id="stlmodel" onchange="getSubmodel(this.value)" required="required">
        <option value=""><?php echo $val;?></option>
        <?php
		$query=mysql_query("select * from tbl_models");
		while($data=mysql_fetch_array($query))
		{
			$model_id=$data['model_id'];
			$model_name=$data['model_name'];
			?>
        <option value="<?php echo $model_id;?>"><?php echo $model_name;?> </option>
        <?php 
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Sub Model Name</td>
      <td><select name="stlsubmodel" id="stlsubmodel" onchange="getSpecs(this.value)" required="required">
        <option>---select---</option>
      </select></td>
    </tr>
  </table>
  <div id="display">
  </div>
 
</form>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>
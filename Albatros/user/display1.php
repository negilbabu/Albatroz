<?php
include("../connection/connection.php");
$val="--select--";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 50%;
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
table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 10%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>

<script src="../guest/jQuery.js" type="text/javascript"></script>
        <script>
             function getSubmodel1(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_Submodel1.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#stlsubmodel").html(result);
                    }});
             }
			 
			 function getSpecs1(a)
             {
				 //alert(a);
                    $.ajax(
					{
						//var b=document.getElementById("");
						url: "ajax_Specs1.php?id="+a,
						//data:{variablename:value,variablename:value)}//more than one value passing
						success: function(result){
                    $("#display").html(result);
					//alert(result);
                    }});
             }
			 
			  
             
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>

<form id="form1" name="form1" method="post" action="">
  <table width="532" height="131" border="0">
    <tr>
      <td>Model Name</td>
      <td><select name="stlmodel" id="stlmodel" onchange="getSubmodel1(this.value)" required="required">
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
      <td><select name="stlsubmodel" id="stlsubmodel" onchange="getSpecs1(this.value)" required="required">
        <option>---select---</option>
      </select></td>
    </tr>
  </table>
  <div id="display">
  </div>
 
</form>

</body>
</html>
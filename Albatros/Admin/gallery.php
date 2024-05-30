<?php
include("../connection/connection.php");
session_start();
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
<form>
<table>
<tr>
<?php
$row=mysql_query("select * from tbl_carphotos");
$i=0;

 while($data=mysql_fetch_array($row))
		{
			$subid=$data['submodel_id'];
			?>
            <td><img src ="../Admin/car info/car photos/<?php echo $data["photo_name"];?>" width="250" height="180"/>
            
            <br><center><a href="carbuy.php?id=<?php echo $subid;?>">Detials</a></center></td>
           
          
 
    
    <?php
    if($i==3)
	{
		?>
        </tr>
        <tr>
        <?php
		$i=0;
	
	}
	
    else
	{
	$i=$i+1;
	}
		}
		?>

</table>
</form>
 
 <?php include("script.php"); ?>
</body>
</html>

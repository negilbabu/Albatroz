<?php
include("../connection/connection.php");
session_start();
$uid=$_SESSION["uid"];

$row=mysql_query("select * from tbl_cart a inner join tbl_user_reg b on a.user_id=b.user_id inner join tbl_submodel c on c.submodel_id=a.submodel_id inner join tbl_models d on d.model_id=c.model_id inner join tbl_documents e on e.cart_id=a.cart_id inner join tbl_specs spec on spec.submodel_id=c.submodel_id inner join tbl_showroom_reg sh on a.showroom_id=sh.showroom_id inner join tbl_models mo on c.model_id=mo.model_id inner join tbl_place p on p.place_id=sh.place_id inner join tbl_district di on p.district_id=di.district_id inner join tbl_carphotos car on spec.submodel_id=car.submodel_id WHERE a.showroom_status='1' and e.document_status=1 and a.user_id='$uid' ");


 	if($data=mysql_fetch_array($row))
		{
			
			$cid=$data["cart_id"];	
				
					 
			 $uphoto=$data["photo"];		 
			 $fname=$data["fname"];
			 $lname=$data["lname"];
			 $contact=$data["contact"];
			 $email=$data["email"];
			 $address=$data["address"];
			 $district=$data["district_name"];
			  $showroom=$data["showroom_name"];
			   $model=$data["model_name"];
			    $submodel=$data["submodel_name"];
				$photo=$data["photo_name"];
			$price=$data["price"];
			$color=$data["color"];
			 $fuel=$data["fuel_type"];
			 $nov=$data["no_of_vehicle"];
			 $total=$data["grand_total"];
			
			 	
			$pon=$data['proof_of_nationality'];
			$idproof=$data['id_proof'];
			$addressproof=$data['address_proof'];
			$ic=$data['income_certificate'];
			$bp=$data['bank_passbook'];
			 $date=$data['order_date'];
			 $ddate=$data['delivery_date'];
			 
		}
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
<form id="form1" name="form1" method="post" action="">
  <center><table width="403" height="308" border="0">
    <tr>
      <td>Photo</td>
      <td><?php echo $uphoto;?></td>
    </tr>
    <tr>
      <td width="200">Name</td>
      <td width="193"><?php echo $fname;?>&nbsp;<?php echo $lname;?></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><?php echo $contact;?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $email;?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $address;?></td>
    </tr>
    <tr>
      <td>District</td>
      <td><?php echo $district;?></td>
    </tr>
    <tr>
      <td>Showroom</td>
      <td><?php echo $showroom;?></td>
    </tr>
    <tr>
      <td>Model</td>
      <td><?php echo $model;?></td>
    </tr>
    <tr>
      <td>Submodel</td>
      <td><?php echo $submodel;?></td>
    </tr>
    <tr>
      <td>Car Image</td>
      <td>	<img src ="../Admin/car info/car photos/<?php echo $photo;?>" width="250" height="150" /></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><?php echo $price;?></td>
    </tr>
    <tr>
      <td>Colour</td>
      <td><?php echo $color;?></td>
    </tr>
    <tr>
      <td>Fuel Type</td>
      <td><?php echo $fuel;?></td>
    </tr>
    <tr>
      <td>No Of Vehicle</td>
      <td><?php echo $nov;?></td>
    </tr>
    <tr>
      <td>Grand Total</td>
      <td><?php echo $total;?></td>
    </tr>
    <tr>
      <td>Proof Of Nationality</td>
      <td><a href="../showroom/documents/<?php echo $pon;?>" target="_blank">Proof Of Nationality</a></td>
    </tr>
    <tr>
      <td>ID Proof<br /></td>
      <td><a href="../showroom/documents/<?php echo $idproof;?>" target="_blank">ID Proof</a></td>
    </tr>
    <tr>
      <td>Address Proof</td>
      <td><a href="../showroom/documents/<?php echo $addressproof;?>" target="_blank">Address Proof</a></td>
    </tr>
    <tr>
      <td>Income Certificate</td>
      <td><a href="../showroom/documents/<?php echo $ic;?>" target="_blank">Income Certificate</a></td>
    </tr>
    <tr>
      <td>Bank Passbook</td>
      <td><a href="../showroom/documents/<?php echo $bp;?>" target="_blank">Bank Passbook</a></td>
    </tr>
    <tr>
      <td>Order Date</td>
      <td><?php echo $date;?></td>
    </tr>
    <tr>
      <td>Delivary Date</td>
      <td><?php echo $ddate;?></td>
    </tr>
    <tr>
      <td> <a href="../Payment/First.php?cid=<?php echo $cid;?>">Buy Now</a> </td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
  </center>
</form>
<?php include("footer.php"); ?>
 <?php include("script.php"); ?>
</body>
</html>

<?php
session_start();
	$con=mysql_connect("localhost","root","root");
mysql_select_db("db_mywork");

 //include("../../Include/Connection.php");
	
     session_start();
	 echo $id=$_SESSION['Id'];
	 $sel="select * from tbl_orderhead o inner join tbl_customer  w on w.customer_id=o.customer_id where o.order_id='".$id."'";
	$row=mysql_query($sel);
	 $data=mysql_fetch_array($row);
	echo $sel;
	 if(isset($_POST['btnsub']))
      {
	    header("location:Third.php");
	
      }
		
include("header.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
        .auto-style20 {
            width: 158px;
        }
        .auto-style22 {
            width: 869px;
        }
        .auto-style25 {
            height: 33px;
            width: 145px;
        }
        .auto-style26 {
            height: 33px;
        }
        .auto-style27 {
            height: 36px;
            width: 145px;
        }
        .auto-style28 {
            height: 36px;
        }
        .auto-style32 {
            height: 31px;
        }
        .auto-style33 {
            height: 31px;
            width: 143px;
        }
        .auto-style34 {
            height: 33px;
            width: 143px;
        }
        .auto-style35 {
            height: 98px;
            width: 158px;
        }
        .auto-style36 {
            height: 98px;
            width: 869px;
        }
        .auto-style37 {
            height: 98px;
        }
        .auto-style38 {
            width: 158px;
            height: 49px;
        }
        .auto-style39 {
            width: 869px;
            height: 49px;
        }
        .auto-style40 {
            height: 49px;
        }
        .auto-style41 {
            height: 59px;
        }
        .auto-style45 {
            width: 190px;
            height: 32px;
        }
        .auto-style47 {
            height: 36px;
            text-align: center;
        }
        .auto-style48 {
            width: 63px;
            height: 35px;
        }
        .auto-style49 {
            width: 70px;
            height: 35px;
        }
        .auto-style50 {
            width: 694px;
        }
        .auto-style51 {
            width: 190px;
            height: 26px;
        }
        .auto-style52 {
            height: 26px;
        }
        .auto-style53 {
            height: 32px;
        }
        .auto-style54 {
            height: 25px;
        }
        .auto-style55 {
            height: 27px;
        }
        .auto-style56 {
            height: 30px;
        }
        .auto-style57 {
            height: 82px;
            width: 158px;
        }
        .auto-style58 {
            height: 82px;
            width: 869px;
        }
        .auto-style59 {
            height: 82px;
        }
        .auto-style60 {
            height: 20px;
            text-align: center;
        }
        .style2
        {
            color: #FF3300;
            height: 16px;
        }
        .auto-style61 {
            height: 46px;
            text-align: center;
        }
        .auto-style62 {
            color: #00FF00;
        }
        </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Second</title>
</head>

<body>
<form name="frm" id="frm" method="post">
 <fieldset><legend style="font-weight: 700; text-align: center; font-size: large">Transaction Details</legend>
    <table class="auto-style1">
        <tr>
            <td class="auto-style57"></td>
            <td class="auto-style58"><fieldset>
                <table class="auto-style1">
                    <tr>
                        <td class="auto-style27">Pay To:</td>
                        <td class="auto-style28">
                             <input type="text "runat="server" ForeColor="#33CC33" style="font-weight: 700"value="<?php echo  "Craft Company Portal";?>"/>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style25">Total Payable Amount:</td>
                        <td class="auto-style26">
                            <span class="auto-style62">Rs.</span><input ytpe="text" runat="server" ForeColor="#33CC33" style="font-weight: 700" CssClass="auto-style62" value="<?php echo $_SESSION['amount'];?>"/>
                            <span class="auto-style62">/-</span></td>
                    </tr>
                </table>
                </fieldset></td>
            <td class="auto-style59"></td>
        </tr>
        <tr>
            <td class="auto-style35"></td>
            <td class="auto-style36"><fieldset><legend>Card Details</legend>
                <table class="auto-style1">
                    <tr>
                        <td class="auto-style33">Payment Method:</td>
                        <td class="auto-style32">Test Payment </td>
                    </tr>
                    <tr>
                        <td class="auto-style34">Company account:</td>
                        <td class="auto-style26">
                            <input type="text" runat="server" style="font-weight: 700" value="<?php echo $_SESSION['cno'];?>"/>
                        </td>
                    </tr>
                </table>
                </fieldset></td>
            <td class="auto-style37"></td>
        </tr>
        <tr>
            <td class="auto-style38"></td>
            <td class="auto-style39"><fieldset><legend>Bill Details</legend>
                <table class="auto-style1">
                    <tr>
                        <td class="auto-style41">
                            <p align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #99CCFF; text-align: center;"><b>
                            
                            </b></td>
                    </tr>
                    <tr>
                        <td >
                            <table class="auto-style1">
                                <tr>
                                    <td class="auto-style51">1. * Name</td>
                                    <td class="auto-style52" colspan="2">
                                        <input type="text" name="txtName" runat="server" Width="300px" value="<?php echo $data['customer_name'];?>"/>
                                    </td>
                                </tr>
                                
                               
                               <!-- <tr>
                                    <td class="auto-style52">2. *Place</td>
                                    <td class="auto-style52" colspan="2">
                                        <input type="text" name="txtState" runat="server" Width="300px" value="<?php echo $data['Ws_place'];?>"/>
                                    </td>
                                </tr>-->
                                <tr>
                                    <td class="auto-style55">2. *Email</td>
                                    <td class="auto-style55" colspan="2">
                                        <input type="text" name="txtEmail" runat="server" Width="300px" value="<?php echo 
			$data['email'];?>"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style56">3.*Phone</td>
                                    <td class="auto-style56">
                                        <input type="text" name=="txtPhone" runat="server" Width="300px"value="<?php echo $data['contact'];?>"/>
                                    </td>
                                    <td class="auto-style56">
                                        <input type="submit" id="btnsub" runat="server" name="btnsub" Width="144px"  style="font-weight: 700"value="Make payment" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style47" colspan="3">
                                        <table class="auto-style1">
                                            <tr>
                                                <td class="auto-style50">
                                                    <p align="justify" style="color:#666666">
                                                        <b>&nbsp;&nbsp;&nbsp; In order to protect your card from fradulent transactions we might redirect you to partner site that will verify your card information. before we proceed with the payment </b>
                                                    </p>
                                                </td>
                                                <td>
                                                    <img alt="" class="auto-style49" src="Images/msc.gif" /></td>
                                                <td>
                                                    <img alt="" class="auto-style48" src="Images/vbv.gif" /></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style60" colspan="3" style="background-color: #99CCFF"><em>*</em> denotes required field </td>
                                </tr>
                                <tr>
                                    <td class="auto-style61" colspan="3">
                                        <fieldset style="border-style:solid;border-color:#d4d0c8;">
                                            <div>
                                                <p class="style2">
                                                    The normal process time is approximately 5 seconds, however it may take longer at times.
                                                </p>
                                                <p class="style2">
                                                    Please wait for the intimation from the server, DO NOT press Back or Refresh button in order to avoid double charge.</p>
                                            </div>
                                        </fieldset></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </fieldset></td>
            <td class="auto-style40"></td>
        </tr>
        <tr>
            <td class="auto-style20">&nbsp;</td>
            <td class="auto-style22">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table></fieldset>
    </form>
</body>
</html>


<?php

include("footer.php");
?>
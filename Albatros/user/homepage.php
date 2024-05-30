<?php
include("../connection/connection.php");
session_start();
$uid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
 <?php include("link.php"); ?>
    
  </head>
  <body>
  
<?php include("header.php");?>

  

   

    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/home3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              

              <h1 class="text-white font-weight-light"><b>Hyundai</b></h1>
              <p class="mb-5">It's not just four wheels and engine,it's a home</p>
            

            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/home2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Need for speed</h1>
              <p class="mb-5">life is about finding out who you are
             while enjoying the journey to get there</p>
              
            </div>
          </div>
        </div>
      </div>  
        <div class="site-blocks-cover overlay" style="background-image: url(images/home1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Love The Cars</h1>
              <p class="mb-5">two wheels move the body
              four wheels move the soul</p>
            
            </div>
          </div>
        </div>
      </div>  

    

    </div>


    <div class="site-section">
      
      <div class="container overlap-section">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="../user/experience.php" class="unit-1 text-center">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Write Down Your Experience</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Explore The World by Wheels</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Safe Trip With Hyundai</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>


  
 
  




    
  

   

	
    <div class="site-section block-13 bg-light">
  

    <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7">
            <h2 class="font-weight-light text-black text-center">User Experience</h2>
          </div>
        </div>

        <div class="nonloop-block-13 owl-carousel">

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_1.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                	<?php	
		$sel = "select * from tbl_experience a inner join tbl_user_reg b on a.user_id=b.user_id order by rand() ";
		$row = mysql_query($sel);
		while($data=mysql_fetch_array($row))
		{
			$exp= $data['experience'];
			$fname=	$data['fname'];
			$lname=$data['lname'];
				?>
                 <?php
		}
		?>
                  <p class="text-black lead">&ldquo;<?php echo $exp;?>&rdquo;</p>
                  <p class="">&mdash; <em><?php echo $fname;?>&nbsp;<?php echo $lname;?></em>, <a href="#">Customer</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_2.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                	<?php	
		$sel = "select * from tbl_experience a inner join tbl_user_reg b on a.user_id=b.user_id order by rand() ";
		$row = mysql_query($sel);
		while($data=mysql_fetch_array($row))
		{
			$exp= $data['experience'];
			$fname=	$data['fname'];
			$lname=$data['lname'];
				?>
                 <?php
		}
		?>
                  <p class="text-black lead">&ldquo;<?php echo $exp;?>&rdquo;</p>
                  <p class="">&mdash; <em><?php echo $fname;?>&nbsp;<?php echo $lname;?></em>, <a href="#">Customer</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_4.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                	<?php	
		$sel = "select * from tbl_experience a inner join tbl_user_reg b on a.user_id=b.user_id order by rand() ";
		$row = mysql_query($sel);
		while($data=mysql_fetch_array($row))
		{
			$exp= $data['experience'];
			$fname=	$data['fname'];
			$lname=$data['lname'];
				?>
                 <?php
		}
		?>
                  <p class="text-black lead">&ldquo;<?php echo $exp;?>&rdquo;</p>
                  <p class="">&mdash; <em><?php echo $fname;?>&nbsp;<?php echo $lname;?></em>, <a href="#">Customer</a></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Our Top Models</h2>                    
            <p class="color-black-opacity-5">Choose Your dream</p>
          </div>
        </div>
        <div class="row">
        <?php
		$sel = "select * from tbl_submodel sm inner join tbl_models m inner join tbl_specs sp on m.model_id=sm.model_id and sm.submodel_id=sp.submodel_id";
		$row = mysql_query($sel);
		$data = mysql_fetch_array($row);
		?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="../user/cardisplay.php" class="unit-1 text-center">
              <img src="../user/images/kona1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Rs.<?php echo $data["price"] ?> Lakh Onwards*</strong>
                <h3 class="unit-1-heading"><?php echo $data["model_name"] ;echo $data["submodl_name"] ?></h3>
              </div>
            </a>
          </div>
          <?php
		  
		  ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="../user/cardisplay.php" class="unit-1 text-center">
              <img src="../user/images/elanta1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Rs.<?php echo $data["price"] ?> Lakh Onwards*</strong>
                <h3 class="unit-1-heading"><?php echo $data["model_name"] ;echo $data["submodl_name"] ?></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="../user/cardisplay.php" class="unit-1 text-center">
              <img src="../user/images/creta1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Rs.<?php echo $data["price"] ?> Lakh Onwards*</strong>
                <h3 class="unit-1-heading"><?php echo $data["model_name"] ;echo $data["submodl_name"] ?></h3>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="../user/cardisplay.php" class="unit-1 text-center">
              <img src="../user/images/venue1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Rs.<?php echo $data["price"] ?> Lakh Onwards*</strong>
                <h3 class="unit-1-heading"><?php echo $data["model_name"] ;echo $data["submodl_name"] ?></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="../user/cardisplay.php" class="unit-1 text-center">
              <img src="../user/images/verna1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Rs.<?php echo $data["price"] ?> Lakh Onwards*</strong>
                <h3 class="unit-1-heading"><?php echo $data["model_name"] ;echo $data["submodl_name"] ?></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="../user/cardisplay.php" class="unit-1 text-center">
              <img src="../user/images/elitei201.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Rs.<?php echo $data["price"] ?> Lakh Onwards*</strong>
                <h3 class="unit-1-heading"><?php echo $data["model_name"] ;echo $data["submodl_name"] ?></h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>

     <div class="site-section bg-light">
      
    </div> 


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Our Services</h2>
            <p class="color-black-opacity-5">We Offer The Following Services</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
              <div>
                <h3>Car Booking</h3> 
                <p>Easy way to buy a new car and also most fastest delivary of your Car ALBATROSs.</p>
                <p><a href="cardisplay.php">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
              <div>
                <h3>Service Booking</h3>
                <p>Users has a facility to pre register their car-service with associated detials.</p>
                <p><a href="service.php">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
              <div>
                <h3>Insurance</h3>
                <p>Our company provides full cover insurance to all our vehicles.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>
              <div>
                <h3>Free Of Cost Services</h3>
                <p></p>This feature is only available for the customers who bought cars by our  site.Those customers has free services for the first 5 services
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sailboat"></span></div>
              <div>
                <h3>Test Driving</h3>
                <p>People who are intrested in testdrive the vehicle can be done at specified showrooms.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ski"></span></div>
              <div>
                <h3>Spayparts Selling(only at showrooms)</h3>
                <p>Selling of spayparts is only at showrooms.It cannot be pre-booked.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Want To Travel With Us?</h2>
            <p class="mb-0"><a href="cardisplay.php" class="btn btn-primary py-3 px-5 text-white">Book Now</a></p>
          </div>
        </div>
      </div>
    </div>
    
   <?php include("footer.php"); ?>
  </div>

<?php include("script.php"); ?>
    
  </body>
</html>
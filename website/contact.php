<?php 
	include("header.php");
?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 page-info text-center">
        <h1 class="header-page-title">contact</h1>
        <p class="breadcrumbs">Home  / <span>contact us</span></p>
      </div>
    </div>
  </div>
</div>
<!-- /Header -->

<!-- contact-us-1-page -->
<div class="contact-us-page pt-85 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1 class="contactus-heading">CONTACT INFO</h1>
        <p class="contactus-content is-mb-0">Thank you for your interest in Bain & Company. Please contact us using the information.</p>
      </div>
	  <div class="col-lg-6 col-md-6 footer-boxdiv-two">
			<?php
				if(isset($_REQUEST['msg'])){
					if($_REQUEST['msg']="success"){
						$message="Thank you for applying at . We will get back to soon.";
						$color="green";
					}elseif($_REQUEST['msg']="error"){
						$message="Oh Oh! Something went wrong! Please try again.";
						$color="red";
					}
				}
			?>
			<h5 style="color:<?php echo $color;?>; text-align:center;"><?php echo $message; ?></h5><br>
            
            <form method="post" action="contact-us.php">
              <div class="form-group">
                <input type="text" name="fname" class="form-control footer-input width70" placeholder="Name*" required/>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control footer-input width70" placeholder="E-mail*" required/>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control footer-input width70" placeholder="Subject" required/>
              </div>
              <div class="form-group">
                <textarea name="message" rows="3" class="form-control footer-input" placeholder="Message" ></textarea>
              </div>
              <button type="submit" class="btn btn-primary comment-btn">Send Now</button>
            </form>
          </div>
    </div>
  </div>
</div>
<!-- /contact-us-1-page -->

<!-- contact-us icon -->
<div class="contact-us-page pb-30">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="contactus">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-right"><i class="icon icon-Phone2"></i></div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 text-left"><h3>Phone number</h3><span>+ 91-22-66949177<br>+ 91-22-26760091</span><br><br></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="contactus">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-right"><i class="icon icon-Plaine"></i></div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 text-left"><h3>Email</h3><span><a href="mailto:info@dexarte.co.in" target="_top">info@dexarte.co.in</a></span><br><br><br></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="contactus">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-right"><i class="icon icon-WorldWide"></i></div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 text-left"><h3>Address</h3><span>1-B-9, Singh Ind Estate, Ram Mandir Rd, Goregaon(west),Mumbai – 400104.India. </span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / contact-us icon -->

<!-- Footer Section -->
<div class="container-fluid p0">
  <div class="footer-section">
  
	<!--google map in javascript-->
		<!--<div class="footer-section-map" id="footer-section-map"></div> -->
	<!--google map javascript end-->
	
    <div class="footer-section-map" id="">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.2492806051415!2d72.84549057922835!3d19.15160324919029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b65aa4713feb%3A0xb04c8e64ec0d218d!2sDexarte+%3A+M%2FS+Dev+Enterprises!5e0!3m2!1sen!2sin!4v1533970727551" width="1920" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
      
  </div>
</div>
<!-- /Footer Section -->

<?php  
	include("footer.php");
?>
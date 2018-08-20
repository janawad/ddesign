<?php 
	// include header section
	include("header.php");

	//include database connection
	include("../database_connect.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$res = mysql_query("select * from package where id = $id");
		
	}
	$row = mysql_fetch_array($res);
	
?>
<!----zoom option---->
	<link href="assests/product-details/style.css" rel="stylesheet" />
<!----zoom option---->
 
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-info text-center">
        <h1 class="header-page-title">Product Details</h1>
        <p class="breadcrumbs">Home  / <span>Product Details</span></p>
      </div>
    </div>
  </div>
</div>
<!-- /Header -->

<!-- shop-details-page -->

	<section class="page-section light-bg">
		<div class="container shop">
			<div class="row">
				<br><br><br>
				<div class="col-md-12 product-page">
					<div class="row">
						<div class="col-md-5 col-sm-6">
							<div class="single-product">
								<img id="zoom-product" src="../admin/uploads/package/<?php echo $row['icon_image'];?>" width="500" height="600" data-zoom-image="../admin/uploads/package/<?php echo $row['icon_image'];?>" />
								
								<div id="zoom-product-thumb" class="zoom-product-thumb">
									<a href="#" data-image="../admin/uploads/package/<?php echo $row['icon_image'];?>" data-zoom-image="../admin/uploads/package/<?php echo $row['icon_image'];?>">
										<img id="img_01" src="../admin/uploads/package/<?php echo $row['icon_image'];?>" />
									</a> 
									
									<a href="#" data-image="../admin/uploads/package/<?php echo $row['slider_image1'];?>" data-zoom-image="../admin/uploads/package/<?php echo $row['slider_image1'];?>">
										<img id="img_01" src="../admin/uploads/package/<?php echo $row['slider_image1'];?>" />
									</a> 
									 
                                </div>
								
                            </div>
								
						</div>
                            
							<!-- .product -->
						<div class="col-md-7 col-sm-6">
							<div class="price-details">
								<span class="price">Product Name: <?php echo $row['package_title'];?></span>
							</div>
							
							<div class="description">
								<p><b>PRODUCT CATEGORY :</b> 
								<?php
									$sql = mysql_query("select * from packages_category where id = $row[pkg_cat_id]");
									 $rowww = mysql_fetch_array($sql);
									 echo $rowww["packages_category_name"];
								?>
								</p>
								<div class="price-details"></div>
								<p><b>PRODUCTS DESCRIPTION :</b> <?php echo $row['slider_desc1'];?></p>
								<div class="price-details"></div>

								<p>*ECOLAM has high flexual modulus,and superior dimensional stability making its a versatile for interior designing.</p>
								<div class="price-details"></div>
								<p>*It has no centerline porosity,the possibility of fluid absorption and leakage is virtually eliminated.</p>
								<div class="price-details"></div>
								<p>*It is harder,stiffer,stronger,more dimensionally sable material than Acyclic.Has excellent gas barrier properties and excellent chemical resistance .Hence ECOLAM   is widely resistant to various mild acid,alcohol and ether.This maintaining the high quality Luxury appearance & performance for longer life.</p>
								<div class="price-details"></div>
								<p>*It have an excellent level of wear resistance compared to Acrylic .Unlike Acrylic ECOLAM is shatter proof.</p>
								<div class="price-details"></div>
								<p>*ECOLAM is made of a ploymer that is durable and strong and most suitbale for recycle(with recylce rating of "I"),Non toxic,Odouraless and Environmentally Friendly,since it is a pure and does not have halogens or harmful heavy metals,making it the idea eco friendly recyclable material.</p>
								<div class="price-details"></div>
								<p>*Sparkling clarity and gloss which makes it visually appealing as a material for display application.</p>
								<div class="price-details"></div>
								<p>*ECOLAM gives you a range of superior gloss laminates that are resistant to MAR,abrasions,with scartch resistance -2H.</p>
							</div>
						</div>
					</div>
                </div>
			</div>
		</div>
	</section>
	<!-- /shop-details-page -->	
	
	<!---icon Details--->
	<div class="service-page-section pb-110">
  <div class="container">
    <div class="row pt-110">


      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="service-v1-section">
           <div class="service-v1" style="text-align:center" >
              <img src="http://dexarte.co.in/img/icon/4.png">
           </div>
           <p class="service-title" style="text-align:center"><b>Luxury</b></p>
           
        </div>
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="service-v1-section">
           <div class="service-v1" style="text-align:center" >
              <img src="http://dexarte.co.in/img/icon/1.png">
           </div>
           <p class="service-title" style="text-align:center"><b>Premium Quality</b></p>
           
        </div>
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="service-v1-section">
           <div class="service-v1" style="text-align:center" >
              <img src="http://dexarte.co.in/img/icon/2.png">
           </div>
           <p class="service-title" style="text-align:center"><b>Easy To Clean/Zero Maintenance</b></p>
           
        </div>
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="service-v1-section">
           <div class="service-v1" style="text-align:center" >
              <img src="http://dexarte.co.in/img/icon/9.png">
           </div>
           <p class="service-title" style="text-align:center"><b>90 BENDABLE</b></p>
           
        </div>
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="service-v1-section">
           <div class="service-v1" style="text-align:center" >
              <img src="http://dexarte.co.in/img/icon/5.png">
           </div>
           <p class="service-title" style="text-align:center"><b>Water Resistant</b></p>
           
        </div>
      </div>
	  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="service-v1-section">
           <div class="service-v1" style="text-align:center" >
              <img src="http://dexarte.co.in/img/icon/3.png">
           </div>
           <p class="service-title" style="text-align:center"><b>Anti-Termite / Anti-Borer</b></p>
           
        </div>
      </div>
	  
	</div>
  </div>
</div>
	<!---icon Details--->
	
<!-- Tiny Footer Section -->
<style>
h3{
    font-size:18px;
}
a{
    color:#8b8b8b;
}
</style>
<!-- Tiny Footer Section -->
<div class="footer-copyright" style="background:#000;">
  <div class="container">
    <div class="row">
	
	<!-- Footer -->
<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h1 class="font-weight-bold text-uppercase mt-3 mb-4"><p>Address</p></h1>

          <ul class="list-unstyled">
            <h3>
				1-B-9, Singh Ind Estate, Ram Mandir Rd,<br> Goregaon(west),Mumbai – 400104.<br>India.
			</h3>
          </ul>

        </div>
        <!-- Grid column -->

        

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><p>Links</p></h5>

          <ul class="list-unstyled">
            <li>
              <h3><a href="index.php" style="color:#8b8b8b;">Home</a></h3>
            </li>
            <li>
              <h3><a href="about.php" style="color:#8b8b8b;">About Us</a></h3>
            </li>
            <li>
              <h3><a href="products.php" style="color:#8b8b8b;">Products</a></h3>
            </li>
            <li>
              <h3><a href="contact.php" style="color:#8b8b8b;">Contact Us</a></h3>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><p>Help Us ?</p></h5>

          <h3>Phone number</h3><span>+ 91-22-66949177<br>+ 91-22-26760091</span>

        </div>
        <!-- Grid column -->

        

        

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

   <br><br>

  </footer>
  <!-- Footer -->
	

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p class="text-center">Copyright &copy; Dexarte <script>document.write(new Date().getFullYear())</script>. All rights reserved.|Design By <a href="http://www.macle.co.in"><b style="color:#fff;">Macle Grafics Pvt. Ltd.</b></p>
      </div>
    </div>
  </div>
</div>
<!-- /Tiny Footer Section -->
<!-- /Tiny Footer Section --> 
<a href="#0" class="cd-top">Top</a>

<!----Zoom option--->
		<script src="assests/product-details/common.js"></script>
		<script src="assests/product-details/bootstrap.min.js"></script>
		<script type="text/javascript" src="assests/product-details/jquery.appear.js"></script>
		<script type="text/javascript" src="assests/product-details/jquery.elevateZoom-3.0.8.min.js"></script>
		<script type="text/javascript" src="assests/product-details/custom.js"></script>		 
	<!----Zoom option--->	

 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="assests/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="assests/js/jquery.themepunch.revolution.min.js"></script> 

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="assests/js/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="assests/js/revolution.extension.video.min.js"></script> 
<script type="text/javascript" src="assests/js/menumaker.js"></script> 
<script src="https://maps.google.cn/maps/api/js?key=AIzaSyDzeSbQwOp79SShN11MjCMtFsxDM7JqAQg" type="text/javascript"></script> 
<script type="text/javascript" src="assests/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assests/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="assests/js/jquery.sticky.js"></script> 
<script type="text/javascript" src="assests/js/popup.js"></script> 
<script type="text/javascript" src="assests/js/revslider1.js"></script> 
<script type="text/javascript" src="assests/js/script.js"></script>
<?php 
	include("header.php");
	require "../admin/clasess/home.class.php";
	$homeObj = new home();
?>
 
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-info text-center">
        <h1 class="header-page-title">PRODUCTS</h1>
        <p class="breadcrumbs">Home  / <span>products</span></p>
      </div>
    </div>
  </div>
</div>
<!-- /Header -->

<!-- portfolio-filter-page -->
<div class="portfolio-filter-page pb-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="portfolioFilter pt-70 pb-60">
          <h1>PRODUCTS</h1>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row"><!-- start div -->
          <div class="project-gallery portfolioContainer isotope">
		  
			<?php $getTestimonial_detail = $homeObj->getProductcategory();
				foreach($getTestimonial_detail as $getTestimonial_detail_arr){
				?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="gallery-2">
                <a href="product-list.php?id=<?php echo $getTestimonial_detail_arr['id'];?>">
					<img src="<?php echo $getTestimonial_detail_arr['packages_category_image'];?>" class="img-responsive" alt="" />
					<div class="gallery-caption-2">
					  <h1 class="gallery-heading"><?php echo $getTestimonial_detail_arr['packages_category_name'];?></h1>
					  <p class="gallery-content"><?php echo $getTestimonial_detail_arr['description'];?></p>
					</div>
				</a>
              </div>
            </div>
			<?php } ?>
            
            
            
                                
          </div><!-- /end div -->
        </div>
      </div><!-- /project gallery -->
    </div>
  </div>
</div>
<!-- /portfolio-filter-page -->


<?php  
	include("footer.php");
?>
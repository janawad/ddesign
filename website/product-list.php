<?php 
	/*include header section*/
	include("header.php");
	
	//include database connection
	include("../database_connect.php");
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$res = mysql_query("select * from package where pkg_cat_id = $id");
	}
	
	
?>


 
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-info text-center">
        <h1 class="header-page-title">Product List</h1>
        <p class="breadcrumbs">Home  / <span>product list</span></p>
      </div>
    </div>
  </div>
</div>
<!-- /Header -->

<!-- shop-page-title-section -->
<div class="shop-page-title-section pt-80 pb-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-0 col-md-offset-0 col-lg-12 col-md-12">
          
          <!-----------Description start----------->
		<?php 
		if($id == 8) {?>
		
        <div class="text-center-horizontal">
			<img src="http://dexarte.co.in/img/2.jpg" alt="product logo">
            <!--<h1 data-after-text="our Products" data-before-text="" class="heading-content">
              <span class="heading-text" data-lead-text="">HIGH QUALITY SUPER ULTRAGLOSS CRYSTAL FINISH DECORATIVE PANELS</span> 
            </h1>-->
			<h2>HIGH QUALITY SUPER ULTRAGLOSS CRYSTAL FINISH DECORATIVE PANELS</h2>
            <p class="is-mb-0"><b>DEXARTE</b> takes pride in presenting yet another marvel of creativity and innovations , a revolutionary product that goes a step further. DuroGlaze-Ecolam, a luxury high quality Super Ultra Gloss Crystal Finish decorative Panels, developed with one of the most Eco friendly polymers. </p>
			
			<p class="is-mb-0"><b>ECOLAM</b>  is made of a strong light weight polymer that is close to glass in clarity. It bears excellent characteristics like strong barrier against water vapor, dilute acids, gases, oils and alcohols.
It is shatter resistance , flexible and easy to recycle.</p>
			
			<p class="is-mb-0"><b>DUROGLAZE-ECOLAM</b> sheets are simple to process and easy in handling that makes it so application friendly to use in unlimited ways in unlimited areas. Whether it may be a home , office, mall, showroom, salon, restaurant hotel or just about anything.</p>
		</div>
		
		<?php } ?>
		
		
		<?php 
		if($id == 9) {?>
		
        <div class="text-center-horizontal">
			<img src="http://dexarte.co.in/images/about.png" alt="product logo">
            <!--<h1 data-after-text="our Products" data-before-text="" class="heading-content">
              <span class="heading-text" data-lead-text="">HIGH QUALITY SUPER ULTRAGLOSS CRYSTAL FINISH DECORATIVE PANELS</span> 
            </h1>-->
			<h2>HIGH QUALITY LUXURY DECORATIVE PVC PANELS</h2>
            <p class="is-mb-0"><b>DEXARTE</b> is committed to innovate new products...We bring to you a product so visually vibrant & magnificently magical, luscious laminate namely DEXARTE, High Quality Decorative Laminates which truly transform the interior of your house. Vast experience,rich contribution with input from National & International Designers, Architect & Artists has made them an elite class having an exclusive range of breathtaking design. Keeping their trust & faith in us, we are committed to qualitative making of world in general.  </p>
			
			<p class="is-mb-0"><b>DEXARTE</b> High Quality Decorative Laminates give architects & interior designer more artistic concept for a newer, unique, exclusive creation. The Appearance & finish of these laminates is guaranteed by special surface treatment incorporated at the time of manufacturing DEXARTE ,High Quality Laminates unfolds before the eyes a brilliance of colors having unique visual in depth of the laminate,its bring our true beauty. The various design created with skillful craftsmanship provides stunning look to you environment that take on your imagination to different level. DEXARTE, High Quality Decorative Laminates create an aura of class with dimensional beauty of colors.</p>
			
		</div>
		
		<?php } ?>
		
		<?php 
		if($id == 10) {?>
		
        <div class="text-center-horizontal">
			<img src="http://dexarte.co.in/img/3.jpg" alt="product logo">
            <!--<h1 data-after-text="our Products" data-before-text="" class="heading-content">
              <span class="heading-text" data-lead-text="">HIGH QUALITY SUPER ULTRAGLOSS CRYSTAL FINISH DECORATIVE PANELS</span> 
            </h1>-->
			<h2>HIGH QUALITY TEXTURED LUXURY PVC DECORATIVE SHEETS</h2>
            <p class="is-mb-0"><b>DEXARTE</b> is a constant developing luxury high-quality leading PAN India brand in the world of stylish luxury interiors. By constant introduction of innovative products & effective marketing throughout India by our reliable & strong partners standing tall with us always, DEXARTE is Growing fast as one of the favorite & popular brand among well known architects, dealers & above all consumers.</p>
			
			<p class="is-mb-0"><b>DEXARTE</b>  takes pride in presenting its Premium collection DUROBLIZE, High Quality Textured Luxury PVC Decorative sheets. DUROBLIZE decorative sheets are evolved purely with the passion to provide luxury decorative sheets to the modern & discerning Indian consumer who is always looking for something extra ordinary innovative choice. DUROBLIZE metallic textured luxury designs are nature inspired created with skillful craftsmanship offering a dazzling spectrum of beauty to your environment.</p>
			
			<p class="is-mb-0"><b>DUROBLIZE</b> sheets are simple to process & easy in handling that makes it so application friendly to use in unlimited ways in unlimited areas.Whether it may be a home, office, mall, showroom, salon, restaurant, hotel or just about anything.</p>
			
		</div>
		
		<?php } ?>
		
		
		<?php 
		if($id == 11) {?>
		
        <div class="text-center-horizontal">
			<img src="http://dexarte.co.in/img/4.jpg" alt="product logo">
            <!--<h1 data-after-text="our Products" data-before-text="" class="heading-content">
              <span class="heading-text" data-lead-text="">HIGH QUALITY SUPER ULTRAGLOSS CRYSTAL FINISH DECORATIVE PANELS</span> 
            </h1>-->
			<h2>DEEP COLOUR CORE</h2>
            <p class="is-mb-0">Enchanting glossy solid colours throughout are ideal for use in high traffic areas, offering vast potential for innovative & stylish interiors.Application such as counters, reception desks & furniture can be enhanced with the seamless finish.</p>
			
			<h2>VELVET TOUCH. PERFECT MATTE. LUXE FEEL</h2>
            <p class="is-mb-0">Stunning colours with classy matte finish in revolutionary ANTISACRATCH technology (Barcol Hardness-4H).This incredible range gives greater creative breadth in colours with velvet touch giving sheer luxe finish.</p>
			
			
		</div>
		
		<?php } ?>
		
		
		<?php 
		if($id == 12) {?>
		
        <div class="text-center-horizontal">
			<img src="http://dexarte.co.in/img/5.jpg" alt="product logo">
            <!--<h1 data-after-text="our Products" data-before-text="" class="heading-content">
              <span class="heading-text" data-lead-text="">HIGH QUALITY SUPER ULTRAGLOSS CRYSTAL FINISH DECORATIVE PANELS</span> 
            </h1>-->
			<h2>HIGH QUALITY SURFACE DECORATIVE PANELS</h2>
            <p class="is-mb-0"><b>DUROARTE</b> Guaranteed to cast a spell with its alluring beauty, these surface decorative panels are made of mixture of high level standard Polystyrene and Charcoal.</p>
			
			
			
		</div>
		
		<?php } ?>
		
		<!-----------Description end----------->
          
      </div>
    </div>
  </div>
</div>
<!-- /shop-page-title-section -->


<div class="blog-width-sidebar pt-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        
		<?php 
		while($row = mysql_fetch_array($res)){
	?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="shop-product">
          <a href="product-details.php?id=<?php echo $row["id"];?>"><img src="../admin/uploads/package/<?php echo $row["slider_image1"];?>" class="img-responsive" alt="" style="width:300px;height:323px"/></a>
          <div class="shop-tools">
		  
		  
            <a href="product-details.php?id=<?php echo $row["id"];?>" class="first"><i class="icon icon-Goto"></i></a>
            
			
            <a href="../admin/uploads/package/<?php echo $row["slider_image1"];?>" class="sec"><i class="icon icon-FullScreen"></i></a>
			
            <a href="product-details.php?id=<?php echo $row["id"];?>" class="four"><i><?php echo $row["package_title"];?></i></a>
          </div>
          <div class="shop-content">
            <h2><a href="product-details.php?id=<?php echo $row["id"];?>" class="black"><?php echo $row["package_title"];?></a></h2>
            <p>Pellentesque habitant morbi tristique senectus </p>
            
            
          </div>        
        </div>
      </div>
	<?php } ?>
        

       

            
      </div><!-- col-md-8 -->

      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="row">
          

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 is-mb-30">
            <div class="widget">
              <div class="widget-header">
                <h2 class="widget-title"> Product Category </h2>
                <span class="border"></span>
              </div>
                    <?php 
                        $result = mysql_query("select * from packages_category where 1");
                        while($row=mysql_fetch_array($result)){
                    ?>
                        <h3 class="widget-archive"><a href="http://macle.co.in/dexarte/website/product-list.php?id=<?php echo $row['id']; ?>">
                         <?php echo $row['packages_category_name']; ?></a>
                         <span class="pull-right">
                            (<?php $id = $row[id]; $count = mysql_query("select count(*) from package where pkg_cat_id = $id "); $row = mysql_fetch_array($count);
							$total = $row[0];
							echo $total;?>)  
						</span> </h3>
                    <?php
                        }
                    ?>
                <!--<h3 class="widget-archive"><a href="http://macle.co.in/dexarte/website/product-list.php?id=8">DUROGLAZE </a><span class="pull-right">  </span> </h3>
                <h3 class="widget-archive"><a href="http://macle.co.in/dexarte/website/product-list.php?id=9">DEXARTE </a><span class="pull-right">  </span> </h3>
                <h3 class="widget-archive"><a href="http://macle.co.in/dexarte/website/product-list.php?id=10">DUROBLIZE </a><span class="pull-right">  </span> </h3>
                <h3 class="widget-archive"><a href="http://macle.co.in/dexarte/website/product-list.php?id=11">DUROLUXE </a><span class="pull-right">  </span> </h3>
                <h3 class="widget-archive"><a href="http://macle.co.in/dexarte/website/product-list.php?id=12">DUROARTE </a><span class="pull-right">  </span> </h3>-->
            </div>
          </div>

                 

          

           
        </div>
      </div>
    </div>
  </div>
</div>


<!--<div class="shop-page-section">
  <div class="container">
    <div class="row">
	<?php 
		while($row = mysql_fetch_array($res)){
	?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="shop-product">
          <a href="product-details.php?id=<?php echo $row["id"];?>" class="first"><img src="../admin/uploads/package/<?php echo $row["slider_image1"];?>" class="img-responsive" alt="" style="width:300px;height:323px"/></a>
          <div class="shop-tools">
		  
		  
            <a href="product-details.php?id=<?php echo $row["id"];?>" class="first"><i class="icon icon-Goto"></i></a>
            
			
            <a href="../admin/uploads/package/<?php echo $row["slider_image1"];?>" class="sec"><i class="icon icon-FullScreen"></i></a>
			
            <a href="product-details.php?id=<?php echo $row["id"];?>" class="four"><i><?php echo $row["package_title"];?></i></a>
          </div>
          <div class="shop-content">
            <h2><a href="product-details.php?id=<?php echo $row["id"];?>" class="black"><?php echo $row["package_title"];?></a></h2>
            <p>Pellentesque habitant morbi tristique senectus </p>
            
            
          </div>        
        </div>
      </div>
	<?php } ?>-->
      
      
      
      
      
     
    </div>
  </div>
</div>
<!-- /shop-page-title-section -->

<?php  
	include("footer.php");
?> 
  
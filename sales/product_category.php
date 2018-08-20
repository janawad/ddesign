<?php include("header.php"); 

require "../admin/clasess/home.class.php";
	$homeObj = new home();
?>
  
<div class="content">
	<div class="container-fluid">
		<div class="container-fluid">
			<h4 class="card-card-title">
				<h1 style="text-align:center;">Products Category</h1>
			</h4>
            <br>         
			<div class="row">
				<?php 
					$getAlltestimonial_detail = $homeObj->getProductcategory();
					foreach($getAlltestimonial_detail as $getAlltestimonial_detail_arr){
				?>
				<div class="col-4">
					<a class="" href="productslist.php?id=<?php echo $getAlltestimonial_detail_arr['id'];?>">
						<img class="col-md-12" src="<?php echo $getAlltestimonial_detail_arr['packages_category_image'];?>" alt="Product Image" />
					</a>
					
					<div class="post_content" style="text-align:center;">
						<h3>
							<?php echo $getAlltestimonial_detail_arr['packages_category_name'];?>
						</h3>
						<div class="product_cats">
							<?php echo $getAlltestimonial_detail_arr['description'];?></p>
						</div>
						<div class="product_price">
							<span class="price">
								<a class="btn btn-success" href="productslist.php?id=<?php echo $getAlltestimonial_detail_arr['id'];?>">All <?php echo $getAlltestimonial_detail_arr['packages_category_name'];?> Products</a>
							</span>
							
						</div>
					</div>
					<br>
				</div>
				<?php	
					}
				?>
				
			</div>
		</div>
	</div>
</div>
  
<?php include("footer.php"); ?>
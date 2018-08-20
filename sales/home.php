<?php 
	include("header.php");
	require "../admin/clasess/home.class.php";
	$homeObj = new home();
?>
	
<div class="content">
	<div class="container-fluid">
		<div class="container-fluid">
			<h4 class="card-card-title">
				<h1 style="text-align:center;">Products</h1>
			</h4>
            <br>         
			<div class="row">
				<?php  
					$getAllproduct_detail = $homeObj->getpackage();
					foreach($getAllproduct_detail as $getAllproduct_detail_arr){ 
				?>
				<div class="col-4">
					<a class="" href="product.php?id=<?php echo $getAllproduct_detail_arr['id'];?>">
						<img class="col-md-12" src="../admin/uploads/package/<?php echo $getAllproduct_detail_arr['slider_image1'];?>" alt="Product Image" />
					</a>
					
					<div class="post_content" style="text-align:center;">
						<h3>
						<a href="product.php?id=<?php echo $getAllproduct_detail_arr['id'];?>"><?php echo $getAllproduct_detail_arr['package_title'];?></h4></a>
						</h3>
						<div class="product_cats">
							
						</div>
						<div class="product_price">
							<span class="price">
								<span class="amount">₹ 	<?php echo $getAllproduct_detail_arr['package_price'];?></span>
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


<?php include("footer.php");?>
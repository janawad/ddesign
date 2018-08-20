<?php include("header.php"); 
//getting indivual data
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$res = mysql_query("select * from package where pkg_cat_id=$id");
		//$row = mysql_fetch_array($res);
		
		
	}
	
?>

<div class="content">
	<div class="container-fluid">
		<div class="container-fluid">
			<h2 class="card-card-title" style="text-align:center;">
				
				<?php 
					 //$id = $_GET['id'];
					 $sql = mysql_query("select * from packages_category where id = $id");
					 $rowww = mysql_fetch_array($sql);
					 echo $rowww["packages_category_name"];
				 ?>
				
				<small>Category Products</small>
			</h2>
                       
			<div class="row">
				<?php 
					while($row = mysql_fetch_array($res)) {
				?>
				<div class="col-4">
					<a class="" href="product.php?id=<?php echo $row['id'];?>">
						<img class="col-md-12" src="../admin/uploads/package/<?php echo $row["slider_image1"];?>" alt="Product Image" />
					</a>
					
					<div class="post_content" style="text-align:center;">
						<h3>
						<a href="product.php?id=<?php echo $row['id'];?>"><?php echo $row["package_title"];?></h4></a>
						</h3>
						<div class="product_cats">
							
						</div>
						<div class="product_price">
							<span class="price">
								<span class="amount">₹ 	<?php echo $row['package_price'];?></span>
							</span>
							
						</div>
					</div>
				</div>
				<?php	
					}
				?>
				
			</div>
		</div>
	</div>
</div>

<?php include("footer.php")?>
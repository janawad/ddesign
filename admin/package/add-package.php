<?php
	require_once "clasess/package.class.php";
	$packageObj = new package();
	if($_REQUEST['submit'] == "Submit"){
  
		$packageObj->addPackage($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=package/list-package'; </script>";
	}
	 $category_arr =$packageObj->getCategory();
	
?>	
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
		
			<div class="box box-primary">
				
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
				
					<!-- First Look -->
					<div class="box-header with-border">
						<h3 class="box-title">1. First Look Of Product</h3>
					</div>
					<div class="box-body">
						<div class="form-group col-md-3">
							<label >Select Category</label>
							<select name="pkg_cat_id" class="form-control">
								<option value="">Select category</option>
								<?php foreach ($category_arr as $category) { ?>
								
									<option value="<?php echo $category['id']?>"><?php echo $category['packages_category_name']?> </option>
									
								<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="Icon Image">Products Icon Image</label>
							<input type="file" name="icon_image" id="icon_image">
							<p class="help-block">94 X 94 ( In Pixel )</p>
						</div>
						<div class="form-group col-md-3">
							<label for="Package Title "> Products Title </label>
							<input name="package_title" id="package_title" type="text" class="form-control" placeholder="Enter Products Title" required>
						</div>
						
						<div class="form-group col-md-3">
							<label for="Package Price "> Products Price </label>
							<input name="package_price" id="package_price" type="text" class="form-control" placeholder="Enter Price" required>
						</div>
					</div>	
					
					<!-- End First Look -->
					
					<!--Package Details Page------>
					<div class="box-header with-border">
						<h3 class="box-title">2. Products Details</h3>
					</div>
					
					<div class="form-group col-md-3">
						<label for="Package Price "> Number of Products</label>
						<input name="number_of_qty" id="number_of_qty" type="text" class="form-control" placeholder="Enter Number of Products" required>
					</div>
					<div class="box-body">
						<div class="form-group col-md-2">
							<label for="Slider Description">Products Description </label>
							<textarea name="slider_desc1" id="slider_desc1" class="form-control" placeholder="Enter Description..." style="height: 80px;" required></textarea>
						</div>
						<div class="form-group col-md-2">
							<label for="Slider-Image1">Products Image </label>
							<input type="file" name="slider_image1" id="slider_image1">
							<p class="help-block">1600X1000 (In Pixel)</p>
						</div>
						
					</div>
					
					
					
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>
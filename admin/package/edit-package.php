<?php
	require_once "clasess/package.class.php";
	$packageObj = new package();
	
	if($_REQUEST['submit'] == "Update"){
		
		$packageObj->Updatepackage($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=package/list-package'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['package_id'])){
		$package_arr = $packageObj->getPackageByID($_REQUEST['package_id']);
		extract($package_arr);
	}
	
	$category_arr =$packageObj->getCategory();
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New package</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
				
					<!-- First Look -->
					<div class="box-header with-border">
						<h3 class="box-title">1. First Look Of Package</h3>
					</div>
					<div class="box-body">
						<div class="form-group col-md-3">
							<label>Select Category</label>
							<select name="pkg_cat_id" class="form-control">
								<option value="">Select category</option>
								<?php foreach ($category_arr as $category) {
									if($category['id'] == $pkg_cat_id){
									   $selected = "selected";
									  }else{
									   $selected="";
									  }

								?>
									
								<option value="<?php echo $category['id']?>"<?php echo $selected;?>><?php echo $category['packages_category_name']?> </option>
									
								<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="Icon Image">Product Icon Image</label>
							<input type="file" name="icon_image" id="icon_image">
							<p class="help-block">94 X 94 ( In Pixel )</p>
							<img src="<?php echo $package_arr['icon_image']?>" style="margin-left: 233px; margin-top: -128px; width:60px;">
						</div>
						<div class="form-group col-md-3">
							<label for="Package Title "> Product Title </label>
							<input name="package_title" id="package_title" type="text" class="form-control" value="<?php echo $package_arr['package_title']?>">
						</div>
						
						<div class="form-group col-md-3">
							<label for="Package Price "> Product Price in ₹</label>
							<input name="package_price" id="package_price" type="text" class="form-control" value="<?php echo $package_arr['package_price']?>">
						</div>
					</div>	
					
					<!-- End First Look -->
					
					<!--Package Details Page------>
					<div class="box-header with-border">
						<h3 class="box-title">2. Product Details (Slider Content)</h3>
					</div>
					
					<div class="form-group col-md-3">
						<label for="Package Price "> Number of Product</label>
						<input name="number_of_qty" id="number_of_qty" type="text" class="form-control" value="<?php echo $package_arr['number_of_qty']?>">
					</div>
					<div class="box-body">
						<div class="form-group col-md-2">
							<label for="Slider Description">Product Description</label>
							<textarea name="slider_desc1" id="slider_desc1" class="form-control" style="height: 80px;" ><?php echo $package_arr['slider_desc1']?></textarea>
						</div>
						<div class="form-group col-md-2">
							<label for="Slider-Image1">Product Image </label>
							<input type="file" name="slider_image1" id="slider_image1">
							<p class="help-block">1600X1000 (In Pixel)</p>
							<img src="<?php echo $package_arr['slider_image1']?>" style="margin-left: 185px; margin-top: -128px; width:60px;">
						</div>
						
					</div>
					
					<!--Package Highlights Page------>
					
					<!-- /.box-body -->
					
					<div class="box-footer">
						<input type="submit" name="submit" value="Update" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>
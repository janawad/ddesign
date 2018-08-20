<?php
	require_once "clasess/blog.class.php";
	$blogObj = new blog();
	
	if($_REQUEST['submit'] == "Update"){
		
		$blogObj->Updateblog($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=blog/list-blog'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['blog_id'])){
		$blog_arr = $blogObj->getblogByID($_REQUEST['blog_id']);
		extract($blog_arr);
	}
	
	$category_arr =$blogObj->getCategory();
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Blog</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name"> Blog Title </label>
							<input name="blog_title" id="blog_title" type="text" class="form-control" value="<?php echo $blog_title; ?>" required>
						</div>
						<div class="form-group">
							<label for="facts Description">Blog Description</label>
							<textarea name="blog_desc" id="blog_desc" class="form-control" style="height: 120px;" required><?php echo $blog_desc; ?></textarea>
						</div>
						<div class="form-group">
							<label for="Image">Small Image</label>
							<input type="file" name="blog_image" id="blog_image">
							<p class="help-block">370 X 407 ( In Pixel )</p>
							<img src="<?php echo $blog_image; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
						</div>
						<div class="form-group">
							<label for="Image_details">Image for details page</label>
							<input type="file" name="blog_image_details" id="blog_image_details">
							<p class="help-block">1170 X 568 ( In Pixel )</p>
							<img src="<?php echo $blog_image_details; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
						</div>
						<!--<div class="form-group">
							<label >Select Category</label>
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
						</div>-->
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" value="Update" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>
<?php
	require_once "clasess/packages_category.class.php";
	$packages_categoryObj = new packages_category();
	if($_REQUEST['submit'] == "Submit"){
  
		$packages_categoryObj->addPackages_category($_REQUEST);
		
		/* redirect to the browser */
		 echo "<script> location.href='index.php?page=packages_category/list-packages_category'; </script>";
	}
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Category</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name">Category Title </label>
							<input name="packages_category_name" id="packages_category_name" type="text" class="form-control" placeholder="Enter Category Title" required>
						</div>
						<div class="form-group">
							<label for="packages_category Description">Category Description</label>
							<textarea name="description" id="description" class="form-control" placeholder="Enter Description..." style="height: 120px;" required></textarea>
						</div>
						<div class="form-group">
							<label for="Image">Image</label>
							<input type="file" name="packages_category_image" id="packages_category_image">
							<p class="help-block">Example block-level help text here.</p>
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
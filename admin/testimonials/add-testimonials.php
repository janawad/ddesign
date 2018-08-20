<?php
	require_once "clasess/testimonials.class.php";
	$testimonialsObj = new testimonials();
	if($_REQUEST['submit'] == "Submit"){
  
		$testimonialsObj->addtestimonials($_REQUEST);
		
		/* Redirect to the browser */
		echo "<script> location.href='index.php?page=testimonials/list-testimonials'; </script>";
	}
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Testimonial</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name"> Testimonials Name </label>
							<input name="testimonials_name" id="testimonials_name" type="text" class="form-control" placeholder="Enter Testimonials Title" required>
						</div>
						<div class="form-group">
							<label for="Course Name">About him- Company name, Domain, Position..... </label>
							<input name="position" id="position" type="text" class="form-control" placeholder="Enter Company name, Domain, Position...." required>
						</div>
						<div class="form-group">
							<label for="facts Description">Testimonials Description</label>
							<textarea name="testimonials_desc" id="testimonials_desc" class="form-control" placeholder="Enter Description..." style="height: 120px;" required></textarea>
						</div>
						<div class="form-group">
							<label for="Image">Image</label>
							<input type="file" name="testimonials_image" id="testimonials_image">
							<p class="help-block">Iamge size is 142 X 142 ( In pixel )</p>
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
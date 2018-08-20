<?php
	require_once "clasess/press_media.class.php";
	$press_mediaObj = new press_media();
	if($_REQUEST['submit'] == "Submit"){
  
		$press_mediaObj->addpress_media($_REQUEST);
	?>	
		<script> location.href='index.php?page=press_media/list-press_media'; </script>
		
	<?php }
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Press Media</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name">Press Media Title </label>
							<input name="press_media_title" id="press_media_title" type="text" class="form-control" placeholder="Enter Press Media Title" required>
						</div>
						<div class="form-group">
							<label for="facts Description">Press Media Description</label>
							<textarea name="press_media_desc" id="press_media_desc" class="form-control" placeholder="Enter Description..." style="height: 120px;" required></textarea>
						</div>
						<div class="form-group">
							<label for="Course Name">Press Media Link </label>
							<input name="press_media_link" id="press_media_link" type="text" class="form-control" placeholder="Enter Press Media Link" required>
						</div>
						<div class="form-group">
							<label for="Image">Image</label>
							<input type="file" name="press_media_image" id="press_media_image">
							<p class="help-block">370 x 402 in pixel</p>
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
<?php
	require_once "clasess/press_media.class.php";
	$press_mediaObj = new press_media();
	
	if($_REQUEST['submit'] == "Update"){
		
		$press_mediaObj->Updatepress_media($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=press_media/list-press_media'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['press_media_id'])){
		$press_media_arr = $press_mediaObj->getpress_mediaByID($_REQUEST['press_media_id']);
		extract($press_media_arr);
	}
	
	
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New press_media</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name"> press_media Title </label>
							<input name="press_media_title" id="press_media_title" type="text" class="form-control" value="<?php echo $press_media_title; ?>" required>
						</div>
						<div class="form-group">
							<label for="facts Description">press_media Description</label>
							<textarea name="press_media_desc" id="press_media_desc" class="form-control" style="height: 120px;" required><?php echo $press_media_desc; ?></textarea>
						</div>
						<div class="form-group">
							<label for="Course Name"> press_media Link </label>
							<input name="press_media_link" id="press_media_link" type="text" class="form-control" value="<?php echo $press_media_link; ?>" required>
						</div>
						<div class="form-group">
							<label for="Image">Small Image</label>
							<input type="file" name="press_media_image" id="press_media_image">
							<p class="help-block">370 X 402 ( In Pixel )</p>
							<img src="<?php echo $press_media_image; ?>" alt="small image" width="60px" style="margin-left: 250px; margin-top: -100px;">
						</div>
						
						
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
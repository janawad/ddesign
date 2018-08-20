<?php
	require_once "clasess/place.class.php";
	$placeObj = new place();
	if($_REQUEST['submit'] == "Submit"){
  
		$placeObj->addplace($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=place/list-place'; </script>";
	}
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
					
					<div class="box-body">
						
						<div class="form-group col-md-3">
							<label for="Package Title "> Place Name </label>
							<input name="area" id="area" type="text" class="form-control" placeholder="Enter Place Name" required>
						</div>
						
					</div>	
					
					<!-- End First Look -->
					
					
					<div class="box-footer">
						<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>
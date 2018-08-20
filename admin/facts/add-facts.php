<?php
	require_once "clasess/facts.class.php";
	$factsObj = new facts();
	if($_REQUEST['submit'] == "Submit"){
  
		$factsObj->addFacts($_REQUEST);
	?>	
		<script> location.href='index.php?page=facts/list-facts'; </script>
		
	<?php }
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Facts</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name">Facts Title </label>
							<input name="facts_title" id="facts_title" type="text" class="form-control" placeholder="Enter facts Title" required>
						</div>
						<div class="form-group">
							<label for="facts Description">Facts Description</label>
							<textarea name="facts_desc" id="facts_desc" class="form-control" placeholder="Enter Description..." style="height: 120px;" required></textarea>
						</div>
						<div class="form-group">
							<label for="Image">Image</label>
							<input type="file" name="facts_image" id="facts_image">
							<p class="help-block">370 X 402 ( In Pixel )</p>
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
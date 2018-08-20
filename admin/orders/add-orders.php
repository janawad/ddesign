<?php
	require_once "clasess/orders.class.php";
	$ordersObj = new orders();
	if($_REQUEST['submit'] == "Submit"){
  
		$ordersObj->addorders($_REQUEST);
	?>	
		<script> location.href='index.php?page=orders/list-orders'; </script>
		
	<?php }
	
?>
	<div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New orders</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="Course Name">product Title </label>
							<input name="name" id="name" type="text" class="form-control" placeholder="Enter Title" required>
						</div>
						<div class="form-group">
							<label for="facts Description">email</label>
							<input name="email" id="email" class="form-control" placeholder="Enter Description..." required>
						</div>
						<div class="form-group">
							<label for="facts Description">phone</label>
							<input name="phone" id="phone" class="form-control" placeholder="Enter Description..." required>
						</div>
						<div class="form-group">
							<label for="facts Description">country</label>
							<input name="country" id="country" class="form-control" placeholder="Enter Description..." required>
						</div>
						<div class="form-group">
							<label for="facts Description">product description</label>
							<input name="message" id="message" class="form-control" placeholder="Enter Description..." required>
						</div>
						<div class="form-group">
							<label for="Course Name">product number </label>
							<input name="products_number" id="products_number" type="text" class="form-control" placeholder="Enter Title" required>
						</div>
						<div class="form-group">
							<label for="Course Name">product status</label>
							<input name="status" id="status" type="text" class="form-control" placeholder="Enter Title" required>
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
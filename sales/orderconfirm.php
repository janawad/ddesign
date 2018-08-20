<?php 
	include("header.php");

	$text = $_POST['text'];
	$id = $_POST['id'];
	$name = $_POST['package_title'];
	$amount = $_POST['package_price'];
	$pkg_cat_id = $_POST['pkg_cat_id'];
	$number_of_qty = $_POST['number_of_qty'];
	$email=$_POST['email'];
	$pname=$_POST['name'];
	$address=$_POST['address'];
	$image=$_POST['icon_image'];
	$gst=$_POST['gst'];
	$pan=$_POST['pan'];
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card data-tables">
					<div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
						<div class="toolbar">
							<!--        Here you can write extra buttons/actions for the toolbar              -->
						</div>
						<div class="fresh-datatables">
							<form role="form" method="post" enctype="multipart/form-data">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								<thead>
									<tr>
										<th>Product image</th>
										<th>Product Name</th>
										<th>Qty</th>
										<th>Amount</th>
										<th>Email</th>
										<th>Address</th>
									</tr>
								</thead>
								
								
								<tbody>
									<td><img src="../admin/uploads/package/<?php echo $image; ?>" width="100" alt="product"/></td>
									<td><?php echo $name; ?></td>
									<td><?php echo $text; ?></td>
									<td><?php echo $amount; ?></td>
									<td><?php echo $email; ?></td>
									<td><?php echo $address; ?></td>
								</tbody>
							</table>
							<div class="box-body">
						<div class="form-group">
							<!--<label for="Course Name">product Title </label>-->
							<input name="package_title" id="package_title" type="hidden" class="form-control" value="<?php echo $name; ?>">
						</div>
						<div class="form-group">
							<!--<label for="facts Description">package_price</label>-->
							<input type="hidden" name="amount" id="amount" class="form-control" value="<?php echo $amount; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">qty</label>-->
							<input type="hidden" name="qty" id="qty" class="form-control" value="<?php echo $text; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">number_of_qty</label>-->
							<input type="hidden" name="number_of_qty" id="number_of_qty" class="form-control" value="<?php echo $number_of_qty; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">product_id</label>-->
							<input type="hidden" name="product_id" id="product_id" class="form-control" value="<?php echo $id; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">email</label>-->
							<input type="hidden" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">name</label>-->
							<input type="hidden" name="name" id="name" class="form-control" value="<?php echo $pname; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">address</label>-->
							<input type="hidden" name="address" id="address" class="form-control" value="<?php echo $address; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">Gst</label>-->
							<input type="hidden" name="gst" id="gst" class="form-control" value="<?php echo $gst; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">Pan</label>-->
							<input type="hidden" name="pan" id="pan" class="form-control" value="<?php echo $pan; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">Image</label>-->
							<input type="hidden" name="image" id="image" class="form-control" value="<?php echo $image; ?>" required>
						</div>
						<div class="form-group">
							<!--<label for="facts Description">Total amount</label>-->
							<input type="hidden" name="tamount" id="tamount" class="form-control" value="<?php echo $text * $amount ; ?>" required>
						</div>
					</div>
					<br>
					<div class="box-footer" style="text-align:center">
						<input type="submit" name="submit" id="submit" value="Place Order" class="btn btn-success">
					</div>
					<br>
					</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



	<?php
	require_once "../admin/clasess/purchase.class.php";
	$purchaseObj = new purchase();

	if($_REQUEST['submit'] == "Place Order"){
  
		$purchaseObj->addpurchase($_REQUEST);
		$purchaseObj->Updatepackageqty($_REQUEST);
		/******* emial ******/
		//echo "<script> location.href='index.php'; </script>";
		/******* emial ******/
	 }
	 
	include("footer.php")
	?>
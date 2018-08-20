	<!--Successfully Deleted-->
	<div class="modal fade" id="orders-enquiry-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;orders Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/orders.class.php";
		$orders = new orders();
	 
		if(isset($_REQUEST['delid'])){
            $result = $orders->deleteorders($_REQUEST['delid']);
            if($result==1){ ?>
				<script>
					$("#Delete-orders-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=orders/list-orders'  }, 1000);
				</script> <?php
			}
		}
         
		//listing orders
		$orders_arr = $orders->getAllpendingorders();
	?>
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<form action="../sales/report/incomplete.php" method="post">
						    &nbsp;&nbsp;&nbsp;<input type="submit" name="exoprt_excel" value="Export All In-Completed Orders" class="btn btn-success">
						</form>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Date/Time</th>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Amount</th>
									<th>User Name</th>
									<th>Gst</th>
									<th>Pan</th>
									<th>Email</th>
									<th>Address</th>
									<th>Status</th>
									<th>Change Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($orders_arr as $orders){ ?>
									<tr>
										<td>
										   <?php echo $orders['date_created'] ?> 
										</td>
										<td>
										   <img src="uploads/package/<?php echo $orders['image'] ?>" width="100" alt="product image"/> 
										</td>
										<td>
											<?php echo $orders['package_title'] ?> 
										</td>
										<td>
											<?php echo $orders['qty'] ?> 
										</td>
										<td>
											<?php echo $orders['amount'] ?> 
										</td>
										<td>
											<?php echo $orders['name'] ?> 
										</td>
										<td>
											<?php echo $orders['gst'] ?> 
										</td>
										<td>
											<?php echo $orders['pan'] ?> 
										</td>
										<td>
											<?php echo $orders['email'] ?> 
										</td>
										<td>
											<?php echo $orders['address'] ?> 
										</td>
										<td>
											<?php echo $orders['status'] ?> 
										</td>
										<td>
											<a href="index.php?page=orders/edit-orders&id=<?php echo $orders['id'];  ?>" class="btn btn-success">Change Status</a>
										</td>
										
										<td>
											<a href="index.php?page=orders/list-orders&delid=<?php echo $orders['id'];  ?>" class="btn btn-danger">Delete</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Date/Time</th>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Amount</th>
									<th>User Name</th>
									<th>Gst</th>
									<th>Pan</th>
									<th>Email</th>
									<th>Address</th>
									<th>Status</th>
									<th>Change Staus</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	
	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 0, "desc" ]]
			});
		});
	</script>
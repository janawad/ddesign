	<!--Successfully course Deleted-->
	<div class="modal fade" id="Delete-register-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;register Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/register.class.php";
		$register = new register();
	 
		if(isset($_REQUEST['delid'])){
            $result = $register->deleteregister($_REQUEST['delid']);
            if($result==1){ ?>
				<script>
					$("#Delete-register-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=register/list-register'  }, 1000);
				</script> <?php
			}
		}
         
		//listing testimonials
		$register_arr = $register->getAllregister();
	?>
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Users Table</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Date/Time</th>
									<th>Name</th>
									<th>Email</th>
									<th>Password</th>
									<th>GST</th>
									<th>PAN</th>
									<th>Address</th>
									<th>Register Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($register_arr as $register){ ?>
									<tr>
										<td>
										   <?php echo $register['date_created'] ?> 
										</td>
										<td>
										   <?php echo $register['name'] ?> 
										</td>
										<td>
											<?php echo $register['email'] ?> 
										</td>
										
										<td>
											<?php echo $register['password'] ?> 
										</td>
										
										<td>
											<?php echo $register['gst'] ?> 
										</td>
										
										<td>
											<?php echo $register['pan'] ?> 
										</td>
										
										<td>
											<?php echo $register['address'] ?> 
										</td>
										
										<td>
											<?php echo $register['register_type'] ?> 
										</td>
										
										<td>
											<a href="index.php?page=register/list-register&delid=<?php echo $register['id'];  ?>" class="btn btn-danger">Delete</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Date/Time</th>
									<th>Name</th>
									<th>Email</th>
									<th>Password</th>
									<th>GST</th>
									<th>PAN</th>
									<th>Address</th>
									<th>Register Type</th>
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
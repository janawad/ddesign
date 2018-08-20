	<!--Successfully Deleted-->
	<div class="modal fade" id="Delete-enquiry-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Enquiry Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/enquiry.class.php";
		$enquiry = new enquiry();
	 
		if(isset($_REQUEST['delid'])){
            $result = $enquiry->deleteEnquiry($_REQUEST['delid']);
            if($result==1){ ?>
				<script>
					$("#Delete-enquiry-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=enquiry/list-enquiry'  }, 1000);
				</script> <?php
			}
		}
         
		//listing Enquiry
		$enquiry_arr = $enquiry->getAllEnquiry();
	?>
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Hover Data Table</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Date/Time</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>country</th>
									<th>Message</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($enquiry_arr as $enquiry){ ?>
									<tr>
										<td>
										   <?php echo $enquiry['date_created'] ?> 
										</td>
										<td>
										   <?php echo $enquiry['name'] ?> 
										</td>
										<td>
											<?php echo $enquiry['email'] ?> 
										</td>
										<td>
											<?php echo $enquiry['phone'] ?> 
										</td>
										<td>
											<?php echo $enquiry['country'] ?> 
										</td>
										<td>
											<?php echo $enquiry['message'] ?> 
										</td>
										<td>
											<a href="index.php?page=enquiry/list-enquiry&delid=<?php echo $enquiry['id'];  ?>" class="btn btn-danger">Delete</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Date/Time</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>country</th>
									<th>Message</th>
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
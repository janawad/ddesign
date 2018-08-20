	<!--Successfully Testimonials Add-->
	<div class="modal fade" id="add-testimonials-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Testimonials Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully Testimonials Updated-->
	<div class="modal fade" id="Update-testimonials-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Testimonials Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully Testimonials Deleted-->
	<div class="modal fade" id="Deleted-testimonials-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Testimonials Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/testimonials.class.php";
		$testimonials = new testimonials();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $testimonials->Addtestimonials($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-testimonials-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=testimonials/list-testimonials'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $testimonials->Updatetestimonials($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-testimonials-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=testimonials/list-testimonials'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['testimonials_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $testimonials->Deletetestimonials($_REQUEST['testimonials_id']);
			if($result==1){?>
				<script>
					$("#Deleted-testimonials-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=testimonials/list-testimonials'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing testimonials detials
		$testimonials_arr = $testimonials->gettestimonials();
	 
	?>
	
	<div class="modal fade" id="edit_form_testimonials" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" id="addAllform"></div>
	</div>
	<!--content start-->
	
		<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!------- Add new Testimonials -------->
							<a href='index.php?page=testimonials/add-testimonials' class="btn btn-primary">Add New Testimonials</a></br></br>
						<!------new testimonials ------>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Description</th>
									<th>Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($testimonials_arr as $testimonials){ ?>
									<tr>
										<td>
											<?php echo $testimonials['testimonials_name'];?>
										</td>
										<td>
											<?php echo $testimonials['position'];?>
										</td>
										<td>
											<?php echo $testimonials['testimonials_desc'];?>
										</td>
										<td>
											<img src="<?php echo $testimonials['testimonials_image'];?>" width="50px" height="50px">
										</td>
										<td>
											<?php echo $testimonials['date_created'];?>
										</td>
										<td>
											<?php echo $testimonials['date_updated'];?>
										</td>
										<td>
											<a href="javascript:void(0);" class="btn bg-green mbottom20" onclick="edittestimonials(<?php echo $testimonials['id'];?>);">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $testimonials['id'];?>" name="form_delete_<?php echo $testimonials['id'];?>">
												<input type="hidden" name="testimonials_id" id="testimonials_id" value="<?php echo $testimonials['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $testimonials['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $testimonials['id'];?>);">Delete</a>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Description</th>
									<th>Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
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
				"order": [[ 4, "desc" ]]
			});
		});
	</script>
	
	<!--Successfully package Add-->
	<div class="modal fade" id="add-package-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;package Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully package Updated-->
	<div class="modal fade" id="Update-package-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;package Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully package Deleted-->
	<div class="modal fade" id="Deleted-package-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;package Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/place.class.php";
		$place = new place();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $place->Addplace($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-package-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=place/list-place'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['place_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $place->Deleteplace($_REQUEST['place_id']);
			if($result==1){?>
				<script>
					$("#Deleted-package-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=place/list-place'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing place detials
		$place_arr = $place->getplace();
	 
	?>
	
	<div class="modal fade" id="edit_form_package" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" id="addAllform"></div>
	</div>
	<!--content start-->
	
	
	

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new packages---------->
							<a href='index.php?page=place/add-place' class="btn btn-primary">Add New Place</a></br></br>
						<!--------new packages --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Place Name</th>
									<th>Created Date</th>
									<!--<th>Edit </th>-->
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($place_arr as $place){ ?>
								<tr>
									<td>
										<?php echo $place['area'];?>
									</td>
									
									<td>
										<?php echo $place['date_created'];?>
									</td>
									
									<!--<td>
										<a href="index.php?page=place/edit-place&package_id=<?php echo $place['id']; ?>" class="btn bg-green mbottom20">edit</a>
									</td>-->
									
									<td>
										<form method="post" id="form_delete_<?php echo $place['id'];?>" name="form_delete_<?php echo $place['id'];?>">
											<input type="hidden" name="place_id" id="place_id" value="<?php echo $place['id'];?>">
											<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $place['id'];?>">
											<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $place['id'];?>);">Delete</a>
										</form>
									</td>
									
								</tr>
							<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Place Name</th>
									<th>Created Date</th>
									<!--<th>Edit </th>--> 
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
				"order": [[ 44, "desc" ]]
			});
		});
	</script>


	
	
	
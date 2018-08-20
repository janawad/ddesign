	<!--Successfully facts Add-->
	<div class="modal fade" id="add-facts-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;facts Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully facts Updated-->
	<div class="modal fade" id="Update-facts-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;facts Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully facts Deleted-->
	<div class="modal fade" id="Deleted-facts-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;facts Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/facts.class.php";
		$facts = new facts();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $facts->Addfacts($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-facts-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=facts/list-facts'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $facts->Updatefacts($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-facts-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=facts/list-facts'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['facts_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $facts->Deletefacts($_REQUEST['facts_id']);
			if($result==1){?>
				<script>
					$("#Deleted-facts-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=facts/list-facts'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing facts detials
		$facts_arr = $facts->getfacts();
	 
	?>
	
	<div class="modal fade" id="edit_form_facts" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" id="addAllform"></div>
	</div>
	<!--content start-->
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!--------Add new facts --------->
							<a href='index.php?page=facts/add-facts' class="btn btn-primary">Add New Facts</a></br></br>
						<!--------new facts --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($facts_arr as $facts){ ?>
									<tr>
										<td>
											<?php echo $facts['facts_title'];?>
										</td>
										<td>
											<?php echo $facts['facts_desc'];?>
										</td>
										<td>
											<img src="<?php echo $facts['facts_image'];?>" width="50px" height="50px">
										</td>
										<td>
											<?php echo $facts['date_created'];?>
										</td>
										<td>
											<?php echo $facts['date_updated'];?>
										</td>
										<td>
											<a href="javascript:void(0);" class="btn bg-green mbottom20" onclick="editfacts(<?php echo $facts['id'];?>);">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $facts['id'];?>" name="form_delete_<?php echo $facts['id'];?>">
												<input type="hidden" name="facts_id" id="facts_id" value="<?php echo $facts['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $facts['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $facts['id'];?>);">Delete</a>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Title</th>
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
				"order": [[ 3, "desc" ]]
			});
		});
	</script>
	
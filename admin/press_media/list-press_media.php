	<!--Successfully press_media Add-->
	<div class="modal fade" id="add-press_media-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Press Media Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully press_media Updated-->
	<div class="modal fade" id="Update-press_media-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Press Media Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully press_media Deleted-->
	<div class="modal fade" id="Deleted-press_media-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;Press Media Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/press_media.class.php";
		$press_media = new press_media();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $press_media->Addpress_media($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-press_media-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=press_media/list-press_media'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $press_media->Updatepress_media($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-press_media-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=press_media/list-press_media'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['press_media_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $press_media->Deletepress_media($_REQUEST['press_media_id']);
			if($result==1){?>
				<script>
					$("#Deleted-press_media-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=press_media/list-press_media'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing press_media detials
		$press_media_arr = $press_media->getpress_media();
	 
	?>
	
	<div class="modal fade" id="edit_form_press_media" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" id="addAllform"></div>
	</div>
	<!--content start-->
	
		<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!--------Add new press_media --------->
							<a href='index.php?page=press_media/add-press_media' class="btn btn-primary">Add New Press Media </a></br></br>
						<!--------new press_media --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Image</th>
									<th>Link</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($press_media_arr as $press_media){ ?>
									<tr>
										<td>
											<?php echo $press_media['press_media_title'];?>
										</td>
										<td>
											<?php echo $press_media['press_media_desc'];?>
										</td>
										<td>
											<img src="<?php echo $press_media['press_media_image'];?>" width="50px" height="50px">
										</td>
										<td>
											<?php echo $press_media['press_media_link'];?>
										</td>
										<td>
											<?php echo $press_media['date_created'];?>
										</td>
										<td>
											<?php echo $press_media['date_updated'];?>
										</td>
										<td>
											<a href="javascript:void(0);" class="btn bg-green mbottom20" onclick="editpress_media(<?php echo $press_media['id'];?>);">edit</a>
											
											<!--<a href="index.php?page=press_media/edit-press_media&press_media_id=<?php echo $press_media['id']; ?>" class="btn bg-green mbottom20">edit</a>-->
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $press_media['id'];?>" name="form_delete_<?php echo $press_media['id'];?>">
												<input type="hidden" name="press_media_id" id="press_media_id" value="<?php echo $press_media['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $press_media['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $press_media['id'];?>);">Delete</a>
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
									<th>Link</th>
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
				"order": [[ 5, "desc" ]]
			});
		});
	</script>
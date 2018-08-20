	<!--Successfully packages_category Add-->
	<div class="modal fade" id="add-packages_category-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;packages_category Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully packages_category Updated-->
	<div class="modal fade" id="Update-packages_category-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;packages_category Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully packages_category Deleted-->
	<div class="modal fade" id="Deleted-packages_category-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;packages_category Deleted Successfully</div>
			</div>
		</div>
	</div>

<?php
	require_once "clasess/packages_category.class.php";
	$packages_category = new packages_category();
 
	//Add and Edit form
	if($_REQUEST['submit']=="addform"){
		if($_REQUEST['url']=="insert"){
			$result = $packages_category->AddPackages_category($_REQUEST);
			if($result==1){ ?>
				<script>
				$("#add-packages_category-successModal").modal('show');
				setTimeout(function(){ window.location.href='index.php?page=packages_category/list-packages_category'  }, 1000);
				</script> <?php
			}
		}else{
			$result = $packages_category->UpdatePackages_category($_REQUEST);
			if($result==1){ ?>
				<script>
					$("#Update-packages_category-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=packages_category/list-packages_category'  }, 1000);
				</script> <?php
			}
		}
	}
 
	//Delete form
	$deleted1 = "Deleted_";
	$deleted2 = $_REQUEST['packages_category_id'];
	$result = $deleted1.$deleted2;
	if($_REQUEST['submit_id']==$result){
		$result = $packages_category->DeletePackages_category($_REQUEST['packages_category_id']);
		if($result==1){?>
			<script>
				$("#Deleted-packages_category-successModal").modal('show');
				setTimeout(function(){ window.location.href='index.php?page=packages_category/list-packages_category'  }, 1000);
			</script> <?php
		}
	}
 
	//listing packages_category detials
	$packages_category_arr = $packages_category->getPackages_category();
 
?>
		<div class="modal fade" id="edit_form_packages_category" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" id="addAllform">
			</div>
		</div>
		<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!--------Add new facts --------->
							<a href='index.php?page=packages_category/add-packages_category' class="btn btn-primary">Add New Category</a></br></br>
						<!--------new facts --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Packages Category Name</th>
									<th>Description</th>
									<th>Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($packages_category_arr as $packages_category){ ?>
									<tr>
										<td>
											<?php echo $packages_category['packages_category_name'];?>
										</td>
										<td>
											<?php echo $packages_category['description'];?>
										</td>
										<td>
											<img src="<?php echo $packages_category['packages_category_image'];?>" width="50px" height="50px">
										</td>
										<td>
											<?php echo $packages_category['date_created'];?>
										</td>
										
										<td>
											<?php echo $packages_category['date_updated'];?>
										</td>
										<td>
											<a href="javascript:void(0);" class="btn bg-green mbottom20" onclick="editpackages_category(<?php echo $packages_category['id'];?>);">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $packages_category['id'];?>" name="form_delete_<?php echo $packages_category['id'];?>">
												<input type="hidden" name="packages_category_id" id="packages_category_id" value="<?php echo $packages_category['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $packages_category['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $packages_category['id'];?>);">Delete</a>
											</form>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Packages Category Name</th>
									<th>Description</th>
									<th>Image</th>
									<th>Edit</th>
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
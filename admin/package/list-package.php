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
		require_once "clasess/package.class.php";
		$package = new package();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $package->Addpackage($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-package-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=package/list-package'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $package->Updatepackage($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-package-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=package/list-package'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['package_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $package->Deletepackage($_REQUEST['package_id']);
			if($result==1){?>
				<script>
					$("#Deleted-package-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=package/list-package'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing package detials
		$package_arr = $package->getPackage();
	 
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
							<a href='index.php?page=package/add-package' class="btn btn-primary">Add New Product</a></br></br>
						<!--------new packages --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Pkg Category</th>
									<th>Product Icon Image</th>
									<th>Product Title</th>
									<th>Product Price</th>
									<th>Number Of Products</th>
									<th>Product Description</th>
									<th>Product Image</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($package_arr as $package){ ?>
								<tr>
									<td>
										<?php echo $package['packages_category_name'];?>
									</td>
									
									<td>
										<img src="<?php echo $package['icon_image'];?>" width="50px">
									</td>
									
									<td>
										<?php echo $package['package_title'];?>
									</td>
									
									<td>
										<?php echo $package['package_price'];?>
									</td>
									
									<td>
										<?php echo $package['number_of_qty'];?>
									</td>
									
									<td>
										<?php echo $package['slider_desc1'];?>
									</td>
									
									<td>
										<img src="<?php echo $package['slider_image1'];?>" width="50px">
									</td>
									
									
									<td>
										<?php echo $package['date_created'];?>
									</td>
									
									<td>
										<?php echo $package['date_updated'];?>
									</td>
									
									<td>
										<a href="index.php?page=package/edit-package&package_id=<?php echo $package['id']; ?>" class="btn bg-green mbottom20">edit</a>
									</td>
									
									<td>
										<form method="post" id="form_delete_<?php echo $package['id'];?>" name="form_delete_<?php echo $package['id'];?>">
											<input type="hidden" name="package_id" id="package_id" value="<?php echo $package['id'];?>">
											<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $package['id'];?>">
											<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $package['id'];?>);">Delete</a>
										</form>
									</td>
									
								</tr>
							<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Pkg Category</th>
									<th>Product Icon Image</th>
									<th>Product Title</th>
									<th>Product Price</th>
									<th>Number Of Products</th>
									<th>Product Description</th>
									<th>Product Image</th>
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
				"order": [[ 44, "desc" ]]
			});
		});
	</script>


	
	
	
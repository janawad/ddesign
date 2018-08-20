	<?php
		require_once "clasess/folder.class.php";
		$folder = new folder();
	 
		
	 
		//listing blog detials
		$folder_arr = $folder->getfolder();
		$counter = 0;
	?>
	
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new blogs---------->
							
						<!--------new blogs --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Sl.no</th>
									<th>Email</th>
									<th>Date Created</th>
									<th>Selected Products </th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($folder_arr as $folder){ ?>
									<tr>
										<td>
											<?php echo ++$counter ;?>
										</td>
										<td>
											<?php echo $folder['email'];?>
										</td>
										
										
										<td>
											<?php echo $folder['date_created'];?>
										</td>
										
										<td>
											<a href="index.php?page=folder/show-folder&email=<?php echo $folder['email']; ?>" class="btn bg-green mbottom20">Check the Selected Products</a>
										</td>
										<!--<td>
											<form method="post" id="form_delete_<?php echo $blog['id'];?>" name="form_delete_<?php echo $blog['id'];?>">
												<input type="hidden" name="blog_id" id="blog_id" value="<?php echo $blog['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $blog['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $blog['id'];?>);">Delete</a>
											</form>
										</td>-->
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Sl.no</th>
									<th>Email</th>
									<th>Date Created</th>
									<th>Selected Products </th>
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
	
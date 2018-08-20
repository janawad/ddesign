<?php
	require_once "clasess/folder.class.php";
	$folderObj = new folder();
	
	
	
	//Get Detials by id
	if(isset($_REQUEST['email'])){
		$folder_arr = $folderObj->getfolderByID($_REQUEST['email']);
		//extract($folder_arr);
	}
	
	
	
	
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
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Product Category</th>
									<th>Product Price</th>
									<th>Product Description</th>
									<th>Required No. Of Product</th>
									<th>Created Date</th>
									
								</tr>
							</thead>
							<tbody>
								<?php foreach($folder_arr as $folder){ ?>
									<tr>
										<td>
											<?php echo ++$counter ;?>
										</td>
										
										<td>
											<img src="uploads/package/<?php echo $folder['slider_image1'];?>" alt="product" width="100px">
										</td>
										
										<td>
											<?php echo $folder['package_title'];?>
										</td>
										
										<td>
											<?php $query=mysql_query("select * from packages_category where id= '".$folder['pkg_cat_id']."'");
												$a=mysql_fetch_array($query);
												echo $a['packages_category_name'];
											?> 
											
										</td>
										
										<td>
											<?php echo $folder['package_price'];?>
										</td>
										
										<td>
											<?php echo $folder['slider_desc1'];?>
										</td>
										
										<td>
											<?php echo $folder['quantity'];?>
										</td>
										
										<td>
											<?php echo $folder['date_created'];?>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Sl.no</th>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Product Category</th>
									<th>Product Price</th>
									<th>Product Description</th>
									<th>Required No. Of Product</th>
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
	<!--Successfully blog Add-->
	<div class="modal fade" id="add-blog-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;blog Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully blog Updated-->
	<div class="modal fade" id="Update-blog-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;blog Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully blog Deleted-->
	<div class="modal fade" id="Deleted-blog-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;blog Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/blog.class.php";
		$blog = new blog();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $blog->Addblog($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-blog-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=blog/list-blog'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $blog->Updateblog($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-blog-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=blog/list-blog'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['blog_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $blog->Deleteblog($_REQUEST['blog_id']);
			if($result==1){?>
				<script>
					$("#Deleted-blog-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=blog/list-blog'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing blog detials
		$blog_arr = $blog->getblog();
	 
	?>
	
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new blogs---------->
							<a href='index.php?page=blog/add-blogs' class="btn btn-primary">Add New Blogs</a></br></br>
						<!--------new blogs --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Image</th>
									<th>Image Large</th>
									<th>Pkg Category</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($blog_arr as $blog){ ?>
									<tr>
										<td>
											<?php echo $blog['blog_title'];?>
										</td>
										<td>
											<?php echo $blog['blog_desc'];?>
										</td>
										<td>
											<img src="<?php echo $blog['blog_image'];?>" width="50px">
										</td>
										<td>
											<img src="<?php echo $blog['blog_image_details'];?>" width="50px">
										</td>
										<td>
											<?php echo $blog['packages_category_name'];?>
										</td>
										<td>
											<?php echo $blog['date_created'];?>
										</td>
										<td>
											<?php echo $blog['date_updated'];?>
										</td>
										<td>
											<a href="index.php?page=blog/edit-blog&blog_id=<?php echo $blog['id']; ?>" class="btn bg-green mbottom20">edit</a>
										</td>
										<td>
											<form method="post" id="form_delete_<?php echo $blog['id'];?>" name="form_delete_<?php echo $blog['id'];?>">
												<input type="hidden" name="blog_id" id="blog_id" value="<?php echo $blog['id'];?>">
												<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $blog['id'];?>">
												<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $blog['id'];?>);">Delete</a>
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
									<th>Image Large</th>
									<th>Pkg Category</th>
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
	
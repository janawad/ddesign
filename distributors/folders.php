<?php include("header.php"); ?>
	
	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card data-tables">
                                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="fresh-datatables">
									<form action="#" method="post">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
												<tr>
													<th>Order Date</th>
													<th>Product Image</th>
													<th>Product Name</th>
													<th>Product Description</th>
													<th>Avaliable Quantity</th>
													<th>Quantity</th>
												</tr>
											</thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Order Date</th>
													<th>Product Image</th>
													<th>Product Name</th>
													<th>Product Description</th>
													<th>Avaliable Quantity</th>
													<th>Quantity</th>
												</tr>
                                            </tfoot>
                                            
											<tbody>
												<?php
										$email = $userRow['email'];
										
										$sql = "select * from package";
										$result_set=mysql_query($sql);
										while($row=mysql_fetch_array($result_set))
										{
											
									?>
									<tr>
										<td><input type="checkbox" name="check_list[]" value="<?php echo $row[id];?>"><?php echo $row[id];?></td>
										<td><img src="../admin/uploads/package/<?php echo $row['slider_image1'];?>" width="100" alt="" /></td>
										<td><?php echo $row['package_title'] ?></td>
										<td style="width:50%;"><?php echo $row['slider_desc1'] ?></td>
										<td><?php echo $row['number_of_qty'] ?></td>
										<td><input type="number" name="quty[]"></td>
										<input type="hidden" name="email" value="<?php echo $userRow['email']?>" >
										
									</tr>
									<?php
										}
									?>
											</tbody>
                                        </table>
										<br>
										<div class="" style="text-align:center;">
										<input class="btn btn-success" type="submit" name="submit" value="submit">
										</div>
										</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
		<?php
if(isset($_POST["submit"]))
{
	
$a=array();  // asign the array
// count the quty input fields
 for($k=0;$k<count($_POST["quty"]); $k++)
      {
		  $new = $_POST["quty"][$k];
		  
		if(!$new==''){
			array_push($a,$new);  // push the array
		}
      }
	   if(sizeof($a)==count($_POST["check_list"])) // if sizeof qunatity field equal to size of check box
	   {
	
	
 for($i=0;$i<count($_POST["check_list"]); $i++)
      {
        $transport=$_POST["check_list"][$i];
        $dsec=$a[$i];
		$email = $_POST["email"];
		
//
        
	
		$sql = mysql_query("insert into folders (date_created,product_id,quantity,email) values(NOW(),'$transport','$dsec','$email')");
		if($sql){
			echo "<script>
				alert('your request will be sending successfully !');
				window.location.href='folders.php';
			</script>";
			
		}else{
			echo "<script>
				alert('something error');
				window.location.href='folders.php';
				</script>";
			
		}

      }
	  
	   }else{
		   echo "<script>
			alert('Number of check box is not equal to number of input fields');
			window.location.href='folders.php';
			</script>";
		  
	   }
}

?>	
	
	
	
	<!-------Data table------->
		<script type="text/javascript">
			$(document).ready(function() {
				$('#datatables').DataTable({
					"pagingType": "full_numbers",
					"lengthMenu": [
						[10, 25, 50, -1],
						[10, 25, 50, "All"]
					],
					responsive: true,
					language: {
						search: "_INPUT_",
						searchPlaceholder: "Search records",
					}

				});


				var table = $('#datatables').DataTable();

				// Edit record
				table.on('click', '.edit', function() {
					$tr = $(this).closest('tr');

					if ($tr.hasClass('child')) {
						$tr = $tr.prev('.parent');
					}

					var data = table.row($tr).data();
					alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
				});

				// Delete a record
				table.on('click', '.remove', function(e) {
					$tr = $(this).closest('tr');
					table.row($tr).remove().draw();
					e.preventDefault();
				});

				//Like record
				table.on('click', '.like', function() {
					alert('You clicked on Like button');
				});
			});
		</script>
	<!-------Data table------->

<?php include("footer.php")?>
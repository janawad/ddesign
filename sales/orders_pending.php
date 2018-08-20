<?php include("header.php"); ?>
	
	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card data-tables">
                                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                    <div class="toolbar">
                                        <h3 style="text-align:center;">ALL PENDING PRODUCTS ORDERS</h3>
                                    </div>
                                    <div class="fresh-datatables">
										
										<form action="report/pending_orders.php" method="post">
											<input type="hidden" name="email" value="<?php echo $userRow['email']?>">
											&nbsp;&nbsp;&nbsp;<input type="submit" name="exoprt_excel" value="Export All Pending Data Records" class="btn btn-success">
										</form>
										
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
												<tr>
													<th>Order Date</th>
													<th>Product Image</th>
													<th>Product Name</th>
													<th>Username</th>
													<th>Email</th>
													<th>Amount</th>
													<th>Quantity</th>
													<th>Address</th>
													<th>GST</th>
													<th>PAN</th>
													<th>Status</th>
													<th>Edit</th>
												</tr>
											</thead>
                                            <tfoot>
                                                <tr>
													<th>Order Date</th>
													<th>Product Image</th>
													<th>Product Name</th>
													<th>Username</th>
													<th>Email</th>
													<th>Amount</th>
													<th>Quantity</th>
													<th>Address</th>
													<th>GST</th>
													<th>PAN</th>
													<th>Status</th>
													<th>Edit</th>
												</tr>
                                            </tfoot>
                                            
											<tbody>
				
												<?php
													$email = $userRow['email'];
													
													$sql="SELECT * FROM purchase where email in (select email from register where salesemail ='$email' and status <> 'Success') or 
													email='$email' and status<>'Success'";
													$result_set=mysql_query($sql);
													while($row=mysql_fetch_array($result_set))
													{
												?>
												<tr>
													<td><?php echo $row['date_created'] ?></td>
													<td><img src="../admin/uploads/package/<?php echo $row['image'];?>" width="100" alt="" /></td>
													<td><?php echo $row['package_title'] ?></td>
													<td><?php echo $row['name'] ?></td>
													<td><?php echo $row['email'] ?></td>
													<td><?php echo $row['amount'] ?></td>
													<td><?php echo $row['qty'] ?></td>
													<td><?php echo $row['address'] ?></td>
													<td><?php echo $row['gst'] ?></td>
													<td><?php echo $row['pan'] ?></td>
													<td><?php echo $row['status'] ?></td>
													<td><br><a class="btn bg-green mbottom20" href="editorder.php?edit=<?php echo $row['id'] ?>">Change Status</td>
												</tr>
												<?php
													}
												?>
											</tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	
	<?php include("footer.php")?>
	
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

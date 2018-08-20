<?php include("header.php"); ?>
	
	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card data-tables">
                                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                    <div class="toolbar">
                                        <h3 style="text-align:center;">ALL DISTRIBUTORS</h3>
                                    </div>
                                    <div class="fresh-datatables">
										<!--<form action="report/excel.php" method="post">
											<input type="hidden" name="email" value="<?php echo $userRow['email']?>">
											&nbsp;&nbsp;&nbsp;<input type="submit" name="exoprt_excel" value="Export All Success Records" class="btn btn-success">
										</form>-->
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
												<tr>
													<th>Create Date</th>
													<th>Distributor Name</th>
													<th>Distributor Email</th>
													<th>Distributor Phone</th>
													<th>Distributor Password</th>
													<th>Distributor GST</th>
													<th>Distributor PAN</th>
													<th>Distributor Address</th>
												</tr>
											</thead>
                                            <tfoot>
                                                <tr>
													<th>Create Date</th>
													<th>Distributor Name</th>
													<th>Distributor Email</th>
													<th>Distributor Phone</th>
													<th>Distributor Password</th>
													<th>Distributor GST</th>
													<th>Distributor PAN</th>
													<th>Distributor Address</th>
												</tr>
                                            </tfoot>
                                            
											<tbody>
					
												<?php
													$email = $userRow['email'];
													
													$sql="SELECT * FROM register where salesemail = '$email'";
													$result_set=mysql_query($sql);
													while($row=mysql_fetch_array($result_set))
													{
												?>
												<tr>
												<td><?php echo $row['date_created'] ?></td>
												<td><?php echo $row['name'] ?></td>
												<td><?php echo $row['email'] ?></td>
												<td><?php echo $row['tel'] ?></td>
												<td><?php echo $row['password'] ?></td>
												<td><?php echo $row['gst'] ?></td>
												<td><?php echo $row['pan'] ?></td>
												<td><?php echo $row['address'] ?></td>
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


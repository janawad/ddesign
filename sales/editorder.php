<?php include("header.php"); 
//getting indivual data
	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$res = mysql_query("select * from purchase where id=$id");
		$row = mysql_fetch_array($res);
	}
//update datas
	if(isset($_POST['status']))
	{
		$status = $_POST['status'];
		$id = $_POST['id'];
		$servece_name = $_POST['servece_name'];
		$product_track_no = $_POST['product_track_no'];
		$sql = "Update purchase set status='$status',servece_name='$servece_name',product_track_no='$product_track_no' where id='$id'";
		$res = mysql_query($sql) or die("could not update".mysql_error());
		echo "<script> location.href='orders.php'; </script>";
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="content">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                
                                    <div class="card card-wizard">
                                        <div class="card-header ">
                                            <h3 class="card-title text-center">Product Track</h3>
											<br>
                                            <form action="editorder.php" method="POST">
												<div class="box-body">
													<div class="form-group">
														<input name="id" id="id" type="hidden" class="form-control" value="<?php echo $row[id]?>">
													</div>
												</div>
												
												<div class="box-body">
													<div class="form-group">
														<label for="Package Price "> Status</label>
														<select class="form-control" name="status" id="status">
															<option value="<?php echo $row[status]?>"><?php echo $row[status]?></option>
															<option value="place">Order Placed</option>
															<option value="packing">Pickup and Pack</option>
															<option value="shipping">Shipping</option>
															<option value="Success">Order Delever</option>
														</select>
													</div>
												</div>
												
												<!-- /.box-body -->
												<div id="otherServer">
													<p>Service Name 
														<input class="form-control" type="text" name="servece_name" placeholder="Enter service Name .." value="<?php echo $row[servece_name]?>"/>
													</p>
													<p>Product Track Number
														<input class="form-control" type="text" name="product_track_no" placeholder="Enter Product Track Number ?" value="<?php echo $row[product_track_no]?>"/>
													</p>
												</div>

												<div class="box-footer">
													<input type="submit" name="submit" value="Update" class="btn btn-success">
												</div>
											</form>
											
                                        </div>
                                        <div class="card-body ">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link " data-toggle="tab" role="tab" aria-controls="tab1" aria-selected="true"></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab2" aria-selected="true"></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab3" aria-selected="true"></a>
                                                </li>
                                            </ul><br><br>
                                            <div class="tab-content" style="text-align:center;">
                                                <?php
													$value = $row[status];


													if(place == $value){  ?>
														<img src="../assets/img/step1.PNG" alt="step1" class="col-md-12">
													<?php }
													else if(packing == $value){
														?>
														<img src="../assets/img/step2.PNG" alt="step2" class="col-md-12">
													<?php
													}else if(shipping == $value){
														?>
														<img src="../assets/img/step3.PNG" alt="step3" class="col-md-12">
													<?php
													}else if(Success == $value){
														?>
														<img src="../assets/img/step4.PNG" alt="step4" class="col-md-12">
													<?php
													}else{
														
													}
												?>
                                            </div>
											<br><br>
                                        </div>
                                       
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

	
	<script>
			$(document).ready(function () {
			toggleFields(); // call this first so we start out with the correct visibility depending on the selected form values
			// this will call our toggleFields function every time the selection value of our other field changes
			$("#status").change(function () {
				toggleFields();
			});

		});
		// this toggles the visibility of other server
		function toggleFields() {
			if ($("#status").val() === "shipping")
				$("#otherServer").show();
			else
				$("#otherServer").hide();
		}
	</script>

<?php include("footer.php"); ?>
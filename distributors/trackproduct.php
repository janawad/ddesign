<?php include("header.php"); 
//getting indivual data
	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$res = mysql_query("select * from purchase where id=$id");
		$row = mysql_fetch_array($res);
	}
?>
<div class="content">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                
                                    <div class="card card-wizard">
                                        <div class="card-header ">
                                            <h3 class="card-title text-center">Product Track</h3>
											<br>
                                            <p class="card-category text-center">
												Product Name : <?php echo $row['package_title']; ?> <br>
												Product Price : <?php echo $row['amount']; ?> <br>
														
												<?php if(Success == $row[status] || shipping == $row[status]){
													echo "Courier Service Name :".$row[servece_name];?><br><?php
													echo "Product Track Number :".$row[product_track_no];
												}?>
											</p>
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
														<img src="../assets/img/step1.PNG" alt="Order Placed" class="col-md-12">
													<?php }
													else if(packing == $value){
														?>
														<img src="../assets/img/step2.PNG" alt="Packing & Pickup" class="col-md-12">
													<?php
													}else if(shipping == $value){
														?>
														<img src="../assets/img/step3.PNG" alt="Shipping" class="col-md-12">
													<?php
													}else if(Success == $value){
														?>
														<img src="../assets/img/step4.PNG" alt="Delivered" class="col-md-12">
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

	
<?php include("footer.php"); ?>
<?php
	include_once "header.php";
	require_once "../admin/clasess/enquiry.class.php";
	$enquiryObj = new enquiry();
	if($_REQUEST['submit'] == "Submit"){
  
		$enquiryObj->addenquiry($_REQUEST);
		
		echo "<script> 
				alert('message sending successfully');
				window.location.href='enquire.php'; 
				</script>";
		
	 }
	
?>
<div class="content">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                
                                    <div class="card card-wizard">
                                        <div class="card-header ">
                                            <h3 class="card-title text-center">Send Enquire</h3>
											<br>
                                            <form role="form" method="post" enctype="multipart/form-data">
												<div class="box-body">
													<div class="form-group">
														<label for="Course Name">Name</label>
														<input name="name" id="name" type="text" class="form-control" value=<?php echo $userRow['name']; ?> readonly>
													</div>
													<div class="form-group">
														<label for="Course Name">Email</label>
														<input name="email" id="email" type="text" class="form-control" value=<?php echo $userRow['email']; ?> readonly>
													</div>
													<div class="form-group">
														<label for="Course Name">Number</label>
														<input name="phone" id="phone" type="text" class="form-control" value=<?php echo $userRow['tel']; ?> readonly>
													</div>
													<div class="form-group">
														<label for="facts Description">Message</label>
														<textarea name="message" id="message" class="form-control" placeholder="Enter Description..." style="height: 120px;" required></textarea>
													</div>
													
												</div>
												<!-- /.box-body -->

												<div class="box-footer">
													<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
												</div>
											</form>
                                        </div>
                                        
                                       
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

	
<?php include("footer.php"); ?>
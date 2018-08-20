<?php
	require_once "clasess/purchase.class.php";
	$purchaseObj = new purchase();
	
	if($_REQUEST['submit'] == "Update"){
		
		$purchaseObj->Updatepurchase($_REQUEST);
		
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=orders/list-orders-pending'; </script>";
		
	}
	
	//Get Detials by id
	if(isset($_REQUEST['id'])){
		$purchase_arr = $purchaseObj->getDetails($_REQUEST['id']);
		extract($purchase_arr);
	}
	
	//$category_arr =$packageObj->getCategory();
	
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Product Tracking Status
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
			  <div class="row">
		<!-- left column -->
		<div class="col-md-5">
		
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Change Status</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					
					<div class="box-body">
						<div class="form-group">
							<input name="id" id="id" type="hidden" class="form-control" value="<?php echo $purchase_arr[id]?>">
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group">
							<label for="Package Price "> Status</label>
							<select class="form-control" name="status" id="status">
								<option value="<?php echo $purchase_arr[status]?>"><?php echo $purchase_arr[status]?></option>
								<option value="place">Order Placed</option>
								<option value="packing">Pickup and Pack</option>
								<option value="shipping">Shipping</option>
								<option value="Success">Order Delever</option>
							</select>
						</div>
					</div>
					
					<!-- /.box-body -->
					<div id="otherServer">
						<p>Servece Name 
							<input class="form-control" type="text" name="servece_name" placeholder="Enter Courier service Name .." value="<?php echo $purchase_arr[servece_name] ?>"/>
						</p>
						<p>Track Number
							<input class="form-control" type="text" name="product_track_no" placeholder="Enter Product Track Number ?" value="<?php echo $purchase_arr[product_track_no] ?>" />
						</p>
					</div>

					<div class="box-footer">
						<input type="submit" name="submit" value="Update" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
		
		<div class="col-md-5">
			<div class="box-header with-border">
				<h3 class="box-title">Change Status</h3>
			</div>
			<?php
			$value = $purchase_arr[status];


			if(place == $value){  ?>
				<img src="../test/step1.PNG" alt="step1">
			<?php }
			else if(packing == $value){
				?>
				<img src="../test/step2.PNG" alt="step2">
			<?php
			}else if(shipping == $value){
				?>
				<img src="../test/step3.PNG" alt="step3">
			<?php
			}else if(Success == $value){
				?>
				<img src="../test/step4.PNG" alt="step4">
			<?php
			}else{
				
			}
			?>
		</div>
		
	</div>
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
	  
	  <!--graph-->
	  



	  <!--graph-->
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
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


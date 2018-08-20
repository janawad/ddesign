<?php include("../users/header.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>Orders</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Success Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                 <tbody>
				
							<?php
					$email = $userRow['email'];
					
					$sql="SELECT * FROM purchase where email='$email' and status='Success'";
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
						<td><a class="btn bg-green mbottom20" href="editorder.php?edit=<?php echo $row['id'] ?>">Change Status</td>
						</tr>
						<?php
					}
					?>
				
                
                </tbody>
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
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
	
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  

<?php include("footer.php");?>
</body>
</html>

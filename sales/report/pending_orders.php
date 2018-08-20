<?php 
include("../../database_connect.php");
	 $output = '';
	  $email = $_POST['email'];
	 if(isset($_POST["exoprt_excel"])){
		 $sql1="SELECT * FROM purchase where email in (select email from register where salesemail ='$email' and status <> 'Success') or 
										email='$email' and status<>'Success'";
		$result=mysql_query($sql1);
		if(mysql_num_rows($result) > 0)
		{
			$output.='
			<table>
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
			</tr>
			';
			while($row = mysql_fetch_array($result)){
				$output.='
					<tr>
						<td>'.$row['date_created'].'</td>
						<td>'.$row['image'].'</td>
						<td>'.$row['package_title'].'</td>
						<td>'.$row['name'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['amount'].'</td>
						<td>'.$row['qty'].'</td>
						<td>'.$row['address'].'</td>
						<td>'.$row['gst'].'</td>
						<td>'.$row['pan'].'</td>
						<td>'.$row['status'].'</td>
						
					</tr>
				';
				
			}
			
			$output.='</table>';
			header("Content-Type:application/xls");
			header("Content-Disposition:attachment; filename=download.xls");
			echo $output;
		}
	 }
	 
	?>
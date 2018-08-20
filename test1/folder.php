<?php 
include "../users/header.php";


$sql = mysql_query("select * from purchase");

	

?>

<style>
table{
border:1px solid;

margin-left:300px;
}

tr:nth-child(even){
background-color:#4ba29c;

}

tr:nth-child(odd){
background-color:#e8d218;

}
td,th{
	width:500px;
	padding:15px;
}
th{
	background-color:#ef8596;
	height:50px;
}
td{
	text-align:center;
}
</style>

<form action="#" method="post">
	<table>
		<tr>
			<th>id</th>
			<th>Product Name</th>
			<th>Product Image</th>
			<th>Product Price</th>
			<th>Product Description</th>
			<th>Number of Quntity</th>
		</tr>
		<?php while($row = mysql_fetch_array($sql)){ ?>
		<tr>
			<td><input type="checkbox" name="check_list[]" value="<?php echo $row[id];?>"><?php echo $row[id];?></td>
			<td><?php echo $row[package_title];?></td>
			<td><img src="../admin/uploads/package/<?php echo $row[icon_image];?>" alt="image" width="100"></td>
			<td>&#8377; <?php echo $row[package_title];?></td>
			<td><?php echo $row[slider_desc1];?></td>
			<td><input type="number" name="quty[]"></td>
			<input type="hidden" name="email" value="<?php echo $userRow['email']?>" >
			
			
		</tr>
		<?php } ?>

	</table><br>
	
	<input type="submit" name="submit" value="submit" style="background:red;margin-left:300px;">
</form>

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
        $con = mysql_connect("localhost","root","");
	if($con){
		$dbcon = mysql_select_db("ddesign");
	}else{
		die("connection loss");
	}
	
		$sql = mysql_query("insert into aj (n,gst,email) values('$transport','$dsec','$email')");
		if($sql){
			$sql1 = mysql_query("select aj.gst,package.package_title from aj inner join package on aj.n=package.id and aj.email='$email'");
			while($row = mysql_fetch_array($sql1)){
				echo $row[gst]."-----".$row[package_title];
			}
		}else{
			echo "somethingsdfddfg ";
		}

      }
	  
	   }else{
		   echo "no. of check box is not equal to input fields";
	   }
}

?>

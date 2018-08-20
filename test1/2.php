
<?php
$n = $_POST[n];
$gst = $_POST[gst];
$email = $_POST[email];

//$con = mysql_connect("localhost","questerr_db","U%KO#$.xF+l;");
	
    $conn = mysql_connect("localhost","root","");
	
    if($conn){
		
		//$db = mysql_select_db("questerr_db");
		
		$dbcon = mysql_select_db("ddesign");
	   
    }else{
      die("connection failed");
    }
	
	$sqlin = mysql_query("insert into aj(n,gst,email) values ('$n','$gst','$email')");
	if($sqlin){
		$sql = mysql_query("select * from aj");
		while($row = mysql_fetch_array($sql)){
			echo $row['id']."---".$row['n'];?><a href="1.php?id=<?php echo $row['id']?>">edit</a><br><?php
			
		}
	}else{
		echo "error";
	}
	
	
	

?>

<form action="1.php" method="post">
    <input type='text' name='email'/>
    <input type='submit' value='submit' />
</form>

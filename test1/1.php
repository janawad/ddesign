<!-- your html form -->
<form action="POST">
    <input type='text' name='username' />
    <input type='text' value='submit' />
</form>

<?php 


	//$con = mysql_connect("localhost","questerr_db","U%KO#$.xF+l;");
	
    $conn = mysql_connect("localhost","root","");
	
    if($conn){
		
		//$db = mysql_select_db("questerr_db");
		
		$dbcon = mysql_select_db("ddesign");
	   
    }else{
      die("connection failed");
    }
		 //$id = $_GET['id'];
		 
		 
		 
		 
		 
		 
		 $sql = mysql_query("insert into ajj(na,n,gst,email) select * from aj where email='$_POST[email]'");
		 if($sql){
			 $sqll = mysql_query("delete from aj where email = '$_POST[email]'");
			 if($sqll){
				 echo "everything is done";
			 }
		 }else{
			 echo "error";
		 }
		 
		 $id = $_GET['id'];
		 
		 $sqldel = mysql_query("delete from aj where id = $id");
			if($sqldel){
				echo "done";
			}
		 
		 ?>


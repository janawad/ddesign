<?php
$con = mysql_connect("localhost","root","");
	if($con){
		$dbcon = mysql_select_db("ddesign");
	}else{
		die("connection loss");
	}
          $sql="select * from aj";
        $query=mysql_query($sql);?>
		<form action="#" method="post"><?php
  while($row=mysql_fetch_array($query))
     {
     ?>

        <input type="checkbox" name="transport[]" value="<?php echo        $row["id"];?>"><?php echo $row["gst"];?>
		<input  type="text" name="dsec[]" value="">Daily<br>
<?php } ?>
<input type="submit" name="submit" value="submit">
</form>



<?php
if(isset($_POST["submit"]))
{
 for($i=0;$i<count($_POST["transport"]); $i++)
      {
         echo $transport=$_POST["transport"][$i];
       echo $dsec=$_POST["dsec"][$i];
//
        $con = mysql_connect("localhost","root","");
	if($con){
		$dbcon = mysql_select_db("ddesign");
	}else{
		die("connection loss");
	}
		$sql = mysql_query("insert into aj set email='$dsec'");
		if($sql){
			echo "done";
		}else{
			echo "something ";
		}

      }
}

?>
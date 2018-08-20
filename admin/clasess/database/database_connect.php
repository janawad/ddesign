<?php
class database {
  function database(){
	
	//$con = mysql_connect("localhost","questerr_db","U%KO#$.xF+l;");
	
    $con = mysql_connect("localhost","macle_dexa","afi}^3AkDuPk");
	
    if($con){
		
		//$db = mysql_select_db("questerr_db");
		
		$db = mysql_select_db("macle_dexa");
	   
    }else{
      die("connection failed");
    }
  }
}
?>
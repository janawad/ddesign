<?php

	
	//$con = mysql_connect("localhost","questerr_db","U%KO#$.xF+l;");
	
    $conn = mysql_connect("localhost","macle_dexa","afi}^3AkDuPk");
	
    if($conn){
		
		//$db = mysql_select_db("questerr_db");
		
		$dbcon = mysql_select_db("macle_dexa");
	   
    }else{
      die("connection failed");
    }
  
?>
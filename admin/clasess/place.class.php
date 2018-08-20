<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class place extends database {
		public function __construct(){
			parent::database();
		}
    
		//Insert place table
		function addplace($request){
			extract($request);
			
			
			$query = "INSERT INTO area(date_created,area) VALUES (NOW(), 
			'".Generic::preventSqlInjection($area)."')";
			
			$result = mysql_query($query);
			
			if($result){
			
				
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
		//Get all package list
		function getplace(){
		  $query = "SELECT * FROM area";
		  $result = mysql_query($query);
		  if($result){
			$data = array();
			while($row=mysql_fetch_assoc($result)){
				//$row['icon_image'] = $row['icon_image'] !==""? $this->Check_exists_img($row['icon_image']) : "dist/img/boxed-bg.jpg";
				//$row['slider_image1'] = $row['slider_image1'] !==""? $this->Check_exists_img($row['slider_image1']) : "dist/img/boxed-bg.jpg";
				
				array_push($data,$row);
			 }
			 return $data;
		  }else{
			die("error in mysql query" . mysql_error());
		  }
		}
		
		
		/**
		*Delete place by id
		*/
		function Deleteplace($id){
		  $query = "delete from area where id = $id";
		  $result = mysql_query($query);
		  if($result){
			return 1;
		  }else{
			die("error in mysql query" . mysql_error());
		  }
		}
		
	}  
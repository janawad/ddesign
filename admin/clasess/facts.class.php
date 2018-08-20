<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class facts extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert facts table
    function Addfacts($request){
      extract($request);
      $facts_photo = time().($_FILES['facts_image']['name']); 
      $facts_photo = str_replace(' ','_',$facts_photo);
      $target_path = "uploads/facts/"; 
      $query = "INSERT INTO facts(date_created,facts_title,facts_desc,facts_image) VALUES (NOW(),'".Generic::preventSqlInjection($facts_title)."','".Generic::preventSqlInjection($facts_desc)."','$facts_photo')";
      $result = mysql_query($query);
      if($result){
        if(move_uploaded_file($_FILES['facts_image']["tmp_name"],$target_path.$facts_photo)){
        }
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    //Get all facts list
    function getfacts(){
      $query = "select * from facts";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['facts_image'] = $row['facts_image'] !==""? $this->Check_exists_img($row['facts_image']) : "img/avatar5.png";
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single facts details
    */
    function getfactsByID($facts_id){
      $query = "select * from facts where id = $facts_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['facts_image'] = $row['facts_image'] !==""? $this->Check_exists_img($row['facts_image']) : "img/avatar5.png";
        return $row;
      }
    }
    
    /**
    *Update facts
    */
    function Updatefacts($request){
		extract($request);
		if($_FILES['facts_image']['name'] !==""){
			$facts_photo = time().($_FILES['facts_image']['name']); 
			$facts_photo = str_replace(' ','_',$facts_photo);
			$cond = ",facts_image='$facts_photo'";
		}
		$query = "update facts set date_updated = NOW(),facts_title = '".Generic::preventSqlInjection($facts_title)."',facts_desc = '".Generic::preventSqlInjection($facts_desc)."'
                   $cond where id = $id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/facts/";
			if(move_uploaded_file($_FILES['facts_image']["tmp_name"],$target_path.$facts_photo)){
			}
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete facts by id
    */
    function Deletefacts($id){
      $query = "delete from facts where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /* check img exists or not 
      */
     function Check_exists_img($img){
       if(file_exists("uploads/facts/$img")){
           $fileName = "uploads/facts/$img";
       }else{
           $fileName = "admin/uploads/facts/$img";
       }
         return $fileName;
     }
  }  
<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class tours extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert tours table
    function Addtours($request){
      extract($request);
      $tours_photo = time().($_FILES['place_image']['name']); 
      $tours_photo = str_replace(' ','_',$tours_photo);
      $target_path = "uploads/tours/"; 
      $query = "INSERT INTO tours(date_created,place_name,package_name,place_desc,place_image) VALUES (NOW(),'".Generic::preventSqlInjection($place_name)."','".Generic::preventSqlInjection($package_name)."','".Generic::preventSqlInjection($place_desc)."','$tours_photo')";
      $result = mysql_query($query);
      if($result){
        if(move_uploaded_file($_FILES['place_image']["tmp_name"],$target_path.$tours_photo)){
        }
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    //Get all tours list
    function gettours(){
      $query = "select * from tours";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['place_image'] = $row['place_image'] !==""? $this->Check_exists_img($row['place_image']) : "img/avatar5.png";
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single tours details   gettestimonialByID
    */
    function gettoursByID($tours_id){
      $query = "select * from tours where id = $tours_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['place_image'] = $row['place_image'] !==""? $this->Check_exists_img($row['place_image']) : "img/avatar5.png";
        return $row;
      }
    }
    
    /**
    *Update tours
    */
    function Updatetours($request){
		extract($request);
		if($_FILES['place_image']['name'] !==""){
			$tours_photo = time().($_FILES['place_image']['name']); 
			$tours_photo = str_replace(' ','_',$tours_photo);
			$cond = ",place_image='$tours_photo'";
		}
		$query = "update tours set date_updated = NOW(),place_name = '".Generic::preventSqlInjection($place_name)."',package_name = '".Generic::preventSqlInjection($package_name)."',place_desc = '".Generic::preventSqlInjection($place_desc)."'
                   $cond where id = $id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/tours/";
			if(move_uploaded_file($_FILES['place_image']["tmp_name"],$target_path.$tours_photo)){
			}
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete tours by id
    */
    function Deletetours($id){
      $query = "delete from tours where id = $id";
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
       if(file_exists("uploads/tours/$img")){
           $fileName = "uploads/tours/$img";
       }else{
           $fileName = "admin/uploads/tours/$img";
       }
         return $fileName;
     }
 }  
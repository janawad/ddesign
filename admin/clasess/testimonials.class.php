<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class testimonials extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert testimonials table
    function Addtestimonials($request){
      extract($request);
      $testimonials_photo = time().($_FILES['testimonials_image']['name']); 
      $testimonials_photo = str_replace(' ','_',$testimonials_photo);
      $target_path = "uploads/testimonials/"; 
      $query = "INSERT INTO testimonials(date_created,testimonials_name,position,testimonials_desc,testimonials_image) VALUES (NOW(),'".Generic::preventSqlInjection($testimonials_name)."','".Generic::preventSqlInjection($position)."','".Generic::preventSqlInjection($testimonials_desc)."','$testimonials_photo')";
      $result = mysql_query($query);
      if($result){
        if(move_uploaded_file($_FILES['testimonials_image']["tmp_name"],$target_path.$testimonials_photo)){
        }
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    //Get all testimonials list
    function gettestimonials(){
      $query = "select * from testimonials";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['testimonials_image'] = $row['testimonials_image'] !==""? $this->Check_exists_img($row['testimonials_image']) : "img/avatar5.png";
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single testimonials details   gettestimonialByID
    */
    function gettestimonialsByID($testimonials_id){
      $query = "select * from testimonials where id = $testimonials_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['testimonials_image'] = $row['testimonials_image'] !==""? $this->Check_exists_img($row['testimonials_image']) : "img/avatar5.png";
        return $row;
      }
    }
    
    /**
    *Update testimonials
    */
    function Updatetestimonials($request){
		extract($request);
		if($_FILES['testimonials_image']['name'] !==""){
			$testimonials_photo = time().($_FILES['testimonials_image']['name']); 
			$testimonials_photo = str_replace(' ','_',$testimonials_photo);
			$cond = ",testimonials_image='$testimonials_photo'";
		}
		$query = "update testimonials set date_updated = NOW(),testimonials_name = '".Generic::preventSqlInjection($testimonials_name)."',position = '".Generic::preventSqlInjection($position)."',testimonials_desc = '".Generic::preventSqlInjection($testimonials_desc)."'
                   $cond where id = $id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/testimonials/";
			if(move_uploaded_file($_FILES['testimonials_image']["tmp_name"],$target_path.$testimonials_photo)){
			}
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete testimonials by id
    */
    function Deletetestimonials($id){
      $query = "delete from testimonials where id = $id";
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
       if(file_exists("uploads/testimonials/$img")){
           $fileName = "uploads/testimonials/$img";
       }else{
           $fileName = "admin/uploads/testimonials/$img";
       }
         return $fileName;
     }
  }  
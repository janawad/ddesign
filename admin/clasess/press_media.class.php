<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class press_media extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert press_media table
    function Addpress_media($request){
      extract($request);
      $press_media_photo = time().($_FILES['press_media_image']['name']); 
      $press_media_photo = str_replace(' ','_',$press_media_photo);
      $target_path = "uploads/press_media/"; 
      $query = "INSERT INTO press_media(date_created,press_media_title,press_media_desc,press_media_link,press_media_image) VALUES (NOW(),'".Generic::preventSqlInjection($press_media_title)."','".Generic::preventSqlInjection($press_media_desc)."','".Generic::preventSqlInjection($press_media_link)."','$press_media_photo')";
      $result = mysql_query($query);
      if($result){
        if(move_uploaded_file($_FILES['press_media_image']["tmp_name"],$target_path.$press_media_photo)){
        }
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    //Get all press_media list
    function getpress_media(){
      $query = "select * from press_media";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['press_media_image'] = $row['press_media_image'] !==""? $this->Check_exists_img($row['press_media_image']) : "img/avatar5.png";
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single press_media details
    */
    function getpress_mediaByID($press_media_id){
      $query = "select * from press_media where id = $press_media_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['press_media_image'] = $row['press_media_image'] !==""? $this->Check_exists_img($row['press_media_image']) : "img/avatar5.png";
        return $row;
      }
    }
    
    /**
    *Update press_media
    */
    function Updatepress_media($request){
		extract($request);
		if($_FILES['press_media_image']['name'] !==""){
			$press_media_photo = time().($_FILES['press_media_image']['name']); 
			$press_media_photo = str_replace(' ','_',$press_media_photo);
			$cond = ",press_media_image='$press_media_photo'";
		}
		$query = "update press_media set date_updated = NOW(),press_media_title = '".Generic::preventSqlInjection($press_media_title)."',press_media_desc = '".Generic::preventSqlInjection($press_media_desc)."',press_media_link = '".Generic::preventSqlInjection($press_media_link)."'
                   $cond where id = $id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/press_media/";
			if(move_uploaded_file($_FILES['press_media_image']["tmp_name"],$target_path.$press_media_photo)){
			}
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete press_media by id
    */
    function Deletepress_media($id){
      $query = "delete from press_media where id = $id";
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
       if(file_exists("uploads/press_media/$img")){
           $fileName = "uploads/press_media/$img";
       }else{
           $fileName = "admin/uploads/press_media/$img";
       }
         return $fileName;
     }
  }  
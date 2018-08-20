<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class about extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert blog table
    function Addabout($request){
		
		
		
		$query = "INSERT INTO about(date_created,about_title,about_desc) VALUES (NOW(),'".Generic::preventSqlInjection($about_title)."','".Generic::preventSqlInjection($about_desc)."')";
		
		$result = mysql_query($query);
		
		
    }
    
    //Get all about list
    function getabout(){
      $query = "select * from about";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
           /* $row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image']) : "dist/img/boxed-bg.jpg";
            $row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details']) : "dist/img/boxed-bg.jpg";*/
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single about details
    */
    function getaboutByID($blog_id){
      $query = "select * from about where id = $about_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        /*$row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image']) : "dist/img/boxed-bg.jpg";
        $row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details']) : "img/boxed-bg.jpg";*/
        return $row;
      }
    }
    
    /**
    *Update about
    */
    function Updateabout($request){
		extract($request);
		if($_FILES['blog_image']['name'] !==""){
			$blog_image = time().($_FILES['blog_image']['name']); 
			$blog_image = str_replace(' ','_',$blog_image);
			$cond1 = ",blog_image='$blog_image'";
		}
		if($_FILES['blog_image_details']['name'] !==""){
			$blog_image_details = time().($_FILES['blog_image_details']['name']); 
			$blog_image_details = str_replace(' ','_',$blog_image_details);
			$cond2 = ",blog_image_details='$blog_image_details'";
		}
		$query = "update about set date_updated = NOW(),about_title = '".Generic::preventSqlInjection($about_title)."',about_desc = '".Generic::preventSqlInjection($about_desc)."' where id = $about_id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/blog/";
			move_uploaded_file($_FILES['blog_image']["tmp_name"],$target_path.$blog_image);
			move_uploaded_file($_FILES['blog_image_details']["tmp_name"],$target_path.$blog_image_details);
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete about by id
    */
    function Deleteabout($id){
      $query = "delete from about where id = $id";
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
       if(file_exists("uploads/blog/$img")){
           $fileName = "uploads/blog/$img";
       }else{
           $fileName = "admin/uploads/blog/$img";
       }
         return $fileName;
     }
  }  
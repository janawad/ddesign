<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class blog extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert blog table
    function Addblog($request){
		extract($request);
		$blog_image = time().($_FILES['blog_image']['name']); 
		$blog_image = str_replace(' ','_',$blog_image);
		$blog_image_details = time().($_FILES['blog_image_details']['name']); 
		$blog_image_details = str_replace(' ','_',$blog_image_details);
		$target_path = "uploads/blog/"; 
		
		$query = "INSERT INTO blog(pkg_cat_id,date_created,blog_title,blog_desc,blog_image,blog_image_details) VALUES ('".Generic::preventSqlInjection($pkg_cat_id)."',NOW(),'".Generic::preventSqlInjection($blog_title)."','".Generic::preventSqlInjection($blog_desc)."','$blog_image','$blog_image_details')";
		
		$result = mysql_query($query);
		
		if($result){
        
			move_uploaded_file($_FILES['blog_image']["tmp_name"],$target_path.$blog_image);
			move_uploaded_file($_FILES['blog_image_details']["tmp_name"],$target_path.$blog_image_details);
		
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    //Get all blog list
    function getblog(){
      $query = "select * from blog";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image']) : "dist/img/boxed-bg.jpg";
            $row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details']) : "dist/img/boxed-bg.jpg";
            array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single blog details
    */
    function getblogByID($blog_id){
      $query = "select * from blog where id = $blog_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image']) : "dist/img/boxed-bg.jpg";
        $row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details']) : "img/boxed-bg.jpg";
        return $row;
      }
    }
    
    /**
    *Update blog
    */
    function Updateblog($request){
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
		$query = "update blog set date_updated = NOW(),pkg_cat_id = '".Generic::preventSqlInjection($pkg_cat_id)."',blog_title = '".Generic::preventSqlInjection($blog_title)."',blog_desc = '".Generic::preventSqlInjection($blog_desc)."' ".$cond1." ".$cond2." where id = $blog_id";
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
    *Delete blog by id
    */
    function Deleteblog($id){
      $query = "delete from blog where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
	// functions  for catrgory table
	function getCategory(){
		$data = array(); 
		$query = "select * from packages_category";
		$result = mysql_query($query);
	   
		if($result){
			while($row = mysql_fetch_assoc($result)){
				array_push($data,$row);
			}
			return $data;
		}else{
			die("error in mysql query " . mysql_error());
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
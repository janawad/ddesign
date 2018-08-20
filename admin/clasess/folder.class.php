<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class folder extends database {
		public function __construct(){
			parent::database();
		}
    
    
    
    //Get all folder users list
    function getfolder(){
      $query = "SELECT DISTINCT email,date_created FROM folders";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            
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
    function getfolderByID($email){
      $query = "select folders.quantity,folders.product_id,folders.date_created,package.pkg_cat_id,package.package_title,package.slider_desc1,package.slider_image1,package.package_price,package.id from folders inner join package on folders.product_id=package.id where folders.email = '$email'";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            
            array_push($data,$row);
         }
         return $data;
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
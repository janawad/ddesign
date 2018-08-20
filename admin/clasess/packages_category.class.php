<?php
  require_once "database/database_connect.php";
  require_once "generic.class.php";
  class packages_category extends database {
     public function __construct(){
        parent::database();
    }
    
    //Insert packages_category table
    function AddPackages_category($request){
		extract($request);
		$packages_category_photo = time().($_FILES['packages_category_image']['name']); 
		$packages_category_photo = str_replace(' ','_',$packages_category_photo);
		$target_path = "uploads/packages_category/"; 
		$query = "INSERT INTO packages_category(date_created,packages_category_name,description,packages_category_image) VALUES (NOW(),'".Generic::preventSqlInjection($packages_category_name)."','".Generic::preventSqlInjection($description)."','$packages_category_photo')";
		$result = mysql_query($query);
		if($result){
			if(move_uploaded_file($_FILES['packages_category_image']["tmp_name"],$target_path.$packages_category_photo)){
			}
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    //Get all packages_category list
    function getPackages_category(){
		$query = "select * from packages_category";
		$result = mysql_query($query);
		if($result){
			$data = array();
			while($row=mysql_fetch_assoc($result)){
				$row['packages_category_image'] = $row['packages_category_image'] !==""? $this->Check_exists_img($row['packages_category_image']) : "img/avatar5.png";
				array_push($data,$row);
			}
			 return $data;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *get single packages_category details
    *$id is module id
    */
    function getDetails($packages_category_id){
		$query = "select * from packages_category where id = $packages_category_id";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_assoc($result);
			$row['packages_category_image'] = $row['packages_category_image'] !==""? $this->Check_exists_img($row['packages_category_image']) : "img/avatar5.png";
			return $row;
		}
    }
    
    /**
    *Update packages_category
    */
    function UpdatePackages_category($request){
		extract($request);
		if($_FILES['packages_category_image']['name'] !==""){
			$packages_category_photo = time().($_FILES['packages_category_image']['name']); 
			$packages_category_photo = str_replace(' ','_',$packages_category_photo);
			$cond = ",packages_category_image='$packages_category_photo'";
		}
		$query = "update packages_category set date_updated = NOW(),packages_category_name = '".Generic::preventSqlInjection($packages_category_name)."',description = '".Generic::preventSqlInjection($description)."'
                   $cond where id = $id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/packages_category/";
			if(move_uploaded_file($_FILES['packages_category_image']["tmp_name"],$target_path.$packages_category_photo)){
        }
        return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *$id is module id
    */
    function DeletePackages_category($id){
		$query = "delete from packages_category where id = $id";
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
		if(file_exists("uploads/packages_category/$img")){
           $fileName = "uploads/packages_category/$img";
		}else{
           $fileName = "img/avatar5.png";
		}
		return $fileName;
	}
}  
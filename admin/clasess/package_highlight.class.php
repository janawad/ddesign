<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class package_highlight extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert package_highlight table
    function Addpackage_highlight($request){
		extract($request);
		$highlights_image = time().($_FILES['highlights_image']['name']); 
		$highlights_image = str_replace(' ','_',$highlights_image);
		
		$target_path = "uploads/package_highlight/"; 
		
		$query = "INSERT INTO package_highlight(pkg_cat_id,date_created,highlights_title,highlights_desc,highlights_image) VALUES ('".Generic::preventSqlInjection($pkg_cat_id)."',NOW(),'".Generic::preventSqlInjection($highlights_title)."','".Generic::preventSqlInjection($highlights_desc)."','$highlights_image')";
		
		$result = mysql_query($query);
		
		if($result){
        
			move_uploaded_file($_FILES['highlights_image']["tmp_name"],$target_path.$highlights_image);
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    //Get all package_highlight list
    function getpackage_highlight(){
      $query = "select  	package_highlight.id,package_highlight.pkg_cat_id,package_highlight.date_created,package_highlight.date_updated,package_highlight.highlights_title,package_highlight.highlights_desc,package_highlight.highlights_image,packages_category.packages_category_name from package_highlight inner join packages_category on package_highlight.pkg_cat_id = packages_category.id ";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['highlights_image'] = $row['highlights_image'] !==""? $this->Check_exists_img($row['highlights_image']) : "dist/img/boxed-bg.jpg";
            
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
    function getpackage_highlightByID($package_highlight_id){
      $query = "select * from package_highlight where id = $package_highlight_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['highlights_image'] = $row['highlights_image'] !==""? $this->Check_exists_img($row['highlights_image']) : "dist/img/boxed-bg.jpg";
        
        return $row;
      }
    }
    
    /**
    *Update package_highlight
    */
    function Updatepackage_highlight($request){
		extract($request);
		if($_FILES['highlights_image']['name'] !==""){
			$highlights_image = time().($_FILES['highlights_image']['name']); 
			$highlights_image = str_replace(' ','_',$highlights_image);
			$cond1 = ",highlights_image='$highlights_image'";
		}
		
		$query = "update package_highlight set date_updated = NOW(),pkg_cat_id = '".Generic::preventSqlInjection($pkg_cat_id)."',highlights_title = '".Generic::preventSqlInjection($highlights_title)."',highlights_desc = '".Generic::preventSqlInjection($highlights_desc)."' ".$cond1." where id = $package_highlight_id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/package_highlight/";
			move_uploaded_file($_FILES['highlights_image']["tmp_name"],$target_path.$highlights_image);
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete package_highlight by id
    */
    function Deletepackage_highlight($id){
      $query = "delete from package_highlight where id = $id";
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
       if(file_exists("uploads/package_highlight/$img")){
           $fileName = "uploads/package_highlight/$img";
       }else{
           $fileName = "admin/uploads/package_highlight/$img";
       }
         return $fileName;
     }
  }  
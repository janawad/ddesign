<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class package extends database {
		public function __construct(){
			parent::database();
		}
    
		//Insert package table
		function addPackage($request){
			extract($request);
			
			$icon_image = time().($_FILES['icon_image']['name']); 
			$icon_image = str_replace(' ','_',$icon_image);
			
			$slider_image1 = time().($_FILES['slider_image1']['name']); 
			$slider_image1 = str_replace(' ','_',$slider_image1);
			
			
			
			$target_path = "uploads/package/"; 
			
			$query = "INSERT INTO package(pkg_cat_id, date_created, icon_image, package_title, package_price, number_of_qty, slider_desc1, slider_image1) VALUES ('".Generic::preventSqlInjection($pkg_cat_id)."',NOW(), 
			'$icon_image', '".Generic::preventSqlInjection($package_title)."', '".Generic::preventSqlInjection($package_price)."', '".Generic::preventSqlInjection($number_of_qty)."', '".Generic::preventSqlInjection($slider_desc1)."', '$slider_image1')";
			
			$result = mysql_query($query);
			
			if($result){
			
				move_uploaded_file($_FILES['icon_image']["tmp_name"],$target_path.$icon_image);
				move_uploaded_file($_FILES['slider_image1']["tmp_name"],$target_path.$slider_image1);
				
			
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
		//Get all package list
		function getPackage(){
		  $query = "select package.id,package.pkg_cat_id,package.date_created,package.date_updated,package.icon_image,package.package_title,package.package_price,package.number_of_qty,package.slider_desc1,package.slider_image1,packages_category.packages_category_name from package inner join packages_category on package.pkg_cat_id = packages_category.id ";
		  $result = mysql_query($query);
		  if($result){
			$data = array();
			while($row=mysql_fetch_assoc($result)){
				$row['icon_image'] = $row['icon_image'] !==""? $this->Check_exists_img($row['icon_image']) : "dist/img/boxed-bg.jpg";
				$row['slider_image1'] = $row['slider_image1'] !==""? $this->Check_exists_img($row['slider_image1']) : "dist/img/boxed-bg.jpg";
				
				array_push($data,$row);
			 }
			 return $data;
		  }else{
			die("error in mysql query" . mysql_error());
		  }
		}
		
		/**
		*get single package details
		*/
		function getPackageByID($package_id){
		  $query = "select * from package where id = $package_id";
		  $result = mysql_query($query);
		  if($result){
			$row = mysql_fetch_assoc($result);
			$row['icon_image'] = $row['icon_image'] !==""? $this->Check_exists_img($row['icon_image']) : "dist/img/boxed-bg.jpg";
			$row['slider_image1'] = $row['slider_image1'] !==""? $this->Check_exists_img($row['slider_image1']) : "img/boxed-bg.jpg";
			
			return $row;
		  }
		}
		
		/**
		*Update package
		*/
		function Updatepackage($request){
			extract($request);
			
			if($_FILES['icon_image']['name'] !==""){
				$icon_image = time().($_FILES['icon_image']['name']); 
				$icon_image = str_replace(' ','_',$icon_image);
				$cond1 = ",icon_image='$icon_image'";
			}
			if($_FILES['slider_image1']['name'] !==""){
				$slider_image1 = time().($_FILES['slider_image1']['name']); 
				$slider_image1 = str_replace(' ','_',$slider_image1);
				$cond2 = ",slider_image1='$slider_image1'";
			}
			
			
			
			$query = "update package set date_updated = NOW(),pkg_cat_id = '".Generic::preventSqlInjection($pkg_cat_id)."', package_title = '".Generic::preventSqlInjection($package_title)."', package_price = '".Generic::preventSqlInjection($package_price)."', number_of_qty = '".Generic::preventSqlInjection($number_of_qty)."', slider_desc1 = '".Generic::preventSqlInjection($slider_desc1)."' ".$cond1." ".$cond2." where id = $package_id";
			
			
			
			
			$result = mysql_query($query);
			if($result){
				$target_path = "uploads/package/";
				move_uploaded_file($_FILES['icon_image']["tmp_name"],$target_path.$icon_image);
				move_uploaded_file($_FILES['slider_image1']["tmp_name"],$target_path.$slider_image1);
				
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
		/**
		*Delete package by id
		*/
		function Deletepackage($id){
		  $query = "delete from package where id = $id";
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
		   if(file_exists("uploads/package/$img")){
			   $fileName = "uploads/package/$img";
		   }else{
			   $fileName = "admin/uploads/package/$img";
		   }
			 return $fileName;
		 }
	}  
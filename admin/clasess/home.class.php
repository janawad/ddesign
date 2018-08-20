<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class home extends database {
		public function __construct(){
			parent::database();
		}
		
		
		/*get purchase iteams*/
		/*qty */
		
		function Updatepackageqty($request){
			extract($request);
			
			$query = "update `package`,`purchase` set `package`.`qty_left` ='10' where `package`.`id` = `purchase`.`product_id`";
			
			$result = mysql_query($query);
			if($result){
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
		/*qty */
		
		
		
		function getAllpurchase(){
		  $query = "select * from purchase ORDER BY date_created DESC";
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
		
		/*get purchase iteams*/
		
		
		

		/*Get all packages category for home page
		 */
			function getProductcategory(){
			  $query = "select * from packages_category";
			  $result = mysql_query($query);
			  if($result){
				$data = array();
				while($row=mysql_fetch_assoc($result)){
					$row['packages_category_image'] = $row['packages_category_image'] !==""? $this->Check_exists_img($row['packages_category_image'],"packages_category") : "img/avatar5.png";
					array_push($data,$row);
				 }
				 return $data;
			  }else{
				die("error in mysql query" . mysql_error());
			  }
			}
			
		/*Get all package list
		 */
			function getpackage(){
			  $query = "select * from package ORDER BY id DESC";
			  $result = mysql_query($query);
			  if($result){
				$data = array();
				while($row=mysql_fetch_assoc($result)){
					$row['icon_image'] = $row['icon_image'] !==""? $this->Check_exists_img($row['icon_image'],"package") : "img/avatar5.png";
					array_push($data,$row);
				 }
				 return $data;
			  }else{
				die("error in mysql query" . mysql_error());
			  }
			}
		/**
		 *  get package details by Id
		 */
		 
		function getpackageById($id){
			$query = "select * from package where id='$id'";
			$result = mysql_query($query);
			if($result){
				$row = mysql_fetch_assoc($result);
				$row['slider_image1'] = $row['slider_image1'] !==""? $this->Check_exists_img($row['slider_image1'],"package") : "admin/dist/img/avatar5.png";
				$row['slider_image2'] = $row['slider_image2'] !==""? $this->Check_exists_img($row['slider_image2'],"package") : "admin/dist/img/avatar5.png";
				$row['slider_image3'] = $row['slider_image3'] !==""? $this->Check_exists_img($row['slider_image3'],"package") : "admin/dist/img/avatar5.png";
				$row['image1'] = $row['image1'] !==""? $this->Check_exists_img($row['image1'],"package") : "admin/dist/img/avatar5.png";
				$row['image2'] = $row['image2'] !==""? $this->Check_exists_img($row['image2'],"package") : "admin/dist/img/avatar5.png";
				$row['image3'] = $row['image3'] !==""? $this->Check_exists_img($row['image3'],"package") : "admin/dist/img/avatar5.png";
				$row['image4'] = $row['image4'] !==""? $this->Check_exists_img($row['image4'],"package") : "admin/dist/img/avatar5.png";
				$row['image5'] = $row['image5'] !==""? $this->Check_exists_img($row['image5'],"package") : "admin/dist/img/avatar5.png";
				$row['image6'] = $row['image6'] !==""? $this->Check_exists_img($row['image6'],"package") : "admin/dist/img/avatar5.png";
				$row['image7'] = $row['image7'] !==""? $this->Check_exists_img($row['image7'],"package") : "admin/dist/img/avatar5.png";
				$row['image8'] = $row['image8'] !==""? $this->Check_exists_img($row['image8'],"package") : "admin/dist/img/avatar5.png";
				$row['image9'] = $row['image9'] !==""? $this->Check_exists_img($row['image9'],"package") : "admin/dist/img/avatar5.png";
				$row['image10'] = $row['image10'] !==""? $this->Check_exists_img($row['image10'],"package") : "admin/dist/img/avatar5.png";
				return $row;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}


		/**
		 *  get blogs for home page limit 12
		 */
		function getBlog(){
			$query = "select * from blog";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image'],"blog") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		/**
		 *  get blogs for blog page and also fetch with by category in the same page
		 */
		
		function getAllBlog($cat_id){
			
			if($cat_id!=""){
				$cond = " and pkg_cat_id = $cat_id";
			}else{
				//echo "cat id is empty";
			}
			
			$query = "select * from blog where 1 $cond ORDER BY id DESC";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image'],"blog") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		/**
		 *  get blogs for blog-details page
		 */
		 
		function getBlogById($id){
			$query = "select * from blog where id='$id'";
			$result = mysql_query($query);
			if($result){
				$row = mysql_fetch_assoc($result);
				$row['blog_image'] = $row['blog_image'] !==""? $this->Check_exists_img($row['blog_image'],"blog") : "admin/dist/img/avatar5.png";
				$row['blog_image_details'] = $row['blog_image_details'] !==""? $this->Check_exists_img($row['blog_image_details'],"blog") : "admin/dist/img/avatar5.png";
				return $row;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
		/**
		 *  get Package Category
		 */
		function getCategory(){
			$data = array(); 
			$query = "select * from packages_category ORDER BY id DESC";
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
		
		
		
		/**
		 *  get testimonial for home page limit 3
		 */
		function getTestimonial(){
			$query = "select * from testimonials ORDER BY RAND() LIMIT 3";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['testimonials_image'] = $row['testimonials_image'] !==""? $this->Check_exists_img($row['testimonials_image'],"testimonials") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		/**
		 *  get testimonial for testimonial-page
		 */
		function getAlltestimonial(){
			$query = "select * from testimonials ORDER BY id DESC";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['testimonials_image'] = $row['testimonials_image'] !==""? $this->Check_exists_img($row['testimonials_image'],"testimonials") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		
		
		/*  Get all press_media list   */
		
		function getpress_media(){
		  $query = "select * from press_media ORDER BY id DESC";
		  $result = mysql_query($query);
		  if($result){
			$data = array();
			while($row=mysql_fetch_assoc($result)){
				$row['press_media_image'] = $row['press_media_image'] !==""? $this->Check_exists_img($row['press_media_image'],"press_media") : "img/avatar5.png";
				array_push($data,$row);
			 }
			 return $data;
		  }else{
			die("error in mysql query" . mysql_error());
		  }
		}
		
		/***  get press_media details by Id    */
		 
		function getpress_mediaById($id){
			$query = "select * from press_media where id='$id'";
			$result = mysql_query($query);
			if($result){
				$row = mysql_fetch_assoc($result);
				$row['press_media_image'] = $row['press_media_image'] !==""? $this->Check_exists_img($row['press_media_image'],"press_media") : "admin/dist/img/avatar5.png";
				return $row;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}		
		
		
		/**
		 *  get Facts details 
		 */
		function getAllFacts(){
			$query = "select * from facts ORDER BY id DESC";
			$result = mysql_query($query);
			if($result){
				$data = array();
				while($row = mysql_fetch_assoc($result)){
					$row['facts_image'] = $row['facts_image'] !==""? $this->Check_exists_img($row['facts_image'],"facts") : "admin/dist/img/avatar5.png";
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		/**
		 *  get Facts for Facts-details-page
		 */
		 
		function getFactsById($id){
			$query = "select * from facts where id='$id'";
			$result = mysql_query($query);
			if($result){
				$row = mysql_fetch_assoc($result);
				$row['facts_image'] = $row['facts_image'] !==""? $this->Check_exists_img($row['facts_image'],"facts") : "admin/dist/img/avatar5.png";
				return $row;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		 
		//Get all package_highlight list
		function getpackage_highlight(){
		  $query = "select * from package_highlight";
		  $result = mysql_query($query);
		  if($result){
			$data = array();
			while($row=mysql_fetch_assoc($result)){
				$row['highlights_image'] = $row['highlights_image'] !==""? $this->Check_exists_img($row['highlights_image'],"package_highlight") : "dist/img/boxed-bg.jpg";
				
				array_push($data,$row);
			 }
			 return $data;
		  }else{
			die("error in mysql query" . mysql_error());
		  }
		}
		
		/* check img exists or not 
		  */
		function Check_exists_img($img,$folder){
			if(file_exists("../admin/uploads/$folder/$img")){
				$fileName = "../admin/uploads/$folder/$img";
			}else{
				$fileName = "../admin/dist/img/avatar5.png";
			}
			 return $fileName;
		}
	}  
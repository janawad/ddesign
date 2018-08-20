<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class tour_highlight extends database {
		public function __construct(){
			parent::database();
		}
    
    //Insert tour_highlight table
    function Addtour_highlight($request){
		extract($request);
		$timeless_image = time().($_FILES['timeless_image']['name']); 
		$timeless_image = str_replace(' ','_',$timeless_image);
		
		$soul_image = time().($_FILES['soul_image']['name']); 
		$soul_image = str_replace(' ','_',$soul_image);
		
		$exuberance_image = time().($_FILES['exuberance_image']['name']); 
		$exuberance_image = str_replace(' ','_',$exuberance_image);
		
		$places_covered_image = time().($_FILES['places_covered_image']['name']); 
		$places_covered_image = str_replace(' ','_',$places_covered_image);
		
		$experiences_image = time().($_FILES['experiences_image']['name']); 
		$experiences_image = str_replace(' ','_',$experiences_image);
		
		$economics_image = time().($_FILES['economics_image']['name']); 
		$economics_image = str_replace(' ','_',$economics_image);
		
		$accommodation_image = time().($_FILES['accommodation_image']['name']); 
		$accommodation_image = str_replace(' ','_',$accommodation_image);
		
		$food_image = time().($_FILES['food_image']['name']); 
		$food_image = str_replace(' ','_',$food_image);
		
		$personal_time_image = time().($_FILES['personal_time_image']['name']); 
		$personal_time_image = str_replace(' ','_',$personal_time_image);
		
		$overnight_activities_image = time().($_FILES['overnight_activities_image']['name']); 
		$overnight_activities_image = str_replace(' ','_',$overnight_activities_image);
		
		$transportation_image = time().($_FILES['transportation_image']['name']); 
		$transportation_image = str_replace(' ','_',$transportation_image);
		
		$must_pack_image = time().($_FILES['must_pack_image']['name']); 
		$must_pack_image = str_replace(' ','_',$must_pack_image);
		
		$faq_image = time().($_FILES['faq_image']['name']); 
		$faq_image = str_replace(' ','_',$faq_image);
		
		$booking_conditions_image = time().($_FILES['booking_conditions_image']['name']); 
		$booking_conditions_image = str_replace(' ','_',$booking_conditions_image);
		
		$mentorship_image = time().($_FILES['mentorship_image']['name']); 
		$mentorship_image = str_replace(' ','_',$mentorship_image);
		
		$target_path = "uploads/tour_highlight/"; 
		
		$query = "INSERT INTO tour_highlight(pkg_cat_id,date_created,timeless_desc,soul_desc,exuberance_desc,places_covered_desc,experiences_desc,economics_desc,accommodation_desc,food_desc,personal_time_desc,overnight_activities_desc,transportation_desc,must_pack_desc,faq_desc,booking_conditions_desc,mentorship_networking,timeless_image,soul_image,exuberance_image,places_covered_image,experiences_image,economics_image,accommodation_image,food_image,personal_time_image,overnight_activities_image,transportation_image,must_pack_image,faq_image,booking_conditions_image,mentorship_image) VALUES ('".Generic::preventSqlInjection($pkg_cat_id)."',NOW(),'".Generic::preventSqlInjection($timeless_desc)."','".Generic::preventSqlInjection($soul_desc)."','".Generic::preventSqlInjection($exuberance_desc)."','".Generic::preventSqlInjection($places_covered_desc)."','".Generic::preventSqlInjection($experiences_desc)."','".Generic::preventSqlInjection($economics_desc)."','".Generic::preventSqlInjection($accommodation_desc)."','".Generic::preventSqlInjection($food_desc)."','".Generic::preventSqlInjection($personal_time_desc)."','".Generic::preventSqlInjection($overnight_activities_desc)."','".Generic::preventSqlInjection($transportation_desc)."','".Generic::preventSqlInjection($must_pack_desc)."','".Generic::preventSqlInjection($faq_desc)."','".Generic::preventSqlInjection($booking_conditions_desc)."','".Generic::preventSqlInjection($mentorship_networking)."','$timeless_image','$soul_image','$exuberance_image','$places_covered_image','$experiences_image','$economics_image','$accommodation_image','$food_image','$personal_time_image','$overnight_activities_image','$transportation_image','$must_pack_image','$faq_image','$booking_conditions_image','$mentorship_image')";
		
		$result = mysql_query($query);
		
		if($result){
        
			move_uploaded_file($_FILES['timeless_image']["tmp_name"],$target_path.$timeless_image);
			move_uploaded_file($_FILES['soul_image']["tmp_name"],$target_path.$soul_image);
			move_uploaded_file($_FILES['exuberance_image']["tmp_name"],$target_path.$exuberance_image);
			move_uploaded_file($_FILES['places_covered_image']["tmp_name"],$target_path.$places_covered_image);
			move_uploaded_file($_FILES['experiences_image']["tmp_name"],$target_path.$experiences_image);
			move_uploaded_file($_FILES['economics_image']["tmp_name"],$target_path.$economics_image);
			move_uploaded_file($_FILES['accommodation_image']["tmp_name"],$target_path.$accommodation_image);
			move_uploaded_file($_FILES['food_image']["tmp_name"],$target_path.$food_image);
			move_uploaded_file($_FILES['personal_time_image']["tmp_name"],$target_path.$personal_time_image);
			move_uploaded_file($_FILES['overnight_activities_image']["tmp_name"],$target_path.$overnight_activities_image);
			move_uploaded_file($_FILES['transportation_image']["tmp_name"],$target_path.$transportation_image);
			move_uploaded_file($_FILES['must_pack_image']["tmp_name"],$target_path.$must_pack_image);
			move_uploaded_file($_FILES['faq_image']["tmp_name"],$target_path.$faq_image);
			move_uploaded_file($_FILES['booking_conditions_image']["tmp_name"],$target_path.$booking_conditions_image);
			move_uploaded_file($_FILES['mentorship_image']["tmp_name"],$target_path.$mentorship_image);
		
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    //Get all tour_highlight list
    function gettour_highlight(){
      $query = "select tour_highlight.id,tour_highlight.pkg_cat_id,tour_highlight.date_created,tour_highlight.date_updated,tour_highlight.timeless_desc,tour_highlight.soul_desc,tour_highlight.exuberance_desc,tour_highlight.places_covered_desc,tour_highlight.experiences_desc,tour_highlight.economics_desc,tour_highlight.accommodation_desc,tour_highlight.food_desc,tour_highlight.personal_time_desc,tour_highlight.overnight_activities_desc,tour_highlight.transportation_desc,tour_highlight.must_pack_desc,tour_highlight.faq_desc,tour_highlight.booking_conditions_desc,tour_highlight.mentorship_networking,tour_highlight.timeless_image,tour_highlight.soul_image,tour_highlight.exuberance_image,tour_highlight.places_covered_image,tour_highlight.experiences_image,tour_highlight.economics_image,tour_highlight.accommodation_image,tour_highlight.food_image,tour_highlight.personal_time_image,tour_highlight.overnight_activities_image,tour_highlight.transportation_image,tour_highlight.must_pack_image,tour_highlight.faq_image,tour_highlight.booking_conditions_image,tour_highlight.mentorship_image,packages_category.packages_category_name from tour_highlight inner join packages_category on tour_highlight.pkg_cat_id = packages_category.id ";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
            $row['timeless_image'] = $row['timeless_image'] !==""? $this->Check_exists_img($row['timeless_image']) : "dist/img/boxed-bg.jpg";
            $row['soul_image'] = $row['soul_image'] !==""? $this->Check_exists_img($row['soul_image']) : "dist/img/boxed-bg.jpg";
            $row['exuberance_image'] = $row['exuberance_image'] !==""? $this->Check_exists_img($row['exuberance_image']) : "dist/img/boxed-bg.jpg";
            $row['places_covered_image'] = $row['places_covered_image'] !==""? $this->Check_exists_img($row['places_covered_image']) : "dist/img/boxed-bg.jpg";
            $row['experiences_image'] = $row['experiences_image'] !==""? $this->Check_exists_img($row['experiences_image']) : "dist/img/boxed-bg.jpg";
            $row['economics_image'] = $row['economics_image'] !==""? $this->Check_exists_img($row['economics_image']) : "dist/img/boxed-bg.jpg";
            $row['accommodation_image'] = $row['accommodation_image'] !==""? $this->Check_exists_img($row['accommodation_image']) : "dist/img/boxed-bg.jpg";
            $row['food_image'] = $row['food_image'] !==""? $this->Check_exists_img($row['food_image']) : "dist/img/boxed-bg.jpg";
            $row['personal_time_image'] = $row['personal_time_image'] !==""? $this->Check_exists_img($row['personal_time_image']) : "dist/img/boxed-bg.jpg";
            $row['overnight_activities_image'] = $row['overnight_activities_image'] !==""? $this->Check_exists_img($row['overnight_activities_image']) : "dist/img/boxed-bg.jpg";
            $row['transportation_image'] = $row['transportation_image'] !==""? $this->Check_exists_img($row['transportation_image']) : "dist/img/boxed-bg.jpg";
            $row['must_pack_image'] = $row['must_pack_image'] !==""? $this->Check_exists_img($row['must_pack_image']) : "dist/img/boxed-bg.jpg";
            $row['faq_image'] = $row['faq_image'] !==""? $this->Check_exists_img($row['faq_image']) : "dist/img/boxed-bg.jpg";
            $row['booking_conditions_image'] = $row['booking_conditions_image'] !==""? $this->Check_exists_img($row['booking_conditions_image']) : "dist/img/boxed-bg.jpg";
            $row['mentorship_image'] = $row['mentorship_image'] !==""? $this->Check_exists_img($row['mentorship_image']) : "dist/img/boxed-bg.jpg";
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
    function gettour_highlightByID($tour_highlight_id){
      $query = "select * from tour_highlight where id = $tour_highlight_id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        $row['timeless_image'] = $row['timeless_image'] !==""? $this->Check_exists_img($row['timeless_image']) : "dist/img/boxed-bg.jpg";
        $row['soul_image'] = $row['soul_image'] !==""? $this->Check_exists_img($row['soul_image']) : "img/boxed-bg.jpg";
        $row['exuberance_image'] = $row['exuberance_image'] !==""? $this->Check_exists_img($row['exuberance_image']) : "img/boxed-bg.jpg";
        $row['places_covered_image'] = $row['places_covered_image'] !==""? $this->Check_exists_img($row['places_covered_image']) : "img/boxed-bg.jpg";
        $row['experiences_image'] = $row['experiences_image'] !==""? $this->Check_exists_img($row['experiences_image']) : "img/boxed-bg.jpg";
        $row['economics_image'] = $row['economics_image'] !==""? $this->Check_exists_img($row['economics_image']) : "img/boxed-bg.jpg";
        $row['accommodation_image'] = $row['accommodation_image'] !==""? $this->Check_exists_img($row['accommodation_image']) : "img/boxed-bg.jpg";
        $row['food_image'] = $row['food_image'] !==""? $this->Check_exists_img($row['food_image']) : "img/boxed-bg.jpg";
        $row['personal_time_image'] = $row['personal_time_image'] !==""? $this->Check_exists_img($row['personal_time_image']) : "img/boxed-bg.jpg";
        $row['overnight_activities_image'] = $row['overnight_activities_image'] !==""? $this->Check_exists_img($row['overnight_activities_image']) : "img/boxed-bg.jpg";
        $row['transportation_image'] = $row['transportation_image'] !==""? $this->Check_exists_img($row['transportation_image']) : "img/boxed-bg.jpg";
        $row['must_pack_image'] = $row['must_pack_image'] !==""? $this->Check_exists_img($row['must_pack_image']) : "img/boxed-bg.jpg";
        $row['faq_image'] = $row['faq_image'] !==""? $this->Check_exists_img($row['faq_image']) : "img/boxed-bg.jpg";
        $row['booking_conditions_image'] = $row['booking_conditions_image'] !==""? $this->Check_exists_img($row['booking_conditions_image']) : "img/boxed-bg.jpg";
        $row['mentorship_image'] = $row['mentorship_image'] !==""? $this->Check_exists_img($row['mentorship_image']) : "img/boxed-bg.jpg";
        return $row;
      }
    }
    
    /**
    *Update tour_highlight
    */
    function Updatetour_highlight($request){
		extract($request);
		if($_FILES['timeless_image']['name'] !==""){
			$timeless_image = time().($_FILES['timeless_image']['name']); 
			$timeless_image = str_replace(' ','_',$timeless_image);
			$cond1 = ",timeless_image='$timeless_image'";
		}
		if($_FILES['soul_image']['name'] !==""){
			$soul_image = time().($_FILES['soul_image']['name']); 
			$soul_image = str_replace(' ','_',$soul_image);
			$cond2 = ",soul_image='$soul_image'";
		}
		if($_FILES['exuberance_image']['name'] !==""){
			$exuberance_image = time().($_FILES['exuberance_image']['name']); 
			$exuberance_image = str_replace(' ','_',$exuberance_image);
			$cond2 = ",exuberance_image='$exuberance_image'";
		}
		if($_FILES['places_covered_image']['name'] !==""){
			$places_covered_image = time().($_FILES['places_covered_image']['name']); 
			$places_covered_image = str_replace(' ','_',$places_covered_image);
			$cond2 = ",places_covered_image='$places_covered_image'";
		}
		if($_FILES['experiences_image']['name'] !==""){
			$experiences_image = time().($_FILES['experiences_image']['name']); 
			$experiences_image = str_replace(' ','_',$experiences_image);
			$cond2 = ",experiences_image='$experiences_image'";
		}
		
		
		$query = "update tour_highlight set date_updated = NOW(),pkg_cat_id = '".Generic::preventSqlInjection($pkg_cat_id)."',timeless_desc = '".Generic::preventSqlInjection($timeless_desc)."',soul_desc = '".Generic::preventSqlInjection($soul_desc)."',exuberance_desc = '".Generic::preventSqlInjection($exuberance_desc)."',places_covered_desc = '".Generic::preventSqlInjection($places_covered_desc)."',experiences_desc = '".Generic::preventSqlInjection($experiences_desc)."',economics_desc = '".Generic::preventSqlInjection($economics_desc)."',accommodation_desc = '".Generic::preventSqlInjection($accommodation_desc)."',food_desc = '".Generic::preventSqlInjection($food_desc)."',personal_time_desc = '".Generic::preventSqlInjection($personal_time_desc)."',overnight_activities_desc = '".Generic::preventSqlInjection($overnight_activities_desc)."',transportation_desc = '".Generic::preventSqlInjection($transportation_desc)."',must_pack_desc = '".Generic::preventSqlInjection($must_pack_desc)."',faq_desc = '".Generic::preventSqlInjection($faq_desc)."',booking_conditions_desc = '".Generic::preventSqlInjection($booking_conditions_desc)."',mentorship_networking = '".Generic::preventSqlInjection($mentorship_networking)."' ".$cond1." ".$cond2." where id = $tour_highlight_id";
		$result = mysql_query($query);
		if($result){
			$target_path = "uploads/tour_highlight/";
			move_uploaded_file($_FILES['timeless_image']["tmp_name"],$target_path.$timeless_image);
			move_uploaded_file($_FILES['soul_image']["tmp_name"],$target_path.$soul_image);
			move_uploaded_file($_FILES['exuberance_image']["tmp_name"],$target_path.$exuberance_image);
			move_uploaded_file($_FILES['places_covered_image']["tmp_name"],$target_path.$places_covered_image);
			move_uploaded_file($_FILES['experiences_image']["tmp_name"],$target_path.$experiences_image);
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
    /**
    *Delete tour_highlight by id
    */
    function Deletetour_highlight($id){
      $query = "delete from tour_highlight where id = $id";
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
       if(file_exists("uploads/tour_highlight/$img")){
           $fileName = "uploads/tour_highlight/$img";
       }else{
           $fileName = "admin/uploads/tour_highlight/$img";
       }
         return $fileName;
     }
  }  
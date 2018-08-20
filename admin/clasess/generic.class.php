<?php
 class Generic {
    /**
     *function to prevent sql injection
     */
    
    function preventSqlInjection($value){
	   return mysql_real_escape_string(strip_tags(stripslashes($value)));
    }
    
    /**
     *function to convert dateformat to store in database
     */
    function convertToYMD($date){
      $date_arr =  explode("/",$date);
      $date = implode(" ",$date_arr);
      return date("Y-m-d",strtotime($date));
    } 
    
    /**
     * function to redirect using javascript
     */
    function redirect($page){
      echo "<script>";
      echo "window.location.href='$page'";
      echo "</script>";
    }
    
    /**
     * check wether user is logged in or not. if not then redirect to login page
     */
    function checkLoggedIn(){
       if(empty($_SESSION['logged_in']))
       $this->redirect("login.php");
    }
    
    /**
     * assign user role 
     */
    function userRole($user_role){  
       switch($user_role){
	 case "1":
	   $access = 1; // has access to edit n view
	 break;
	 case "2":
	  $access = 0;  // has access to only view
	 break; 
       }
       return $access;
    }
    
    /*
     *check NA for fields
     */
    function checkNa($value){
     $value = $value == 0 ? "NA" : $value;
     return $value;
    }
    
    /* check img exists or not 
      */
    function Check_exists_img($img,$foder,$main_folder){
       switch($main_folder){
	case 1:
	 if(file_exists("uploads/$foder/$img")){
	       $fileName = "uploads/$foder/$img";
	     }else{
	       $fileName = "img/avatar5.png";
	     }
	     return $fileName;
        break;
       case 2:
	if(file_exists("admin/uploads/$foder/$img")){
	       $fileName = "admin/uploads/$foder/$img";
	     }else{
	       $fileName = "admin/img/avatar5.png";
	     }
	     return $fileName;
        break;
       }
	}
}
 
?>
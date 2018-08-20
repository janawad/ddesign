<?php
 require_once "database/database_connect.php";
 require_once "generic.class.php";
 class applynow extends database {
    public function __construct(){
        parent::database();
    } 
    
	// Insert enquiry 
	function AddApplynow($request){
		extract($request);
		
		$query = "INSERT INTO apply_form (date_created,name,gender,dob,email,nationality,number,education,role,domain) VALUES (NOW(),'".Generic::preventSqlInjection($name)."','".Generic::preventSqlInjection($gender)."','".Generic::preventSqlInjection($dob)."','".Generic::preventSqlInjection($email)."','".Generic::preventSqlInjection($nationality)."','".Generic::preventSqlInjection($number)."','".Generic::preventSqlInjection($education)."','".Generic::preventSqlInjection($role)."','".Generic::preventSqlInjection($domain)."')";
		
		$result = mysql_query($query);
		if($result){
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
		
	}
	
	
	
	//Get all course list
    function getAllapplynow(){
      $query = "select * from apply_form ORDER BY date_created DESC";
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
     * delete Enquery
     */
    function deleteapplynow($id){
      $query = "delete from apply_form where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query " . mysql_error());
      }
    }
 }   
?>
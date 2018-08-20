<?php
 require_once "database/database_connect.php";
 require_once "generic.class.php";
 class enquiry extends database {
    public function __construct(){
        parent::database();
    } 
    
	// Insert enquiry 
	function AddEnquiry($request){
		extract($request);
		
		$query = "INSERT INTO enquiry_form (date_created,name,email,phone,message) VALUES (NOW(),'".Generic::preventSqlInjection($name)."','".Generic::preventSqlInjection($email)."','".Generic::preventSqlInjection($phone)."','".Generic::preventSqlInjection($message)."')";
		
		$result = mysql_query($query);
		if($result){
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
		
	}
	
	// Insert newsletter 
	function AddNewsletter($request){
		extract($request);
		
		$query = "INSERT INTO enquiry (date_created,name,email) VALUES (NOW(),'".Generic::preventSqlInjection($name)."','".Generic::preventSqlInjection($email)."')";
		
		$result = mysql_query($query);
		if($result){
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
		
	}
	
	
	//Get all course list
    function getAllEnquiry(){
      $query = "select * from enquiry_form ORDER BY date_created DESC";
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
    function deleteEnquiry($id){
      $query = "delete from enquiry_form where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query " . mysql_error());
      }
    }
 }   
?>
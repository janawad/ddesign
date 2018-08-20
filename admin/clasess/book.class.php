<?php
 require_once "database/database_connect.php";
 require_once "generic.class.php";
 class book extends database {
    public function __construct(){
        parent::database();
    } 
    
	// Insert enquiry 
	function AddBook($request){
		extract($request);
		
		$query = "INSERT INTO book (date_created,firstname,lastname,mobile_number,address,city,state,zip,email,pkg_cat_id) VALUES (NOW(),'".Generic::preventSqlInjection($firstname)."','".Generic::preventSqlInjection($lastname)."','".Generic::preventSqlInjection($mobile_number)."','".Generic::preventSqlInjection($address)."','".Generic::preventSqlInjection($city)."','".Generic::preventSqlInjection($state)."','".Generic::preventSqlInjection($zip)."','".Generic::preventSqlInjection($email)."','".Generic::preventSqlInjection($pkg_cat_id)."')";
		
		$result = mysql_query($query);
		if($result){
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
		
	}
	
	
	
	//Get all course list
    function getAllBook(){
      $query = "select * from book ORDER BY date_created DESC";
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
    function deleteBook($id){
      $query = "delete from book where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query " . mysql_error());
      }
    }
 }   
?>
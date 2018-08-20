<?php
 require_once "database/database_connect.php";
 require_once "generic.class.php";
 class newsletter extends database {
    public function __construct(){
        parent::database();
    } 
    
	// Insert newsletter 
	function AddNewsletter($request){
		extract($request);
		
		$query = "INSERT INTO newsletter (date_created,name,email) VALUES (NOW(),'".Generic::preventSqlInjection($name)."','".Generic::preventSqlInjection($email)."')";
		
		$result = mysql_query($query);
		if($result){
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
		
	}
	
	
	
	//Get all newsletter list
    function getAllNewsletter(){
      $query = "select * from newsletter ORDER BY date_created DESC";
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
     * delete newsletter
     */
    function deleteNewsletter($id){
      $query = "delete from newsletter where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query " . mysql_error());
      }
    }
 }   
?>
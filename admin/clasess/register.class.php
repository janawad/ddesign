<?php
 require_once "database/database_connect.php";
 require_once "generic.class.php";
 class register extends database {
    public function __construct(){
        parent::database();
    } 
    
	
	
	//Get all course list
    function getAllregister(){
      $query = "select * from register ORDER BY date_created DESC";
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
    function deleteregister($id){
      $query = "delete from register where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query " . mysql_error());
      }
    }
 }   
?>
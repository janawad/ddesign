<?php
 require_once "database/database_connect.php";
 require_once "generic.class.php";
 class orders extends database {
    public function __construct(){
        parent::database();
    } 
    
	
	/**
		*get single purchase details
		*/
		function getordersByID($orders_id){
		  $query = "select * from purchase where id = $orders_id";
		  $result = mysql_query($query);
		  if($result){
			$row = mysql_fetch_assoc($result);
			//$row['icon_image'] = $row['icon_image'] !==""? $this->Check_exists_img($row['icon_image']) : "dist/img/boxed-bg.jpg";
			//$row['slider_image1'] = $row['slider_image1'] !==""? $this->Check_exists_img($row['slider_image1']) : "img/boxed-bg.jpg";
			
			return $row;
		  }
		}
		
	
	
	/**
		*Update purchase
		*/
		function Updateorders($request){
			extract($request);
			
			
			$query = "update purchase set status = '".Generic::preventSqlInjection($status)."' where id = $orders_id";
			
			
			
			
			$result = mysql_query($query);
			if($result){
				
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
	
	
	
	// Insert orders 
	function Addorders($request){
		extract($request);
		
		$query = "INSERT INTO orders (date_created,name,email,phone,country,message,products_number,status) VALUES (NOW(),'".Generic::preventSqlInjection($name)."','".Generic::preventSqlInjection($email)."','".Generic::preventSqlInjection($phone)."','".Generic::preventSqlInjection($country)."','".Generic::preventSqlInjection($message)."','".Generic::preventSqlInjection($products_number)."','".Generic::preventSqlInjection($status)."')";
		if($products_number >= 50){
		$result = mysql_query($query);
		}else{
			echo "number of products is 50 or more";
		}
		if($result){
			return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
		
	}
	
	
	//Get all complete orders list
    function getAllorders(){
      $query = "select * from purchase where status='Success' ORDER BY date_created DESC";
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
	
	
	
    
	
	//Get all pending orders list
    function getAllpendingorders(){
      $query = "select * from purchase where status<>'Success' ORDER BY date_created DESC";
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
     * delete orders
     */
    function deleteorders($id){
      $query = "delete from purchase where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query " . mysql_error());
      }
    }
 }   
?>
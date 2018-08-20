<?php
 require_once "database/database_connect.php";
 require_once "generic.class.php";
 class purchase extends database {
    public function __construct(){
        parent::database();
    } 
    
	// Insert purchase 
	
	
	function Addpurchase($request){
		extract($request);
		
		$query = "INSERT INTO purchase (date_created,package_title,amount,qty,number_of_qty,product_id,name,email,address,gst,pan,image,status) VALUES (NOW(),'".Generic::preventSqlInjection($package_title)."','".Generic::preventSqlInjection($amount)."','".Generic::preventSqlInjection($qty)."','".Generic::preventSqlInjection($number_of_qty)."','".Generic::preventSqlInjection($product_id)."','".Generic::preventSqlInjection($name)."','".Generic::preventSqlInjection($email)."','".Generic::preventSqlInjection($address)."','".Generic::preventSqlInjection($gst)."','".Generic::preventSqlInjection($pan)."','".Generic::preventSqlInjection($image)."','place')";
		if($qty >= 50 && $number_of_qty >= $qty){
		$result = mysql_query($query);
		echo "<script>alert('Products will be placed on Your Address');
			window.location.href='home.php';
			</script>";
		}else{
			//echo "number of products is 50 or more";
			echo "<script>alert('insufficent Products');
			window.location.href='home.php';
			</script>";
			
		}
		if($result){
			return 1;
			
			
		}else{
			die("error in mysql query" . mysql_error());
		}
		
	}
	
	
	 /**
    *get single purchase details
    *$id is module id
    */
    function getDetails($id){
		$query = "select * from purchase where id = $id";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_assoc($result);
			
			return $row;
		}
    }
    
    /**
    *Update purchase
    */
    function Updatepurchase($request){
		extract($request);
		
		$query = "update purchase set status = '".Generic::preventSqlInjection($status)."',servece_name = '".Generic::preventSqlInjection($servece_name)."',product_track_no = '".Generic::preventSqlInjection($product_track_no)."'where id = $id";
		$result = mysql_query($query);
		if($result){
			
        return 1;
		}else{
			die("error in mysql query" . mysql_error());
		}
    }
    
	
	
	/*qty */
		
		function Updatepackageqty($request){
			extract($request);
			
			$sub = $number_of_qty - $qty;
			$query = "update `package`,`purchase` set `package`.`number_of_qty` ='$sub' where `package`.`id` = '$product_id'";
			if($number_of_qty >= $qty){
			$result = mysql_query($query);
			}else{
				echo "insufficent";
			}
			if($result){
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
	/*qty */
	
	
	//Get all complete purchase list
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
    
	
	//Get all pending orders list
    function getAllpendingorders(){
      $query = "select * from orders where status='pending' ORDER BY date_created DESC";
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
      $query = "delete from orders where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query " . mysql_error());
      }
    }
 }   
?>
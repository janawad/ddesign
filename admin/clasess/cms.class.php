<?php
  require_once "database/database_connect.php";
  require_once "cms.class.php";
  class cms extends database {
     public function __construct(){
        parent::database();
    }
    
    //Get all course list
    function getAbout(){
      $query = "select * from cms";
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
    *Update Course
    */
    function UpdateAbout($request){
      extract($request);
      $query = "update cms set date_updated = NOW(),content = '".Generic::preventSqlInjection($content)."' where content_name = '$content_name'";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *$id is module id
    */
    function getCmsById($id){
      $query = "select * from cms where id = $id";
      $result = mysql_query($query);
      if($result){
        $row = mysql_fetch_assoc($result);
        return $row;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *$id is module id
    */
    function DeleteAbout($id){
      $query = "delete from cms where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
  }  
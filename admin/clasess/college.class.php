<?php
  require_once "database/database_connect.php";
  require_once "generic.class.php";
  class college extends database {
     public function __construct(){
        parent::database();
    }
    
    //Insert college table
    function AddCollege($request){
      extract($request);
      $query = "INSERT INTO college(date_created,college_name,college_detail) VALUES (NOW(),'".Generic::preventSqlInjection($college_name)."','".Generic::preventSqlInjection($college_detail)."')";
      $result = mysql_query($query);
      if($result){
        $insert_id = mysql_insert_id();
        foreach($check_list as $courseid){
          $query = "insert into college_courses (college_id,course_id) values($insert_id,$courseid)";
          $result = mysql_query($query);
        }
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    //List All course 
    function getAllCourseList(){
      $query = "select id,course_name from course";
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
    
    //Get all course list
    function getCollege(){
      $query = "select * from college";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row=mysql_fetch_assoc($result)){
           $row['course_list'] = $this->getCoursesUnderCollege($row['id'],"list");
           array_push($data,$row);
         }
         return $data;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *get single college details by id
    */
    function getCollegeById($id){
      $query = "select * from college where id = $id";
      $result = mysql_query($query);
      if($result){  
        $row = mysql_fetch_assoc($result);
        $row['course_id'] = $this->getCoursesUnderCollege($row['id'],"details");
        return $row;
      }
    }
    
    /**
    *Update Course
    */
    function UpdateCollege($request){
      extract($request);
      $query = "update college set date_updated = NOW(),college_name = '".Generic::preventSqlInjection($college_name)."',college_detail = '".Generic::preventSqlInjection($college_detail)."'
                    where id = $id";
      $result = mysql_query($query);
      if($result){
        if($this->courseUnderCollegeCount($id)>0){
          $query = "delete from college_courses where college_id = $id";
          $result = mysql_query($query);
        }
        foreach($check_list as $courseid){
          $query = "insert into college_courses (college_id,course_id) values($id,$courseid)";
          $result = mysql_query($query);
        }
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
    *$id is module id
    */
    function DeleteCollege($id){
      $query = "delete from college where id = $id";
      $result = mysql_query($query);
      if($result){
        return 1;
      }else{
        die("error in mysql query" . mysql_error());
      }
    }
    
    /**
     * get college courses
     */
    function getCoursesUnderCollege($collegeid,$from){
      $query = "select course_id from college_courses where college_id = $collegeid";
      $result = mysql_query($query);
      if($result){
        $data = array();
        while($row = mysql_fetch_assoc($result)){
          array_push($data,$row['course_id']);
        }
        $course_str = implode(",",$data);
        if($from=="details"){
          return $course_str;
        }
        $query = "select course_name from course where id in ($course_str)";
        $result = mysql_query($query);
          if($result){
            $course_name_str = "";
            while($row = mysql_fetch_assoc($result)){
             $course_name_str .= $row['course_name'] .",";
            }
            return rtrim($course_name_str,",");
          }
      }
    }
    
    /**
     * course  under college count
     */
     function courseUnderCollegeCount($id){
      $query = "select id from college_courses where college_id = $id";
      $result = mysql_query($query);
      if($result){
        return mysql_num_rows($result);
      }
     }
  }  
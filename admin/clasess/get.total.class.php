<?php
  require_once "database/database_connect.php";
  require_once "generic.class.php";
  class get_total_records extends database {
    public function __construct(){
        parent::database();
    }
     
    function allRecords($recods){
      $query = "select * from $recods where 1=1";
      $result = mysql_query($query);
      $result_number = mysql_num_rows($result);
      echo  $result_number;
    }
  }
?>  
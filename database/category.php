<?php

//for fetch category types

class Category{
    public $db=null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db= $db;
    }

    //fetch category 
    public function getData($table='category'){
      $result = $this->db->con->query("SELECT * FROM ($table)");

      $resultArray = array();

      //fetch type one by one

      while($type = mysqli_fetch_array($result, $resulttype = MYSQLI_ASSOC)){
          $resultArray[] = $type;
      }

      return $resultArray;

    }
}

?>
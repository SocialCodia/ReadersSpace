<?php

//for fetch books 

class Books{
    public $db=null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db= $db;
    }

    //fetch books 
    public function getData($table='books'){
      $result = $this->db->con->query("SELECT * FROM ($table)");

      $resultArray = array();

      //fetch books one by one

      while($book = mysqli_fetch_array($result, $resulttype = MYSQLI_ASSOC)){
          $resultArray[] = $book;
      }

      return $resultArray;

    }
}

?>
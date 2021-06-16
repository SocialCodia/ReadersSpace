<?php
    //sql connection
 require ('DBController.php'); 

 //sql category class
 require ('category.php'); 

 //sql books class
 require ('books.php'); 

//DBController object
$db = new DBController();

//category class object
$category = new Category($db);

//books class object
$books = new Books($db);


 ?>

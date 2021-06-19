<?php 
require "model/bookManager.php";
require "model/entity/customer.php";
require "model/entity/book.php";
require "model/customerManager.php";


$bookModel = new BookManager();
$book = $bookModel->getBook();




 
 
 
 
// if(!$book) {
//    $error ="Nous avons rencontré un problème, aucun compte ne correspond à votre demande";
//  }
include "view/bookView.php";
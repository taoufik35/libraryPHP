<?php 
require "model/bookManager.php";
require "model/entity/customer.php";
require "model/entity/book.php";
require "model/customerManager.php";

$id = $_GET["id"];
$bookManager = new BookManager();
$book = $bookManager->getBook($id);




$customerManager= new customerManager();
if($book->getCustomer_id()){
    $customer= $customerManager->getUserById($book->getCustomer_id());
}





 
 
 
 
// if(!$book) {
//    $error ="Nous avons rencontré un problème, aucun compte ne correspond à votre demande";
//  }
include "view/bookView.php";
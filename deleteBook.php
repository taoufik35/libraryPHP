<?php 



require "model/entity/book.php";
require "model/bookManager.php";
require "model/entity/customer.php";




if (!empty($_POST["delete_book"])) {
    $bookManager = new BookManager();
    $deleteBook= new Book($_POST);
    $delBook=$bookManager->deleteBook($deleteBook->getId());

        header("Location: index.php");
          

           
}

?>
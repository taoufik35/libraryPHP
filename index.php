


<?php
require "model/entity/book.php";
require "model/bookManager.php";
require "model/entity/customer.php";


// Controlleur qui gérer l'affichage de tous les livres
$bookModel= new BookManager();
$books= $bookModel->getBooks();


require "view/indexView.php";

?>
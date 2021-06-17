


<?php


require "model/entity/book.php";
require "model/bookManager.php";


// Controlleur qui gérer l'affichage de tous les livres
$bookModel= new BookManager();
$book= $bookModel->getBooks();

require "view/indexView.php";

?>
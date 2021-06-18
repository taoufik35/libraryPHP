


<?php
require "model/entity/book.php";
require "model/bookManager.php";


// Controlleur qui gérer l'affichage de tous les livres
$bookModel= new BookManager();
$user= $_SESSION["book"];
$books= $bookModel->getBooks($user->getId());


require "view/indexView.php";

?>
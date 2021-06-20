<?php
require "model/entity/book.php";
require "model/bookManager.php";
require "model/entity/customer.php";
require "model/customerManager.php";



if (isset($_POST["new_book"])) {
 $bookManager = new BookManager();
 $newBook= new Book($_POST);
 $addNewBook=$bookManager->addBook($newBook);

  if ($addNewBook) {
     header("Location: index.php");
            exit;
        }

        $error = "Nous n'avons pas pu enregistrer votre livre, veuillez réessayer ulterieurement !!!";
    }



require "view/addBookView.php";
?>

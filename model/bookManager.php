<?php
require_once "model.php";
class BookManager extends Model {

  // Récupère tous les livres
  public function getBooks( Book $book) {
    $query = $this->db->prepare("SELECT title, author, book_type, release_date, borrow FROM book WHERE customer_id =:id");
    $query->execute([
      "customer_id"=>$book->getId()
    ]);

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key =>$book){
     if( $book["borrow"]==="1"){
       echo "<i class='fas fa-times-circle'></i>";
     }
     else{
       echo "<i class='fas fa-check-circle'></i>";
     }
      $result[$key]= new Book($book);
    }
    return $result;
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}

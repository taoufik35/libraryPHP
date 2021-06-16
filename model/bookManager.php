<?php
require_once "model.php";
class BookManager extends Model {

  // Récupère tous les livres
  public function getBooks() {
    $query = $this->db->query("SELECT * FROM book");

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
    foreach($result as $key =>$book){
     if( $book["customer_id"]===""){
       $book["customer_id"]="NULL";
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

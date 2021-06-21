<?php
require_once "model.php";
class BookManager extends Model {

  // Récupère tous les livres
  public function getBooks() {
    $query = $this->db->query("SELECT id, title, author, book_type, release_date, borrow FROM book");
   
    
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key =>$book){
      $result[$key]= new Book($book);
    }
    return $result;
  }

  // Récupère un livre
  public function getBook(int $id) {
    $query= $this->db->prepare("SELECT * FROM book WHERE id = :id");
    $result = $query->execute([
      "id" => $id
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
      $result = new Book($result);
      return $result;
  
  }

  // Ajoute un nouveau livre
  public function addBook(Book $book) {
    $query= $this->db->prepare("INSERT INTO book(title, author, book_type, release_date, summary)
    
    VALUES (:title, :author, :book_type, :release_date, :summary)");


  $result= $query->execute([
    
    "title"=> $book->getTitle(),
    "author"=> $book->getAuthor(),
    "book_type"=> $book->getBook_type(),
    "release_date"=> $book->getRelease_date(),
    "summary"=> $book->getSummary()
    
  ]);

  return $result;
  }

    // Met à jour le statut d'un livre emprunté
    public function deleteBook(int $id) {
      $query= $this->db->prepare("DELETE FROM book WHERE id = :id");
      $result = $query->execute([
        "id" => $id
      ]);
    }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}

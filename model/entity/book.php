<?php
require_once "model/entity/entity.php";

class Book extends Entity {

    protected int $id;
    protected string $title;
    protected string $author;
    protected string $book_type;
    protected string $release_date;
    protected ?int $borrow;
    protected ? string $borrow_date;
    protected string $summary;
    protected ?string $customer_id;



    public function __construct(?array $data = null) {
        if($data) {
          $this->hydrate($data);
        }
      }


      public function setId(int $id){
        $this->id=$id;
      }

      public function getId(){
        return $this->id;
      }


      public function setTitle(string $title){
        $this->title= $title;
      }

      public function getTitle(){
          return $this->title;
      }

      public function setAuthor(string $author){
        $this->author= $author;
      }

      public function getAuthor(){
          return $this->author;
      }

      public function setBook_type(string $book_type){
        $this->book_type= $book_type;
      }

      public function getBook_type(){
          return $this->book_type;
      }

      public function setRelease_date(string $release_date){
        $this->release_date= $release_date;
       
      }

      public function getRelease_date(){
          return $this->release_date;
      }

      public function setBorrow(?int $borrow){
        $this->borrow= $borrow;
      }

      public function getBorrow(){
          return $this->borrow;
      }

      public function setBorrow_date(?string $borrow_date){
        $this->borrow_date= $borrow_date;
      }

      public function getBorrow_date(){
          return $this->borrow_date;
      }

      public function setSummary(string $summary){
        $this->summary= $summary;
      }

      public function getSummary(){
          return $this->summary;
      }

      public function setCustomer_id(?string $customer_id){
        $this->customer_id= $customer_id;
      }

      public function getCustomer_id(){
          return $this->customer_id;
      }

}
?>
<?php
require_once "model.php";
class customerManager extends Model {

  // Récupère tous les utilisateurs
  public function getUsers() {

  }

  // Récupère un utilisateur par son id
  public function getUserById(int $id) {
    $query= $this->db->prepare("SELECT * FROM customer WHERE id = :id" );
    $query->execute([
      "id"=>$id
    ]);


    $result=$query->fetch(PDO::FETCH_ASSOC);
    $result= new Customer($result);

    return $result;
   

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}

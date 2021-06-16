<?php 

require "database.php";

abstract class Model {
  protected PDO $db;

  public function __construct() {
      $this->db = dataBase::getPDOConnexion();
  }
}

 ?>

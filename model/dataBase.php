<?php
// 

abstract class dataBase
{
        const HOST = "localhost";
        const DBNAME = "library";
        const LOGIN= "root";
        const PASSWORD= "";
        private static ?PDO $db = null;
      
        public static function getPDOConnexion() {
          try {
            if(!self::$db) {
              $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME , self::LOGIN, self::PASSWORD);
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              self::$db = $db;
            }
            return self::$db;
          } 
          catch (\Exception $e) {
            echo "Erreur lors de la connexion à la base de donée: " . $e->getMessage() . "<br/>";
            die();
          }
        }
      
      

}
?>
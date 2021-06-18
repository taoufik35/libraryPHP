<?php
require_once "model/entity/entity.php";

class Customer extends Entity {
    
    protected string $lastname;
    protected string $firstname;
    protected int $age;
    protected string $date_signup;
    protected string $email;
    protected string $city;
    protected string $city_code;



    public function __construct(array $data = null) {
        if($data) {
          $this->hydrate($data);
        }
      }

      public function setLastname(string $lastname){
        $this->lastname= $lastname;
        return $this;
      }

      public function getLastname(){
          return $this->lastname;
      }

      public function setFirstname(string $firstname){
        $this->firstname= $firstname;
        return $this;
      }

      public function getFirstname(){
          return $this->firstname;
      }

      public function setAge(int $age){
        $this->age= $age;
        return $this;
      }

      public function getAge(){
          return $this->age;
      }

      public function setDate_signup(string $date_signup){
        $this->date_signup= $date_signup;
        return $this;
      }

      public function getDate_signup(){
          return $this->date_signup;
      }

      public function setEmail(string $email){
        $this->email= $email;
        return $this;
      }

      public function getEmail(){
          return $this->email;
      }

      public function setCity(string $city){
        $this->city= $city;
        return $this;
      }

      public function getCity(){
          return $this->city;
      }

      public function setCity_code(int $city_code){
        $this->city_code= $city_code;
        return $this;
      }

      public function getCity_code(){
          return $this->city_code;
      }

}
?>

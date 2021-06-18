<?php

abstract class Entity {
 



  protected function hydrate(array $data) {
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)) {
        $value = $value;
        $this->$method($value);
      }
    }
  }
}

 ?>
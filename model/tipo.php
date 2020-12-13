<?php

include_once "../cadastro.php";
  class Tipo {

    private $id;

    public function getId() {
      return $this->id;
    }

    public function setId($novoId) {
      $this->id  = $novoId; 
    }

    TipoDAO::getTableTipo();



  }



 ?>

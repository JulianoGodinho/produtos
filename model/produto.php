<?php
  class Produto {

    private $codigo;
    private $nome;
    private $preco;
    private $tipo;

    public function __construct($codigo, $nome, $preco, $tipo) {

      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->preco = $preco;
      $this->tipo = $tipo;

    }

    public function getCodigo() {
      return $this->codigo;
    }

    public function setCodigo($novoCodigo) {
      $this->codigo = $novocodigo;
    }

    public function getNome() {
      return $this->nome;
    }

    public function setNome($novoNome) {
      $this->nome = $novoNome;
    }

    public function getPreco() {
      return $this->preco;
    }

    public function setPreco($novoPreco) {
      $this->preco = $novoPreco;
    }

    public function getTipo() {
      return $this->tipo;
    }

    public function setTipo($novoTipo) {
      $this->tipo = $novoTipo;
    }

  }


 ?>

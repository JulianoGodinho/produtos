<?php
  include "conexaobanco.php";
  class ProdutoDAO {

      public static function inserir($produto) {
          $con = ConexaoBanco::getConexao();
          $sql = $con->prepare("insert into produto values (null, ?, ?, ?)");

          $nome = $produto->getNome();
          $preco = $produto->getPreco();
          $tipo = $produto->getTipo();

          $sql->bindParam(1, $nome);
          $sql->bindParam(2, $preco);
          $sql->bindParam(3, $tipo);

          $sql->execute();

      }


  }


 ?>

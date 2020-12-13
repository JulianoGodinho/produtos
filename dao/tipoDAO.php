<?php
  class TipoDAO {

    public static function getTableTipo() {
      $con = ConexaoBanco::getConexao();
      $sql = $con->prepare("select id,nomeTipo from tipo");

      $sql->setFetchMode(PDO::FETCH_ASSOC);
      $sql->execute();

      $linha = array();
      $optTipo = "";
    while($registro = $sql->fetch())  {
            $id = $registro["id"];
            $nomeTipo = $registro["nomeTipo"];
            $optTipo = "<option value='$id'>$nomeTipo</option>";
            $linha[] = $optTipo;
    }

          return $linha;


  }

}


 ?>

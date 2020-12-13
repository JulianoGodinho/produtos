<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>


    <?php
        include_once "model/produto.php";
        include_once "dao/produtoDAO.php";
        include_once "dao/tipoDAO.php";





        $nome = "";
        $preco = "";
        $tipo = "";


        if(isset($_GET["botaoAcao"])) {

          if($_GET["botaoAcao"] == "Gravar") {

              $nome = $_GET["nome"];
              $preco = $_GET["preco"];
              $tipo = $_GET["tipo"];


              $p1 = new Produto(null, $nome, $preco, $tipo);

            ProdutoDAO::inserir($p1);

          }

        }


     ?>

      <div class="container">

          <div class="row text-center">
            <div class="col-md-4">
                <a href="index.php">Home</a>
            </div>
            <div class="col-md-4">
                <a href="cadastro.php">Cadastro</a>
            </div>
            <div class="col-md-4">
                <a href="listagem.php">Busca</a>
            </div>
         </div>

            <form action="cadastro.php" method="get">
                <div class="row text-center">
                    <div class="col-md-4 offset-md-4">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" value="">
                    </div>
                    <div class="col-md-4 offset-md-4">
                      <label for="preco">Preço</label>
                        <input type="text" name="preco" value="">
                    </div>
                    <div class="col-md-4 offset-md-4">
                      <label for="tipo">Tipo</label>
                        <select name="tipo">
                          <?php $tipos = TipoDAO::getTableTipo();
                          foreach ($tipos as $tipo) {
                              echo $tipo;
                          }
                           ?>
                        </select>
                    </div>

                </div>

                <div class="row text-center">
                    <div class="col-md-2 offset-md-2">
                      <input type="submit" name="botaoAcao" value="Gravar" class="btn btn-success"/>
                    </div>
                <div class="col-md-2">
                  <input type="submit" name="botaoAcao" value="Excluir" class="btn btn-danger"/>
                </div>
                <div class="col-md-2">
                  <input type="submit" name="botaoAcao" value="Cancelar" class="btn btn-warning"/>
                </div>
                <div class="col-md-2">
                  <input type="submit" name="botaoAcao" value="Limpar" class="btn btn-primary"/>
                </div>
              </div>
            </form>

      </div>

  </body>
</html>

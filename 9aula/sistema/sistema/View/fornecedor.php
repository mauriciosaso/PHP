<?php

    require "../../vendor/autoload.php";
    $fornecedor = new Fornecedor();
    $conexao = new Conexao();
    $a = new Usuario();

    session_start();

     if($_SESSION["logado"] == "logar")
     {
         $a->verificaUsuario($_SESSION["func"]);
     }
     else
     {
         header("Location:logar.php");
     }

    if(isset($_POST['enviar']))
    {
       if($fornecedor->inserirFornecedor($_POST) == "ok")
       {
        echo "Inserido com sucesso";
        header("Location: fornecedor.php");
       }
       else
       {
        echo "Não deu";
       }
        
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Aula 9</title>
  </head>
  <body>
    
  <div class="container">

  <?php require_once "../Includes/menu.php"?>

  <div class="row">

    <div style="margin-top: 40px;" class="col-md-4">
       <h1 style="text-align: center;">Fornecedores no Banco</h1>
    </div>

    <div class="col-md-8"> 
      <a style="float: right; margin-top: 40px;" href="../Acao/formFornecedor.php"> Novo Cadastro </a>
    </div>

  </div>

    <table class = "table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">País</th>
          <th scope="col">Estado</th>
          <th scope="col">Cidade</th>
          <th scope="col">Telefone</th>
          <th scope="col">Mensagem</th>
          <th scope="col">Editar</th>
          <th scope="col">Deletar</th>
        </tr>
      </thead>
      <tbody>

      <?php

        foreach($fornecedor->selecionarFornecedor() as $resultado):
        
          echo "</br>";
         ?> 
          <tr>
              <td><?php echo $resultado['id']; ?></td>
              <td><?php echo $resultado['nome']; ?></td>
              <td><?php echo $resultado['pais']; ?></td>
              <td><?php echo $resultado['estado']; ?></td>
              <td><?php echo $resultado['cidade']; ?></td>
              <td><?php echo $resultado['telefone']; ?></td>
              <td><?php echo $resultado['mensagem']; ?></td>
              <td><button type="button" class="btn btn-info">Editar</button></td>
              <td><button type="button" class="btn btn-danger">Deletar</button></td>
        </tr>
        <?php endforeach ?>
      
      </tbody>
    </table>

    <?php require_once "../Includes/rodape.php"?>
      
  </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php

    require "../../vendor/autoload.php";
    $cliente = new Cliente();
    $conexao = new Conexao();

    if(isset($_POST['enviar']))
    {
       if($cliente->inserirCliente($_POST) == "ok")
       {
        echo "Inserido com sucesso";
        header("Location: ../View/cliente.php");
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

    <div class="col-md-4">
       <h1 style="text-align: center; margin-top: 40px;">Cadastro Cliente</h1>
    </div>

  </div>

 

    <form method="post" action="">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="nome">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Estado</label>
            <select name="estado" class="form-control">
                <?php 
                foreach($cliente->selecionarEstado() as $resultado1)
                { ?>

                  <option value="<?php echo $resultado1['id']; ?>"> 
                  <?php echo $resultado1['estado']; ?> 
                  </option>

                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea class="form-control" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
        </div>

        <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
    </form>

    <?php require_once "../Includes/rodape.php"?>
      
  </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
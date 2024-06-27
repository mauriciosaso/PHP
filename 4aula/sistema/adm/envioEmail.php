<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Aula 3</title>
  </head>
  <body>
    
    <div class="container">
      <?php 
      
        require "includes/menu.php"; 
      
        session_start();

        if(isset($_SESSION['logar']))
        {
          //echo "Bem vindo";
        }
        else
        {
          header("Location: ../index.php");
          session_destroy();
        }
      ?>
    
      <h1 style="text-align: center;">Envia Email</h1>

      <form method="post" action="acao/acaoEmail.php">

        <div class="form-group">
          <label for="exampleInputEmail1">Digite seu nome</label>
          <input type="text" name="nome" class="form-control" placeholder="Seu nome">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Digite seu email</label>
          <input type="email" name="email" class="form-control" placeholder="Seu email">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Digite o assunto</label>
          <input type="text" name="assunto" class="form-control" placeholder="Digite o assunto">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Digite a mensagem</label>
          <textarea  class="form-control" name="mensagem" rows="3" placeholder="Digite sua mensagem"></textarea>
        </div>

        <input style="float: right; margin-top: 50px" type="submit" name="enviar" class="btn btn-primary" value="Enviar email">

      </form>

      <?php require "includes/rodape.php"; ?>

    </div>






    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
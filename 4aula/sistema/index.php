<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Aula 3</title>
  </head>
  <body>

  <?php
    session_start();
    if(isset($_POST['enviar']))
    {
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      if($email == "senac@gmail.com" && $senha == "123a")
      {
        $_SESSION['logar'] = TRUE;
        header("Location: adm/index.php");
      }
      else
      {
        echo "Verifique seu usuario e senha";
      }

    }
    else
    {
      //echo "Clique no botão";
    }

  ?>
    
    <div class="container">
    
    <h1>Faça seu login</h1>

    <form method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" name="email" placeholder="Seu email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha">
        </div>

        <input style="float: right; margin-top: 50px;" type="submit" name="enviar" value="Logar" class="btn btn-danger">
        
    </form>
    </div>






    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
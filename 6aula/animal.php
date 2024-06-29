<?php

    require_once "Teste.php";
    
    //Teste() camelo = new Teste(); 
    $camelo = new Teste();

    if(isset($_POST['enviar']))
    {
        echo $camelo->imprimirAtributos(); 
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Aula 6</title>
  </head>
  <body>

  <div class="container"> 

    <form method="post" action="">

        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>

            </div>
        </div>    
        
        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputEmail1">Assunto</label>
                    <input type="text" class="form-control" name="assunto" placeholder="Assunto">
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputEmail1">Bairro</label>
                    <input type="text" class="form-control" name="bairro" placeholder="Bairro">
                </div>

            </div>
        </div>

        <input style="float: right; margin-top: 50px; background-color: violet;" type="submit" name="enviar" class="btn btn-danger">
  
    </form>
  </div>
    








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
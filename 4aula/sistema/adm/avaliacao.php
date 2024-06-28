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
    
      <h1 style="text-align: center;">Avaliação</h1>

      <form method="post" action="acao/acaoAvaliacao.php">
        
        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="razao" class="form-control" placeholder="Razão Social">
                </div>

            </div>
        </div>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="cnpj" class="form-control" placeholder="CNPJ">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="inscricao" class="form-control" placeholder="Inscrição Estadual">
                </div>
                
            </div>

        </div>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="logradouro" class="form-control" placeholder="Logradouro">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                </div>
                
            </div>

        </div>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="municipio" class="form-control" placeholder="Município">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="uf" class="form-control" placeholder="UF">
                </div>
                
            </div>

        </div>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="cep" class="form-control" placeholder="CEP">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                </div>
                
            </div>

        </div>

        <div class="row">    

            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="email" class="form-control" placeholder="E-mail">
                </div>
                
            </div>

        </div>

        <p>Representante(s) da empresa para contato</p>

        <p>Representante 1:</p>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="funcao" class="form-control" placeholder="Função">
                </div>
                
            </div>

        </div>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="telefone2" class="form-control" placeholder="Telefone">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="email2" class="form-control" placeholder="E-mail">
                </div>
                
            </div>

        </div>

        <p>Representante 2:</p>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="nome2" class="form-control" placeholder="Nome">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="funcao2" class="form-control" placeholder="Função">
                </div>
                
            </div>

        </div>

        <div class="row">    

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="telefone3" class="form-control" placeholder="Telefone">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="email3" class="form-control" placeholder="E-mail">
                </div>
                
            </div>

        </div>
        
        <input style="float: right; margin-top: 50px;background-color: red;" type="submit" name="enviar" class="btn btn-primary" value="Enviar">

      </form>

      <?php require "includes/rodape.php"; ?>

    </div>






    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
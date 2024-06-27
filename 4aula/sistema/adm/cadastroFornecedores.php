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
    
      <h1 style="text-align: center;">Cadastro Fornecedor</h1>

    
      <form method="post" action="acao/acaoFornecedor.php">

        <div style="margin-top: 50px;" class="row">
          
          <div class="col-md-1"> 

            <label for="exampleInputEmail1">Código</label>
            <input class="form-control" name="codigo" type="text" placeholder="32" readonly>

          </div>

          <div class="col-md-5"> 

            <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome completo do cliente">
            </div>  

          </div>
          <div class="col-md-3"> 

            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="text" name="email" class="form-control" placeholder="cliente@dominio.com">
            </div>  

          </div>
          <div class="col-md-3"> 

            <div class="form-group">
              <label for="exampleInputEmail1">CPF</label>
              <input type="text" name="cpf" class="form-control" placeholder="Só números">
            </div> 

          </div>

        </div>

        <div class="row">

          <div class="col-md-2"> 

            <div class="form-group">
              <label for="exampleInputEmail1">N° do celular</label>
              <input type="text" name="numeroCelular" class="form-control" placeholder="N° do celular">
            </div>  

          </div>

          <div class="col-md-2"> 

            <div class="form-group">
              <label for="exampleInputEmail1">N° telefone</label>
              <input type="text" name="numeroTelefone" class="form-control" placeholder="N° telefone">
            </div> 

          </div>

          <div class="col-md-2">

            <div class="form-group">
              <label for="exampleInputEmail1">CEP</label>
              <input type="text" name="cep" class="form-control" placeholder="ex:8487445">
            </div> 

          </div>

          <div class="col-md-2"> 
            
            <div class="form-group">
              <label for="exampleInputEmail1">Logradouro</label>
              <input type="text" name="logradouro" class="form-control" placeholder="ex: Rua 1400">
            </div> 

          </div>

          <div class="col-md-1"> 

            <div class="form-group">
              <label for="exampleInputEmail1">N°</label>
              <input type="text" name="numero" class="form-control" placeholder="N°">
            </div>   

          </div>
          
          <div class="col-md-3">

            <div class="form-group">
              <label for="exampleInputEmail1">Bairro</label>
              <input type="text" name="bairro" class="form-control" placeholder="Bairro">
            </div>  

          </div>

        </div>

        <div class="row">

          <div class="col-md-3"> 

            <div class="form-group">
              <label for="exampleInputEmail1">Cidade</label>
              <input type="text" name="cidade" class="form-control" placeholder="Cidade">
            </div>   

          </div>

          <div class="col-md-1">
             
            <div class="form-group">
              <label for="exampleInputEmail1">UF</label>
              <input type="text" name="uf" class="form-control" placeholder="UF">
            </div>

          </div>

          <div class="col-md-2">

            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control">
              <option value="ativado">Ativado</option>
              <option value="desativado">Desativado</option>
            </select>  

          </div>

        </div>
        
        <input style="margin-top: 50px; background-color: green; float: right;" type="submit" name="enviar" class="btn btn-primary" value="Cadastrar">

      </form>

      <?php require "includes/rodape.php"; ?>

    </div>






    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
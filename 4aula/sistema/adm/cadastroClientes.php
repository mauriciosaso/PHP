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
      <?php require "includes/menu.php"; ?>
    
      <h1 style="text-align: center;">Cadastro Clientes</h1>

      <h3> Dados pessoais </h3>

      <form method="post" action="acao/acaoCliente.php">

        <div style="margin-top: 50px;" class="row">
          <div class="col-md-12">

            <div class="form-group">
              <label for="exampleInputEmail1">Nome do cliente</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome do cliente">
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-md-4"> 

            <div class="form-group">
              <label for="exampleInputEmail1">CPF</label>
              <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00">
            </div>
          
          </div>

          <div class="col-md-4"> 

            <div class="form-group">
              <label for="exampleInputEmail1">Data de nascimento</label>
              <input type="date" name="data" class="form-control" placeholder="dd/mm/aaaa">
            </div>

          </div>
          
          <div class="col-md-4">

            <p> Sexo </p>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" value="Masculino">
              <label class="form-check-label" for="exampleRadios1">Masculino</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" value="Feminino">
              <label class="form-check-label" for="exampleRadios1">Feminino</label>          
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

            <label for="exampleInputEmail1">Estado Civil</label>
            <select name="estadoCivil" class="form-control">
              <option value="Solteiro">Solteiro</option>
              <option value="Casado">Casado</option>
            </select>  

          </div>
          <div class="col-md-6"> 

            <div class="form-group">
              <label for="exampleInputEmail1">Renda mensal</label>
              <input type="text" name="renda" class="form-control" placeholder="0,00">
            </div> 
           
          </div>
        </div>
        
        <h3 style="margin-top: 50px;"> Endereço </h3>

        <div style="margin-top: 50px;" class="row">
          <div class="col-md-4"> 

            <div class="form-group">
              <label for="exampleInputEmail1">Logradouro</label>
              <input type="text" name="logradouro" class="form-control" placeholder="Avi Paulista">
            </div> 

          </div>
          <div class="col-md-4"> 
            
            <div class="form-group">
              <label for="exampleInputEmail1">Número</label>
              <input type="text" name="numero" class="form-control" placeholder="N°">
            </div>  

          </div>
          <div class="col-md-4"> 
            <div class="form-group">
              <label for="exampleInputEmail1">Complemento</label>
              <input type="text" name="complemento" class="form-control" placeholder="Casa, Apto, Loja">
            </div>   
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

            <label for="exampleInputEmail1">Estado</label>
            <select name="estado" class="form-control">
              <option value="Acre">Acre</option>
              <option value="Rio grande do sul">Rio grande do sul</option>
              <option value="Bahia">Bahia</option>
              <option value="Ceara">Ceará</option>
              <option value="Sao paulo">São Paulo</option>
            </select> 

          </div>
          <div class="col-md-6"> 

            <label for="exampleInputEmail1"> Cidade</label>
            <select name="cidade" class="form-control">
              <option value="Caxias do Sul">Caxias do Sul</option>
              <option value="Monte negro">Monte negro</option>
              <option value="Solimoes">Solimões</option>
              <option value="Senac">Senac</option>
              <option value="Senai">Senai</option>
            </select>

          </div> 
        </div>

        <input style="margin-top: 50px;" type="submit" name="enviar" class="btn btn-primary" value="Cadastrar">
        
      </form>
      
      <?php require "includes/rodape.php"; ?>

    </div>






    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
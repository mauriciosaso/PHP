<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="container">
  <?php require "includes/menu.php"; ?>
  <h1>Novo Usuário</h1>


<form method="post" action="acao/acaoUsuario.php">
      <div class="row">
        <div class="col-md-12"> 
        <div class="form-group">
    <label for="exampleInputEmail1">Nome de Usuario</label>
    <input type="text" name="nome"class="form-control" placeholder="Nome do Usuario">

  </div>    
      </div>
        </div>

      <div class="row">
        <div class="col-md-4"> 
            <div class="form-group">
                <label for="exampleInputEmail1">CPF</label>
                <input type="text" name="CPF"class="form-control" placeholder="informe seu CPF">
                </div>
                </div>   

        <div class="col-md-4"> 
        <label for="exampleInputEmail1" > Endereço </label>
        <input type="text" name="endereco"class="form-control" placeholder="informe seu endereço"> 
      
    </div>

    <div class="form-group">    
    <label for="exampleInputEmail1">Nivel</label>
    <select name="nivel" class="custom-select" style="margin-top: 0px;" required>
      <option value="">Nivel</option>
      <option value="1">Um</option>
      <option value="2">Dois</option>
      <option value="3">Três</option>
    </select>
  </div>
  </div>

  <div class="row">
        <div class="col-md-4"> 
        <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email"class="form-control" placeholder="infore seu email">

  </div>
  </div>

  <div class="col-md-4"> 
        <div class="form-group">
    <label for="exampleInputEmail1">Senha</label>
    <input type="text" name="senha"class="form-control" placeholder="infome sua senha">
    </div>
    </div>
  <div class="form-group">    
  <label for="exampleInputEmail1">Status:</label>
    <select name="status" class="custom-select" style="margin-top: 0px;" required>
        
      <option value="">Status</option>
      <option value="1">Um</option>
      <option value="2">Dois</option>
      <option value="3">Três</option>
    </select>

    <button style="margin-top: 30px;" name="enviar"> Enviar </button>
    <button> Cancelar </button>

  </div>
  </div>

  
      <?php require "includes/rodape.php"; ?>



</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
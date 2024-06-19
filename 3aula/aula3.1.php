<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
    <title>Aula3.1</title>
  </head>
  <body>

  <h1 style="text-align: center;">Cadastro do cliente</h1>

  <div class="container">
  <form method="post" action="aula3.2.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome do cliente</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome do cliente">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Idade do cliente</label>
    <input type="text" name="idade" class="form-control" placeholder="Idade do cliente">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Estado</label>
    <select name="estado" class="form-control">
      <option value="RS">RS</option>
      <option value="BA">BA</option>
      <option value="SC">SC</option>
      <option value="PR">PR</option>
      <option value="AL">AL</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem</label>
    <textarea class="form-control" name="area2" id="area2" rows="3"></textarea>
  </div>
  
  <input type="submit" name="enviar" value="Cadastro do cliente" class="btn btn-danger">

</form>
</div>

    


<script type="text/javascript">
      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
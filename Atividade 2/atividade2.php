<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
    <title>Atividade 2</title>
  </head>
  <body>

    <div class="container">

        <h1>ADICIONAR QUESTÃO</h1>
        
        <div class="row">

            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enunciado</label>
                    <textarea  class="form-control" name="enunciado" id="area2" rows="3" placeholder="Digite sua pergunta aqui"></textarea>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select name="tipo" class="form-control">
                    <option value="mu">Multipla escolha</option>
                    <option value="as">Assinalar</option>
                    <option value="es">Escrita</option>
                    </select>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Exclusivo para</label>
                    <select name="materias" class="form-control">
                    <option value="so">Sociologia</option>
                    <option value="fi">Filosofia</option>
                    <option value="ma">Matemática</option>
                    <option value="ge">Geografia</option>
                    <option value="ci">Ciências</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Resposta Opcional?</label>
                    <select name="resposta" class="form-control">
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                    </select>
                </div>

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Muitas alternativas</label>
                    <select name="quantidade" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                </div>

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Multiplas respostas</label>
                    <select name="quantiRes" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                </div>

            </div>
        </div>
            
        <input style="float: right; margin-top: 50px;" type="submit" name="enviar" value="Confirmar" class="btn btn-danger">


    </div>
     
    

  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
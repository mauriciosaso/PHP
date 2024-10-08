<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

    <?php
            require_once "../../vendor/autoload.php";

            $a = new Produto();
            $b = new Usuario();

            session_start();

            if($_SESSION["logado"] == "logar")
            {
                $b->verificaUsuario($_SESSION["func"]);
            }
            else
            {
                header("Location:logar.php");
            }

            if(isset($_POST["btCadastrar"]))
            {
                if($a->queryInsert($_POST) == "ok")
                {
                    header("Location:produtos.php");
                }
                else
                {
                    echo "Não foi possível Realizar o cadastro";
                }
            }
    ?>


    <div class="container">
        <?php  require_once "../Includes/menu.php";   ?>
            <h2> Cadastro Produto </h2>

        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome do Produto:</label>
                <input type="text" name="nome"  class="form-control"  placeholder="Nome do Produto">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Preço do Produto:</label>
                <input type="text" name="preco" class="form-control"  placeholder="Preço do Produto">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria:</label>
                <select class="form-control" name="categoria"  id="categoria">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Escolha uma Imagem:</label>
                <input type="file" class="form-control-file" name="foto"  id="foto">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem:</label>
                <textarea class="form-control"  name="mensagem" rows="3"></textarea>
            </div>
            <input type="submit" name="btCadastrar" class="btn btn-primary" placeholder="Cadastrar Produto">
        </form>

        <table class="table" style="margin-top: 30px;">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
                <th scope="col">Imagem</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $contagem = 1;
            foreach ($a->selecionaProduto() as $rst )
            {
                ?>
                <tr>
                    <td><?php  echo $rst["id"];  ?></td>
                    <td><?php  echo $rst["nome"];  ?></td>
                    <td><?php  echo $rst["preco"];  ?> </td>
                    <td><?php  echo $rst["categoria"];  ?> </td>
                    <td><?php  echo  "<img width='100' src='../Controller/imagem/"  . $rst["foto"] . " ' /> " ?> </td>
                    <td><?php  echo $rst["mensagem"];   ?></td>
                    <td><button type="button" class="btn btn-info">Editar</button></td>
                    <td><button type="button" class="btn btn-danger">Deletar</button></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>



        <?php  require_once "../Includes/rodape.php"; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<?php
  session_start();

  if (!isset($_SESSION['logar'])) {
    session_destroy();
    header("Location: ../index.php");
    exit;
  }

  // Conexão com o banco de dados
  $host = 'localhost';
  $usuario = 'root';
  $senha = '';
  $banco = 'mauricio'; // <- troque pelo nome correto do seu banco

  $conn = new mysqli($host, $usuario, $senha, $banco);

  if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM usuarios";
  $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Aula 3</title>
  </head>
  <body>
    <div class="container">
      
      <?php require "includes/menu.php"; ?>

      <h1 class="text-center mt-5">Bem-vindo</h1>

      <h2 class="mt-4">Lista de Usuários</h2>

      <table class="table table-bordered table-striped mt-3">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $resultado->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['nome']; ?></td>
              <td><?= $row['email']; ?></td>
              <td>
                <a href="acao/editar.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-primary" name="editar">Editar</a>
                <a href="acao/deletar.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

      <?php 
        $conn->close();
        require "includes/rodape.php"; 
      ?>

    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>

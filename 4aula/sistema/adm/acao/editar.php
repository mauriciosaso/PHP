<?php
session_start();
if (!isset($_SESSION['logar'])) {
    session_destroy();
    header("Location: ../../index.php");
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'mauricio'); // Altere os dados
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // Verifica se o formulário foi enviado
    if (isset($_POST['salvar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nome, $email, $id);
        $stmt->execute();

        if ($stmt->affected_rows >= 0) {
            echo "<script> alert('Usuário atualizado com sucesso');window.location.href='../index.php'; </script>";

        } else {
            echo "Erro ao atualizar.";
        }

        $stmt->close();
    } else {
        // Exibe o formulário com dados atuais
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            ?>

            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <title>Editar Usuário</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            </head>
            <body>
                <div class="container mt-5">
                    <h2>Editar Usuário</h2>
                    <form method="POST">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($usuario['nome']) ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($usuario['email']) ?>" required>
                        </div>
                        <button type="submit" class="btn btn-success" name="salvar">Salvar</button>
                        <a href="../index.php" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </body>
            </html>

            <?php
        } else {
            echo "Usuário não encontrado.";
        }

        $stmt->close();
    }
}

$conn->close();

<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logar'])) {
    session_destroy();
    header("Location: ../../index.php");
    exit;
}

// Verifica se o ID foi passado
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID inválido.";
    exit;
}

// Conexão com o banco
$conn = new mysqli('localhost', 'root', '', 'mauricio'); // Altere os dados do banco
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$id = $_GET['id'];

// Deleta o usuário
$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location: ../index.php"); // Redireciona de volta
} else {
    echo "Usuário não encontrado ou erro ao deletar - " . $id;
}

$stmt->close();
$conn->close();

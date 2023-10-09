<?php
session_start();

$conn = new mysqli("localhost", "root", "", "bd_kaiban");
if ($conn->connect_error) {
    die("Erro de conexão" . $conn->connect_error);
}

echo $_SESSION['funcionario_id'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $tarefa_titulo = $_POST['titulo'];
    $tarefa_assunto = $_POST['assunto'];
    $tarefa_cor = $_POST['tarefa_cor'];
    $id_funcionario = $_SESSION['funcionario_id'];

    $sql = "INSERT INTO tarefa_blocodenotas (tarefa_titulo, tarefa_assunto, tarefa_cor, fk_funcionario_id) VALUES ('$tarefa_titulo', '$tarefa_assunto', '$tarefa_cor', '$id_funcionario')";

    if ($conn->query($sql) === TRUE) {
        echo "Notas inserida com sucesso!";
        header("./>tela-principal.php");
    } else {
        echo "Erro ao inserir notas: " . $conn->error;
    }
}
?>
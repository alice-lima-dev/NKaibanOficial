<?php
session_start();
echo  $_SESSION['funcionario_id'];
  include 'conexao.php';
// $conn = new mysqli("localhost", "root", "", "bd_kaiban");
// if ($conn->connect_error) {
//     die("Erro de conexão" . $conn->connect_error);
// }

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $tarefa_titulo = $_POST['titulo'];
    $tarefa_assunto = $_POST['assunto'];
    $tarefa_cor = $_POST['tarefa_cor'];
    $tarefa_inicio = $_POST['inicio'];
    $tarefa_fim = $_POST['fim'];
    $id_funcionario = $_SESSION['funcionario_id'];


    $sql = "INSERT INTO tarefa_blocodenotas (title, description, color, start, end, fk_funcionario_id) VALUES ('$tarefa_titulo', '$tarefa_assunto', '$tarefa_cor', '$tarefa_inicio', '$tarefa_fim', '$id_funcionario')";

    if ($conn->query($sql) === TRUE) {
        echo "Notas inserida com sucesso!";
        header("./>tela-principal.php");
        header("location: http://localhost/NKaibanOficial-1/login-kaiban/tela-principal.php");
    } else {
        echo "Erro ao inserir notas: " . $conn->error;
    }

}
?>
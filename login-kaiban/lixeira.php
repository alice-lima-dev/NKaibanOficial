<?php
include './crud/conexao.php';

if (isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
    $id_tarefa = $_GET['id'];

    $sql = "DELETE FROM tarefa_blocodenotas WHERE tarefa_id = $id_tarefa";

    if ($conn->query($sql) === TRUE) {
        echo "Excluído!";
        header("Location: tela-principal.php");
    } else {
        echo "Erro " . $conn->error;
    }
} else {
    echo "Confirmação não recebida.";
}
?>

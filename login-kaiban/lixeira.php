<?php
include './crud/conexao.php';

if (isset($_GET['id'])) {
    $id_paciente = $_GET['id'];

    $sql = "DELETE FROM tarefa_blocodenotas WHERE tarefa_id = $id_paciente";

    if ($conn->query($sql) === TRUE) {
        echo "Excluido!";
        echo  "<script>alert('deseja exluir');</script>";
        header("Location: tela-principal.php");
    } else {
        echo "Erro " . $conn->error;
    }
} else {
    echo "ID não especificado.";
}
?>

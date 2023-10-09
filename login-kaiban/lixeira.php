<?php
include './crud/conexao.php';

if (isset($_GET['id'])) {
    $id_notas= $_GET['id'];

    $sql = "DELETE FROM tarefa_blocodenotas WHERE fk_funcionario_id = '$id_funcionario'";

    if ($conn->query($sql) === TRUE) {
        echo "Nota apagada com sucesso!";
    } else {
        echo "Erro ao apagar essa nota: " . $conn->error;
    }
}
$conn->close();
?>

<?php
session_start();
include './crud/conexao.php';

// Verifique se a sessão de usuário está ativa (ou seja, se o usuário está logado)
if (!isset($_SESSION['funcionario_id'])) {
    // Redireciona para a página de login
    header('Location: index.php');
    exit; // Certifica-se de que o script não continue a ser executado
}

$id_funcionario = $_SESSION['funcionario_id'];

$sql = "SELECT * FROM tarefa_blocodenotas WHERE fk_funcionario_id = '$id_funcionario' ORDER BY tarefa_titulo";
$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="kaiban.jpg" type="image/png">
    <script src="js.js" defer></script>
    <link rel="stylesheet" href="./css/style-principal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Tela principal</title>
</head>

<body>

    <header>
        <nav>
            <div class="img_nome">
                <img id="imagem-usuario" src="imagens/user-interface.png">
                <?php 
                    echo '<p class="teste_nome">'. $_SESSION['nome']. '</p>'
                ?>
                <?php
                    if (isset($_SESSION['funcionario_id'])) {
                        echo '<a href="logout.php" class="logout-button"><img id="icone_logout" src="imagens/icone_logout.png"></a>';
                    }
                ?>
            </div>
            <ul>
                <li><a href="nova-tarefa.php">Nova tarefa</a></li>
                <li><a href="calendario/calendario.php">Calendário</a></li>
            </ul>
        </nav>
    </header>
    <div class="kanban-block" id="todo">
        <strong class="fazer">Tarefas diarias</strong>
        <div class="task" id="task1">
            <?php
            if ($resultado->num_rows > 0) {
                echo "<table border='2'>";
                echo "<tr><th>Titulo da tarefa</th><th>Assunto da tarefa</th><th>Data e horario</th><th>Excluir</th><th>Editar</th></tr>";
                while ($row = $resultado->fetch_assoc()) {
                
                    echo "<tr>";
                    echo "<td>" . $row["tarefa_titulo"] . "</td>";
                    echo "<td>" . $row["tarefa_assunto"] . "</td>";
                    echo "<td id='dia'>" . $row["data_tarefa"] . "</td>";
                    echo "<td><button id='confirmButton'>Excluir</button></td>";     
                    echo "<td><a href='editar-tarefa.php?id=" . $row["tarefa_id"] . "'>Editar</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
                } else {
                echo "Nenhuma tarefa atribuida";
            }
            ?>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="script.js"></script>
    <div id="footer">
        <footer>
        <p>2023 Sua Empresa. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>

</html>
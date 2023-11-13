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
        <img class="nkaiban" src="imagens/kaiban.jpg">
        <i id="burguer" class="material-icons" onclick="clickMenu()">menu</i>
        <div id="menu">
            <nav class="nav" id="nav">
                <ul>
                    <li><a href="calendario/calendario.php">Calendário</a></li>
                    <li><a href="nova-tarefa.php">Novo</a></li>
                </ul>
            </nav>
        </div>
    
    </header>
    <div class="container">
        <div class="barra-lateral">
            <div id="usuario">
                    <img id="img-cadastro" src="imagens/user-interface.png" alt="Usuário">
                    <?php
<<<<<<< HEAD
                    echo'<p class="nome">'. $_SESSION['nome']. ' </p>';
=======
                    echo '<p class="teste_nome">'.$_SESSION['nome'].'</p>';
>>>>>>> 021872cb3300dfcfbb9ac299a75b9d4bcd06007b
                    ?>
            </div>
            <div id="div-busca">
                <input type="text" id="txtBusca" name="procurar" placeholder="Pesquisar.." />
                <img src="imagens/lupa.png" id="btnBusca" alt="Buscar" />
            </div>
            <div id="div-novo">
                <a id="href" href="nova-tarefa.php">
                    <h2 id="novo">Novo</h2>
                    <img id="img-novo" src="imagens/mais.png" alt="Novo">
                </a>
            </div>
            <div class="topicos">
                <div class="topico-texto">
                    <a href="calendario/calendario.php">
                        <p id="letra">Calendário</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="kanban-block" id="todo">
            <strong class="fazer">Bloco de notas</strong>
            <div class="task-button-block">
                <a href="nova-tarefa.php"><button id="task-button">Adicionar nova nota</button></a>
            </div>
            <div class="task" id="task1">
                <?php
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<table border='2'>";
        echo "<tr><th>Titulo da tarefa</th><th>Assunto da tarefa</th><th>Data e horario</th><th>Excluir</th><th>Editar</th></tr>";
                        echo "<tr>";
                        echo "<td>" . $row["tarefa_titulo"] . "</td>";
                        echo "<td>" . $row["tarefa_assunto"] . "</td>";
                        echo "<td>" . $row["data_tarefa"] . "</td>";
                        
                        echo "<td><a href='lixeira.php?id=" . $row["tarefa_id"] . "'>Excluir</a></td>";
            
                        echo "<td><a href='editar-tarefa.php?id=" . $row["tarefa_id"] . "'>Editar</a></td>";
            
                        echo "</tr>";
                    }
                    echo "</table>";
                    } else {
                    echo "Nenhuma tarefa atribuida";
                }
                ?>
            </div>
            <div class="page">
        <div class="teste">
            <!-- Conteúdo existente da página -->

            <!-- Botão de Logout -->
            <?php
            if (isset($_SESSION['funcionario_id'])) {
                echo '<a href="logout.php" class="logout-button">Logout</a>';
            }
            ?>
        </div>
    </div>
        </div>
    </div>
    <footer>
        <p></p>
    </footer>
</body>

</html>
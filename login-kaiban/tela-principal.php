<?php
session_start();
include './crud/conexao.php';

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
    <link rel="stylesheet" href="css/style-principal.css">
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
                    <li><a href="#">Calendário</a></li>
                    <li><a href="#">Lixeira</a></li>
                    <li><a href="#">Novo</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="barra-lateral">
            <div id="usuario">
                <img id="img-cadastro" src="imagens/user-interface.png" alt="Usuário">
                <p id="nome">Nome do usuário</p>
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
                <div>
                    <a href="../login-kaiban/tela-principal.php">
                        <p>Bloco de notas</p>
                    </a>
                </div>
                <div>
                    <a href="../kaibancalendario/calendario.php">
                        <p>Calendário</p>
                    </a>
                </div>
                <div>
                    <a href="lixeira.php">
                        <p>Lixeira</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="display">
            <div class="kanban-heading">
                <strong class="kanban-heading-text"></strong>
            </div>
            <div class="bloco">
            </div>
        </div>
        <div class="kanban-block" id="todo">
            <strong class="fazer">Bloco de notas</strong>
            <div class="task-button-block">
                <a href="nova-tarefa.php"><button id="task-button">Adicionar nova nota</button></a>
            </div>
            <div class="task" id="task1">
                <?php
                if ($resultado -> num_rows > 0) {
                    while ($row = $resultado-> fetch_assoc()) {
                        echo "<tr>";
                        echo "<div class='bordar'>";
                        echo "<p class='teste'>";
                        echo "<span id='titulo_tarefa'>" . $row['tarefa_titulo'] ." </span><br>";
                        echo "<span>" . $row['tarefa_assunto'] ." </span>";
                        echo "<div class='info'>";
                        echo "<p id='margin'>". $row['data_tarefa'] . "</p>";
                        echo "<a href='lixeira.php'>";
                        echo "<img id='lixinho' src='imagens/lixeira-de-reciclagem.png'></a>";
                        echo "</p>";
                        echo "</div></div>";
                        echo "</tr>";
                    }
                } else {
                    echo "Nenhuma tarefa atribuida";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js" defer></script>
    <!-- <link rel="stylesheet" href="./css/style-principal.css"> -->
    <link rel="stylesheet" href="novo-tarefa.css">
    <link href="https://fonts.googleapis.com/icon #?family=Material+Icons" rel="stylesheet">
    <title>Nova tarefa</title>
</head>

<body>
    <header>
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
                <?php
                    echo '<p class="nome-teste">'.$_SESSION['nome'].'</p>';
                    ?>
            </div>
            <div class="topicos">
                <div>
                    <a href="../login-kaiban/tela-principal.php">
                        <p>Bloco de notas</p>
                    </a>
                
                    <a href="kaibancalendario/calendario.php">
                        <p>Calendário</p>
                    </a>
</div>
            </div>
        </div>
        <div class="display">
            <div class="kanban-heading">
                <strong class="kanban-heading-text"></strong>
            </div>
        </div>
        <h1>Adicionar nova tarefa</h1>
        <form class="formulario-novo " action="./crud/tarefa.php" method="POST">
            <div class="adicionar">
                <div id="display">
                    <input type="text" id="umtitulo" name="titulo" placeholder="Adicione o titulo de sua tarefa">
                </div>
                <div id="display">
                    <input type="text" id="titulo" name="assunto" placeholder="Descreva sua tarefa">
                </div>
                <input type="date" id="umtitulo" name="inicio">
                <input type="date" id="umtitulo" name="fim"> <br>

            
        <select name="tarefa_cor" id="titulo" required placehpolder="urgencia da tarefa">
            <option value="blue" selected>Azul-Baixa</option>
            <option value="green" selected>Verde-Razóavel</option>
            <option value="purple" selected>Roxo-Média</option>
            <option value="pink" selected>Rosa-Alta</option>
        </select>
                    <input type="submit" id="botao" name="Salvar">
            </div>
        </form>
    </div>
    </div>
</body>

</html>
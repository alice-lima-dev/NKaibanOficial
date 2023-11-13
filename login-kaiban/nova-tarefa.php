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
                <?php
                    echo '<p class="nome-teste">'.$_SESSION['nome'].'</p>';
                    ?>
            </div>
            <div id="div-busca">
                <input type="text" id="txtBusca" name="procurar" placeholder="Pesquisar.." />
                <img src="imagens/lupa.png" id="btnBusca" alt="Buscar" />
            </div>

            <div class="topicos">
                <div>
                    <a href="../login-kaiban/tela-principal.php">
                        <p>Bloco de notas</p>
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
                    <input type="text" id="titulo" name="assunto" placeholder="Escreva sua tarefa">
                </div>
                <!-- <div class="comum-todos">
                    <select name="tarefa_cor" id="vocacao" required>
                        <option value="setor">Selecione uma cor</option>
                        <option value="verde">Verde</option>
                        <option value="amarelo">Amarelo</option>
                        <option value="rosa">Rosa</option>
                        <option value="azul">Azul</option>
                    </select>
                </div> -->
                <input type="submit" id="botao" name="Salvar">
            </div>
        </form>
    </div>
    </div>
</body>

</html>
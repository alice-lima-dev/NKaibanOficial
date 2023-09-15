<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js" defer></script>
    <link rel="stylesheet" href="css/style-principal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <p id="nome">Nome do usuário</p>
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
            <strong class="fazer">Adicionar nova tarefa</strong>
            <div class="task-button-block">
                <button id="task-button">Adicionar nova nota</button>
            </div>
            <div class="task" id="task1">
                <span>Titulo da tarefa: Nessa parte nossos clientes poderam adicionar suas tarefas, conforme a
                    escolha.</span>
                <div class="info">
                    <p id="margin">Data: 11/09/2023</p>
                    <p id="margin">10:02</p>
                </div>
            </div>
            <div class="task" id="task2">
                <span>Task 2</span>
            </div>
            <div class="task" id="task3">
                <span>Task 3</span>
            </div>
            <div class="task" id="task4">
                <span>Task 4</span>
            </div>
            <div class="task" id="task5">
                <span>Task 5</span>
            </div>
            <div class="task" id="task6">
                <span>Task 6</span>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js" defer></script>
    <link rel="stylesheet" href="./css/style-principal.css">
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
        <form class="formulario-novo " method="POST">
            <div class="adicionar">
                <input type="text" id="titulo" name="titulo" placeholder="Adicione o titulo de sua tarefa">
                <input type="text" id="titulo" name="conteudo" placeholder="Escreva sua tarefa">
                <div class="comum-todos">
                <select name="escolha" id="vocacao" required>
                    <option value="setor">Selecione um setor </option>
                    <option value="biblioteca">Biblioteca</option>
                    <option value="secretaria">Secretaria</option>
                    <option value="diretoria">Diretoria</option>
                    <option value="professor">Professores</option>
                </select>
            </div>
                <input type="submit" name="enviar">
            </div>
        </form>
    </div>
    </div>
</body>

</html>
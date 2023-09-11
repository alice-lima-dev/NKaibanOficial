<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="kaiban.jpg" type="image/png">
    <link rel="stylesheet" href="./css/style-principal.css">
    <title>Tela principal</title>
</head>

<body>
    <nav>
        <img class="logo-kaiban-principal" src="imagens/kaiban.jpg">
    </nav>
    <div class="container">
    
        <div class="barra-lateral">
            <div id="usuario">
                <img id="img-cadastro" src="imagens/user-interface.png">
                <p id="nome">Nome do usuario</p>
            </div>
            <div id="div-busca">
                <input type="text" id="txtBusca" name="procurar" placeholder="Pesquisar.." />
                <img src="imagens/lupa.png" id="btnBusca" alt="Buscar" />
            </div>
            <div id="div-novo">
                <h2 id="novo">Novo</h2>
                <img id="img-novo" src="imagens/mais.png">
            </div>
            <div class="topicos">
                <div>
                    <a href="#">
                        <p>Início</p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>Tarefa</p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>Calendarío</p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>Lixeira</p>
                    </a>
                </div>

                <div>
                    <a href="#">
                        <p>Cadernos</p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>Compartilhados</p>
                    </a>
                </div>
            </div>
        </div>
    <div class="display">
        <div class="banner">
            <img id="banner-secretaria" src="imagens/banner-secretaria.png">
        </div>
        <div class="bloco">
            <div class="position">
                <p id="notas">Notas</p>
                <h5 id="notas-recente">Recentes</h5>
            </div>
        </div>
    </div>
</div>
</body>

</html>
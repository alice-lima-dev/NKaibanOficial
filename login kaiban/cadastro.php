<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="kaiban.jpg" type="image/png">
    <link rel="stylesheet" href="style.css">
    <script src="js.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https: //fonts.googleapis.com/css2?family= Dancing + Script:wght@400;700 & family= Montserrat & family= Space+Mono & display=swap"
        rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <div class="Display">
        <div class="icone-cadastro">
            <img class="image" src="Login-rafiki.png">
        </div>
    <div class="form-cadastro">
        <form class="form">
            <h2 id="cadastro-titulo">CADASTRE-SE</h2>
            <label>Usuário:</label>
            <div class="input-nome">
                <input type="text" id="usuario" placeholder="Nome" required>
            </div>
            <div id="input-nome">
                <label id="classes">Setores:</label>
            </div>
            <div class="comum-todos">
                <select name="Sorcerer" id="vocacao" required>
                    <option value="placeholder">Selecione um setor </option>
                    <option value="biblioteca">Biblioteca</option>
                    <option value="secretaria">Secretaria</option>
                    <option value="Diretoria">Diretoria</option>]
                    <option value="professores">Professores</option>
                    </optgroup>
                </select>
            </div>
            <div id="input-nome">
                <label id="">Email:</label>
            </div>
            <div id="email2">
                <input id="email-cadastro" type="email" name="email" placeholder="Email" required>
            </div>
            <div id="input-nome">
                <label id="">Senha:</label>
            </div>
            <div id="senha">
                <input id="senha-cadastro" type="text" name="senha" placeholder="Senha" required>
            </div>
            <button class="botao-cadastro" onclick="Validar()">Entrar</button>
            <div id="redefinir">
                <a href="redefinir.html" class="redefinir-senha">Redefinir Senha?</a>
            </div>
        </form>
    </div>
</div>
</body>

</html>
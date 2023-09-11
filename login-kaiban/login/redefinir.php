<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="kaiban.jpg" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/redefinir.css">
    <script src="js.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https: //fonts.googleapis.com/css2?family= Dancing + Script:wght@400;700 & family= Montserrat & family= Space+Mono & display=swap"
        rel="stylesheet">
    <title>Redefinir Senha</title>
</head>

<body>
    <div class="Display">
          <img class="image" src="../imagens/redefinir.png">
        <div class="form-cadastro">
            <h2 id="cadastro-titulo">Redefinir Senha</h2>
            <div id="input-nome">
                <label id="">Email:</label>
            </div>
            <div id="email2">
                <input id="email-cadastro" type="email" name="email" placeholder="Email" required>
            </div>
            <div id="input-nome">
                <label id="#">Nova senha:</label>
            </div>
            <div id="senha">
                <input id="senha-cadastro" type="text" name="senha" placeholder="Senha" required>
            </div>
            <div id="input-nome">
                <label id="#">Reescreva a senha:</label>
            </div>
            <div id="senha">
                <input id="senha-cadastro" type="text" name="senha" placeholder="Senha" required>
            </div>
            <button class="botao-cadastro" onclick="Validar()">Entrar</button>
            <div id="redefinir">
                <a href="/loginkaiban/index.php" class="redefinir-senha">Voltar ao Login</a>
            </div>
        </div>
    </div>
</body>

</html>
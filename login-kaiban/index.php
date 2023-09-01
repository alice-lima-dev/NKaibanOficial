<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Kaiban</title>
    <link rel="icon" href="kaiban.jpg" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https: //fonts.googleapis.com/css2?family= Dancing + Script:wght@400;700 & family= Montserrat & family= Space+Mono & display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="page">
        <div class="teste">
            <div class="texto-descritivo">
                <img id="logo-corpo" src="imagens/kaiban.jpg">
                <h5>É a melhor forma de se organizar, realizar tarefas diarias, livros que foram e que serão lidos e emprestados,
                    bilhetes a ser entregue e tudo que você precida para ter uma vida mais organizada. </h5>
            </div>
            <form action="login/validar_login.php" method="POST" class="formLogin">
                <h3>KAIBAN</h3>

                <label for="Usuário">Email</label>
                <input type="Nome" placeholder="Email" autofocus="true" id="email" name="email" />
                <label for="password">Senha</label>
                <input type="password" placeholder="Digite sua Senha" id="senha" name="senha" />
                <!-- <button type="reset" id="botao" onclick="login()">Entrar</button> -->
                <input type="submit" value="logar">
                <a href="crud/cadastro.php"><h4 id="conta">Não tem conta ?</h4></a> 
                <a href="login/redefinir.php"><h4 id="conta2">Redefinir Senha</h4></a> 
            </form>
        </div>
    </div>
</body>
</html>
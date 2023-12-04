<?php

$conn = new mysqli("localhost", "root", "", "db_kaiban");
if ($conn->connect_error) {
    die("Erro de conexão" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST['nome'];
    $setores = $_POST['escolha'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
    $hashed_password = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    // echo "$senha_cripto";
    // var_dump($hashed_password);
    $sql = "INSERT INTO funcionario (funcionario_nome, funcionario_email, funcionario_setores, funcionario_senha) VALUES (?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    $stmt->bind_param("ssss", $nome, $email, $setores, $hashed_password);
    $stmt->execute();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="kaiban.jpg" type="image/png">
    <link rel="stylesheet" type="text/css" href="../crud/cadastro.css">
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
        <img class="image" src="../imagens/login-rafiki.png">
        </div>
    <div class="form-cadastro">
        <form class="form" method="POST">
            <h2 id="cadastro-titulo">CADASTRE-SE</h2>
            <label>Usuário:</label>
            <div class="input-nome">
                <input name="nome" type="text" id="usuario" placeholder="Nome" required>
            </div>
            <div id="input-nome">
                <label id="classes">Setores:</label>
            </div>
            <div class="comum-todos">
                <select name="escolha" id="vocacao" required>
                    <option value="setor">Selecione um setor </option>
                    <option value="biblioteca">Biblioteca</option>
                    <option value="secretaria">Secretaria</option>
                    <option value="diretoria">Diretoria</option>
                    <option value="professor">Professores</option>
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
                <input id="senha-cadastro" type="password" name="senha" placeholder="Senha" required>
            </div>
            <input type="submit" name="botao" id="botao-cadastro">
            <div id="redefinir">
                <a href="../login/redefinir.php" class="redefinir-senha">Redefinir Senha?</a>
            </div>
            <div id="redefinir">
                <a href="../index.php" class="redefinir-senha">Voltar ao login</a>
            </div>
        </form>
    </div>
</div>
</body>

</html>
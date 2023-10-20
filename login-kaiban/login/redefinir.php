<?php
include '../crud/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // consultar se o animal existe;

    $sql = "SELECT * FROM funcionario WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $funcionario = $resultado->fetch_assoc();
    } else {
        die("funcionario não encontrado.");
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $senha = $_POST["senha"];
    $id = $_POST['id'];
    $email = $_POST["email"];

    $sqlconsulta = "SELECT * FROM funcionario WHERE funcionario_email = ?";
    $stmtconsulta = $conn->prepare($sqlconsulta);
    $stmtconsulta->bind_param("s", $email);
    $stmtconsulta->execute();
    $resultado_consulta = $stmtconsulta->get_result();
    $res = $resultado_consulta->fetch_assoc();

    // atualizando o pacinte
    // $sql = "UPDATE funcionario SET funcionario_senha = '$senha' WHERE funcionario_id = '$id' ";
    $sql = "UPDATE funcionario SET funcionario_senha = ? WHERE funcionario_email = '$res[funcionario_email]'";
    $stmt_update = $conn->prepare($sql);
    $stmt_update->bind_param("i", $senha, ); // "si" significa que você está vinculando uma string (senha) e um inteiro (id)
    $stmt_update->execute();
    // if ($stmt->execute()) {
    //     header("location: ../index.php");
    // }
}
$conn->close();
?>
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
    <form action="" method="POST">
        <div class="Display">
            <img class="image" src="../imagens/redefinir.png">
            <div class="form-cadastro">
                <h2 id="cadastro-titulo">Redefinir Senha</h2>
                <div id="input-nome">
                    <label id="">Email:</label>
                </div>
                <div id="email2">
                    <input type="hidden" name="id" valeu="<?php echo $funcionario['id']; ?>">
                    <input id="email-cadastro" type="email" name="email" placeholder="Email" required>
                </div>
                <div id="input-nome">
                    <label id="#">Nova senha:</label>
                </div>
                <div id="senha">
                    <input id="senha-cadastro" type="text" name="senha" placeholder="Senha" required>
                </div>
                <input type="submit" name="button" id="button" placeholder="entrar">

                <div id="redefinir">
                    <a href="../index.php" class="redefinir-senha">Voltar ao Login</a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
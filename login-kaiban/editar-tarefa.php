<?php
include("./crud/conexao.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tarefa_blocodenotas WHERE tarefa_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();


    if ($resultado->num_rows == 1) {
        $tarefa = $resultado->fetch_assoc();

        $tarefa_titulo = $tarefa['tarefa_titulo'];
        $assunto_tarefa = $tarefa['tarefa_assunto'];
    } else {
        die("Tarefa não encontrada");
    }

} else {
    die("ID da tarefa não especificada");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $assunto = $_POST['assunto'];


    $sql = "UPDATE tarefa_blocodenotas SET tarefa_titulo = '$titulo', tarefa_assunto = '$assunto' WHERE tarefa_id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "atualizado com sucesso!";
        header("Location: tela-principal.php");
    } else {
        echo "Erro ao atualizar o paciente: " . $conn->error;
    }
} else {
    echo "O formulário não foi enviado.";
}

$conn->close();
?>

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
            </div>
        </div>
        <div class="display">
            <div class="kanban-heading">
                <strong class="kanban-heading-text"></strong>
            </div>
        </div>
        <h1>Adicionar nova tarefa</h1>
        <form class="formulario-novo " method="POST">
            <div class="adicionar">
            <input type="hidden" id="umtitulo" name="id" value="<?php echo $id; ?>">
                <div id="display">
                    <input type="text" id="umtitulo" name="titulo" value="<?php echo $tarefa_titulo; ?>" placeholder="Adicione o titulo de sua tarefa">
                </div>
                <div id="display">
                    <input type="text" id="titulo" name="assunto"
                        value="<?php echo $assunto_tarefa; ?>" placeholder= "Escreva sua tarefa">
                </div>
                <a href="tela-principal.php">
                <input type="submit" id="botao" name="Salvar" ></a>
                
            </div>
        </form>
</body>
</div>
</div>
</body>

</html>
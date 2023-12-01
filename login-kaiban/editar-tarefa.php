<?php
session_start();
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

        $tarefa_titulo = $tarefa['title'];
        $assunto_tarefa = $tarefa['description'];
        $tarefa_inicio = $tarefa['start'];
        $tarefa_fim = $tarefa['end'];
        $tarefa_cor = $tarefa['color'];
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
    $tarefa_cor = $_POST['tarefa_cor'];
    $tarefa_inicio = $_POST['inicio'];
    $tarefa_fim = $_POST['fim'];


    $sql = "UPDATE tarefa_blocodenotas SET title = '$titulo', description = '$assunto', color = '$tarefa_cor', start = '$tarefa_inicio', end = '$tarefa_fim' WHERE tarefa_id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "atualizado com sucesso!";
        header("Location: tela-principal.php");
    } else {
        echo "Erro ao atualizar o paciente: " . $conn->error;
    }
} else {
}

$conn->close();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js" defer></script>
    <link rel="stylesheet" href="novo-tarefa.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Editar tarefa</title>
</head>

<body>
    <header>
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
        <h1>Editar tarefa</h1>
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
                <input type="date" id="umtitulo" name="inicio" value="<?php echo $tarefa_inicio; ?>">
                <input type="date" id="umtitulo" name="fim" value="<?php echo $tarefa_fim; ?>" > <br>

            
        <select name="tarefa_cor" id="titulo" required placehpolder="urgencia da tarefa">
            <option value="blue" selected>Azul-Baixa</option>
            <option value="green" selected>Verde-Razóavel</option>
            <option value="purple" selected>Roxo-Média</option>
            <option value="pink" selected>Rosa-Alta</option>
        </select>
                <a href="kaibancalendario/calendario.php">
                <input type="submit" id="botao" name="Salvar" ></a>
                
            </div>
        </form>
</body>
</div>
</div>
</body>

</html>
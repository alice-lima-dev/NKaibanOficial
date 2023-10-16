<?php
session_start();
include '../crud/conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $login = $_POST['email'];
  $senha = $_POST['senha'];

  $sql_consulta = "SELECT * FROM funcionario WHERE funcionario_email = '$login' AND funcionario_senha = '$senha'";
  $res = $conn->query($sql_consulta);

  if ($res->num_rows == 1) {
    $funcionario = $res->fetch_assoc();
    //especificar dentro da SESSAO o setor de quem logou
    $_SESSION['setor_logado'] = $funcionario['funcionario_setores'];

    $_SESSION['funcionario_id'] = $funcionario['funcionario_id'];
    //  echo $_SESSION['funcionario_id'];
    header('Location: ../tela-principal.php');
    // echo "logado";
  } else {
    // setcookie("login", $login);
    header("Location:index.php");
    echo "erro ou logar";
  }
}
?>
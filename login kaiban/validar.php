<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $emailCorreto= "";
    $senhaCorreta= "";

    if($nome === $emailCorreto && $senha === $senhaCorreta){

        session_start();
        $_SESSION["usuario-logado"] = $nome;
        header("Location:bem_vindo.php");

    } else{
        echo 'Erro No Login';
    }
}
?>
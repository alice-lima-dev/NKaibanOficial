<?php 
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $emailCorreto= "alunosenai";
    $senhaCorreta = "4321";

    if($email === $emailCorreto && $senha === $senhaCorreta ){
      $_SESSION["usuario_logado"] = true;
      header("Location: ./../tela-principal.php");
    } else{
        echo 'login errado';
    }   
 }

?>
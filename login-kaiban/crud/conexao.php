<?php
$conn = new mysqli("localhost", "root", "", "bd_kaiban");
if ($conn->connect_error) {
    die("Erro de conexão" . $conn->connect_error);
}
?>
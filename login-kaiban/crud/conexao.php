<?php
$conn = new mysqli("localhost", "root", "", "db_kaiban");
if ($conn->connect_error) {
    die("Erro de conexão" . $conn->connect_error);
}
?>
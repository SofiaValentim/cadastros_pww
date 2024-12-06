<?php
$server = "localhost";
$user = "root";
$senha = "root";
$nome = "bd_loja";

$conexao = new mysqli($server, $user, $senha, $nome);

if ($conexao->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


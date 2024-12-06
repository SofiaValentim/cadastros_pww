<?php
require 'conexao.php';

$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$conexao->query(
    "INSERT INTO tb_categoria (nome, descricao) VALUES ('$categoria', '$descricao')");

header('Location: ../home.html');
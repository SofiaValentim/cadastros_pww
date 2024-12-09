<?php
require 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$conexao->query(
    "INSERT INTO tb_cliente (nm_cliente, nr_cpf, nm_email, nr_telefone, nm_endereco) 
    VALUES ('$nome', '$cpf', '$email', '$telefone', '$endereco')"
);

header('Location: ../home.php');

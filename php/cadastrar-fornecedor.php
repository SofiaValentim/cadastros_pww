<?php
require 'conexao.php';

$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$conexao->query(
    "INSERT INTO tb_fornecedor (nm_fornecedor, nr_cnpj, nm_email, nr_telefone, nm_endereco) 
    VALUES ('$nome', '$cnpj', '$email', '$telefone', '$endereco')"
);

header('Location: ../home.php');

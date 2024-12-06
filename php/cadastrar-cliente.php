<?php
require 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cpf = preg_replace("/[^0-9]*/", "", $cpf);
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$telefone = preg_replace("/[^0-9]*/", "", $telefone);
$endereco = $_POST['endereco'];

$conexao->query(
    "INSERT INTO tb_cliente (nm_cliente, nr_cpf, nm_email, nr_telefone, nm_endereco) 
    VALUES ('$nome', '$cpf', '$email', '$telefone', '$endereco')");

header('Location: ../home.html');
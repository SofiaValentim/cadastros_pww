<?php
// TODO: Transformar em insert na tabela lançamento
require 'conexao.php';

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$telefone = preg_replace("/[^0-9]*/", "", $telefone);
$salario = $_POST['salario'];
$senha = $_POST['senha'];

$conexao->query(
    "INSERT INTO tb_funcionario (nm_funcionario, nm_cargo, email, nr_telefone, nr_salario, nm_senha, dt_admissao) VALUES ('$nome', '$cargo', '$email', '$telefone', $salario, $senha, CURDATE())");

header('Location: ../home.html');
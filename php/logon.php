<?php
require './conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $conexao->query("SELECT * FROM tb_funcionario WHERE email = '$email'");
$resultado = $query->fetch_assoc();

if ($email === $resultado['email'] && $senha === $resultado['nm_senha']) {
    session_start();
    $_SESSION['funcionario'] = $resultado['email'];
    header('Location: ../home.php');
} else {
    echo "<script>alert('Usuário ou senha inválida!'); history.back() </script>";
}

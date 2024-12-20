<?php
session_start();
if (!isset($_SESSION['funcionario'])) {
  echo "<script>alert('Você não está logado!'); history.back() </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu Lateral</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #e6f7ff;
      color: #333;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    /* navbar */
    header {
      width: 100%;
      height: 60px;
      background-color: #497baa;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 0 20px;
    }

    header h1 {
      font-size: 20px;
    }

    .profile-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      position: relative;
    }

    .profile-menu {
      position: absolute;
      top: 60px;
      right: 20px;
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      overflow: hidden;
      display: none;
      flex-direction: column;
      z-index: 20;
    }

    .profile-menu a {
      text-decoration: none;
      color: #333;
      padding: 10px 15px;
      display: block;
      transition: background-color 0.3s ease;
    }

    .profile-menu a:hover {
      background-color: #497baa;
      color: #fff;
    }

    /* Sidebar e conteudo */
    .container {
      display: flex;
      flex: 1;
    }

    .sidebar {
      width: 250px;
      background-color: #ffffff;
      box-shadow: 2px 0 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      overflow-y: auto;
    }

    .sidebar img.logo {
      width: 100px;
      /* Tamanho reduzido */
      margin-bottom: 20px;
      display: block;
    }

    .sidebar a {
      width: 100%;
      text-decoration: none;
      color: #333;
      padding: 10px 15px;
      margin: 5px 0;
      border-radius: 5px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .sidebar a:hover {
      background-color: #497baa;
      color: #fff;
    }

    .sidebar .submenu {
      margin-left: 15px;
      display: none;
      flex-direction: column;
    }

    .sidebar a.toggle::after {
      content: "▼";
      float: right;
    }

    .sidebar a.toggle.active::after {
      content: "▲";
    }

    .sidebar a.toggle.active+.submenu {
      display: flex;
    }

    .content {
      padding: 20px;
      flex: 1;
    }
  </style>
</head>

<body>
  <header>
    <h1>Scarletmoom</h1>
    <img
      src="perfil_usuario.png"
      alt="Perfil"
      class="profile-icon"
      id="profileIcon" />
    <div class="profile-menu" id="profileMenu">
      <a href="perfil.html">Meu Perfil</a>
      <a href="ajuda.html">Ajuda</a>
      <a href="php/logout.php">Sair</a>
    </div>
  </header>
  <div class="container">
    <div class="sidebar">
      <img src="Logosemfundo.png" alt="Logotipo" class="logo" />
      <a href="#">Tela de Início</a>
      <a href="#" class="toggle">Cadastros</a>
      <div class="submenu">
        <a href="cadastro-de-funcionarios.php">Funcionarios</a>
        <a href="cadastro-de-cliente.php">Clientes</a>
        <a href="cadastro-de-fornecedor.php">Fornecedores</a>
        <a href="cadastro-de-categorias.php">Categorias</a>
        <a href="cadastro-de-lancamento.php">Lançamentos</a>
      </div>
    </div>
    <div class="content">
      <h2>Bem-vindo à tela inicial</h2>
    </div>
  </div>
  <script>
    // Ativa o toggle dos submenus
    const toggles = document.querySelectorAll(".toggle");
    toggles.forEach((toggle) => {
      toggle.addEventListener("click", function() {
        this.classList.toggle("active");
      });
    });

    // Ativa o menu do perfil
    const profileIcon = document.getElementById("profileIcon");
    const profileMenu = document.getElementById("profileMenu");

    profileIcon.addEventListener("click", function() {
      profileMenu.style.display =
        profileMenu.style.display === "flex" ? "none" : "flex";
    });

    // Fecha o menu de perfil ao clicar fora dele
    document.addEventListener("click", function(event) {
      if (
        !profileIcon.contains(event.target) &&
        !profileMenu.contains(event.target)
      ) {
        profileMenu.style.display = "none";
      }
    });
  </script>
</body>

</html>
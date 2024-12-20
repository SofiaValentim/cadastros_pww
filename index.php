<?php
session_start();
if (isset($_SESSION['funcionario'])) {
  header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #e6f7ff, #b3d9ff);
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        min-height: 100vh;
        margin: 0;
      }

      header,
      footer {
        width: 100%;
        height: 40px;
        background-color: #497baa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .logo {
        width: 150px;
        margin: 20px auto 5px; /* Reduzi o espaço inferior */
      }

      h1 {
        margin: 0; /* Remove margens padrão */
        font-size: 24px;
        color: #497baa;
      }

      .container {
        max-width: 500px;
        width: 90%;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        animation: fadeIn 0.8s ease-in-out;
        text-align: center;
        margin: auto;
      }

      h2 {
        margin-bottom: 20px;
        font-size: 24px;
      }

      .field {
        position: relative;
        margin-bottom: 20px;
      }

      .field i {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #004080;
      }

      .field input,
      .field select {
        width: 100%;
        padding: 10px 10px 10px 35px;
        border: 1px solid #004080;
        border-radius: 5px;
        box-sizing: border-box;
      }

      button {
        margin-top: 10px;
        width: 100%;
        padding: 15px;
        background-color: #497baa;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-transform: uppercase;
        font-size: 16px;
        transition: transform 0.2s, background-color 0.3s;
      }

      button:hover {
        background-color: #035aa6;
        transform: scale(1.05);
      }

      a {
        display: block;
        margin-top: 10px;
        color: #035aa6;
        text-decoration: none;
        transition: color 0.3s;
      }

      a:hover {
        color: #023e8a;
      }

      /* Toggle Password Visibility */
      .toggle-password {
        position: absolute;
        right: 10px; /* Mantém o ícone no canto direito */
        top: 50%;
        transform: translateY(-50%);
        left: unset !important;
        cursor: pointer;
        color: #004080;
      }

      /* Animations */
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Responsiveness */
      @media (max-width: 768px) {
        .container {
          width: 95%;
        }

        .logo {
          width: 120px;
        }
      }
    </style>
  </head>
  <body>
    <header></header>

    <img src="Logosemfundo.png" class="logo" alt="Logotipo" />
    <h1>Scarletmoom</h1>

    <div class="container">
      <h2>Login</h2>
      <form id="formLogin" method="post" action="php/logon.php">
        <div class="field">
          <i class="fas fa-envelope"></i>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="E-mail"
            required
          />
        </div>
        <div class="field">
          <i class="fas fa-lock"></i>
          <i
            class="fas fa-eye toggle-password"
            onclick="togglePasswordVisibility()"
          ></i>
          <input
            type="password"
            id="senha"
            name="senha"
            placeholder="Senha"
            required
          />
        </div>
        <button type="submit">Entrar</button>
      </form>
    </div>

    <footer></footer>

    <script>
      function togglePasswordVisibility() {
        const passwordField = document.getElementById("senha");
        const toggleIcon = document.querySelector(".toggle-password");

        if (passwordField.type === "password") {
          passwordField.type = "text";
          toggleIcon.classList.replace("fa-eye", "fa-eye-slash");
        } else {
          passwordField.type = "password";
          toggleIcon.classList.replace("fa-eye-slash", "fa-eye");
        }
      }
    </script>
  </body>
</html>

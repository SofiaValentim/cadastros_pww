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
  <title>Cadastro de Funcionarios</title>
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
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    header {
      width: 100%;
      height: 60px;
      background-color: #497baa;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 0;
      left: 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 10;
    }

    header h1 {
      font-size: 20px;
    }

    .form-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
      margin-top: 80px;
    }

    .form-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: #497baa;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #497baa;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-group button:hover {
      background-color: #35608b;
    }
  </style>
</head>

<body>
  <header>
    <h1>Cadastro de Funcionarios</h1>
  </header>
  <div class="form-container">
    <h2>Preencha as informações do lançamento</h2>
    <form action="php/cadastrar-lancamento.php" method="post">
      <div class="form-group">
        <label for="valor">Valor</label>
        <input
          type="number"
          id="valor"
          name="valor"
          placeholder="Digite o valor"
          required />
      </div>
      <div class="form-group" style="display: flex">
        <label for="tipo">Lucro?</label>
        <input
          type="checkbox"
          id="tipo"
          name="tipo"
          placeholder="Digite o tipo"
          required
          style="width: auto; margin-left: 0.5rem" />
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea
          name="descricao"
          id="descricao"
          cols="30"
          rows="10"
          placeholder="Descrição"></textarea>
      </div>
      <div class="form-group">
        <label for="categoria">Categoria</label>
        <input
          type="text"
          id="categoria"
          name="categoria"
          placeholder="Digite o categoria"
          required />
      </div>
      <div class="form-group">
        <label for="funcionario">Funcionario</label>
        <input
          type="text"
          id="funcionario"
          name="funcionario"
          value="1"
          disabled
          required />
      </div>
      <div class="form-group">
        <button type="submit">Cadastrar Lançamento</button>
      </div>
    </form>
  </div>
</body>

</html>
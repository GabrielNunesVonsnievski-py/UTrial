<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro - Utrial</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>

  <div class="container">
    <div class="left-side">
      <img src="<?php echo base_url('public/src/img/UTrial_logo_ofc_png.png'); ?>" alt="Logo Utrial">
    </div>

    <div class="right-side">
      <form class="login-form" method="post" action="<?php echo base_url('cadastro/processa'); ?>">
        <h2>Crie sua conta</h2>

        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">
        </div>

        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF">
        </div>

        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
        </div>

        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="text" id="telefone" name="telefone" required placeholder="Digite seu telefone">
        </div>

        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
        </div>

        <button type="submit" class="btn-login">Cadastrar-se</button>

        <div class="btnCadastro">
          <a href="<?php echo base_url('/login'); ?>">Já tem conta? Faça login!</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background-color: #2F343B;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      display: flex;
      width: 1000px;
      height: 600px;
      background-color: #1E2227;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
      overflow: hidden;
    }

    .left-side {
      flex: 1;
      background-color: #2F343B;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .left-side img {
      max-width: 100%;
      max-height: 400px;
    }

    .right-side {
      flex: 1;
      background-color: #262B31;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .login-form {
      width: 100%;
      max-width: 320px;
    }

    .login-form h2 {
      font-size: 26px;
      text-align: center;
      margin-bottom: 25px;
    }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      font-size: 14px;
      display: block;
      margin-bottom: 6px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: none;
      font-size: 14px;
    }

    .btn-login {
      width: 100%;
      padding: 10px;
      background: linear-gradient(90deg, #FF416C, #FF4B2B);
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .btn-login:hover {
      transform: scale(1.05);
    }

    .btnCadastro {
      margin-top: 20px;
      text-align: center;
    }

    .btnCadastro a {
      color: #ffffff;
      text-decoration: none;
      font-size: 14px;
    }

    .btnCadastro a:hover {
      color: #aaa;
    }
  </style>
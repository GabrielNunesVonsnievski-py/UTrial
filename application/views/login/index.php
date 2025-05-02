<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login - Utrial</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

    <?php if($message = $this->session->flashdata('error')): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert bg-danger alert-danger text-white alert-dismissible fade show" role="alert">
                    <strong><?php echo $message ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ik ik-x"></i>
                    </button>
                </div>
            </div>
        </div>

    <?php endif; ?>

<body>

  <div class="container">
    <div class="left-side">
      <img src="<?php echo base_url('public/src/img/UTrial_logo_ofc_png.png'); ?>" alt="Logo Utrial">
    </div>
    <div class="right-side">
      <form class="login-form" method="POST" action="<?php echo base_url('login/Auth'); ?>">
        <h1>Bem-vindo!</h1>

        <div class="form-group">
          <span>E-mail:</span>
          <input type="email" name="email" required placeholder="Digite seu e-mail" class="form-control">
        </div>

        <div class="form-group">
          <label>Senha:</label>
          <input type="password" name="password" required placeholder="Digite sua senha" class="form-control">
        </div>

        <button type="submit" class="btn-login">Entrar</button>

        <div class="btnCadastro">
          <a href="<?php echo base_url('cadastro'); ?>">Não tem conta? Cadastrar-se!</a>
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
      width: 900px;
      height: 500px;
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
      max-height: 300px;
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
      max-width: 300px;
    }

    .login-form h1 {
      font-size: 26px;
      text-align: center;
      margin-bottom: 25px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group span,
    .form-group label {
      font-size: 14px;
      display: block;
      margin-bottom: 6px;
    }

    .form-control {
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

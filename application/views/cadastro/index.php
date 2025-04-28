<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Utrial</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
</head>
<body>

<div class="container">
    <div class="left-side">
        <img src="public/src/img/UTrial_logo_ofc_png.png" class="logo" alt="">
    </div>

    <div class="right-side" style="background-color:#25292e;">
        <form class="login-form" method="post" action="processa_login.php">
            <h2>Bem-vindo!</h2>
            <div class="form-group">
                <label for="email">Nome:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu Nome">
            </div>
            <div class="form-group">
                <label for="email">CPF:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu CPF">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu E-mail">
            </div>
            <div class="form-group">
                <label for="email">Telefone:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu Telefone">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn-login">Cadastrar-se</button>
            <br>
            <br>
            <div class="btnCadastro text-center">
                <a href="<?php echo base_url('/login'); ?>" class="btnText">Tem conta? faça login!</a>
            </div> 
        </form>
    </div>
</div>

</body>
</html>

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            background-color: #2F343B;
        }

        .logo{
            width: 625px;
            height: 625px;
        }

        .btnText{
            color: white;
            
        }

        .btnCadastro :hover{
            color:rgb(129, 129, 129);
            transition: background 1.5s;

        }
            
        body, html {
            height: 100%;
            width: 100%;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .left-side {
            flex: 1;
        }
        .right-side {
            flex: 1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        .login-form {
            width: 100%;
            max-width: 300px;
            padding: 15px;
            border-radius: 20px;
        }
        .login-form h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 28px;
        }
        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn-login:hover {
            background-color: #45a049;
        }
    </style>

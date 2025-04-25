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
        <img src="<?php  ?>" alt="">
    </div>

    <div class="right-side" style="background-color: black;">
        <form class="login-form" method="post" action="processa_login.php">
            <h2>Bem-vindo!</h2>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn-login">Entrar</button>
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
            background-color: black;
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
            flex: 2;
            background-image: url('public/img/Utrial_logo_ofc-removebg-preview.png') no-repeat center center;
            background-size: cover;
        }
        .right-side {
            flex: 1;
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

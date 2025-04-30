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

    <div class="right-side" style="background-color:rgb(37, 41, 46);">
        <form class="login-form" method="post" action="processa_login.php">
            <h1 class="text-center">Bem-vindo!</h1>

            <form method="POST" action="<?php echo base_url('login/auth'); ?>">
                <div class="form-group">
                    <span for="email">E-mail:</span>
                    <input type="email" name="email" required placeholder="Digite seu e-mail" value="" class="form-control">
                    <br>
                    <label for="senha">Senha:</label>
                        <input type="password" name="password" required placeholder="Digite sua senha" value="" class="form-control"></input>
                        <br>
                    <button type="submit" class="btn-theme btn-login">Entrar</button>
                </div>
                <br>
                <br>
            <div class="btnCadastro text-center">
                <a href="<?php echo base_url('cadastro'); ?>" class="btnText">Não tem conta? Cadastrar-se!</a>
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

        .btnText{
            color: white;
        }

        .logo{
            width: 625px;
            height: 625px;
        }

        .btnCadastro{
            color: #FFFFFF;
        }

        .btnCadastro :hover{
            color:rgb(138, 138, 138);
            transition: background 0.2s;

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
            padding: 40px;
        }
        .login-form {
            width: 100%;
            max-width: 300px;
            padding: 30px;
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
            padding: 5px;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-login .hover
        {
            /* colocar o mesmo do botao saduiche da header */
        }
    </style>

<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO users(name,password) VALUES ('$nome','$senha')");
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include '../css/reset.css'; ?>
        <?php include '../css/header.css'; ?>
        <?php include '../css/style.css'; ?>
    </style>

    <title>Login</title>
</head>

<body>
    <header>
        <img src="../imgs/logo.png" alt="">
        
        <a href="">Produtos</a>
        
        <a href="">Central de ajudas</a>
        
        <div id="search_bar">
            <input type="search" placeholder="Pesquisar...">

            <button id="btn_search">
                <img src="../imgs/search_icon.png" alt="">
            </button>

        </div>

        <a href="" id="btn_register">CRIAR CONTA</a>

        <a href="./login.php" id="btn_login">FAZER LOGIN</a>

    </header>

    <main>
        <div id="main_left">
        </div>

        <div id="main_rigth">

            <form id="main_form" action="index.php" method="POST">
                <label>Usuário:</label>

                <input class="inputs" name="nome" type="text" id="reg_name" autofocus required placeholder="Nome de usuario">

                <label>Senha:</label>
                <input class="inputs" name="senha" type="text" required placeholder="Crie uma senha">

                <input type='submit' name='submit' id='submit'>
                <p2>Ou entre com a sua conta <a href="./login.php">aqui!</a></p2>
            </form>

        </div>
    </main>


    <!-- -->
</body>
</html>
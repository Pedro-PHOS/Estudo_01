<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <img src="/imgs/logo.png" alt="">
        
        <a href="">Produtos</a>
        
        <a href="">Central de ajudas</a>
        
        <div id="search_bar">
            <input type="search" placeholder="Pesquisar...">

            <button id="btn_search">
                <img src="/imgs/search_icon.png" alt="">
            </button>

        </div>

        <a href="" id="btn_register">CRIAR CONTA</a>

        <a href="/login.html" id="btn_login">FAZER LOGIN</a>

    </header>

    <main>
        <div id="main_left">
        </div>

        <div id="main_rigth">

            <div id="main_form">
                <label>Usuário:</label>
                <input type="text" id="reg_name" autofocus required pattern="[A-Za-z]{3}" placeholder="Nome de usuario">

                <label>Senha:</label>
                <input type="text" required pattern="[A-Za-z]{8}" placeholder="Crie uma senha">

                <label>Confirme sua senha:</label>
                <input type="text" required pattern="[A-Za-z]{8}" placeholder="Confirme sua senha">

                <button>CRIAR SUA CONTA</button>
                <p2>Ou entre com a sua conta <a href="/login.html">aqui!</a></p2>
            </div>

        </div>
    </main>


    <!-- -->
</body>
</html>
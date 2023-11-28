<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>layout</title>
</head>
<body>

    <div class="background">
        <header>
            <div class="logo">
                <i class="fa-regular fa-e"></i>
            </div><!--logo-->

            <div class="cabeçalho-link">
                <li>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Sobre</a>
                </li>

                <li>
                    <a href="#">Serviços</a>
                </li>

                <li>
                    <a href="#">Forum</a>
                </li>
                <button>Suporte</button>
            </div><!--cabeçalho-link-->
        </header>

        <div class="container-text">
            <div class="text">
                <h3>Olá,</h3>
                <h1>Bem vindo de volta<span> teste</span></h1>
                <p>Clique aqui para ver as últimas postagens!</p>
                <div class="redes-social">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-dribbble"></i></a>
                    <a href="#"><i class="fa-brands fa-behance"></i></a>
                </div><!--redes-social-->
                <button class="btn">Termos de Serviço</button>
            </div><!--text-->
        </div><!--container-text-->
    </div><!--background-->



    <script type="script.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

</body>
</html>
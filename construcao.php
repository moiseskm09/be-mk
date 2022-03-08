<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <title>beMK</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
            body{
                font-family: 'Open Sans', sans-serif;
                background-image: url("banner.png");
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
            }
            .menu .navbar-nav > li >a{
                background-color: #ffffff;
                color: #164259;
                font-weight: bold;
                font-size: 16px;
                z-index: 99999;
            }

            .sticky-top{
                background-color:#ffffff;
                transition: 1s;
                border-bottom: 3px solid #ecc311;
                z-index: 99999;
            }
            .navbar-nav > li >a:hover{
                color: #ecc311
            }

            .icone{
                color: #ecc311;
                font-size: 70px;
            }
            .alinhamento{
                display: flex;
                justify-content: center;
                position: absolute;
                top: 50%;
                transform: translate(0, -50%);
                margin-left: -300px;

            }
            @media only screen and (max-width: 768px){
                .alinhamento{
                display: flex;
                top: 25%;
                transform: translate(0, -25%);
                margin-left: 0px;

            }
            }
            .titulo , .texto {
                color: #164259;
            }
        </style>
    </head>
    <body>


        <nav class="navbar navbar-expand-lg menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo_beMK.png" alt="Logo beMK" width="150" height="50">
                </a>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://be-mk.com">INÍCIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SOBRE NÓS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PORTFÓLIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">CONTATO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>  

        <div class="container-fluid" >
            <div class="row">
                <div class="teste alinhamento">
                <div class="col-lg-5 col-md-5 col-12">
                    <h2><i class="uil uil-exclamation-triangle icone"></i></h2>
                    <h1 class="titulo">Em construção</h1>
                    <p class="texto">Nosso site está em construção! Estamos preparando algo incrível e emocionante para você.<br>Logo estaremos prontos para começar e ainda traremos uma surpresa especial.</p>
                </div>
                </div>
            </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();

                if (scroll > 100) {
                    $('.menu').addClass('sticky-top');
                } else {
                    $('.menu').removeClass('sticky-top');
                }
            });
        </script>
    </body>
</html>
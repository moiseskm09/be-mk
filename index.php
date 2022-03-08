<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="includes/css/bootstrap5.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="includes/css/menu.css">
        <link rel="stylesheet" href="includes/css/estilo.css">
        <title>beMK</title>

        <style>
            
        </style>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg menu fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="includes/imagens/logo_beMK.webp" alt="Logo beMK" class="logo">
                </a>
                <button class="navbar-toggler botao_menu_mobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="uil uil-list-ul icone_menu_mobile"></i>
    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#inicio">INÍCIO</a>
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
        </header>
        <section class="banner_principal" id="inicio">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-6 col-md-6 col-12">
                           <h1 class="titulo">Juntos podemos criar sites <span class="destaque">incríveis!</span></h1>   

                   </div>
               </div>
                <div class="row">
                   <div class="col-lg-5 col-md-5 col-12">
                       <p class="introducao">Pensou em criar um site? Está no lugar certo! Nós somos especialistas em desenvolvimento de sites institucionais, pessoais, lojas virtuais e sistemas gerenciáveis. Utilizamos sempre as melhores práticas exigidas pelo mercado.<br>Todos os nossos projetos são únicos e exclusivos.</p>
                       <div class="botoes_contato_principal">
                       <a class="btn btn-lg botao_link" href="#contato" role="button">QUERO COMEÇAR AGORA MESMO</a>
                       <a class="btn btn-lg botao_link" href="#sobre_nos" role="button">SOBRE-NÓS</a>
                       </div>
                    
                   </div>
               </div>
           </div>
            </section>
               
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
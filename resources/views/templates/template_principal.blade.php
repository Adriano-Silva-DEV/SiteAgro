<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href={{ asset('css/bootstrap/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

</head>

<body>
    <div class="container-fluid m-0 headColor shadow-sm  ">
        <header>


            <nav class="navbar    mb-5 bg-light8 rounded navbar-expand-lg navbar-dark  ">
                <div class="container-fluid ">
                    <a class="navbar-brand " href="#">
                        <img src="img/logosansal.png" class="logosansal" alt="SANSAL" >
                                              
                    </a>
                    <div > 
                        <span class="sansal1" >SANSAL</span> <br>
                        <span class="sansal2" > Nutrientes Animais  </span> 
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end mx-5" id="navbarNavAltMarkup">
                        <div class="navbar-nav  ">
                            <a class="nav-link  active" aria-current="page" href="#">Inicio</a>
                            <a class="nav-link " href="#quem-somos">Quem somos</a>
                            <a class="nav-link " href="#produtos">Produtos</a>
                            <a class="nav-link " href="#contato">Contato</a>
                        </div>
                    </div>
                </div>
            </nav>



        </header>
    </div>


    @yield('corpo_pagina')


    <div class="footer">
        <div class="rodape"> </div>
        <div class="container-fluid m-0 body text-center">



            <div class="row justify-center">
                <div class="col-12 col-sm-6 ">

                    <div class="row justify-center">
                      
                        <div class=" col-sm-6  card-rodape">
                            <h5>Contato:</h5>
                            TEL: (65) 3361-1414 <br>
                            Email: financeiro@sansal.com.br
                        </div>
                   
                        <div class="col-sm-6   card-rodape">
                            <h5>Contato:</h5>
                            TEL: (65) 3361-1414 <br>
                            Email: financeiro@sansal.com.br
                        </div>

                   
                    </div>

                                        
                </div>
                    <div class="col-12 col-sm-6 p-5">


                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.138282881882!2d-57.18382501555524!3d-15.035946407093691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x710db97a14b1c261!2sSansal%20Nutrientes%20Animais!5e0!3m2!1spt-BR!2sbr!4v1623358775008!5m2!1spt-BR!2sbr"
                            class="mapa shadow" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-12  ">

                    </div>
                </div>
            </div>

        </div>

        <div class=" text-center"> Sansal @ Todos os direitos reservados 2021 </div>

        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>

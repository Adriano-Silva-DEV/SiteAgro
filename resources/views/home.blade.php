@extends('templates/template_principal')


@section('title', 'Página Inicial')

@section('corpo_pagina')

    <div class="container-sm">

        <div class="row ">
            <div class="col-12">
                <div class="pag1 bg-light">
                    <div class="row ">
                        <div class="col-12 col-sm-6">
                            <img src="{{ asset('img/sansal2.png') }}" class="img1 rounded  mx-auto d-block " alt="">
                        </div>
                        <div class="col-12 col-sm-6">
                            <h1 class="text-center">SANSAL <span class="agropecuaria"> NUTRIENTES ANIMAIS </span> </h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-12 p-5  shodow shadow-sm my-4 ">

                <div class="card1">

                    <h2 id="quem-somos" class="text-light text-center titulo-card"> CONHEÇA A SANSAL NUTRIENTES ANIMAIS </h2>


                </div>

            </div>

            <div class="col-12 col-sm-12 p-5  shodow shadow-sm my-4 ">

                <div class="card1">
                    <h2 id="produtos" class="text-light text-center titulo-card"> NOSSOS PRODUTOS</h2>
                    
                
                    <div class="row " >
                    <div class="col-12 col-sm-6 m-5  text-center">
                      <img class="img-produto rounded mx-auto d-block " src="{{ asset('img/farelo-soja.jpeg') }}" alt="">
                    </div>
                    <div class="col-12 col-sm-6 m-5 p-3 text-center">
                        <h2 > DESCRIÇÃO PRODUTO  </h2>
                      </div>
                    </div>
                    

                </div>

            </div>


            <div class="col-12 p-5 shodow shadow-sm my-4 ">

                <div class="card1">
                    <h1 id="contato" class="text-light text-center titulo-card"> CONTATO </h1>
                    <span> 

                  

                </div>
            </div>

            <div class="col-12 p-5  my-3 ">

                <div class="card2"> </div>

            </div>

        </div>
    </div>

@endsection

<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Make Perfum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            img, nav {
                border-radius: 1rem;
            }

            .border-link {
                border: 2px solid white;
                border-radius: 1rem;
                width: 8rem;
                height: 3rem;
                text-align: center;
                font-weight: 700;
                margin: 0 1rem 0 0;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="">
        <nav class="navbar navbar-light bg-light justify-content-center">
        <a class="navbar-brand">
                <img src="logo.jpg" width="125" height="125" alt="">
            </a>
        </nav>
        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link border-link" href="/">Home</a> 
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link border-link" href="/relatorios">Relatórios</a> 
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link border-link" href="/make-perfum">Make Perfum</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container pt-5">
        <form action="/make-perfum" method="POST" enctype="multipart/form-data">

            <!-- Token de proteção de Sessão Laravel -->
            @csrf

                <div class="form-group">
                    <label for="nome_perfume">Nome do Perfume: </label>
                    <input type="text" name="nome_perfume" placeholder="Nome do perfume" class="form-control">
                </div>

                <div class="form-group">
                    <label for="agua">Quantidade de Água: </label>
                    <input type="text" name="agua" placeholder="Água em ml" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alcool">Quantidade de Álcool: </label>
                    <input type="text" name="alcool" placeholder="Álcool em ml" class="form-control">
                </div>

                <div class="form-group">
                    <label for="fragrancia_ml">Fragrância: </label>
                    <input type="text" name="fragrancia_ml" placeholder="Fragrância em ml" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nome_fragrancia">Nome da Fragrância: </label>
                    <input type="text" name="nome_fragrancia" placeholder="Nome da fragrância" class="form-control">
                </div>

                <button class="btn btn-primary">Salvar</button>
                <!-- <button type="submit" class="btn btn-primary">Salvar</button> -->

            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha512-mVkLPLQVfOWLRlC2ZJuyX5+0XrTlbW2cyAwyqgPkLGxhoaHNSWesYMlcUjX8X+k45YB8q90s88O7sos86636NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>

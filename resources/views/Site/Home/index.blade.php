<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToPerfum</title>

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
                width: 8.5rem;
                height: 3rem;
                text-align: center;
                font-weight: 700;
                margin: 0 1rem 0 0;
                color: red;
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
                    <li class="nav-item">
                        <a class="nav-link border-link" href="/ver-produto/{id}">Ver Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-link" href="/editar-produto/{id}">Editar Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-link" href="/delete/{id}">Deletar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container pt-5">
            <nav class="navbar navbar-light bg-light justify-content-center">
                <a class="navbar-brand">
                    <img src="card.jpg" width="250" height="250" alt="">
                </a>
            </nav><br>

            <nav class="navbar navbar-light bg-light justify-content-center">
                <a class="navbar-brand">
                    <img src="card.jpg" width="250" height="250" alt="">
                </a>
            </nav><br>

            <nav class="navbar navbar-light bg-light justify-content-center">
                <a class="navbar-brand">
                    <img src="card.jpg" width="250" height="250" alt="">
                </a>
            </nav><br>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha512-mVkLPLQVfOWLRlC2ZJuyX5+0XrTlbW2cyAwyqgPkLGxhoaHNSWesYMlcUjX8X+k45YB8q90s88O7sos86636NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            // "id" => 12,
            // "nome_perfume" => "Gran Cara de Madeira",
            // "agua" => 55,
            // "alcool" => 66,
            // "fragrancia_ml" => 77,
            // "nome_fragrancia" => "Q"

            // 100ml Perfume A: 70ml de água, 10ml de álcool e 20ml da fragrância X.
            // 100ml Perfume B: 75ml de água, 15ml de álcool e 10ml de fragrância Y. 
        </script>
    </body>
</html>

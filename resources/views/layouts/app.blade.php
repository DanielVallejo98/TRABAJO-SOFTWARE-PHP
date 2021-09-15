<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css styles -->
    @yield('css')
    <!-- Los iconos tipo Solid de Fontawesome-->
    <script src="https://kit.fontawesome.com/0a8ed659dc.js" crossorigin="anonymous"></script>
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/app.css">
    {{-- <style>
      .control_calidad {
          table-layout: fixed ;
          width: 100% ;
        }
       .control_calidad td {
          width: 25% ;
        }
        .rojo{
          color: red;
        }
      </style> --}}
    <title>@yield('title') - Laravel App</title>
  </head>
  <body style="background-color: rgb(235, 231, 231)">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(161, 194, 255)">
        <div class="container fluid">
            <i class="fas fa-file-medical-alt" style="color: rgb(21, 63, 141); padding-bottom: 7px; padding-right: 6px;"></i>
            <a class="navbar-brand" href="index.html"> <!-- Logotipo-->
                {{-- <img src="url(img/medicontrol.png)"> --}}
                <h5 class="text-dark"><b>MediControl</b></h5>
            </a>
            <button class="navbar-toggler align-content-end" 
                style="color: rgb(0, 0, 0);"
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                  @if(auth()->check())
                    <li> <p class="fs-6 mt-2 px-5">Bienvenido: <b>{{auth()->user()->name}}</b></p> </li>
                    <li class="nav-item px-1"><a class="nav-link" href={{route("login.destroy")}} style="color: rgb(236, 5, 5);">Cerrar sesión</a></li>
                  @else
                    <li class="nav-item px-1"><a class="nav-link" href={{route("login.index")}} style="color: black;">Ingresar</a></li>
                    <li class="nav-item px-1"><a class="nav-link" href={{route("register.index")}} style="color: black;">Registrarse</a></li>
                  @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-12" style="background-color: rgb(0, 60, 128); height:5px;"></div>
    </div>

    <div class="container">
      @yield('content')
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  @yield('js')
  </body>
</html>
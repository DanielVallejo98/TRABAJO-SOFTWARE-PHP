@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="row" style="margin-top: 60px">
    <div class="col-sm-6" style="background-image: url(../img/imgcarrusel2.jpeg); height: 430px; opacity: 0.9;">
        <h3 class="text-center my-5 mx-5 py-3" style=" border: 2.5px solid rgb(12, 12, 71); border-radius: 2%; box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2); -webkit-text-stroke: 0.3px rgb(185, 185, 185); color: black; ">¡Registra resultados de perfil lipídico, gestiona información de pacientes y aplica control de calidad!</h3>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5" style="display:block; margin: auto; position: relative; background-color: white; height: 440px; border: 2.5px solid rgb(12, 12, 71); border-radius: 5%; box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2);">
        <h4 class="fw-bold mt-3" style="text-align: center">Consulte resultados aquí:</h4>
        <div class="row">
        <div class="col-4"></div>
        <div class="col-5">
            <a class="btn btn-outline-primary fw-bold" href="/ingreso">Perfil Lipídico</a>
        </div>
        <div class="col-3"></div>
        </div>
        <h2 class="fw-bold mt-3" style="text-align: center">Iniciar sesión</h2>

            <div class="col-sm main-section text-center">
                <form class="col-12 py-4" method="POST" action="">
                    @csrf

                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-1">
                            <i class="fas fa-user pt-2" style="color: rgb(12, 12, 71);"></i>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group pb-3" id="user-group" >
                                <input id="email" type="email" name="email" class="form-control" placeholder="Correo de usuario" />
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-1">
                            <i class="fas fa-key pt-2" style="color: rgb(12, 12, 71);"></i>
                        </div>
                        <div class="col-sm-9">
                        <div class="form-group pb-3" id="contrasena-group">
                            <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña"/>
                        </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary" style="font-weight: bold;"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>


                    @error('message')
                        <div class="row">
                            <div class="col-1">
                            </div>
                            <div class="col-10">
                                <div class="alert alert-danger my-3" role="alert">
                                    <h6 class="alert-heading">{{$message}}</h6>
                                </div>
                            </div>
                            <div class="col-1">
                        </div>    
                    @enderror                    
                </form>
            </div>
        </div>
    </div>
</div>


    
@endsection
    
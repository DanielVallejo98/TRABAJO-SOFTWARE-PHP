@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="row" style="margin-top: 60px; margin-bottom: 60px;">

    <div class="col-sm-5" style="background-color: white; height: 540px; border: 2.5px solid rgb(12, 12, 71); border-radius: 5%; box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2);">
        <h2 class="fw-bold mt-5" style="text-align: center">¡Regístrate!</h2>
        <div class="col-sm main-section text-center">
            <form class="col-12 py-4" method="POST" action="">
                @csrf

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <i class="fas fa-user-plus pt-2" style="color: rgb(12, 12, 71);"></i>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group pb-1" id="user-group" >
                            <input id="name" type="text" name="name" class="form-control" placeholder="Nombre de usuario" />
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>

                @error('name')
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <h6 class="fw-bold py-2" style="display: block; weight: 50px; background-color: rgb(233, 182, 182); border: 2.5px solid rgb(201, 1, 1); border-radius: 2%;">{{$message}}</h6>
                        </div>
                        <div class="col-2"></div>
                    </div>
                @enderror 

                <div class="row mt-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <i class="fas fa-envelope pt-2" style="color: rgb(12, 12, 71);"></i>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group pb-1" id="user-group" >
                            <input id="email" type="email" name="email" class="form-control" placeholder="Correo de usuario" />
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>

                @error('email')
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <h6 class="fw-bold py-2" style="display: block; weight: 50px; background-color: rgb(233, 182, 182); border: 2.5px solid rgb(201, 1, 1); border-radius: 2%;">{{$message}}</h6>
                        </div>
                        <div class="col-2"></div>
                    </div>
                @enderror 
                
                <div class="row mt-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <i class="fas fa-key pt-2" style="color: rgb(12, 12, 71);"></i>
                    </div>
                    <div class="col-sm-9">
                    <div class="form-group pb-1" id="contrasena-group">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña"/>
                    </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>

                @error('password')
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <h6 class="fw-bold py-2" style="display: block; weight: 50px; background-color: rgb(233, 182, 182); border: 2.5px solid rgb(201, 1, 1); border-radius: 2%;">{{$message}}</h6>
                        </div>
                        <div class="col-2"></div>
                    </div>                
                @enderror 

                <div class="row mt-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <i class="fas fa-check-circle pt-2" style="color: rgb(12, 12, 71);"></i>
                    </div>
                    <div class="col-sm-9">
                    <div class="form-group pb-3" id="contrasena-group">
                        <input id="confirm-password" type="password" name="confirm-password" class="form-control" placeholder="Confirmar contraseña"/>
                    </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>

                <button type="submit" class="btn btn-outline-primary" style="font-weight: bold;"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                
            </form>
        </div>
    </div>
    
    <div class="col-sm-1"></div>

    <div class="col-sm-6 mt-5" style="background-image: url(../img/bact.jpg); height: 420px; opacity: 0.9;">
        <h3 class="text-center my-5 mx-5 py-3" style=" border: 2.5px solid rgb(12, 12, 71); border-radius: 2%; box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.2); -webkit-text-stroke: 0.3px rgb(185, 185, 185); color: black; ">¡Regístrate para observar los resultados de tu prueba!</h3>
    </div>
    
</div>
    
@endsection
    
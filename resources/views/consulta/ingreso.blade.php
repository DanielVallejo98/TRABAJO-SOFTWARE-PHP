@extends('layouts.layout')

@section('content')
  <img src="https://www.fcv.org/co/images/blog/2020/enero/pp---ccb---blog-27-jan-2021---image-1.webp" class="img-fluid" alt="...">
  <h1 class="text-center my-5">Consulta de resultados - Examenes médicos</h1>
  <main class="form-signin">

  <div class="row">
    <div class="col"></div>
    <div class="col">
      <form action="patients/cedula" method="POST" >
      @csrf
      <h5 class="mb-3 fw-normal">Ingrese el numero de documento de identidad:</h5>

      <div class="form-group pb-3">

        <input type="text" class="form-control" placeholder="Cédula" name=documento >
        
      </div>
      
      <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">Consultar resultados</button>

      </form>
    </div>
    <div class="col"></div>
  </div>



  


@endsection
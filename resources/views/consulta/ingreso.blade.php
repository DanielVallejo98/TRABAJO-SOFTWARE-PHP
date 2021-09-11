@extends('layouts.layout')

@section('content')

<main class="form-signin">

  <form action="patients/cedula" method="POST" >
    @csrf
    <h1 class="h3 mb-3 fw-normal">Consulta los resultados de tu examen</h1>

    <div class="form-floating mb-3">

      <input type="text" class="form-control" id="floatingInput" name=documento>
      
      <label for="floatingInput" >Cédula</label>
    </div>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Consultar resultados</button>

  </form>


@endsection
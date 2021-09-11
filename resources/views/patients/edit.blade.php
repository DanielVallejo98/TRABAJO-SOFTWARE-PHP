@extends('layouts.layout')

@section('content')
    <h1>Editar información del paciente.</h1>
    <div class="boton_volver">

    <a href="/patients" class="btn btn-warning" >Volver</a>
</div>
    <form action="/patients/{{$patient->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento" value="{{$patient->documento}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$patient->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{$patient->apellido}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad" value="{{$patient->edad}}">
          </div>

          <div class="mb-3" class="dropdown">
            <label for="genero">Género:</label>

            <select name="genero" id="genero">
            @php
            $generos= array('femenino','masculino');
            
            @endphp
            @foreach($generos as $genero)
            <option value={{$genero}} {{ $patient->genero == $genero ? 'selected' : '' }} > {{ $genero}} </option>
            @endforeach

            </select>
          </div>

          <div class="mb-3" class="dropdown">
            <label for="eps">EPS:</label>

            <select name="eps" id="eps">
            @php
            $epss= array('sura','saludcop');
            @endphp
            @foreach($epss as $eps)
            <option value={{$eps}} {{ $patient->eps == $eps ? 'selected' : '' }} > {{ $eps}} </option>
            @endforeach

            </select>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Colesterol total</label>
            <input type="text" class="form-control" id="coltotal" name="coltotal"  value="{{$patient->coltotal}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">LDL</label>
            <input type="text" class="form-control" id="LDL" name="LDL"  value="{{$patient->LDL}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">HDL</label>
            <input type="text" class="form-control" id="HDL" name="HDL"  value="{{$patient->HDL}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Triglicéridos</label>
            <input type="text" class="form-control" id="trigliceridos" name="trigliceridos"  value="{{$patient->trigliceridos}}">
          </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection


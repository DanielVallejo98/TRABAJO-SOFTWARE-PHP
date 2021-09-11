@extends('layouts.layout')

@section('content')
    <h1>Formulario para la creación de pacientes.</h1>
    
    <form action="/patients" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad">
        </div>
        <div class="mb-3" class="dropdown">
          <label for="genero">Género:</label>

          <select name="genero" id="genero">
            <option value="masculino">masculino</option>
            <option value="femenino">femenino</option>

          </select>
        </div>

        <div class="mb-3" class="dropdown">
          <label for="eps">EPS:</label>

          <select name="eps" id="eps">
            <option value="sura">Sura</option>
            <option value="saludcop">Saludcop</option>

          </select>
        </div>


          <div class="mb-3">
            <label for="" class="form-label">Colesterol Total</label>
            <input type="text" class="form-control" id="coltotal" name="coltotal">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Triglicéridos</label>
            <input type="text" class="form-control" id="trigliceridos" name="trigliceridos">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">LDL</label>
            <input type="text" class="form-control" id="LDL" name="LDL">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">HDL</label>
            <input type="text" class="form-control" id="HDL" name="HDL">
          </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection


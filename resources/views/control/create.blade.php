@extends('layouts.layout')

@section('content')
    <img src="https://www.ecci.edu.co/sites/default/files/styles/imagen_banner_programa_1920x527_/public/2018-07/banner%20cursos-01.jpg?itok=SMi6Vy18" class="img-fluid" alt="...">
    <h1 class="text-center mt-5 mb-3">Control de calidad</h1>
    <h3 class="text-center mb-3">Ingresar valores de control para la calibracion</h3>
    
    <form action="/control" method="POST"> 
    @csrf
      <div class="row">
        <div class="col justify-content-center">
          <h1 class="text-center"> Nivel 1</h1>
          <label for="">Colesterol Total (mg/dL)</label>
          <input type="text" class="form-control" name="coltotal_1">
        </div>
        <div class="col">
          <h1 class="text-center">Nivel 2</h1>
          <label for="">Colesterol Total (mg/dL)</label>
          <input type="text" class="form-control" name="coltotal_2">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="">Lipoproteina de Alta Densidad [HDL] (mg/dL)</label>
          <input type="text" class="form-control" name="HDL_1">
        </div>
        <div class="col">
          <label for="">Lipoproteina de Alta Densidad [HDL] (mg/dL)</label>
          <input type="text" class="form-control" name="HDL_2">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="">Lipoproteina de Baja Densidad [LDL] (mg/dL)</label>
          <input type="text" class="form-control" name="LDL_1">
        </div>
        <div class="col">
          <label for="">Lipoproteina de Baja Densidad [LDL] (mg/dL)</label>
          <input type="text" class="form-control" name="LDL_2">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="">Trigliceridos (mg/dL)</label>
          <input type="text" class="form-control" name="trigliceridos_1">
        </div>
        <div class="col">
          <label for="">Trigliceridos (mg/dL)</label>
          <input type="text" class="form-control" name="trigliceridos_2">
        </div>
      </div>
        
        
      <a href="/" class="btn btn-secondary my-4">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection


@extends('layouts.layout')

@section('content')
  <img src="https://www.bannerhealth.com/-/media/images/project/bh/institutes/heart-institute/_heart-institute-landing/banner_heart-landing_marquee_1600x400.ashx?h=400&w=1600&hash=414EA2AB39520911554A405D6CE884CD" class="img-fluid" alt="...">
  <h1 class="text-center">Editar registro de paciente</h1>
    
  <div class="row">
  <div class="col-2"></div>
  <div class="col-8">
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
            $generos= array('Femenino','Masculino');
            
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
            $epss= array('Sura','Comfenalco', 'IPS Universitaria','Sanitas', 'Cafesalud', 'Aliansalud', 'Compensar EPS', 'Coomeva EPS', 'Coosalud', 'Cruz Blanca', 'Famisanar', 'Mutual Ser', 'Nueva EPS');
            @endphp
            @foreach($epss as $eps)
            <option value={{$eps}} {{ $patient->eps == $eps ? 'selected' : '' }} > {{ $eps}} </option>
            @endforeach

            </select>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Colesterol Total (mg/dL)</label>
            <input type="text" class="form-control" id="coltotal" name="coltotal"  value="{{$patient->coltotal}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Lipoproteina de Baja Densidad [LDL] (mg/dL)</label>
            <input type="text" class="form-control" id="LDL" name="LDL"  value="{{$patient->LDL}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Lipoproteina de Alta Densidad [HDL] (mg/dL)</label>
            <input type="text" class="form-control" id="HDL" name="HDL"  value="{{$patient->HDL}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Triglicéridos (mg/dL)</label>
            <input type="text" class="form-control" id="trigliceridos" name="trigliceridos"  value="{{$patient->trigliceridos}}">
          </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>

  </div>
  <div class="col-2"></div>
  </div>





    
@endsection


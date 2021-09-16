@extends('layouts.layout')

@section('content')
    <img src="https://bupasport.cl/bupa_sport/site/artic/20200914/imag/foto_0000000420200914191758/Indicaciones_Laboratorio_-1920x600.jpg" class="img-fluid" alt="...">
    <h1 class="text-center">Registro de nuevo paciente</h1>
    
    <div class="container">
      <div class="row mb-5">
        <div class="col-2">

        </div>
        <div class="col-8">
          
          <form action="/patients" method="POST">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label fw-bold">Documento</label>
            <input type="text" class="form-control" id="documento" name="documento">
          </div>
          <div class="mb-3">
            <label for="" class="form-label fw-bold">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="mb-3">
              <label for="" class="form-label fw-bold">Apellidos</label>
              <input type="text" class="form-control" id="apellido" name="apellido">
          </div>
          <div class="mb-3">
              <label for="" class="form-label fw-bold">Edad</label>
              <input type="text" class="form-control" id="edad" name="edad">
          </div>
          <div class="mb-3" class="dropdown">
            <label class="fw-bold" for="genero">Género:</label>

            <select name="genero" id="genero">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>

            </select>
          </div>

          <div class="mb-3" class="dropdown">
            <label class="fw-bold" for="eps">EPS:</label>

            <select name="eps" id="eps">
              <option value="Sura">Sura</option>
              <option value="Comfelanco">Comfenalco</option>
              <option value="IPS Universitaria">IPS Universitaria</option>
              <option value="Sanitas">Sanitas</option>
              <option value="Cafesalud">Cafesalud</option>
              <option value="Aliansalud">Aliansalud</option>
              <option value="Compensar EPS">Compensar EPS</option>
              <option value="Coomeva EPS">Coomeva EPS</option>
              <option value="Coosalud">Coosalud</option>
              <option value="Cruz Blanca">Cruz Blanca</option>
              <option value="Famisanar">Famisanar</option>
              <option value="Mutual Ser">Mutual Ser</option>
              <option value="Nueva EPS">Nueva EPS</option>
              <option value="Comfelanco">Comfelanco</option>
              <option value="Salud Total">Salud Total</option>
              <option value="SaludVida">SaludVida</option>
              <option value="Salud Total">Salud Total</option>
              <option value="Servicio Occidental de Salud">Servicio Occidental de Salud</option>

            </select>
            </div>

              <div class="mb-3">
                <label for="" class="form-label fw-bold">Colesterol Total (mg/dL)</label>
                <input type="text" class="form-control" id="coltotal" name="coltotal">
              </div>
              <div class="mb-3">
                <label for="" class="form-label fw-bold">Triglicéridos (mg/dL)</label>
                <input type="text" class="form-control" id="trigliceridos" name="trigliceridos">
              </div>
              <div class="mb-3">
                <label for="" class="form-label fw-bold">Lipoproteina de Baja Densidad [LDL] (mg/dL)</label>
                <input type="text" class="form-control" id="LDL" name="LDL">
              </div>
              <div class="mb-3">
                <label for="" class="form-label fw-bold">Lipoproteina de Alta Densidad [HDL] (mg/dL)</label>
                <input type="text" class="form-control" id="HDL" name="HDL">
              </div>

            <a href="/patients" class="btn btn-secondary ">Volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>

          </div>

        <div class="col-2">
        </div>
      </div>
    </div>

    

    
    
@endsection


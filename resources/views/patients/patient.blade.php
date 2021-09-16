@extends('layouts.layout')

@section('content')
<img src="https://www.bannerhealth.com/-/media/images/project/bh/institutes/heart-institute/_heart-institute-landing/banner_heart-landing_marquee_1600x400.ashx?h=400&w=1600&hash=414EA2AB39520911554A405D6CE884CD" class="img-fluid" alt="...">
<h1 class="text-center my-3">Paciente registrado</h1>
<h4>Retorno para busqueda de C.C. # {{ $patient->documento }}</h4>

<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">Código Consecutivo</th>
    <th scope="col">Documento</th>
    <th scope="col">Nombres</th>
    <th scope="col">Apellidos</th>
    <th scope="col">Genero</th>
    <th scope="col">Edad</th>
    <th scope="col">EPS</th>
    <th scope="col">Colesterol Total</th>
    <th scope="col">Triglicéridos</th>
    <th scope="col">LDL</th>
    <th scope="col">HDL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $patient->id }}</th>
      <td>{{ $patient->documento }}</td>
      <td>{{ $patient->nombre }}</td>
      <td>{{ $patient->apellido }}</td>
      <td>{{ $patient->genero }}</td>
      <td>{{ $patient->edad }}</td>
      <td>{{ $patient->eps }}</td>
      <td>{{ $patient->coltotal }}</td>
      <td>{{ $patient->trigliceridos }}</td>
      <td>{{ $patient->LDL }}</td>
      <td>{{ $patient->HDL }}</td>
    </tr>

  </tbody>
</table>

<div class="row my-4">
    <div class="col-10">
    </div>
    <div class="col-2">
        <div class="boton_volver">
        <a href="/ingreso" class="btn btn-warning" >Nueva consulta</a>
        </div>
    </div>
</div> 

@endsection
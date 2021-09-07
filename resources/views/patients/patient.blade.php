@extends('layouts.layout')

@section('content')
<div class="boton_volver">
    <h1>Paciente: {{ $patient->id }}</h1>

    <a href="/patients" class="btn btn-warning" >Volver</a>
</div>

<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">Código Consecutivo</th>
    <th scope="col">DOCUMENTO</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">APELLIDOS</th>
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

@endsection
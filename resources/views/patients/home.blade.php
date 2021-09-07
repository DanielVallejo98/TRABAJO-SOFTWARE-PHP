
@extends('layouts.layout')

@section('content')

    <h1>Bienvenidos al LIS </h1>
    <h2>Sistema de Información del Laboratorio</h2>
    <a class="btn btn-primary" href="/patients/create">Ingresar paciente</a>
    <a class="btn btn-primary" href="/patients">Ver pacientes procesados</a>
    <a class="btn btn-primary" href="#">Control de calidad</a>
    <a class="btn btn-primary" href="#">Consultar resultados</a>
    
@endsection
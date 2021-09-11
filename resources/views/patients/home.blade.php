
@extends('layouts.layout')

@section('content')

    <h1>Bienvenidos al LIS </h1>
    <h2>Sistema de Información del Laboratorio</h2>
    <a class="btn btn-primary" href="/patients/create">Ingresar paciente</a>
    <a class="btn btn-primary" href="/patients">Ver pacientes procesados</a>
    <a class="btn btn-primary" href="/control/create">Crear un control de calidad</a>
    <a class="btn btn-primary" href="/control">Revisar control de calidad</a>
    <a class="btn btn-primary" href="/ingreso">Consulte resultados paciente</a>
    
@endsection
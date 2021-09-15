
@extends('layouts.app')

@section('content')

    <h1>Bienvenidos al LIS </h1>
    <h2>Sistema de Información del Laboratorio</h2>

    <table>
    <tr>
    <td><a class="btn btn-primary" href="/patients/create">Ingresar paciente</a></td>
    <td><a class="btn btn-primary" href="/patients">Ver pacientes procesados</a></td>
    <td><a class="btn btn-primary" href="/control/create">Crear un control de calidad</a></td>
    <td><a class="btn btn-primary" href="/control">Revisar control de calidad</a></td>
    <td><a class="btn btn-primary" href="/ingreso">Consulte resultados paciente</a></td>
</tr>    
</table>
@endsection
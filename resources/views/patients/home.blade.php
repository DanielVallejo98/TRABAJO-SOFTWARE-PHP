
@extends('layouts.app')

@section('content')

    <img src="https://www.sanvicentefundacion.com/sites/default/files/articles/banner_laboratorio.jpg" class="img-fluid" alt="...">
    <h1>¡ Bienvenidos !</h1>
    <h2>Sistema de Información del Laboratorio Clinico</h2>

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
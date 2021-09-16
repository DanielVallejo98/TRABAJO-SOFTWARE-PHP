
@extends('layouts.app')

@section('content')

    <img src="https://www.sanvicentefundacion.com/sites/default/files/articles/banner_laboratorio.jpg" class="img-fluid" alt="...">
    <h1>¡ Bienvenidos !</h1>
    <h2>Sistema de Información del Laboratorio Clinico</h2>

    <table>
    <tr>
    <td><a class="btn btn-primary" style="margin-right:22px;" href="/patients/create">Registrar paciente</a></td>
    <td><a class="btn btn-primary" style="margin-right:22px;" href="/patients">Ver pacientes registrados</a></td>
    <td><a class="btn btn-primary" style="margin-right:22px;"href="/control/create">Parametros control de calidad</a></td>
    <td><a class="btn btn-primary" style="margin-right:22px;"href="/control">Gestion control de calidad</a></td>
    <td><a class="btn btn-primary" href="/ingreso">Consultar resultados</a></td>
</tr>    
</table>
@endsection
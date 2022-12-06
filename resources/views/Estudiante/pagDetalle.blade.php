@extends('pagPlantilla')

@section('titulo')
    <h1>Página de detalle</h1>
@endsection

@section('seccion')
    <h3>Detalle... </h3>

    <p> {{ $xDetAlumnos->id }} </p>
    <p> {{ $xDetAlumnos->nomEst }} </p>

@endsection
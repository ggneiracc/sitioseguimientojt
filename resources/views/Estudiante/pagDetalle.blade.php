@extends('pagPlantilla')

@section('titulo')
    <h1> Página detalle </h1>
@endsection

@section('seccion')
    <h3> Detalle estudiante </h1>
    <p> Código:              {{ $xDetAlumnos->id }} </p>
    <p> Apellidos y Nombres: {{ $xDetAlumnos->apeEst }}, {{ $xDetAlumnos->nomEst }} </p>
    <p> Fecha de nacimiento: {{ $xDetAlumnos->fnaEst }} </p>
    <p> Turno:               {{ $xDetAlumnos->turMat }} </p>
    <p> Semestre:            {{ $xDetAlumnos->semMat }} </p>
    <p> Estado de matricula: {{ $xDetAlumnos->estMat }} </p>
@endsection
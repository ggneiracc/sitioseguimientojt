@extends('pagPlantilla')

@section('titulo')
    <h1> Página detalle </h1>
@endsection

@section('seccion')
    <h3> Detalle estudiante </h1>
    <p> Id:                    {{ $xDetAlumnosSeg->id }} </p>
    <p> Código de alumno:      {{ $xDetAlumnosSeg->idEst }} </p>
    <p> Trabajo:               {{ $xDetAlumnosSeg->traAct }} </p>
    <p> Oficio actual:         {{ $xDetAlumnosSeg->ofiAct }} </p>
    <p> Satisfacción:          {{ $xDetAlumnosSeg->satEst }} </p>
    <p> Fecha encuesta:        {{ $xDetAlumnosSeg->fecSeg }} </p>
    <p> Estado de seguimiento: {{ $xDetAlumnosSeg->estSeg }} </p>
@endsection
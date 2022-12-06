@extends('pagPlantilla')

@section('titulo')
    <h1>Página de lista</h1>
@endsection

@section('seccion')
    <h3>Lista</h3>
    @foreach($xAlumnos as $item)
        @if(session('msj'))
            {{ $msj }}
        @endif
        <form action="{{ route('Estudiante.xRegistrar') }}" method="post">
            <input type="text" name="codEst" placeholder="Código..." value="{{ old('codEst') }}" /><br>
            <input type="text" name="codEst" placeholder="Código..." value="{{ old('codEst') }}" /><br>
            <input type="text" name="codEst" placeholder="Código..." value="{{ old('codEst') }}" /><br>
            <input type="text" name="codEst" placeholder="Código..." value="{{ old('codEst') }}" /><br>
        </form>

        <p>{{ $item->id }} 
            <a href="{{ route('Estudiante.xDetalle', $item->id) }}" >{{ $item->apeEst }} , {{ $item->nomEst }}</a>

            <a>
                x
            </a>

            <a >
                A
            </a>
        </p>
    @endforeach
@endsection
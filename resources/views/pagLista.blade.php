@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4"> Página lista </h1>
@endsection

@section('seccion')
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">Código</th>
                <th scope="col">Apellidos y Nombres</th>
                <th scope="col">Semestre</th>
                <th scope="col">Editar</th>
            </tr>
        </thead> 
        <tbody>
            @foreach($xAlumnos as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>
                        <a href="{{ route('Estudiante.xDetalle', $item->id) }}">
                            {{ $item->apeEst }}, {{ $item->nomEst }}
                        </a>
                    </td>
                    <td>{{ $item->semMat }}</td>
                    <td>@mdo</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
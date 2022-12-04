@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4"> Página lista </h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            {{ session('msj') }} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div> 
    @endif

    <form action="{{ route('Estudiante.xRegistrar') }}" method="post" class="d-grid gap-2">
        @csrf
        
        <div class="btn btn-success fs-3 fw-bold">Registrar nuevo siguimiento</div>
        
        @error('nomEst') 
            <div class="alert alert-danger"> El nombre es requerido </div> 
        @enderror

        @if($errors ->has('apeEst')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                El <strong> apellido </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        <input type="text" name="nomEst" placeholder="Nombres..." value="{{ old('nomEst') }}" class="form-control mb-2" />
        <input type="text" name="apeEst" placeholder="Apellidos..." value="{{ old('nomEst') }}" class="form-control mb-2" />
        <input type="text" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ old('nomEst') }}" class="form-control mb-2" />
        <select name="turMat" class="form-control mb-2">
            <option value="">Seleccione...</option>
            <option value="1">Turno día</option>
            <option value="2">Turno noche</option>
            <option value="3">Turno tarde</option>
        </select>
        <select name="semMat" class="form-control mb-2" >
            <option value="">Seleccione...</option>
            @for($i = 0; $i < 7; $i++) 
                <option value="{{$i}}"> Semestre {{$i}} </option>
            @endfor
        </select>
        <select name="estMat" class="form-control mb-2">
            <option value="">Seleccione...</option>
            <option value="0">Inactivo</option>
            <option value="1">Activo</option>
        </select>

        <button class="btn btn-success" type="submit">Agregar</button>
    </form>
    <br/>

    <div class="btn btn-dark fs-3 fw-bold d-grid">Lista de siguimiento</div>

    <table class="table">
        <thead>
            <tr class="table-secondary">
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
                    <td>
                        <form action="{{ route('Estudiante.xEliminar', $item->id) }}" method="post" class="d-inline" onsubmit="return validar();">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                X 
                            </button>
                        </form>
                        ...
                        <a href="{{ route('Estudiante.xActualizar', $item->id ) }}" class="btn btn-warning btn-sm"> 
                            A
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $xAlumnos->links() }}
@endsection

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        
        function validar(){
            if(window.confirm("Esta seguro que quiere eliminar...?")){
                return true;
            }else{
                return false;
            }            
        }

         /*
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                alert(result.isConfirmed);
            }
        })

        */
        
    </script>
@endsection
@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4"> Página actualizar registro elegido SEGUIMIENTO </h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
            {{ session('msj') }} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div> 
    @endif

    <form action="{{ route('Estudiante.xUpdateSeg', $xActAlumnosSeg->id) }}" method="post" class="d-grid gap-2">
        @method('PUT')
        @csrf
        
        <div class="btn btn-warning fs-3 fw-bold">Actualizar registro</div>
        
        @error('traAct') 
            <div class="alert alert-danger"> El trabajo actual es requerido </div> 
        @enderror

        @if($errors ->has('ofiAct')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                El <strong> oficio actual </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        @if($errors ->has('satEst')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                El <strong> oficio actual </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        @if($errors ->has('fecSeg')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                La <strong> fecha seguimiento </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        @if($errors ->has('estSeg')) 
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                El <strong> estado seguimiento </strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
            </div> 
        @endif

        <input type="text" name="idEst" placeholder="Código estudiante" value="{{ $xActAlumnosSeg->idEst }}" class="form-control mb-2" />
        <select name="traAct" class="form-control mb-2">
            <option value=""   @if(($xActAlumnosSeg->traAct) == '')   {{ "SELECTED" }} @endif >Seleccione...</option>
            <option value="SI" @if(($xActAlumnosSeg->traAct) == 'SI') {{ "SELECTED" }} @endif >Si trabaja actualmente</option>
            <option value="NO" @if(($xActAlumnosSeg->traAct) == 'NO') {{ "SELECTED" }} @endif >No trabaja en la actualidad</option>
        </select>
        <input type="text" name="ofiAct" placeholder="Oficio actual..." value="{{ $xActAlumnosSeg->ofiAct }}" class="form-control mb-2" />
        <select name="satEst" class="form-control mb-2">
            <option value="" @if(($xActAlumnosSeg->satEst) == '') {{ "SELECTED" }} @endif >Seleccione...</option>
            <option value="0" @if(($xActAlumnosSeg->satEst) == '0') {{ "SELECTED" }} @endif >No esta satisfecho</option>
            <option value="1" @if(($xActAlumnosSeg->satEst) == '1') {{ "SELECTED" }} @endif >Satisfacción REGULAR</option>
            <option value="2" @if(($xActAlumnosSeg->satEst) == '2') {{ "SELECTED" }} @endif >Satisfacción BUENA</option>
            <option value="3" @if(($xActAlumnosSeg->satEst) == '3') {{ "SELECTED" }} @endif >Satisfacción MUY BUENA</option>
        </select>
        <input type="date" name="fecSeg" placeholder="Fecha de seguimiento..." value="{{ $xActAlumnosSeg->fecSeg }}" class="form-control mb-2" />
        <select name="estSeg" class="form-control mb-2">
            <option value="" @if(($xActAlumnosSeg->estSeg) == '') {{ "SELECTED" }} @endif >Seleccione...</option>
            <option value="0" @if(($xActAlumnosSeg->estSeg) == 0) {{ "SELECTED" }} @endif >Inactivo</option>
            <option value="1" @if(($xActAlumnosSeg->estSeg) == 1) {{ "SELECTED" }} @endif >Activo</option>
        </select>

        <button class="btn btn-warning" type="submit">Actualizar</button>
    </form>

@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{   
    //PORTADA
    public function fnIndex () {
        return view('welcome');
    } 

    //CREATE
    public function fnRegistrar (Request $request) {
        
        //return $request;        //Verificando "token" y datos recibidos
        
        $request -> validate([
            'nomEst'=>'required',
            'apeEst'=>'required',
            'fnaEst'=>'required',
            'turMat'=>'required',
            'semMat'=>'required',
            'estMat'=>'required'
        ]);
 
        $nuevoEstudiante = new Estudiante;

        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;

        $nuevoEstudiante->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se registro con éxito...');
    }

    //READ
    public function fnLista () {
        //$xAlumnos = Estudiante::all();
        $xAlumnos = Estudiante::paginate(4);
        return view('pagLista', compact('xAlumnos'));
    }

    public function fnEstDetalle($id) {
        $xDetAlumnos = Estudiante::findOrFail($id); 
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }

    //UPDATE
    public function fnEstActualizar ($id) {                 //ACTUALIZAR. PASO 1/2
        $xActAlumnos = Estudiante::findOrFail($id); 
        return view('Estudiante.pagActualizar', compact('xActAlumnos'));
    }

    public function fnUpdate (Request $request, $id) {      //ACTUALIZAR. PASO 2/2
        
        //return $request;        //Verificando "token" y datos recibidos
        $xUpdateAlumnos = Estudiante::findOrFail($id);
        
        $xUpdateAlumnos->nomEst = $request->nomEst;
        $xUpdateAlumnos->apeEst = $request->apeEst;
        $xUpdateAlumnos->fnaEst = $request->fnaEst;
        $xUpdateAlumnos->turMat = $request->turMat;
        $xUpdateAlumnos->semMat = $request->semMat;
        $xUpdateAlumnos->estMat = $request->estMat;

        $xUpdateAlumnos->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se registro con éxito...');
    }
    
    //DELETE
    public function fnEliminar ($id) {
        $deleteAlumno = Estudiante::findOrFail($id);
        $deleteAlumno->delete();
        return back()->with('msj', 'Se eliminó con éxito...');
    }
    
    //Ejemplo de ruta con validación
    public function fnGaleria ($numero=0) {
        $valor = $numero;
        $otro  = 25;

        //return view('pagGaleria', ['valor'=>$numero, 'otro'=>25]);
        return view('pagGaleria', compact('valor', 'otro'));
    }
}

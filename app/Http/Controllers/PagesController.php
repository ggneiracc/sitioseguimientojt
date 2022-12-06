<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function fnIndex () {
        return view('welcome');
    }

    //CREATE
    public function fnRegistrar () {
        return view('welcome');
    }


    //READ
    public function fnLista () {
        $xAlumnos = Estudiante::all();
        return view('pagLista', compact('xAlumnos'));
    }
    public function fnDetEstDetalle ($id) {
        $xDetAlumnos = Estudiante::findOrFail($id);    //Datos de BD por id
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }
    
    
    public function fnGaleria ($numero=0) {
        $valor = $numero;
        $otro = 25;
        //return "Foto de codigo ".$numero;
        //return view('pagGaleria', ['valor'=>$numero, 'otro'=>25]);
        return view('pagGaleria', compact('valor','otro'));
    }


/*
    public function fnLista () {
        return view('pagLista');
    }

    public function fnGaleria ($numero=0) {
        $valor = $numero;
        $otro  = 25;
 
        //return view('pagGaleria', ['valor'=>$numero, 'otro'=>25]);
        return view('pagGaleria', compact('valor', 'otro'));
    }

    */
}

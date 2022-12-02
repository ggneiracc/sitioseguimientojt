<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function fnIndex () {
        return view('welcome');
    }

    public function fnLista () {
        return view('pagLista');
    }

    public function fnGaleria ($numero=0) {
        //return "Foto de codigo: ".$numero;
        return view('pagGaleria', ['valor'=>$numero, 'otro'=>25]);
    }
    
}

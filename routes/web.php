<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

//PORTADA
Route::get('/', [PagesController::class, 'fnIndex']) -> name('xInicio');

//CREATE
Route::post('/', [PagesController::class, 'fnRegistrar']) -> name('Estudiante.xRegistrar');

//READ
Route::get('/lista', [PagesController::class, 'fnLista']) -> name('xLista');
Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle']) -> name('Estudiante.xDetalle');

//UPDATE
Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar']) -> name('Estudiante.xActualizar');  //Paso 1
Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate']) -> name('Estudiante.xUpdate');             //Paso 2

//DELETE
Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar']) -> name('Estudiante.xEliminar');

//Ejemplo de validar en RUTA
Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero', '[0-9]+') -> name('xGaleria');


 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

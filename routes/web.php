<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// CLONACIÓN para turno noche 

Route::get('/', [PagesController::class, 'fnIndex'])->name('xIndex');



Route::get('/saludo', function () {
    return "Saludo desde laravel";
});


Route::get('/galeria/{numero}', function ($numero) {
    return "Foto de codigo: ".$numero;
}) -> where('numero', '[0-9]+');


Route::view('/galeria', 'pagGaleria', ['valor' => 15] )->name('xGaleria');


Route::get('/lista', function () {
    return view('pagLista');
})->name('xLista');



Route::get('/', [PagesController::class, 'fnIndex'])->name('xIndex');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

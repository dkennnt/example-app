<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\PrimerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-primer-controller/{texto}', function($texto)
{
    return "<h1> $texto </h1>";
});

use App\Http\Controllers\ContactoController;
Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');

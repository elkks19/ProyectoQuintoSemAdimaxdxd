<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/usuarios', App\Http\Controllers\UserController::class);
Route::resource('/documentos', App\Http\Controllers\DocumentoController::class);
Route::resource('/tipos-de-copia', App\Http\Controllers\TiposDeCopiumController::class);
Route::resource('/estudiantes', App\Http\Controllers\EstudianteController::class);
Route::resource('/encargados', App\Http\Controllers\EncargadoController::class);
Route::resource('/administradores', App\Http\Controllers\AdministradoreController::class);
Route::resource('/tipos-de-documento', App\Http\Controllers\TiposDeDocumentoController::class);
Route::resource('/categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('/autores', App\Http\Controllers\AutoreController::class);
Route::resource('/categorias-por-documento', App\Http\Controllers\CategoriasPorDocumentoController::class);
Route::resource('/copias', App\Http\Controllers\CopiaController::class);
Route::resource('/descargas', App\Http\Controllers\DescargaController::class);
Route::resource('/reservas', App\Http\Controllers\ReservaController::class);
Route::resource('/prestamos', App\Http\Controllers\PrestamoController::class);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use resources\views\resultados;

use App\Http\Controllers\Micontrolador;  // importar el controlador para que reconoxca las clases
use App\Models\Articulo; // Asegúrate de importar el modelo Articulo

use App\Http\Controllers\ExamenController;



// Definir las rutas usando el método Route::get
Route::get('/', [Micontrolador::class, 'Bienvenido']);



Route::get('/Bienvenido', [Micontrolador::class, 'Bienvenido']);

Route::get('/mostrar', [Micontrolador::class, 'mostrar']);
Route::get('/crear', [Micontrolador::class, 'crear']);
Route::get('/articulos', [Micontrolador::class, 'articulos']);
Route::get('/contacto', [Micontrolador::class, 'contacto']);
Route::get('/galeria', [Micontrolador::class, 'galeria']);

Route::get('/Inicio', [Micontrolador::class, 'Inicio']);


Route::get('/test', [Micontrolador::class, 'test'])->name('test');

Route::post('/procesar-examen', 'ExamenController@procesar')->name('procesar.examen');

Route::get('examen', [ExamenController::class, 'index']);




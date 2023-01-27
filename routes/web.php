<?php

use App\Http\Controllers\IncidenciaController;
use App\Models\Incidencia;
use Illuminate\Support\Facades\Route;

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


//mostrar todas las incidencias
Route::get('/', [IncidenciaController::class, 'index']);

//muetra la incidencias por id
Route::get('/incidencia/{id}', [IncidenciaController::class, 'show']);


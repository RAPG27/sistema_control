<?php

use Illuminate\Support\Facades\Route;
use App\Models\Solicitud;

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

Route::get('/', function () {
    return view('auth.login');
});

// rutas de paginas
Route::resource('inicio','App\Http\Controllers\InicioController');

Route::resource('solicitudes','App\Http\Controllers\SolicitudController');

Route::resource('registros','App\Http\Controllers\RegistroController');

Route::resource('liberaciones','App\Http\Controllers\LiberacionController');


//RUTA DEL PDF//
Route::get('pdf44/{id}','App\Http\Controllers\PDF44Controller@PDF');

Route::get('pdf45/{id}','App\Http\Controllers\PDF45Controller@PDF');

Route::get('pdf46/{id}','App\Http\Controllers\PDF46Controller@PDF');

//fin rutas pdf

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





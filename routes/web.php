<?php

use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ImagenController;
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



Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');


Route::resource('servicios', ServiciosController::class);
Route::resource('promociones', PromocionesController::class);
Route::post('/comentar', [ComentarioController::class, 'CrearComentario'])->name('comentar');
Route::post('/subirimagen', [ImagenController::class, 'SubirImagen'])->name('upload.image');
Route::delete('/eliminarimagen/{id}', [ImagenController::class, 'BorrarImagen'])->name('delete.image');
Route::put('/actualizarimagen/{id}', [ImagenController::class, 'CambiarOrdenImagen'])->name('update.image');
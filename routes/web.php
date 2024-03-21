<?php

use App\Http\Controllers\BucketlistController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\PageController;
use App\Models\Bucketlist;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('experiencias'); // Experiencias grupo
Route::get('/experiencias/{experiencia}', [ExperienciaController::class, 'show'])->name('experiencia'); // Experiencia individual

Route::get('/bucketlist', [BucketlistController::class, 'index'])->name('bucketlist'); // Experiencias especiales
Route::get('/bucketlist/{bucket}', [BucketlistController::class, 'show'])->name('bucketlist-detalle'); // detalle de bucketlist

Route::get('/cotizar-experiencia-en-grupo', [PageController::class, 'cotizadorgroup'] )->name('cotizador-grupo'); 
Route::get('/solicitar-aventura', [PageController::class, 'solicitud'])->name('solicitud'); // Solicitar aventura

Route::get('/artesanos', [PageController::class, 'artesanos'])->name('artesanos'); // index de artesanos
Route::get('/contactar-a-un-asesor', [PageController::class, 'contact'])->name('contacto'); // Vista Contacto

Route::get('/cotizar-experiencia-personalizada', [PageController::class, 'cotizador'])->name('cotizador'); // Vista cotizador

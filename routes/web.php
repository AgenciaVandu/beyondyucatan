<?php
use App\Http\Controllers\ExperienciaController;
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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('experiencias'); // Experiencias grupo
Route::get('/experiencias/{experiencia}', [ExperienciaController::class, 'show'])->name('experiencia'); // Experiencia individual

Route::view('/bucketlist', 'viajes.bucketlist')->name('bucketlist'); // Experiencias especiales
Route::view('/los-pasos-del-jaguar', 'viajes.detallebucket')->name('bucketlist-detalle'); // detalle de bucketlist

Route::view('/cotizar-experiencia-en-grupo', 'formularios.cotizar-grupo')->name('cotizador-grupo'); 
Route::view('/solicitar-aventura', 'formularios.solicitaraventura')->name('solicitud'); // Solicitar aventura

Route::view('/artesanos', 'viajes.artesanos')->name('artesanos'); // index de artesanos
Route::view('/contactar-a-un-asesor', 'contacto')->name('contacto'); // Vista Contacto

Route::view('/cotizar-experiencia-personalizada', 'formularios.cotizar')->name('cotizador'); // Vista cotizador
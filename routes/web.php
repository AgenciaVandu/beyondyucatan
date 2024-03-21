<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('experiencias'); // Experiencias grupo
Route::get('/experiencias/{experiencia}', [ExperienciaController::class, 'show'])->name('experiencia'); // Experiencia individual

Route::get('/bucketlist', [BucketlistController::class, 'index'])->name('bucketlist'); // Experiencias especiales
Route::get('/bucketlist/{bucket}', [BucketlistController::class, 'show'])->name('bucketlist-detalle'); // detalle de bucketlist

Route::get('/cotizar-experiencia-en-grupo', [PageController::class, 'cotizadorgroup'] )->name('cotizador-grupo'); 
Route::get('/solicitar-aventura', [PageController::class, 'solicitud'])->name('cotizador'); // Solicitar aventura

Route::get('/artesanos', [PageController::class, 'artesanos'])->name('artesanos'); // index de artesanos
Route::get('/contactar-a-un-asesor', [PageController::class, 'contact'])->name('contacto'); // Vista Contacto
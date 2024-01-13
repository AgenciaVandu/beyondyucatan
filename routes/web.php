<?php

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
Route::view('/experiencias', 'viajes.experiencias')->name('experiencias');
Route::view('/bucketlist', 'viajes.bucketlist')->name('bucketlist');
Route::view('/post', 'viajes.experiencia')->name('post'); // Experiencia individual
Route::view('/solicitar-aventura', 'formularios.solicitaraventura')->name('solicitud'); // Solicitar aventura
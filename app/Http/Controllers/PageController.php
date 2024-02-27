<?php

namespace App\Http\Controllers;
use App\Models\Experience;


use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index() {

     $experiencias = Experience::get();

    return view('index', ['experiencias' => $experiencias]);
   }

   public function artesanos(){
    return view('viajes.artesanos');
   }

   // Formularios

   public function contact() {

    return view('contacto');

   }

   public function cotizador() {

    return view ('formularios.cotizar');

   }

   public function solicitud() {
    return view ('formularios.solicitaraventura');
   }

   public function cotizadorgroup() {
    return view('formularios.cotizar-grupo');
   }
}

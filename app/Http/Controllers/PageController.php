<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use App\Models\category;
use App\Models\Experience;
use App\Models\State;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $experiencias = Experience::get();
        $states = State::all();
        $categories = category::all();

        return view('index', ['experiencias' => $experiencias, 'states' => $states, 'categories' => $categories]);
    }

    public function artesanos()
    {

        return view('viajes.artesanos');
    }

    // Formularios

    public function contact()
    {

        return view('contacto');
    }

    public function cotizador()
    {

        return view('formularios.cotizar');
    }

    public function solicitud()
    {

        return view('formularios.solicitaraventura');
    }

    public function cotizadorgroup(Experience $experience)
    {

        return view('formularios.cotizar-grupo', compact('experience'));
    }

    public function cotizadorgroupbucket(Bucketlist $bucketlist)
    {
        return view('formularios.cotizar-grupo', compact('bucketlist'));
    }
}

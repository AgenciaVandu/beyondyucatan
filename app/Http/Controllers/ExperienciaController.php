<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienciaController extends Controller
{
    public function index()
    {
        $experiencias = Experience::get();

        return view ('viajes.experiencias', ['experiencias' => $experiencias]);
    }

    public function show (Experience $experiencia) {

        return view('viajes.experiencia', ['experiencia' => $experiencia]);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ExperienciaController extends Controller
{
    public function index()
    {
        $experiencias = Experience::all();

        return view('viajes.experiencias', ['experiencias' => $experiencias]);
    }

    public function show(Experience $experiencia)
    {
        $experiencias = Experience::get();
        return view('viajes.experiencia', ['experiencia' => $experiencia, 'experiences' => $experiencias]);
    }


    public function listExperiences()
    {
        $experiences = Experience::paginate(10);
        return view('admin.experiences.index', compact('experiences'));
    }

    //Create CRUD methods for model Experience
    public function create()
    {
        return view('admin.experiences.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'lightdescription' => 'required',
            'longdescription' => 'required',
            'icons' => 'required',
            'categories' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
            'imagedestacada' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
            'price' => 'required',
        ]);
        $image1 = $request->file('image')->store('public/experiences');
        $image2 = $request->file('imagedestacada')->store('public/experiences');
        $url = Storage::url($image1);
        $url2 = Storage::url($image2);

        Experience::create([
            'titulo' => $request->titulo,
            'lightdescription' => $request->lightdescription,
            'longdescription' => $request->longdescription,
            'icons' => $request->icons,
            'categories' => $request->categories,
            'image' => $url,
            'imagedestacada' => $url2,
            'price' => $request->price,
        ]);
        return redirect()->route('admin.experiences.index');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        if ($request->file('image')) {
            $image1 = $request->file('image')->store('public/experiences');
            $url = Storage::url($image1);
            $experience->update([
                'image' => $url
            ]);
        }
        if ($request->file('imagedestacada')) {
            $image2 = $request->file('imagedestacada')->store('public/experiences');
            $url2 = Storage::url($image2);
            $experience->update([
                'imagedestacada' => $url2
            ]);
        }

        $experience->update([
            'titulo' => $request->titulo,
            'lightdescription' => $request->lightdescription,
            'longdescription' => $request->longdescription,
            'icons' => $request->icons,
            'categories' => $request->categories,
            'price' => $request->price,
        ]);
        return redirect()->route('admin.experiences.index');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index');
    }
}

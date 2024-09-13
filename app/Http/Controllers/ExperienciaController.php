<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Experience;
use App\Models\Icon;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ExperienciaController extends Controller
{
    public function index()
    {
        $experiencias = Experience::all();
        $categories = category::all();
        $states = State::all();
        return view('viajes.experiencias', ['experiencias' => $experiencias, 'categories' => $categories,'states' => $states]);
    }

    public function filter(Request $request)
    {
        $experiencias = Experience::where();
        $categories = category::all();
        $states = State::all();
        return view('viajes.experiencias', ['experiencias' => $experiencias, 'categories' => $categories,'states' => $states]);
    }

    public function show(Experience $experiencia)
    {
        $experiencias = Experience::get();
        $categories = category::all();
        $states = State::all();
        return view('viajes.experiencia', ['experiencia' => $experiencia, 'experiences' => $experiencias, 'states' => $states, 'categories' => $categories]);
    }


    public function listExperiences()
    {
        $experiences = Experience::paginate(10);
        return view('admin.experiences.index', compact('experiences'));
    }

    //Create CRUD methods for model Experience
    public function create()
    {
        $categories = category::all();
        $icons = Icon::all();
        $states = State::all();
        return view('admin.experiences.create', compact('categories', 'icons','states'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'lightdescription' => 'required',
            'longdescription' => 'required',
            'icons' => 'required',
            //'categories' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
            'imagedestacada' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
            'price' => 'required',
        ]);
        $image1 = $request->file('image')->store('public/experiences');
        $image2 = $request->file('imagedestacada')->store('public/experiences');
        $url = Storage::url($image1);
        $url2 = Storage::url($image2);

        $experience = Experience::create([
            'titulo' => $request->titulo,
            'lightdescription' => $request->lightdescription,
            'longdescription' => $request->longdescription,
            'icons' => '',
            'categories' => '',
            'image' => $url,
            'imagedestacada' => $url2,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'state_id' => $request->state_id
        ]);
        $experience->icons()->attach($request->icons);
        return redirect()->route('admin.experiences.index');
    }

    public function edit(Experience $experience)
    {
        $categories = category::all();
        $icons = Icon::all();
        $arrayicons = $experience->icons;
        $states = State::all();
        //dd($arrayicons);
        return view('admin.experiences.edit', compact('experience', 'categories', 'icons', 'arrayicons','states'));
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
            'icons' => '',
            'categories' => '',
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);

        $experience->icons()->sync($request->icons);
        return redirect()->route('admin.experiences.index');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index');
    }
}

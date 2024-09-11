<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $icons = Icon::paginate(10);
        return view('admin.icons.index', compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.icons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' =>'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'name' =>'required|string|max:255',
        ]);

        $img = $request->file('img')->store('public/icons');
        $url = Storage::url($img);

        Icon::create([
            'img' => $url,
            'name' => $request->name,
        ]);

        return redirect()->route('admin.icons.index')->with('success', 'Icono creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Icon $icon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Icon $icon)
    {
        return view('admin.icons.edit', compact('icon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Icon $icon)
    {
        $request->validate([
            'img' =>'image|mimes:jpeg,png,jpg,svg|max:2048',
            'name' =>'required|string|max:255',
        ]);

        if ($request->file('img')) {
            Storage::delete($icon->img);
            $img = $request->file('img')->store('public/icons');
            $url = Storage::url($img);
            $icon->update([
                'img' => $url,
            ]);
        }

        $icon->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.icons.index')->with('success', 'Icono actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Icon $icon)
    {
        Storage::delete($icon->img);
        $icon->delete();
        return redirect()->route('admin.icons.index')->with('success', 'Icono eliminado exitosamente.');
    }
}

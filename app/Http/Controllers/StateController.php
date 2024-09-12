<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::paginate(10);
        return view('admin.states.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.states.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:states',
        ]);
        State::create($request->all());
        return redirect()->route('admin.states.index')->with('success', 'Estado creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        return view('admin.states.edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $request->validate([
            'name' => 'required|unique:states,name,'. $state->id,
        ]);

        $state->update($request->all());
        return redirect()->route('admin.states.index')->with('success', 'Estado actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->route('admin.states.index')->with('success', 'Estado eliminado exitosamente.');
    }
}

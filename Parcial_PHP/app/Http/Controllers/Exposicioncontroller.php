<?php

namespace App\Http\Controllers;
use App\Models\Artista;
use Illuminate\Http\Request;

class exposicioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exposiciones = Exposicion::with('obraArte')->get(); // Carga la obra de arte asociada
        return view('exposiciones.index', compact('exposiciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $request->validate([
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'ubicacion' => 'required',
            'nombre_evento' => 'required',
            'obra_arte_id' => 'required|exists:obra_artes,id', // Verifica que la obra de arte exista
        ]);

        Exposicion::create($request->all());
        return redirect()->route('exposiciones.index')->with('success', 'Exposición creada correctamente.');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

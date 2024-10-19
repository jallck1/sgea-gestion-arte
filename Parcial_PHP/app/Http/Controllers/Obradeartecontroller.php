<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class obradeartecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obras = ObraArte::with('artista')->get(); // Carga el artista asociado
        return view('obras.index', compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = Artista::all(); // Cargar artistas para el formulario
        return view('obras.create', compact('artistas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'año' => 'required',
            'tecnica' => 'required',
            'dimensiones' => 'required',
            'descripcion' => 'nullable',
            'artista_id' => 'required|exists:artistas,id', // Verifica que el artista exista
        ]);

        ObraArte::create($request->all());
        return redirect()->route('obras.index')->with('success', 'Obra de arte creada correctamente.');
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

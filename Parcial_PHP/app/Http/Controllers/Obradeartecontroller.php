<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObraDeArte;
use App\Models\Artist;


class ObraDeArteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obras = ObraDeArte::with('artist')->get(); // Carga las obras con el artista asociado
        return view('obras.index', ['obras' => $obras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = Artista::all(); // Cargar artistas para el formulario de creación
        return view('obras.create', ['artist' => $artistas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'año' => 'required|integer',
            'tecnica' => 'required|string|max:255',
            'dimensiones' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'artista_id' => 'required|exists:artistas,id', // Verificar que el artista exista
        ]);

        ObraDeArte::create([
            'titulo' => $request->titulo,
            'año' => $request->año,
            'tecnica' => $request->tecnica,
            'dimensiones' => $request->dimensiones,
            'descripcion' => $request->descripcion,
            'artista_id' => $request->artista_id,
        ]);

        return redirect()->route('obras.index')->with('success', 'Obra de arte creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $obra = ObraDeArte::findOrFail($id);
        return view('obras.show', ['obra' => $obra]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $obra = ObraDeArte::findOrFail($id);
        $artistas = Artista::all(); // Cargar todos los artistas para la edición
        return view('obras.edit', ['obra' => $obra, 'artist' => $artist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $obra = ObraDeArte::findOrFail($id);

        $request->validate([
            'titulo' => 'required|string|max:255',
            'año' => 'required|integer',
            'tecnica' => 'required|string|max:255',
            'dimensiones' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'artista_id' => 'required|exists:artistas,id', // Verificar que el artista exista
        ]);

        $obra->update([
            'titulo' => $request->titulo,
            'año' => $request->año,
            'tecnica' => $request->tecnica,
            'dimensiones' => $request->dimensiones,
            'descripcion' => $request->descripcion,
            'artista_id' => $request->artista_id,
        ]);

        return redirect()->route('obras.index')->with('success', 'Obra de arte actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $obra = ObraDeArte::findOrFail($id);
        $obra->delete();

        return redirect()->route('obras.index')->with('success', 'Obra de arte eliminada correctamente.');
    }
}

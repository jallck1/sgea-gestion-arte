<?php

namespace App\Http\Controllers;
use App\Models\Artista;
use App\Models\obra_arte;


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

    // Mostrar una obra específica
    public function show($id)
    {
        $obra = ObraDeArte::findOrFail($id);
        return view('obras.show', compact('obra'));
    }

    // Mostrar formulario para editar una obra
    public function edit($id)
    {
        $obra = ObraDeArte::findOrFail($id);
        $artistas = Artista::all();
        return view('obras.edit', compact('obra', 'artistas'));
    }

    // Actualizar una obra
    public function update(Request $request, $id)
    {
        $obra = ObraDeArte::findOrFail($id);

        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required',
            'artista_id' => 'required|exists:artistas,id',
            'fecha_creacion' => 'required|date',
            'precio' => 'required|numeric|min:0',
        ]);

        $obra->update($request->all());

        return redirect()->route('obras.index')->with('success', 'Obra de arte actualizada exitosamente');
    }

    // Eliminar una obra
    public function destroy($id)
    {
        $obra = ObraDeArte::findOrFail($id);
        $obra->delete();

        return redirect()->route('obras.index')->with('success', 'Obra de arte eliminada exitosamente');
    }
}
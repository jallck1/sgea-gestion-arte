<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('artista.index', ['artistas' => $artistas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artista.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artista = new Artista();
        $artista->nombre = $request->nombre;
        $artista->apellido = $request->apellido;
        $artista->nacionalidad = $request->nacionalidad;
        $artista->biografia = $request->biografia;
        $artista->save();

        return redirect()->route('artistas.index');
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
        $artista = Artista::find($id);
        return view('artista.edit', ['artista' => $artista]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artista = Artista::find($id);
        $artista->nombre = $request->nombre;
        $artista->apellido = $request->apellido;
        $artista->nacionalidad = $request->nacionalidad;
        $artista->biografia = $request->biografia;
        $artista->save();

        return redirect()->route('artistas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artista = Artista::find($id);
        $artista->delete();
        return redirect()->route('artistas.index');
    }
}

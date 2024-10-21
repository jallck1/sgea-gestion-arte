<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;
use App\Models\Artista;
use Illuminate\Support\Facades\DB;

class ObradearteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obras = DB::table('obras')
        ->join('artista', 'obras.artista_id', '=', 'artista.id')
        ->select('obras.*', 'artista.nombre')
        ->get();
        return view('obra.index', ['obras'=> $obras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $artista = DB::table('artista')
        ->orderBy('nombre')
        ->get();
        return view('obra.new', ['artista'=> $artistas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obra = new Obra();
        $obra->titulo = $request->titulo;
        $obra->año = $request->año;
        $obra->tecnica = $request->tecnica;
        $obra->dimensiones = $request->dimensiones;
        $obra->descripcion = $request->descripcion;
        $obra->artista_id = $request->artista_id;
        
        $obra->save();

        $obras = DB::table('obras')
        ->join('artistas', 'obras.artista_id', '=', 'artistas.id')
        ->select('obras.*', 'artistas.nombre')
        ->get();

        return view('obra.index', ['obras' => $obras]);

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
        $obra = Obra::find($id);
        $artistas = DB::table('artistas')
        ->orderBy('id')
        ->get();

        return view('obra.edit', ['obra' => $obra, 'artistas' => $artistas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obra = Obra::find($id); 

        $obra->titulo = $request->titulo;
        $obra->año = $request->año;
        $obra->tecnica = $request->tecnica;
        $obra->dimensiones = $request->dimensiones;
        $obra->descripcion = $request->descripcion;
        $obra->artista_id = $request->artista_id;
        
        $obra->save();

        $obras = DB::table('obras')
        ->join('artistas', 'obras.artista_id', '=', 'artistas.id')
        ->select('obras.*', 'artistas.nombre')
        ->get();

        return view('obra.index', ['obras' => $obras]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obra = Obra::find($id);
        $obra->delete();

        $obras = DB::table('obras')
        ->join('artistas', 'obras.artista_id', '=', 'artistas.id')
        ->select('obras.*', 'artistas.nombre')
        ->get();

        return view('obra.index', ['obras' => $obras]);

    }
}

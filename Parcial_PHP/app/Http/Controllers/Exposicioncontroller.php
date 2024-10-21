<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exposicion;
use Illuminate\Support\Facades\DB;

class ExposicionController extends Controller
{
    /**
     * Mostrar una lista de los recursos.
     */
    public function index()
    {
        // Obtenemos las exposiciones y las obras relacionadas
        $exposiciones = DB::table('exposiciones')
            ->join('obras_de_arte', 'exposiciones.obra_id', '=', 'obras_de_arte.id')
            ->select('exposiciones.*', 'obras_de_arte.titulo')
            ->get();

        // Retornamos la vista index con las exposiciones
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        // Obtenemos las obras de arte para el formulario
        $obras = DB::table('obras_de_arte')
            ->orderBy('titulo')
            ->get();

        // Retornamos la vista de creación con las obras
        return view('exposicion.create', ['obras' => $obras]);
    }

    /**
     * Almacenar un recurso recién creado en la base de datos.
     */
    public function store(Request $request)
    {
        // Creamos una nueva exposición
        $exposicion = new Exposicion();

        $exposicion->obra_id = $request->obra_id;
        $exposicion->fecha_inicio = $request->fecha_inicio;
        $exposicion->fecha_fin = $request->fecha_fin;
        $exposicion->ubicacion = $request->ubicacion;
        $exposicion->nombre_evento = $request->nombre_evento;
        $exposicion->save();

        // Obtenemos las exposiciones actualizadas
        $exposiciones = DB::table('exposiciones')
            ->join('obras_de_arte', 'exposiciones.obra_id', '=', 'obras_de_arte.id')
            ->select('exposiciones.*', 'obras_de_arte.titulo')
            ->get();

        // Retornamos la vista index con las exposiciones actualizadas
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Mostrar el formulario para editar un recurso específico.
     */
    public function edit(string $id)
    {
        // Buscamos la exposición por ID
        $exposicion = Exposicion::find($id);

        // Obtenemos las obras de arte para el formulario de edición
        $obras = DB::table('obras_de_arte')
            ->orderBy('titulo')
            ->get();

        // Retornamos la vista de edición con la exposición y las obras
        return view('exposicion.edit', ['exposicion' => $exposicion, 'obras' => $obras]);
    }

    /**
     * Actualizar un recurso específico en la base de datos.
     */
    public function update(Request $request, string $id)
    {
        // Buscamos la exposición por ID
        $exposicion = Exposicion::find($id);

        // Actualizamos los datos de la exposición
        $exposicion->obra_id = $request->obra_id;
        $exposicion->fecha_inicio = $request->fecha_inicio;
        $exposicion->fecha_fin = $request->fecha_fin;
        $exposicion->ubicacion = $request->ubicacion;
        $exposicion->nombre_evento = $request->nombre_evento;
        $exposicion->save();

        // Obtenemos las exposiciones actualizadas
        $exposiciones = DB::table('exposiciones')
            ->join('obras_de_arte', 'exposiciones.obra_id', '=', 'obras_de_arte.id')
            ->select('exposiciones.*', 'obras_de_arte.titulo')
            ->get();

        // Retornamos la vista index con las exposiciones actualizadas
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Eliminar un recurso específico de la base de datos.
     */
    public function destroy(string $id)
    {
        // Buscamos la exposición por ID y la eliminamos
        $exposicion = Exposicion::find($id);
        $exposicion->delete();

        // Obtenemos las exposiciones actualizadas
        $exposiciones = DB::table('exposiciones')
            ->join('obras_de_arte', 'exposiciones.obra_id', '=', 'obras_de_arte.id')
            ->select('exposiciones.*', 'obras_de_arte.titulo')
            ->get();

        // Retornamos la vista index con las exposiciones actualizadas
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }
}

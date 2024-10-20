<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists=artist::all();
        return view('artist.index',['artists'=>$artists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artist.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artists =new artist();
        $artists->nombre= $request->name;
        $artists->apellido=$request->apellido;
        $artists->nacionalidad=$request->nacionalidad;
        $artists->biografia = $request->biografia;
        $artists->save();

        return redirect()->route('artists.index');
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
        $artists=artist::find($id);
        return view('artist.edit',['artist'=>$artists]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artists=artist::find($id);
        $artists->nombre= $request->name;
        $artists->apellido=$request->apellido;
        $artists->nacionalidad=$request->nacionalidad;
        $artists->biografia = $request->biografia;
        $artists->save();

        return redirect()->route('artists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artists=artist::find($id);
        $artists ->delete();
        return redirect()->route('artists.index');
    }
}
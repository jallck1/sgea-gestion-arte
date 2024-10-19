@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Artista</h1>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('artistas.update', $artista->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $artista->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ old('apellido', $artista->apellido) }}" required>
        </div>

        <div class="form-group">
            <label for="biografia">Biografía:</label>
            <textarea name="biografia" id="biografia" class="form-control" rows="5">{{ old('biografia', $artista->biogra

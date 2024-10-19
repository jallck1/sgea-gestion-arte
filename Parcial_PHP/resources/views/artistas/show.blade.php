@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Artista</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h2 class="card-title">{{ $artista->nombre }} {{ $artista->apellido }}</h2>
            <p class="card-text"><strong>Biografía:</strong> {{ $artista->biografia }}</p>
            <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ $artista->fecha_nacimiento->format('d-m-Y') }}</p>
            <p class="card-text"><strong>País de Origen:</strong> {{ $artista->pais_origen }}</p>
        </div>
    </div>

    <a href="{{ route('artistas.index') }}" class="btn btn-secondary">Volver a la lista</a>
    <a href="{{ route('artistas.edit', $artista->id) }}" class="btn btn-primary">Editar Artista</a>
</div>
@endsection

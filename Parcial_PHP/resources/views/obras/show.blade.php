@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $obra->titulo }}</h1>
    
    <p><strong>Artista:</strong> {{ $obra->artista->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $obra->descripcion }}</p>
    <p><strong>Fecha de Creación:</strong> {{ $obra->fecha_creacion->format('d/m/Y') }}</p>
    <p><strong>Precio:</strong> ${{ number_format($obra->precio, 2) }}</p>

    <a href="{{ route('obras.index') }}" class="btn btn-secondary">Volver al listado</a>
    <a href="{{ route('obras.edit', $obra->id) }}" class="btn btn-primary">Editar</a>

    <form action="{{ route('obras.destroy', $obra->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
@endsection

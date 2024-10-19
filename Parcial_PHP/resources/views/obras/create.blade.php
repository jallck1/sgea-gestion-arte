@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Obra de Arte</h1>

    <form action="{{ route('obras.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required>
        </div>

        <div>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" required>{{ old('descripcion') }}</textarea>
        </div>

        <div>
        <label for="artista">Artista</label>
<select name="artista_id" id="artista" class="form-control">
    <option value="">Seleccione un Artista</option>
    @foreach($artistas as $artista)
        <option value="{{ $artista->id }}">{{ $artista->nombre }}</option>
    @endforeach
</select>

        </div>

        <div>
            <label for="fecha_creacion">Fecha de Creación</label>
            <input type="date" name="fecha_creacion" id="fecha_creacion" required>
        </div>

        <div>
            <label for="precio">Precio</label>
            <input type="number" step="0.01" name="precio" id="precio" value="{{ old('precio') }}" required>
        </div>

        <button type="submit">Crear</button>
    </form>
@endsection

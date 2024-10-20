@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Exposición</h1>
    
    <form action="{{ route('exposicions.update', $exposicion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" value="{{ $exposicion->fecha_inicio }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" name="fecha_fin" class="form-control" value="{{ $exposicion->fecha_fin }}" required>
        </div>

        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" value="{{ $exposicion->ubicacion }}" required>
        </div>

        <div class="form-group">
            <label for="nombre_evento">Nombre del Evento</label>
            <input type="text" name="nombre_evento" class="form-control" value="{{ $exposicion->nombre_evento }}" required>
        </div>

        <div class="form-group">
            <label for="obra_arte_id">Obra de Arte</label>
            <select name="obra_arte_id" class="form-control" required>
                @foreach($obras as $obra)
                    <option value="{{ $obra->id }}" {{ $obra->id == $exposicion->obra_arte_id ? 'selected' : '' }}>{{ $obra->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

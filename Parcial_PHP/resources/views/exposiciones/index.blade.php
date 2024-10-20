@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Exposiciones</h1>
    
    <a href="{{ route('exposicions.create') }}" class="btn btn-primary">Nueva Exposición</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Ubicación</th>
                <th>Nombre del Evento</th>
                <th>Obra de Arte</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($exposiciones as $exposicion)
            <tr>
                <td>{{ $exposicion->id }}</td>
                <td>{{ $exposicion->fecha_inicio }}</td>
                <td>{{ $exposicion->fecha_fin }}</td>
                <td>{{ $exposicion->ubicacion }}</td>
                <td>{{ $exposicion->nombre_evento }}</td>
                <td>{{ $exposicion->obra_arte->nombre }}</td>
                <td>
                    <a href="{{ route('exposicions.show', $exposicion->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('exposicions.edit', $exposicion->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('exposicions.destroy', $exposicion->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

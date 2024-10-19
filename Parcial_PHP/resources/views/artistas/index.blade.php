@extends('layouts.app')

@section('content')
    <h1>Artistas</h1>
    <a href="{{ route('artistas.create') }}" class="btn btn-primary">Crear Artista</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artistas as $artista)
                <tr>
                    <td>{{ $artista->id }}</td>
                    <td>{{ $artista->nombre }}</td>
                    <td>{{ $artista->apellido }}</td>
                    <td>{{ $artista->nacionalidad }}</td>
                    <td>
                        <a href="{{ route('artistas.edit', $artista->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('artistas.destroy', $artista->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

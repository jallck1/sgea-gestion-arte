@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Obras de Arte</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Artista</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obras as $obra)
                <tr>
                    <td>{{ $obra->titulo }}</td>
                    <td>{{ $obra->artista->nombre }}</td>
                    <td>{{ $obra->precio }}</td>
                    <td>
                        <a href="{{ route('obras.show', $obra->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('obras.edit', $obra->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('obras.destroy', $obra->id) }}" method="POST" style="display:inline-block;">
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

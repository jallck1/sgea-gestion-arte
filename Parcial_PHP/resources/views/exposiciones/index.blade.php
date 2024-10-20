<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Exposiciones') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Listado de Exposiciones</h1>
                    <a href="{{ route('exposiciones.create') }}" class="btn btn-success">Nueva Exposición</a>

                    <table class="table table-dark table-striped mt-3">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha Inicio</th>
                                <th scope="col">Fecha Fin</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col">Nombre del Evento</th>
                                <th scope="col">Obra de Arte</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($exposiciones as $exposicion)
                            <tr>
                                <th scope="row">{{ $exposicion->id }}</th>
                                <td>{{ $exposicion->fecha_inicio }}</td>
                                <td>{{ $exposicion->fecha_fin }}</td>
                                <td>{{ $exposicion->ubicacion }}</td>
                                <td>{{ $exposicion->nombre_evento }}</td>
                                <td>{{ $exposicion->obra_arte->nombre }}</td>
                                <td>
                                    <a href="{{ route('exposiciones.show', $exposicion->id) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('exposiciones.edit', $exposicion->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('exposiciones.destroy', $exposicion->id) }}" method="POST" style="display:inline-block;">
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
            </div>
        </div>
    </div>
</x-app-layout>

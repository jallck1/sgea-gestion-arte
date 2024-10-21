<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Exhibiciones') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1>Lista de Exposiciones</h1>
                        <a href="{{ route('exhibicion.create') }}" class="btn btn-success">Agregar</a>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Obra</th>
                                    <th scope="col">Fecha Inicio</th>
                                    <th scope="col">Fecha Fin</th>
                                    <th scope="col">Ubicación</th>
                                    <th scope="col">Nombre del Evento</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exhibitions as $exhibition)
                                <tr>
                                    <th scope="row">{{ $exhibition->id }}</th>
                                    <td>{{ $exhibition->obra->titulo }}</td>
                                    <td>{{ $exhibition->fecha_inicio }}</td>
                                    <td>{{ $exhibition->fecha_fin }}</td>
                                    <td>{{ $exhibition->ubicacion }}</td>
                                    <td>{{ $exhibition->nombre_evento }}</td>
                                    <td>
                                        <a href="{{ route('exhibicion.edit', ['exhibicion' => $exhibition->id]) }}"
                                            class="btn btn-info">Editar</a>
                                        <form action="{{ route('exhibicion.destroy', ['exhibicion' => $exhibition->id]) }}"
                                            method="POST" style="display: inline-block">
                                            @method('delete')
                                            @csrf
                                            <input class="btn btn-danger" type="submit" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

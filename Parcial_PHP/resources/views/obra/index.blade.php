<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Obras') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1>Lista de Obras</h1>
                        <a href="{{ route('obras.create') }}" class="btn btn-success">Agregar</a>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Artista</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Año</th>
                                    <th scope="col">Técnica</th>
                                    <th scope="col">Dimensiones</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($works as $work)
                                <tr>
                                    <th scope="row">{{ $work->id }}</th>
                                    <td>{{ $work->nombre }}</td>
                                    <td>{{ $work->título }}</td>
                                    <td>{{ $work->año }}</td>
                                    <td>{{ $work->tecnica }}</td>
                                    <td>{{ $work->dimensiones }}</td>
                                    <td>{{ $work->descripcion }}</td>
                                    <td>
                                        <a href="{{ route('obras.edit', ['work' => $work->id]) }}" class="btn btn-info">Editar</a>
                                        <form action="{{ route('obras.destroy', ['work' => $work->id]) }}"
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

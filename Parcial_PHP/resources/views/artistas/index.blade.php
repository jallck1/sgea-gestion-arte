<x-app-layout>

    <h2 class="font-semibold text-x5 text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Artistas') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!doctype html>
                    <html lang="en">
                    <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                    
                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    
                        <title>Listado de Artistas</title>
                    </head>
                    <body>
                        <div class='container'>
                            <h1>Listado de Artistas</h1>
                            <a href="{{ route('artistas.create') }}" class="btn btn-success">Añadir Artista</a>
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nombre Completo</th>
                                        <th scope="col">Nacionalidad</th>
                                        <th scope="col">Biografía</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artistas as $artista)
                                        <tr>
                                            <th scope="row">{{ $artista->id }}</th>
                                            <td>{{ $artista->nombre . ' ' . $artista->apellido }}</td>
                                            <td>{{ $artista->nacionalidad }}</td>
                                            <td>{{ $artista->biografia }}</td>
                                            <td>
                                                <a href="{{ route('artistas.edit', ['artista' => $artista->id]) }}" class="btn btn-info">Editar</a>
                                                <form action="{{ route('artistas.destroy', ['artista' => $artista->id]) }}" method="POST" style="display: inline-block">
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
                    
                        <!-- Bootstrap JS -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                    </html>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

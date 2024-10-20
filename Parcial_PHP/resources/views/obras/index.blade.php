<x-app-layout>

    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Obras de Arte') }}
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
                    
                            <title>List the Obras de Arte</title>
                        </head>
                        <body>
                            <div class='container'>
                                <h1>List of Obras de Arte</h1>
                                <a href="{{ route('obras.create') }}" class="btn btn-success">Add</a>
                                <table class="table table-dark table-striped mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Artist</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($obras as $obra)
                                            <tr>
                                                <th scope="row">{{ $obra->titulo }}</th>
                                                <td>{{ $obra->artista->nombre }}</td>
                                                <td>{{ $obra->precio }}</td>
                                                <td>
                                                    <a href="{{ route('obras.edit', $obra->id) }}" class="btn btn-info">Edit</a>
                                                    <form action="{{ route('obras.destroy', $obra->id) }}" method="POST" style="display: inline-block">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input class="btn btn-danger" type="submit" value="Delete">
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Optional JavaScript; choose one of the two! -->
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                        </body>
                    </html>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

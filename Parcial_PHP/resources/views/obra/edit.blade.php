<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Obra</title>
</head>
<body>
    <div class="container">
        <h1>Editar Obra</h1>
        <form method="POST" action="{{ route('obras.update', ['obra' => $work->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" 
                disabled="disabled" value="{{ $work->id }}">
                <div id="idHelp" class="form-text">ID de la Obra</div>
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" required class="form-control" id="titulo" aria-describedby="tituloHelp"
                name="titulo" placeholder="Título de la Obra" value="{{ $work->título }}">
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">Año</label>
                <input type="number" class="form-control" id="año" aria-describedby="añoHelp"
                name="año" placeholder="Año de la Obra" value="{{ $work->año }}">
            </div>

            <div class="mb-3">
                <label for="tecnica" class="form-label">Técnica</label>
                <input type="text" class="form-control" id="tecnica" aria-describedby="tecnicaHelp"
                name="tecnica" placeholder="Técnica" value="{{ $work->tecnica }}">
            </div>

            <div class="mb-3">
                <label for="dimensiones" class="form-label">Dimensiones</label>
                <input type="text" class="form-control" id="dimensiones" aria-describedby="dimensionesHelp"
                name="dimensiones" placeholder="Dimensiones de la Obra" value="{{ $work->dimensiones }}">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" aria-describedby="descripcionHelp"
                name="descripcion" placeholder="Descripción de la Obra" value="{{ $work->descripcion }}">
            </div>

            <div class="mb-3">
                <label for="artista_id" class="form-label">Artista</label>
                <select class="form-control" id="artista_id" name="artista_id" required>
                    @foreach ($artists as $artist)
                        <option value="{{ $artist->id }}" {{ $artist->id == $work->artista_id ? 'selected' : '' }}>{{ $artist->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('obras.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>

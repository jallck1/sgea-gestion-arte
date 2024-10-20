<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crear Obra de Arte</title>
  </head>
  <body>
    <div class="container">
      <h1>Crear Nueva Obra de Arte</h1>
      <form method="POST" action='{{ route("obras.store") }}'>
        @csrf

        <div class="mb-3">
          <label for="titulo" class="form-label">Título</label>
          <input type="text" class="form-control" id="titulo" aria-describedby="tituloHelp" name="titulo" value="{{ old('titulo') }}" placeholder="Título de la obra" required>
          <div id="tituloHelp" class="form-text">Ingrese el título de la obra.</div>
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <textarea class="form-control" id="descripcion" aria-describedby="descripcionHelp" name="descripcion" placeholder="Descripción de la obra" required>{{ old('descripcion') }}</textarea>
          <div id="descripcionHelp" class="form-text">Ingrese una descripción de la obra.</div>
        </div>

        <div class="mb-3">
          <label for="artista" class="form-label">Artista</label>
          <select name="artista_id" id="artista" class="form-select" aria-describedby="artistaHelp">
            <option value="">Seleccione un Artista</option>
            @foreach($artistas as $artista)
              <option value="{{ $artista->id }}">{{ $artista->nombre }}</option>
            @endforeach
          </select>
          <div id="artistaHelp" class="form-text">Seleccione el artista de la obra.</div>
        </div>

        <div class="mb-3">
          <label for="fecha_creacion" class="form-label">Fecha de Creación</label>
          <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{ old('fecha_creacion') }}" required>
          <div id="fechaHelp" class="form-text">Ingrese la fecha de creación de la obra.</div>
        </div>

        <div class="mb-3">
          <label for="precio" class="form-label">Precio</label>
          <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ old('precio') }}" placeholder="Precio de la obra" required>
          <div id="precioHelp" class="form-text">Ingrese el precio de la obra en dólares.</div>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('obras.index') }}" class="btn btn-warning">Cancelar</a>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

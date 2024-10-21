<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Artista</title>
  </head>
  <body>
    <div class="container">
      <h1>Editar Artista</h1>
      <form method="POST" action='{{ route('artistas.update', ['artista' => $artista->id]) }}'>
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" 
          disabled='disabled' value="{{ $artista->id }}">
          <div id="idHelp" class="form-text">Id del Artista</div>
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp"
          name="nombre" placeholder="Nombre del artista" value="{{ $artista->nombre }}">
        </div>

        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" aria-describedby="apellidoHelp"
          name="apellido" placeholder="Apellido del artista" value="{{ $artista->apellido }}">
        </div>

        <div class="mb-3">
          <label for="nacionalidad" class="form-label">Nacionalidad</label>
          <input type="text" class="form-control" id="nacionalidad" aria-describedby="nacionalidadHelp"
          name="nacionalidad" placeholder="Nacionalidad del artista" value="{{ $artista->nacionalidad }}">
        </div>

        <div class="mb-3">
          <label for="biografia" class="form-label">Biografía</label>
          <input type="text" class="form-control" id="biografia" aria-describedby="biografiaHelp"
          name="biografia" placeholder="Biografía del artista" value="{{ $artista->biografia }}">
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{ route('artistas.index') }}" class="btn btn-warning">Cancelar</a>
        </div>
      </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

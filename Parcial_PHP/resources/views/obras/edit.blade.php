<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Artwork</title>
  </head>
  <body>
    <div class="container">
    <h1>Edit Artwork</h1>
    <form method="POST" action="{{ route('obras.update', $obra->id) }}">
        @method('PUT')
        @csrf

        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" 
          disabled='disabled' value="{{ $obra->id }}">
          <div id="idHelp" class="form-text">Artwork ID</div>
        </div>

        <div class="mb-3">
          <label for="titulo" class="form-label">Title</label>
          <input type="text" class="form-control" id="titulo" aria-describedby="tituloHelp"
          name="titulo" placeholder="Artwork title" value="{{ $obra->titulo }}" required>
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Description</label>
          <textarea class="form-control" id="descripcion" aria-describedby="descripcionHelp" 
          name="descripcion" placeholder="Artwork description" required>{{ $obra->descripcion }}</textarea>
        </div>

        <div class="mb-3">
          <label for="artista" class="form-label">Artist</label>
          <select class="form-control" id="artista" name="artista_id" required>
            <option value="">Select an Artist</option>
            @foreach($artistas as $artista)
                <option value="{{ $artista->id }}" {{ $obra->artista_id == $artista->id ? 'selected' : '' }}>
                    {{ $artista->nombre }}
                </option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="fecha_creacion" class="form-label">Creation Date</label>
          <input type="date" class="form-control" id="fecha_creacion" aria-describedby="fecha_creacionHelp" 
          name="fecha_creacion" value="{{ $obra->fecha_creacion->format('Y-m-d') }}" required>
        </div>

        <div class="mb-3">
          <label for="precio" class="form-label">Price</label>
          <input type="number" class="form-control" id="precio" aria-describedby="precioHelp" 
          name="precio" placeholder="Artwork price" value="{{ $obra->precio }}" required>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('obras.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

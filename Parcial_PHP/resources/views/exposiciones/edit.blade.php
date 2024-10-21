<!doctype html>
<html lang="es"> <!-- Cambié "en" a "es" para el idioma -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Exposición</title> 
  </head>
  <body>
    <div class="container">
      <h1>Agregar Exposición</h1>
      <form method="POST" action="{{route('exhibicion.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Código</label> 
          <input type="text" class="form-control" id="id" aria-describedby="idHelp"
          name="id" disabled='disabled'>
          <div id="idHelp" class="form-text">Código de Exposición</div> 
        </div>

        <label for="obra_id">Obras</label> 
        <select class="form-select" id='obra_id' name='obra_id' required>
          <option selected disabled value="">Selecciona una...</option> 
          @foreach ($works as $obradearte)
            <option value="{{$obradearte->id}}">{{$obradearte->titulo}}</option> 
          @endforeach
        </select>

        <div class="mb-3">
          <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
          <input type="text" class="form-control" id="fecha_inicio" aria-describedby="fecha_inicioHelp"
          name="fecha_inicio" placeholder="Inicio de la exposición">
        </div>

        <div class="mb-3">
          <label for="fecha_fin" class="form-label">Fecha de Fin</label> 
          <input type="text" class="form-control" id="fecha_fin" aria-describedby="fecha_finHelp"
          name="fecha_fin" placeholder="Fin de la exposición">
        </div>

        <div class="mb-3">
          <label for="ubicacion" class="form-label">Ubicación</label> 
          <input type="text" class="form-control" id="ubicacion" aria-describedby="ubicacionHelp"
          name="ubicacion" placeholder="Ubicación de la exposición">
        </div>

        <div class="mb-3">
          <label for="nombre_evento" class="form-label">Nombre del Evento</label>
          <input type="text" class="form-control" id="nombre_evento" aria-describedby="nombre_eventoHelp"
          name="nombre_evento" placeholder="Nombre del evento de la exposición">
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Guardar</button> 
          <a href="{{route('exhibicion.index')}}" class="btn btn-warning">Cancelar</a> 
        </div>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

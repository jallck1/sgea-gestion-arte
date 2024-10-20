<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crear Exposición</title>
</head>
<body>
    <div class="container">
        <h1>Crear Exposición</h1>
        <form action="{{ route('exposiciones.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                <input type="date" name="fecha_inicio" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha de Fin</label>
                <input type="date" name="fecha_fin" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación de la exposición" required>
            </div>

            <div class="mb-3">
                <label for="nombre_evento" class="form-label">Nombre del Evento</label>
                <input type="text" name="nombre_evento" class="form-control" placeholder="Nombre del evento" required>
            </div>

            <div class="mb-3">
                <label for="obra_arte_id" class="form-label">Obra de Arte</label>
                <select name="obra_arte_id" class="form-select" required>
                    @foreach($obrasArte as $obra)
                        <option value="{{ $obra->id }}">{{ $obra->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('exposiciones.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

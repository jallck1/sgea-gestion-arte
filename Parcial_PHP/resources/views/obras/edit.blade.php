<form action="{{ route('obras.update', $obra->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $obra->titulo }}" required>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $obra->descripcion }}</textarea>
    </div>

    <div class="form-group">
        <label for="artista">Artista</label>
        <select name="artista_id" id="artista" class="form-control" required>
            <option value="">Seleccione un Artista</option>
            @foreach($artistas as $artista)
                <option value="{{ $artista->id }}" {{ $obra->artista_id == $artista->id ? 'selected' : '' }}>
                    {{ $artista->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="fecha_creacion">Fecha de Creación</label>
        <input type="date" name="fecha_creacion" id="fecha_creacion" class="form-control" value="{{ $obra->fecha_creacion->format('Y-m-d') }}" required>
    </div>

    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" class="form-control" value="{{ $obra->precio }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Exposición</h1>
    
    <div class="card">
        <div class="card-header">
            {{ $exposicion->nombre_evento }}
        </div>
        <div class="card-body">
            <p><strong>Fecha de Inicio:</strong> {{ $exposicion->fecha_inicio }}</p>
            <p><strong>Fecha de Fin:</strong> {{ $exposicion->fecha_fin }}</p>
            <p><strong>Ubicación:</strong> {{ $exposicion->ubicacion }}</p>
            <p><strong>Obra de Arte:</strong> {{ $exposicion->obra_arte->nombre }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('exposicions.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
@endsection

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exposicion extends Model
{
    use HasFactory;

    protected $table = 'exposiciones'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'obra_id',
        'fecha_inicio',
        'fecha_fin',
        'ubicacion',
        'nombre_evento',
    ];

    // Relación con Obra de Arte
    public function obra()
    {
        return $this->belongsTo(ObraArte::class, 'obra_id');
    }
}

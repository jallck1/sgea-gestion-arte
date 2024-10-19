<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obras_arte extends Model
{
    use HasFactory;

    protected $table = 'obras_de_arte'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'artista_id',
        'titulo',
        'anio',
        'tecnica',
        'dimensiones',
        'descripcion',
    ];

    // Relación con Artista
    public function artista()
    {
        return $this->belongsTo(Artista::class, 'artista_id');
    }

    // Relación con Exposición
    public function exposiciones()
    {
        return $this->hasMany(Exposicion::class, 'obra_id');
    }
}

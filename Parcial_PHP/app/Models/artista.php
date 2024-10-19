<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artista extends Model
{
    use HasFactory;

    protected $table = 'artistas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'apellido',
        'nacionalidad',
        'biografia',
    ];

    // Relación con Obras de Arte
    public function obras()
    {
        return $this->hasMany(ObraArte::class, 'artista_id');
    }
}

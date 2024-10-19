<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class obra_arte extends Model
{
    use HasFactory;

    protected $table = 'obras_artes'; // Asegúrate de que el nombre de la tabla esté bien

    protected $fillable = [
        'titulo',
        'descripcion',
        'artista_id',  // Relación con la tabla Artista
        'fecha_creacion',
        'precio',
    ];

    public function artista()
    {
        return $this->belongsTo(Artista::class);
    }
}

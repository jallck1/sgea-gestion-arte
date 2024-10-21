<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artista extends Model
{
    use HasFactory;

    protected $table ='artista';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=['nombre','apellido','nacionalidad','biografia'];
}

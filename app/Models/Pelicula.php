<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //use HasFactory;
    protected $table="peliculas";
    protected $primaryKey="id";
    protected $fillable = [
        'titulo_original','titulo_esp','anio','pais','director','reparto','genero','sinopsis','imagen' 
    ];
    public $timestamps = false;

}

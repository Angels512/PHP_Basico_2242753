<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = 'artist';
    protected $primaryKey = 'ArtistId';
    public $timestamps = false;

    // Establecer relacion de 1 (Artista) - M (Disco)
    public function Discos()
    {
        // Hasmany (Tiene muchos)

        // 1. Modelo
        // 2. FK que se encuentra en Discos
        return $this->hasMany('App\Disco', 'ArtistId');
    }

    public function Cancion()
    {
        // Hasmany hrough (Tiene muchos a travez)
        // Crea una relacion 1 - M con una tabla intermedia

        return $this->hasManyThrough('App\Cancion', // Modelo destin (Cancion - Nieto)
                                     'App\Disco', // Tabla intermedia entre el artista (Abuelo) y la cancion (Nieto)
                                     'ArtistId', // Llave foranea del hijo (Disco)
                                     'AlbumId', // Llave foranea del nieto (Cancion)
                                     'ArtistId', // Llave primaria del abuelo (Artista)
                                     'AlbumId'); // Llave primaria del hijo (Disco)
    }
}

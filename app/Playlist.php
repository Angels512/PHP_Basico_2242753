<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlist';
    protected $primaryKey = 'PlaylistId';
    public $timestamps = false;

    // Relaciones muchos a muchos
    public function canciones()
    {
        return $this->belongsToMany('App\Cancion', // Modelo con el que se relaciona M-m
                             'playlisttrack',
                             'PlaylistId',
                             'TrackId');
    }
}

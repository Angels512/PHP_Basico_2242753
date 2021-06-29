<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'CustomerId';
    public $timestamps = false;

    // Relacion 1:M con COMPRA
    public function compras()
    {
        return $this->hasMany('App\Compra', 'CustomerId');
    }
}

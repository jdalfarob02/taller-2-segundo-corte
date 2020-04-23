<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Electrodomestico extends Model
{
    protected $table = 'electrodomesticos';

    protected $fillable = [
        'name','tipo'
    ];

    public function consultas(){
        return $this->morphMany('App\Models\Consulta', 'consultable');
    }
}

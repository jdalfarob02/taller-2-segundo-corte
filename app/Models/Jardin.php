<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $table = 'jardins';

    protected $fillable = [
        'name','cantidad'
    ];

    public function consultas(){
        return $this->morphMany('App\Models\Consulta', 'consultable');
    }

}

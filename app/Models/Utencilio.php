<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utencilio extends Model
{
    protected $table = 'utencilios';

    protected $fillable = [
        'name','tipo'
    ];

    public function consultas(){
        return $this->morphMany('App\Models\Consulta', 'consultable');
    }
}

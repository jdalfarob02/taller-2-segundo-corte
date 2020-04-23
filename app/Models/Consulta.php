<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';

    protected $fillable = [
        'precio','seguro','consultable_id','consultable_type'
    ];

    public function consultable(){
        return $this->morphTo();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Electrodomestico;
use App\Models\Utencilio;
use Illuminate\Http\Request;

class ControllerConsula extends Controller
{
    public function create_insert(){
        $utencilio = Utencilio::find(2);
        $utencilio ->consultas()->create([
            'precio' => '55 mil pesos',
            'seguro'=> 'seguro por 5 meses'
        ]);
        return $utencilio->consultas;
    }
    public function crateManhy(){
        $electrodomestico = Electrodomestico::find(3);
        $electrodomestico->consultas()->createMany([
            ['precio'=> '550 mil pesos' , 'seguro' =>'2 meses'],
            ['precio'=> '44 mil pesos' , 'seguro' =>'6 meses'],
            ['precio'=> '100000 de pesos' , 'seguro' =>'44 meses'],
            ['precio'=> '223 mil pesos' , 'seguro' =>'5 meses'],
        ]);
        return $electrodomestico->consultas;

    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectrodomesticosTable extends Migration
{
   
    public function up()
    {
        Schema::create('electrodomesticos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('electrodomesticos');
    }
}

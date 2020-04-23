<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtenciliosTable extends Migration
{
   
    public function up()
    {
        Schema::create('utencilios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tipo');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('utencilios');
    }
}

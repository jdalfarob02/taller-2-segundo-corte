<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
   
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('precio');
            $table->string('seguro');
            $table->integer('consultable_id');
            $table->string('consultable_type');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}

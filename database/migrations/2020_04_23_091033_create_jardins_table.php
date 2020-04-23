<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJardinsTable extends Migration
{
    
    public function up()
    {
        Schema::create('jardins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cantidad');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('jardins');
    }
}

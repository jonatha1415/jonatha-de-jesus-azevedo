<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordenadorsTable extends Migration
{
    public function up()
    {
        Schema::create('coordenadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->int('telefone');
            $table->int('curso_id');
        });
    }
    public function down()
    {
        Schema::dropIfExists('coordenadors');
    }
}

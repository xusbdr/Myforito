<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta');
            $table->string('opcion_a');
            $table->string('opcion_b');
            $table->string('opcion_c');
            $table->string('opcion_d');
            $table->string('respuesta_correcta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}

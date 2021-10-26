<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();

            $table->string('jefeestudios',100);
            $table->date('fecha');
            $table->string('opciontitulacion',100);
            $table->string('nombreproyecto',100);
            $table->string('directorproyecto',100);
            $table->string('codirectorproyecto',100);
            $table->integer('numeroestudiantes');
            $table->string('nombreestudiante',100);
            $table->string('numerocontrol',100);
            $table->string('carreraestudiante',100);
            $table->string('nombreestudiante2',100);
            $table->string('numerocontrol2',100);
            $table->string('carreraestudiante2',100);
            $table->string('observaciones',500);
            $table->string('firmajefecarrera',100);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}

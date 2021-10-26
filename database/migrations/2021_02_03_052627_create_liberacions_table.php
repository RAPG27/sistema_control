<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiberacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liberacions', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->string('jefeestudios',100);
            $table->string('nombreestudiante',100);
            $table->string('carreraestudiante',100);
            $table->string('numerocontrol',100);
            $table->string('nombreproyecto',100);
            $table->string('opciontitulacion',100);
            $table->string('firmajefecarrera',100);
            $table->string('nombrepresidente',100);
            $table->string('nombresecretario',100);
            $table->string('nombrevocal',100);
            
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
        Schema::dropIfExists('liberacions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->string('apellido_paterno', 60);
            $table->string('apellido_materno', 60)->nullable();
            $table->integer('edad');
            $table->string('sexo', 15)->comment('Masculino/Femenino');
            $table->string('estado_civil', 30)->comment('Soltero/Casado/Divorciado/Viudo');
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
        Schema::dropIfExists('personas');
    }
}

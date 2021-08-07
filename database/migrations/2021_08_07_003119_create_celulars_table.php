<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celulars', function (Blueprint $table) {
            $table->id();
            $table->string('modelo', 60);
            $table->string('marca', 60);
            $table->integer('capacidad_bateria');
            $table->integer('total_camaras');
            $table->string('color', 40);
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
        Schema::dropIfExists('celulars');
    }
}

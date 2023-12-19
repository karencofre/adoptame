<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_caracteristica')->nullable();
            $table->string('ubicacion_caracteristica')->nullable();
            $table->string('fotos_caracteristica')->nullable();
            $table->string('estado_adopcion_caracteristica')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('mascota')->nullable();
            $table->foreign('mascota')->references('id')->on('mascotas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas');
    }
}

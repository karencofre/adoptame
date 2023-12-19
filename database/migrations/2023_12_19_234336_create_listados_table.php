<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listados', function (Blueprint $table) {
            $table->id();
            $table->integer('puntuacion_listado')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('mascota')->nullable();
            $table->unsignedBigInteger('adopcion')->nullable();
            $table->foreign('mascota')->references('id')->on('mascotas')->onDelete('cascade');
            $table->foreign('adopcion')->references('id')->on('adopcions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listados');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota')->nullable();
            $table->string('edad_mascota')->nullable();
            $table->string('tipo_mascota')->nullable();
            $table->string('raza_mascota')->nullable();
            $table->string('sexo_mascota')->nullable();
            $table->string('tamanio_mascota')->nullable();
            $table->string('descripcion_mascota')->nullable();
            $table->string('role_mascota')->nullable();
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
        Schema::dropIfExists('mascotas');
    }
}

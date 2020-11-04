<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->String('dni')->unique();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('direccion');
            $table->String('obra_social');
            $table->date('fecha_nacimiento');
            $table->String('telefono');
            $table->String('mail');
            $table->String('contacto_nombre');
            $table->String('contacto_apellido');
            $table->String('contacto_parentesco');
            $table->String('contacto_telefono');
            $table->String('id_historia_clinica');
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
        Schema::dropIfExists('pacientes');
    }
}

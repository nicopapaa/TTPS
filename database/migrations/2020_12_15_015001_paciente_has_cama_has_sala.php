<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PacienteHasCamaHasSala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_has_cama_has_salas', function (Blueprint $table) {
            $table->id();
            $table->String('id_paciente');
            $table->String('id_sistema');
            $table->String('id_sala');
            $table->String('id_cama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

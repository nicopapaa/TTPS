<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicoHasPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('medico_has_pacientes', function (Blueprint $table) {
            $table->id();
            $table->String('id_medico');
            $table->String('id_paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PacienteHasSalaHasCama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_sistema_has_sala_has_camas', function (Blueprint $table) {
            $table->id();
            $table->String('id_sistema');
            $table->String('id_paciente');
            $table->String('id_sala');
            $table->String('id_cama');
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
        //
    }
}

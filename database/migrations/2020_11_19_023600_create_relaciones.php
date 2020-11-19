<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_sistemas_medicos', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('sistema_id');
            $table->foreign('sistema_id')->references('id')->on('sistemas')->onDelete('cascade');
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('rel_sistemas_jefes', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('sistema_id');
            $table->foreign('sistema_id')->references('id')->on('sistemas')->onDelete('cascade');
            $table->unsignedBigInteger('jefe_id');
            $table->foreign('jefe_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('rel_sistemas_pacientes', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('sistema_id');
            $table->foreign('sistema_id')->references('id')->on('sistemas')->onDelete('cascade');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('rel_medicos_pacientes', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
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
        // Schema::dropIfExists('relaciones');
        Schema::dropIfExists('rel_sistemas_medicos');
        Schema::dropIfExists('rel_sistemas_jefes');
        Schema::dropIfExists('rel_sistemas_pacientes');
        Schema::dropIfExists('rel_medicos_pacientes');
    }
}

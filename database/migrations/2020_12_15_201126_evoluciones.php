<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Evoluciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evoluciones', function (Blueprint $table) {
            $table->id();
            $table->String('id_paciente');
            $table->String('id_medico');
            $table->String('temperatura')->nullable();
            $table->String('sistolica')->nullable();
            $table->String('distolica')->nullable();
            $table->String('frecuencia_cardiaca')->nullable();
            $table->String('frecuencia_respiratoria')->nullable();
            $table->String('mecanica')->nullable();
            $table->String('oxigeno')->nullable();
            $table->String('tipo_oxigeno')->nullable();
            $table->String('valor_oxigeno')->nullable();
            $table->String('pafi')->nullable();
            $table->String('valor_pafi')->nullable();
            $table->String('prono')->nullable();
            $table->String('tos')->nullable();
            $table->String('disnea')->nullable();
            $table->String('estabilidad')->nullable();
            $table->String('somnolencia')->nullable();
            $table->String('anosmia')->nullable();
            $table->String('disgeusia')->nullable();
            $table->String('rxtx')->nullable();
            $table->String('tac')->nullable();
            $table->String('ecg')->nullable();
            $table->String('prc')->nullable();
            $table->String('laboratorio')->nullable();
            $table->String('tipo_alimentacion')->nullable();
            $table->String('nota_alimentacion')->nullable();
            $table->String('dias')->nullable();
            $table->String('dosis')->nullable();
            $table->String('farmaco')->nullable();
            $table->String('tromboprofilaxis')->nullable();
            $table->String('valor_tromboprofilaxis')->nullable();
            $table->String('dialisis')->nullable();
            $table->String('valor_dialisis')->nullable();
            $table->String('gastrica')->nullable();
            $table->String('valor_gastrica')->nullable();
            $table->String('dexamentasona')->nullable();
            $table->String('valor_dexamentasona')->nullable();
            $table->String('observaciones')->nullable();
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

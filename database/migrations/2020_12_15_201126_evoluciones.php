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
            $table->String('temperatura');
            $table->String('sistolica');
            $table->String('distolica');
            $table->String('frecuencia_cardiaca');
            $table->String('frecuencia_resporatoria');
            $table->String('mecanica');
            $table->String('oxigeno');
            $table->String('tipo_oxigeno');
            $table->String('valor_oxigeno');
            $table->String('pafi');
            $table->String('valor_pafi');
            $table->String('prono');
            $table->String('tos');
            $table->String('disnea');
            $table->String('estabilidad');
            $table->String('somnolencia');
            $table->String('anosmia');
            $table->String('disgeusia');
            $table->String('rxtx');
            $table->String('tac');
            $table->String('ecg');
            $table->String('prc');
            $table->String('laboratorio');
            $table->String('tipo_alimentacion');
            $table->String('nota_alimentacion');
            $table->String('dias');
            $table->String('dosis');
            $table->String('farmaco');
            $table->String('tromboprofilaxis');
            $table->String('valor_tromboprofilaxis');
            $table->String('dialisis');
            $table->String('valor_dialisis');
            $table->String('gastrica');
            $table->String('valor_gastrica');
            $table->String('dexamentasona');
            $table->String('valor_dexamentasona');
            $table->String('observaciones');
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

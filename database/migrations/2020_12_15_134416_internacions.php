<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Internacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internacions', function (Blueprint $table) {
            $table->id();
            $table->String('id_paciente');
            $table->date('f_inicio_sintomas');
            $table->date('f_diagnostico');
            $table->String('descripcion');
            $table->date('f_internacion');
            $table->date('f_egreso')->nullable();
            $table->date('f_obito')->nullable();
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

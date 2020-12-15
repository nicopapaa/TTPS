<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sistema_has_salas;

class SistemasSalas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siscama = Sistema_has_salas::create([
            'id' => 1,
            'id_sistema' => 1,
            'id_sala' =>6
        ]);

        $siscama = Sistema_has_salas::create([
            'id' => 2,
            'id_sistema' => 2,
            'id_sala' =>1
        ]);
        $siscama = Sistema_has_salas::create([
            'id' => 3,
            'id_sistema' => 2,
            'id_sala' =>2
        ]);
        $siscama = Sistema_has_salas::create([
            'id' => 4,
            'id_sistema' => 3,
            'id_sala' =>3
        ]);
        $siscama = Sistema_has_salas::create([
            'id' => 5,
            'id_sistema' => 4,
            'id_sala' =>5
        ]);
        $siscama = Sistema_has_salas::create([
            'id' => 6,
            'id_sistema' => 5,
            'id_sala' =>4
        ]);
    }
}

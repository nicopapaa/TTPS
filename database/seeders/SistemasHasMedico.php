<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sistema_has_medico;

class SistemasHasMedico extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Sistemas_has_medico
        $medico1= Sistema_has_medico::create([
            'id_sistema' => 1,
            'id_user' =>7
        ]);
        $medico2 = Sistema_has_medico::create([
            'id_sistema' => 1,
            'id_user' =>8
        ]);
        $medico3 = Sistema_has_medico::create([
            'id_sistema' => 1,
            'id_user' =>9
        ]);

        $medico4= Sistema_has_medico::create([
            'id_sistema' => 2,
            'id_user' =>10
        ]);
        $medico5 = Sistema_has_medico::create([
            'id_sistema' => 2,
            'id_user' =>11
        ]);
        $medico6 = Sistema_has_medico::create([
            'id_sistema' => 2,
            'id_user' =>12
        ]);

        $medico7= Sistema_has_medico::create([
            'id_sistema' => 3,
            'id_user' =>13
        ]);
        $medico8 = Sistema_has_medico::create([
            'id_sistema' => 3,
            'id_user' =>14
        ]);
        $medico9 = Sistema_has_medico::create([
            'id_sistema' => 3,
            'id_user' =>15
        ]);

        $medico10= Sistema_has_medico::create([
            'id_sistema' => 4,
            'id_user' =>16
        ]);
        $medico11 = Sistema_has_medico::create([
            'id_sistema' => 4,
            'id_user' =>17
        ]);
        $medico12 = Sistema_has_medico::create([
            'id_sistema' => 4,
            'id_user' =>18
        ]);

        $medico13= Sistema_has_medico::create([
            'id_sistema' => 5,
            'id_user' =>19
        ]);
        $medico14 = Sistema_has_medico::create([
            'id_sistema' => 5,
            'id_user' =>20
        ]);
        $medico15 = Sistema_has_medico::create([
            'id_sistema' => 5,
            'id_user' =>21
        ]);
    }
}

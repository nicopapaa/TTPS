<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sistema_has_jefes;

class SistemasHasJefe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Sistemas_has_jefe
        $jefe1 = Sistema_has_jefes::create([
            'id_sistema' => 1,
            'id_user' =>2
        ]);
        $jefe2 = Sistema_has_jefes::create([
            'id_sistema' => 2,
            'id_user' =>3
        ]);
        $jefe3 = Sistema_has_jefes::create([
            'id_sistema' => 3,
            'id_user' =>4
        ]);
        $jefe4 = Sistema_has_jefes::create([
            'id_sistema' => 4,
            'id_user' =>5
        ]);
        $jefe5 = Sistema_has_jefes::create([
            'id_sistema' => 5,
            'id_user' =>6
        ]);
    }
}

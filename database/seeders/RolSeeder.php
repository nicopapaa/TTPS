<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::create([
            'id'=>1,
            'nombre'=>'Administrador'
        ]);
        $rol = Rol::create([
            'id'=>2,
            'nombre'=>'Jefe de sistema'
        ]);
        $rol = Rol::create([
            'id'=>3,
            'nombre'=>'Medico'
        ]);
    }
}
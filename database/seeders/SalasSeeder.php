<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salas;

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sala1 = Salas::create([
            'id' => 1,
            'nombre' => 'Sala 1 - Guardia'
        ]);
        $sala2 = Salas::create([
            'id' => 2,
            'nombre' => 'Sala 2 - Guardia'
        ]);
        $sala3 = Salas::create([
            'id' => 3,
            'nombre' => 'Sala 1 - UTI'
        ]);
        $sala4 = Salas::create([
            'id' => 4,
            'nombre' => 'Sala 1 - Hotel'
        ]);
        $sala5 = Salas::create([
            'id' => 5,
            'nombre' => 'Sala 1 - Domicilio'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camas;

class CamasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cama1 = Camas::create([
            'id' => 1,
            'nombre' => 'Cama 1 - Guardia',
            'ocupada' => false
        ]);
        $cama1 = Camas::create([
            'id' => 2,
            'nombre' => 'Cama 2 - Guardia',
            'ocupada' => false
        ]);
        $cama1 = Camas::create([
            'id' => 3,
            'nombre' => 'Cama 1 - Guardia',
            'ocupada' => false
        ]);
        $cama1 = Camas::create([
            'id' => 4,
            'nombre' => 'Cama 2 - Guardia',
            'ocupada' => false
        ]);
        $cama1 = Camas::create([
            'id' => 5,
            'nombre' => 'Cama 1 - UTI',
            'ocupada' => false
        ]);
        $cama1 = Camas::create([
            'id' => 6,
            'nombre' => 'Cama 1 - Hotel',
            'ocupada' => false
        ]);
        $cama1 = Camas::create([
            'id' => 7,
            'nombre' => 'Cama 1 - Domicilio',
            'ocupada' => false
        ]);
        $cama1 = Camas::create([
            'id' => 8,
            'nombre' => 'Cama 1 - Piso Covid',
            'ocupada' => false
        ]);
    }
}

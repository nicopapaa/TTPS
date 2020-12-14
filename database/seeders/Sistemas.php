<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sistema;

class Sistemas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sistema1 = Sistema::create([
            'id' => 1,
            'nombre' => 'Piso Covid',
            'camas_totales' => 10,
            'camas_usadas' => 0,
        ]);
        $sistema2 = Sistema::create([
            'id' => 2,
            'nombre' => 'Guardia',
            'camas_totales' => 10,
            'camas_usadas' => 0,
        ]);
        $sistema3 = Sistema::create([
            'id' => 3,
            'nombre' => 'UTI',
            'camas_totales' => 10,
            'camas_usadas' => 0,
        ]);
        $sistema4 = Sistema::create([
            'id' => 4,
            'nombre' => 'Domicilio',
            'camas_totales' => 10,
            'camas_usadas' => 0,
        ]);
        $sistema5 = Sistema::create([
            'id' => 5,
            'nombre' => 'Hotel',
            'camas_totales' => 10,
            'camas_usadas' => 0,
        ]);
    }
}

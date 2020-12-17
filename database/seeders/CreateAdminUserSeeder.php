<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class CreateAdminUserSeeder extends Seeder
{
        /**
        * Run the database seeds.
        *
        * @return void
        */
        public function run()
        {

        #Administrador del sistemas
        $admin = User::create([
            'id' => 1,
            'name' => 'Claudio',
            'email' => 'admin@gmail.com',
            'apellido' => 'Tapia',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        #Jefes de sistemas
        $jefe1 = User::create([
            'id' => 2,
            'name' => 'Miguel',
            'email' => 'jefe1@gmail.com',
            'apellido' => 'Russo',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe2 = User::create([
            'id' => 3,
            'name' => 'Diego',
            'email' => 'jefe2@gmail.com',
            'apellido' => 'Milito',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe3 = User::create([
            'id' => 4,
            'name' => 'Hernan',
            'email' => 'jefe3@gmail.com',
            'apellido' => 'Crespo',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe4 = User::create([
            'id' => 5,
            'name' => 'Diego',
            'email' => 'jefe4@gmail.com',
            'apellido' => 'Dabove',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe5 = User::create([
            'id' => 6,
            'name' => 'Ricardo',
            'email' => 'jefe5@gmail.com',
            'apellido' => 'Zieliski',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        #medicos
        $medico1 = User::create([
            'id' => 7,
            'name' => 'Marcos',
            'email' => 'medico1@gmail.com',
            'apellido' => 'Diaz',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico2 = User::create([
            'id' => 8,
            'name' => 'Esteban',
            'email' => 'medico2@gmail.com',
            'apellido' => 'Andrada',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico3 = User::create([
            'id' => 9,
            'name' => 'Agustin',
            'email' => 'medico3@gmail.com',
            'apellido' => 'Rossi',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        $medico4 = User::create([
            'id' => 10,
            'name' => 'Carlos',
            'email' => 'medico4@gmail.com',
            'apellido' => 'Tevez',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico5 = User::create([
            'id' => 11,
            'name' => 'Sebastian',
            'email' => 'medico5@gmail.com',
            'apellido' => 'Viila',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico6 = User::create([
            'id' => 12,
            'name' => 'Franco',
            'email' => 'medico6@gmail.com',
            'apellido' => 'Soldano',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        $medico7 = User::create([
            'id' => 13,
            'name' => 'Nicolas',
            'email' => 'medico7@gmail.com',
            'apellido' => 'Capaldo',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico8 = User::create([
            'id' => 14,
            'name' => 'Leo',
            'email' => 'medico8@gmail.com',
            'apellido' => 'Jara',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico9 = User::create([
            'id' => 15,
            'name' => 'Edwin',
            'email' => 'medico9@gmail.com',
            'apellido' => 'Cardona',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        $medico10 = User::create([
            'id' => 16,
            'name' => 'Jorman',
            'email' => 'medico10@gmail.com',
            'apellido' => 'Campuzano',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico11 = User::create([
            'id' => 17,
            'name' => 'Julio',
            'email' => 'medico11@gmail.com',
            'apellido' => 'Buffarini',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico12 = User::create([
            'id' => 18,
            'name' => 'Lisandro',
            'email' => 'medico12@gmail.com',
            'apellido' => 'Lopez',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        $medico13 = User::create([
            'id' => 19,
            'name' => 'Carlos',
            'email' => 'medico13@gmail.com',
            'apellido' => 'Izquierdoz',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico14 = User::create([
            'id' => 20,
            'name' => 'Emanuel',
            'email' => 'medico14@gmail.com',
            'apellido' => 'Mas',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico15 = User::create([
            'id' => 21,
            'name' => 'Frank',
            'email' => 'medico15@gmail.com',
            'apellido' => 'Fabra',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        #creo el rol jefe de administrador
        $rolAdmin = Role::create([
            'id' => 1,
            'name' => 'Administrador'
        ]);
        #creo el rol jefe de sistema
        $roleJefe = Role::create([
            'id' => 2,
            'name' => 'Jefe de sistema'
         ]);
        #creo el rol jefe de Medico
        $roleMedico = Role::create([
            'id' => 3,
            'name' => 'Medico'
        ]);


    }
}

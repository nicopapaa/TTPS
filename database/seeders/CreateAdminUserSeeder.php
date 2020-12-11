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
        #Jefes de sistemas
        $jefe1 = User::create([
            'name' => 'Miguel',
            'email' => 'jefe1@gmail.com',
            'apellido' => 'Russo',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe2 = User::create([
            'name' => 'Diego',
            'email' => 'jefe2@gmail.com',
            'apellido' => 'Milito',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe3 = User::create([
            'name' => 'Hernan',
            'email' => 'jefe3@gmail.com',
            'apellido' => 'Crespo',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe4 = User::create([
            'name' => 'Diego',
            'email' => 'jefe4@gmail.com',
            'apellido' => 'Dabove',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $jefe5 = User::create([
            'name' => 'Ricardo',
            'email' => 'jefe5@gmail.com',
            'apellido' => 'Zieliski',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        #medicos
        $medico1 = User::create([
            'name' => 'Marcos',
            'email' => 'medico1@gmail.com',
            'apellido' => 'Diaz',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico2 = User::create([
            'name' => 'Esteban',
            'email' => 'medico2@gmail.com',
            'apellido' => 'Andrada',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $medico3 = User::create([
            'name' => 'Agustin',
            'email' => 'medico3@gmail.com',
            'apellido' => 'Rossi',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        #admin
        $admin = User::create([
            'name' => 'Claudio',
            'email' => 'admin@gmail.com',
            'apellido' => 'Tapia',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);

        #creo el rol jefe de sistema
        $roleJefe = Role::create(['name' => 'Jefe de sistema']);
        $rolAdmin = Role::create(['name' => 'Administrador']);
        $roleMedico = Role::create(['name' => 'Médico']);

        #asigno role de jefes
        $jefe1 = assignRole([$roleJefe->id]);
        $jefe2 = assignRole([$roleJefe->id]);
        $jefe3 = assignRole([$roleJefe->id]);
        $jefe4 = assignRole([$roleJefe->id]);
        $jefe5 = assignRole([$roleJefe->id]);

        #asigno rol de medicos
        $medico1->assignRole([$roleMedico->id]);
        $medico2->assignRole([$roleMedico->id]);
        $medico3->assignRole([$roleMedico->id]);
    }
}

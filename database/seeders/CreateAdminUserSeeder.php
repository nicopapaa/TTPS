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
        $user1 = User::create([
        'name' => 'Sebastian',
        'email' => 'sebastianesg@gmail.com',
        'apellido' => 'Sanchez',
        'dni' => 12345678,
        'telefono' => 12345678,
        'password' => bcrypt('123456')
        ]);
        $userAdmin = User::create([
            'name' => 'administrador',
            'email' => 'admin@gmail.com',
            'apellido' => 'admin',
            'dni' => 12345678,
            'telefono' => 12345678,
            'password' => bcrypt('123456')
        ]);
        $user2 = User::create([
        'name' => 'Nicolas',
        'email' => 'nicopapaa@gmail.com',
        'apellido' => 'Paparazzo',
        'dni' => 31785,
        'telefono' => 31785,
        'password' => bcrypt('123456')
        ]);
        $user3 = User::create([
            'name' => 'Matias',
            'email' => 'mati@gmail.com',
            'apellido' => 'DelleDonne',
            'dni' => 31785,
            'telefono' => 31785,
            'password' => bcrypt('123456')
        ]);
        $user4 = User::create([
            'name' => 'Gonzalo',
            'email' => 'gonza@gmail.com',
            'apellido' => 'Bilbao',
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
        $roleMedico=Role::create(['name' => 'Médico']);
        $medico1->assignRole([$roleMedico->id]);
        $medico2->assignRole([$roleMedico->id]);
        $medico3->assignRole([$roleMedico->id]);
        $role=Role::create(['name' => 'Empleado']);
        $user3->assignRole([$role->id]);
        $role=Role::create(['name' => 'Organizacion']);
        $user2->assignRole([$role->id]);
        $user4->assignRole([$role->id]);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user1->assignRole([$role->id]);
        $userAdmin->assignRole([$role->id]);
    }
}

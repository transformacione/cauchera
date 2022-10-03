<?php

use Illuminate\Database\Seeder;

use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'  =>  'Jean',
            'rol'  =>  'Gerente',  
            'cedula_rif'  =>  '123',   
            'direccion'  =>  '124',
            'telefono'  =>  '124',
        	'email'  =>  'profesorjeandiaz@gmail.com',
        	'password'  =>  bcrypt('tikery.27')
     	
        ]);
       /* User::create([
        	'name'  =>  'leonel',
            'rol'  =>  'Gerente',
            'cedula_rif'  =>  '125',
            'direccion'  =>  '124',
            'telefono'  =>  '124',
        	'email'  =>  'leonel.camero@gmail.com',
        	'password'  =>  bcrypt('Password09')
     	
        ]);
        User::create([
            'name'  =>  'cliente',
            'rol'  =>  'Cliente',
            'cedula_rif'  =>  '124',
            'direccion'  =>  '124',
            'telefono'  =>  '124',
            'email'  =>  'cliente@gmail.com',
            'password'  =>  bcrypt('1234')
        
        ]);*/
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        /*for ($i = 0;$i<100;$i++){

            DB::table('users')->
            insert([
                'dni' => '412039'.$i.str_random(1),
                'name' => 'Nombre'.$i,
                'apellidos' => 'Apellido'.$i,
                'fechaNacimiento'=> '2017-11-04',
                'usuario'=> 'Usuario'.$i,
                'perfil' => 2,
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),

            ]);
        }*/
    }
}

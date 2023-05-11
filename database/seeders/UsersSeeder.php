<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Niggel";
        $user->email = "nial_19@alu.uabcs.mx";
        $user->password = Hash::make("niggelAlt13");
        $user->sexo = 'Masculino';
        $user->fecha_nac = '2001-09-13';
        $user->tipo_sangre = 'O+';
        $user->telefono = '6121190766';
        $user->calle = 'Alban';
        $user->colonia = 'sol';
        $user->cp = '98653';
        $user->isAdmin = true;
        $user->save();

        $user = new User();
        $user->name = "Isaac";
        $user->email = "isaac@gmail.com";
        $user->password = Hash::make("AlexInTheHouse");
        $user->sexo = 'Masculino';
        $user->fecha_nac = '2001-09-13';
        $user->tipo_sangre = 'O+';
        $user->telefono = '6121190766';
        $user->calle = 'Alban';
        $user->colonia = 'sol';
        $user->cp = '98653';
        $user->isAdmin = false;
        $user->save();

        User::factory(10)->create();
    }
}

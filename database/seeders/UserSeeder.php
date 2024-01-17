<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([//TODO: Se importa use App\Models\User;
            'name'=>'administrador',
            'email'=>'administrador@gmail.com',
            'address'=>'Av. Monsefú',
            'phone'=>'987562312',
            'password'=>Hash::make("12345678"),//TODO: Se importa use Illuminate\Support\Facades\Hash;
        ]);
        User::factory(17)->create();
    }
}
//TODO: Luego de Hacer esto, se genera el comando: php artisan migrate:fresh --seed

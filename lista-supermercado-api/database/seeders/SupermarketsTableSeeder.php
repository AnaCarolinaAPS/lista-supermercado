<?php

namespace Database\Seeders;

use App\Models\Supermarket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupermarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supermarket::create([
            'name' => 'Fortis CDE KM4',
            'description' => 'Fortis Mayorista de Ciudad del Este localizado no KM 4.',
        ]);

        Supermarket::create([
            'name' => 'Gran Via CDE KM4',
            'description' => 'Gran Via de Ciudad del Este localizado no KM 4.',
        ]);

        Supermarket::create([
            'name' => 'BOX Super CDE Av. San José',
            'description' => 'Box Supermercado de Ciudad del Este localizado sob a Avenida San José.',
        ]);

        Supermarket::create([
            'name' => 'Muffato Shopping Cataratas',
            'description' => 'Supermercado da rede Muffato localizado dentro do shopping Cataratas em Foz.',
        ]);

        Supermarket::create([
            'name' => 'Bourbon Hipermercado Canoas',
            'description' => 'Supermercado da rede Bourbon localizado na avenida Getúlio Vargas em Canoas.',
        ]);
    }
}

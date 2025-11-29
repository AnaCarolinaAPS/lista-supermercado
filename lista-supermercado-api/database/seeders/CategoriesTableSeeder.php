<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Limpeza',
            'description' => 'Produtos relacionados com a limpeza da casa. Ex.: Detergentes, Desinfetantes, Esponjas, etc.',
        ]);

        Category::create([
            'name' => 'Higiene',
            'description' => 'Produtos relacionados com Higiene pessoal. Ex.: Sabonetes, Shampoos, Escovas de dente, etc. ',
        ]);

        Category::create([
            'name' => 'Hortifruti',
            'description' => 'Produtos relacionados a frutas e vegetais. Ex.: Maçã, Brócolis, Cenoura, etc.',
        ]);

        Category::create([
            'name' => 'Frios e Latícineos',
            'description' => 'Produtos relacionados a derivados de leite. Ex.: Queijo, Yogurt, Requeijão, etc.',
        ]);

        Category::create([
            'name' => 'Carnes',
            'description' => 'Produtos derivados de origem animal. Ex.: Costela Bovina, Peito de Frango, Filé de Tilapia, etc.',
        ]);

        Category::create([
            'name' => 'Bebidas',
            'description' => 'Produtos liquidos envasados. Ex.: Refrigerantes, Sucos, Energéticos, etc.',
        ]);

        Category::create([
            'name' => 'Mercearia',
            'description' => 'Produtos básicos não perecíveis. Ex.: Arroz, Feijão, Açúcar, etc.',
        ]);

        Category::create([
            'name' => 'Panificados',
            'description' => 'Produtos feitos a partir da farinha. Ex.: Pães, Bolos, Biscoitos, etc.',
        ]);

        Category::create([
            'name' => 'Snacks e Sobremesas',
            'description' => 'Produtos para consumo. Ex.: Fandangos, Chocolates, Baldas, etc.',
        ]);

    }
}
